<?php
$host = "localhost";
$user = "root";
$password = "root";
$db_name = "vitenergo";

$connect = mysqli_connect("$host", "$user", "$password", "$db_name");

if(!$connect){
    echo die("Подключение не установлено");
}