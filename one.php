<?php
include "config.php";
include "function.php";

if (isset($_POST['value'])) {
    $topic_id = $_POST['value'];
    $topic_data = get_topic_data($topic_id);
    print_r($topic_data);
}

