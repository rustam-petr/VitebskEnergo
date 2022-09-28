<?php
include "function.php";

if (isset($_POST['value'])) {
    $topic_id = $_POST['value'];
    $topic_data = get_topic_data($topic_id);
}

$query = "SELECT q.question,q.parent_topic,a.id,a.answer,a.parent_question,a.correct_answer FROM question q 
LEFT JOIN answer a ON q.id=a.parent_question WHERE q.parent_topic=3";