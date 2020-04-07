<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){

        }
        else{
            header('location: ../login.php');
        }
    }else{
        header("location: ../login.php");
    }
    include("../api/user.api.php");
    include("../conn/conn.php");

    $newUser = new user;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel='shortcut icon' href='../favicon.png' type='image/x-icon' />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../assets/css/main2.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>

    <!-- header -->
    <?php include("includes/header.php"); ?>

    <!-- sidebar -->
    <?php include("includes/sidebar.php"); ?>



    <div class="response">
        <form action="posts.php" enctype="multipart/form-data"></form>
    </div>