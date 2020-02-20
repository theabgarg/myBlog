<?php

$servername = "localhost";
$username = "uysrd6vjvtjmb";
$password = "veroxyle@123456";
$database = "dbs7quzkph56gw";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

?>