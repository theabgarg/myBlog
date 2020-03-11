<?php
    session_start();
    if(isset($_SESSION['type'])){
        if($_SESSION['type'] == 1){

        }
        else{
            header('location: https://www.macmillandictionary.com/thesaurus-category/british/not-allowed');
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
    <title>Document</title>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/main.js"></script>
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

<script>
    header();
    var htmldata='a';

    function generate(){
        var token = "<?php echo $newUser->authToken();?>";
        htmldata = "https://cseprofessor.ml/signup.php?token=" + token;
        var button = '<button id="cpy-btn-btn" onclick="myFunction()">copy token</button>';
        $(".response").append(button);
    }
    function myFunction() {
        var aux = document.createElement("INPUT");
        aux.setAttribute('value', htmldata);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand('copy');
        document.body.removeChild(aux);
    }         
    </script>

    <aside>
        <div class="buttons new_post"> <a onclick="">create new post</a></div>
        <div class="buttons users"><a onclick="">manage users</a></div>
        <div class="buttons posts"><a onclick="">manage posts</a></div>
        <div class="buttons token"><a onclick="generate()">generate signup token</a></div>
    </aside>

    <div class="welcome">
        <p>Welcome, <span><?php echo $_SESSION['name'];?></span> to the admin dashboard.</p>
    </div>

    <section>
        <div class="response"></div>
    </section>

    <!-- <button onclick="generate()" >generate signup token</button>
    <div class="response"></div> -->
   

    <script>footer();</script>
    <script>
        $('.new_post').click(function(){
            var x = postform();
            $('aside').html("");
            $('aside').html(x);
        });
    </script>
</body>
</html>