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

