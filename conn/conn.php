<?php

$servername = "localhost";
$username = "root";
$password = "";

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