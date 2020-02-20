<?php

include_once('conn/conn.php');
include_once('api/user.api.php');

    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        $newUser = new user;
        $login = $newUser->verifyUser($username, $password);
        if($login){
            session_start();
            $_SESSION['username'] = $newUser->getUsername();
            $_SESSION['name'] = $newUser->getName();
            $_SESSION['email'] = $newUser->getEmail();
            $_SESSION['type'] = $newUser->getType();

            if($_SESSION['type'] == 0){
                header("location: ./author/index.php");
            }
            elseif($_SESSION['type'] == 1){
                header("location: ./admin/index.php");
            }
        }
        else{
            header("location: https://www.scamwatch.gov.au/types-of-scams");
        }
    }
    elseif (isset($_SESSION['username'])) {
        if($_SESSION['type'] == 0){
            header("location: ./author/index.php");
        }
        elseif($_SESSION['type'] == 1){
            header("location: ./admin/index.php");
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
    </head>
    <body>

        <form class="login-form" method="post">

            <div class="container">
            <label for="uname"><b>Username or Email</b></label>
            <input type="text" placeholder="Enter Username or Email" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
                
            <button type="submit" name="submit" value="submit">Login</button>
            </div>
        </form>
        </div>

    </body>
</html>

<?php
    print_r($_SESSION);
?>