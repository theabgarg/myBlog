<?php

$servername = "localhost";
$username = "uysrd6vjvtjmb";
$password = "veroxyle@123456";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}

try {
    $conn->select_db('myBlog');
}
catch (mysqli_sql_exception $e){
    echo "caught exception: " . $e->getMessage() . "\n";
}

?>