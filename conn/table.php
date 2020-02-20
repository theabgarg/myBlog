<?php

include_once("conn.php");

$sql = "CREATE TABLE IF NOT EXISTS posts (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(100) UNIQUE NOT NULL,
        title VARCHAR(500) NOT NULL,
        short_desc VARCHAR(500),
        content TEXT(65000),
        img BLOB NOT NULL,
        approval tinyint DEFAULT 0,
        post_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        views INT(11) NOT NULL DEFAULT 0
    );";

$sql .= "CREATE TABLE IF NOT EXISTS userDB(
        username VARCHAR(100) UNIQUE NOT NULL PRIMARY KEY,
        is_admin tinyint DEFAULT 0,
        fullname VARCHAR(30) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        pass VARCHAR(200) NOT NULL,
        created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );";

$sql .= "CREATE TABLE IF NOT EXISTS auth(
        id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
        token VARCHAR(100) UNIQUE NOT NULL,
        valid tinyint DEFAULT 0
    )";

    if($conn->multi_query($sql) === TRUE) {
        echo "Tables created successfully ";
    }
    else{
        echo "error creating tables: " . $conn->error;
    }

?>