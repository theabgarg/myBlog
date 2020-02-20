<?php
    session_start();
    if (/*isset($_SESSION['username']) && isset($_SESSION['name']) && isset($_SESSION['email'])*/ 1 ) {
        
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
    <link rel="stylesheet" href="../assets/css/main.css">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/main.js"></script>
</head>
<body>
    <script>header();</script>
    <div class="users_post"></div>
    <div class="unpublished_posts"></div>

    <script>
        $(Document).ready(function(){
            $.ajax
        });
    </script>
</body>
</html>