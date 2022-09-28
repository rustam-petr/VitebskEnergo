<?php


function get_topic(): array
{
    global $connect;
    $query = ("SELECT * FROM topic");
    $rezult = mysqli_query($connect, $query);
    $data = [];

    while ($row = mysqli_fetch_assoc($rezult)) {
        $data[] = $row;
    }
    return $data;
}

function get_topic_data($topic_id)
{
    if (!$topic_id) return false;
    global $connect;
    $query = "SELECT q.question,q.parent_topic,a.id,a.answer,a.parent_question,a.correct_answer FROM question q LEFT JOIN answer a ON q.id = a.parent_question WHERE q.parent_topic=$topic_id";


    $rezult = mysqli_query($connect, $query);

    $data = null;
    while ($row = mysqli_fetch_assoc($rezult)) {
        $data[$row['parent_question']][0] = $row['question'];
        $data[$row['parent_question']][$row['id']] = $row['answer'];
    }
    return $data;


}