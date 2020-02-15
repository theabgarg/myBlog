<?php

include_once("conn.php");

$sql = "CREATE DATABASE IF NOT EXISTS myBlog";

if($conn->query($sql) === TRUE) {
    echo "database created successfully";
}
else{
    echo "error while creating datatabase: " . $conn->error;
}

$conn->close();

?>