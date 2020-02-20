<?php
    session_start();
    if(isset($_GET['token'])){
        $token = $_GET['token'];
    }else{
        die("token kon tera baap lega??????????");
    }

    include("conn/conn.php");
    include("api/user.api.php");

    if (isset($_POST['token'] && $_POST['username'] && $_POST['name'] && $_POST['email'] && $_POST['password'])) {
        $newUser = new user;
        $token = $_POST['token'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $response = $newUser->addUser($token, $username, $name, $email, $password);
    }
    else{
        echo "bhai detail tujhpe dhang se bhari nhi jaa rhi account bana k karega kya?????";
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
        <input type="email" name="email" placeholder="email@female.com">
        <input type="password" name="password" placeholder="password">
    </form>
</body>
</html>