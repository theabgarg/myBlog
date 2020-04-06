<?php
    session_start();
    if (isset($_SESSION['username']) && isset($_SESSION['name']) && isset($_SESSION['email']) && $_SESSION['role']=='author') {
        
    }
    else{
        header("location: ../login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/main2.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/main.js"></script>
</head>
<body>
    <?php include "includes/header.php"; ?>
    <?php include "includes/sidebar.php"; ?>
       
</body>
</html>