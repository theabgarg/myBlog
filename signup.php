<?php
    session_start();
    if(isset($_GET['token'])){
        $token = $_GET['token'];
    }else{
        die("token leke aa pehle");
    }

    include("conn/conn.php");
    include("api/user.api.php");

    if (isset($_POST['token']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
        $target_dir = "assets/images";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }


        $newUser = new user;
        $token = $_POST['token'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = $newUser->addUser($token, $username, $name, $email, $password);

        echo $response;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="token" value="<?php echo $token; ?>" readonly><br/>
        <input type="text" name="username" placeholder="username"><br/>
        <input type="text" name="name" placeholder="name"><br/>
        <input type="tel" name="mobile" placeholder="mobile number" maxlength="10"><br/>
        <input type="email" name="email" placeholder="email@gmail.com"><br/>
        <input type="password" name="password" placeholder="password"><br/>
        <input type="file" name="profile_pic"><br/>
        <input type="submit" value="submit">
    </form>
</body>
</html>