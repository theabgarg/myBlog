<?php

include_once("conn.php");

$sql = "CREATE TABLE IF NOT EXISTS posts (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        author VARCHAR(100) NOT NULL,
        title VARCHAR(500) NOT NULL,
        content VARCHAR(65000),
        approval int(1) DEFAULT 0,
        post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

$sql2 = "CREATE TABLE IF NOT EXISTS userDB(
        username VARCHAR(100) UNIQUE NOT NULL PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30),
        email VARCHAR(100) NOT NULL UNIQUE,
        role_type ENUM('editor', 'admin')
    )";

    if($conn->query($sql) === TRUE) {
        echo "1st Table created successfully ";
    }
    else{
        echo "error creating tables: " . $conn->error;
    }


    if($conn->query($sql2) === TRUE) {
        echo "2nd Table created successfully";
    }
    else{
        echo "error creating tables: " . $conn->error;
    }

?>