<?php

include_once('assets/conn/conn.php');
include_once('api/user.api.php');

session_start();

    if (isset($_POST['submit'])) {
        $username = $_POST['uname'];
        $password = $_POST['psw'];
        $newUser = new user;
        $login = $newUser->verifyUser($username, $password);
        echo "<p style='color:white'>".$login."</p>";
        if($login){
            $_SESSION['username'] = $newUser->getUsername();
            $_SESSION['name'] = $newUser->getName();
            $_SESSION['email'] = $newUser->getEmail();
            $_SESSION['role'] = $newUser->getRole();

            if($_SESSION['type'] == 'author'){
                header("location: ./author/index.php");
            }
            elseif($_SESSION['type'] == 'admin'){
                header("location: ./admin/index.php");
            }
        }
        else{
            echo "<p style='color:white'>login failed</p>";
        }
    }
    elseif (isset($_SESSION['username'])) {
        if($_SESSION['role'] == 'author'){
            header("location: ./author/index.php");
        }
        elseif($_SESSION['role'] == 'admin'){
            header("location: ./admin/index.php");
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>LOGIN</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" type="text/css" href="login.css">
	</head>
	<body>
		<div class="login_border">
			<div class="heading">Sign In</div>
			<div class="form_input">
				<form method="post">
					<div><input type="text" name="uname" placeholder="username or email" required="required"></div>
					<div><input type="password" name="psw" placeholder="password" required="required"></div>
					<div><input class="submit" type="submit" name="submit" value="Sign In"></div>
				</form>
			</div>
		</div>
	</body>
</html>