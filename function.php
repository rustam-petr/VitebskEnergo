<?php


function get_topic()
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

function get_topic_data($topic_id){
 if(!$topic_id) return false;
 global $connect;


}