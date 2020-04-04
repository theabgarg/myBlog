<?php
    session_start();
    if(isset($_GET['token'])){
        $token = $_GET['token'];
    }else{
        header("location: https://headtopics.com/images/2019/3/1/aajtak/232523662354237113540-1101460802228256768.webp");
    }

    include("conn/conn.php");
    include("api/user.api.php");

    if (isset($_POST['token']) && isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
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
        <input type="text" name="token" value="<?php echo $token; ?>" readonly>
        <input type="text" name="username" placeholder="username">
        <input type="text" name="name" placeholder="name">
        <input type="number" name="mobile">
        <input type="email" name="email" placeholder="email@gmail.com">
        <input type="password" name="password" placeholder="password">
        <input type="file" name="profile_pic">
        <input type="submit" value="submit">
    </form>
</body>
</html>