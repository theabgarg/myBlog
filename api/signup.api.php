<?php
    include('../conn/conn.php');

    if(isset($_GET['auth'])) {
        $token = $_GET['auth'];
    //     $sql = "SELECT * FROM auth WHERE token='$token'";
    //     $result = $conn->query($sql);
    //     if ($result === true) {
    //         $email = $result['email'];
    //     }
    //     else{
    //         die("you doesn't have permission to access this!");
    //     }
    }
    else{
        die("this place is not for some damn brats like you");
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
        </form>
    </body>
    </html>