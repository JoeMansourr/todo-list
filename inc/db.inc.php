<?php

$serverName = "localhost";
$userName = "root";
$password = "";
$database = "todo";

$conn = mysqli_connect($serverName, $userName, $password, $database);

if(!$conn){
    echo "Connection Failed " + mysqli_connect_error();
}
