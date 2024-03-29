<?php

$host = "localhost";
$db = "users";
$username = "root";
$password = "";

$con = mysqli_connect($host, $username, $password, $db);

if(mysqli_connect_errno()){
    echo "connection fail";
    exit();
}

echo "Connection Success";


?>