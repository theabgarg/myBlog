<?php
session_start();
include_once("../conn/conn.php");
include_once("../api/user.api.php");

    if (isset($_SESSION['username'])) {
        if (isset($_POST['submit'])) {
            $newUser = new user;
            if($_POST['new-password']==$_POST['confirm-password']){
                $confirmation=$newUser->changePassword($_SESSION['username'],$_POST['current-password'],$_POST['new-password']);
                echo $confirmation;
            }
            else{
                echo "the password didn't match";
            }
        }
    }
    else{
        header('Location: ../login.php');
        die;
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
</head>
<body>
    <form method="post">
        <input type="password" name="current-password" placeholder="current password.....">
        <input type="password" name="new-password" placeholder="New password......">
        <input type="text" name="confirm-password" placeholder="confirm password......">
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>