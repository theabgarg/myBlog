<?php
    session_start();
    if(isset($_GET['token'])){
        $token = $_GET['token'];
    }else{
        die("token leke aa pehle");
    }

    include("conn/conn.php");
    include("api/user.api.php");

    if(isset($_POST['submit'])){
        $newUser = new user;
        $signUpagain = "<a href='signup.php?token=".$token."'>signup again</a>";
        $token = $conn -> real_escape_string($_POST['token']);
        $username = $conn -> real_escape_string($_POST['username']);

        $usernameCheck = $newUser -> verifyUsername($username);
        if(!$usernameCheck){
            die("username already exist <br>".$signUpagain);
        }
        $name = $conn -> real_escape_string($_POST['name']);
        $email = $conn -> real_escape_string($_POST['email']);

        $emailCheck = $newUser->checkEmail($email);
        if(!$emailCheck){
            die("email already exist <br>".$signUpagain);
        }
        $password = $conn -> real_escape_string($_POST['password']);
        
        if($username=="" || $name=="" || $email=="" || $password==""){
            die("Fields missing. <br>".$signUpagain);
        }
        
        $target_dir = "assets/images/user/";
        $extension =  $target_dir . basename($_FILES["profile_pic"]["name"]);
        $imageFileType = strtolower(pathinfo($extension, PATHINFO_EXTENSION));
        $target_file = $target_dir . $username . $imageFileType;
        if(file_exists($target_file)){
            unlink($target_file);
        }
        // $check = getimagesize($_FILES["pic"]["tmp_name"]);
        // if($check !== false) {
        //     $uploadOk = 1;
        // } else {
        //     die("Uploaded file is not a image <br>".$signUpagain);
        //     $uploadOk = 0;
        // }

        if ($_FILES["pic"]["size"] > 500000) {
            die("file size too large <br>".$signUpagain);
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>".$signUpagain);
            $uploadOk = 0;
        }
        
        if(move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) {
        } else {
            die("Error occured while uploading image <br>".$signUpagain);
        }

        $response = $newUser -> addUser($token, $username, $name, $mobile, $email, $password, $target_file);

        echo $response;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup form</title>
</head>
<body>
    <form method="post">
        <input type="text" name="token" value="<?php echo $token; ?>" readonly><br/>
        <input type="text" name="username" placeholder="username"><br/>
        <input type="text" name="name" placeholder="name"><br/>
        <input type="tel" name="mobile" placeholder="mobile number" maxlength="10"><br/>
        <input type="email" name="email" placeholder="email@gmail.com"><br/>
        <input type="password" name="password" placeholder="password"><br/>
        <input type="file" name="pic"><br/>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>