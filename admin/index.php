<?php
    session_start();
    if(isset($_SESSION['type'])){
        if($_SESSION['type'] == 1){

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
    <title>Document</title>
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/main.js"></script>
    <link rel="stylesheet" href="../assets/css/main2.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
        <div class="logo">
            <img src="assets/images/logo.png" alt="logo" height="48" width="48">
            <h1 class="logo-text">vero<span>xyle</span></h1>
        </div>

        <i class="fa fa-bars menu-toggle"></i>
        <i class="fa fa-times menu-close"></i>

        <ul class="nav">
            <li><a href="#">Latest</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">How-to</a></li>
            <li><a href="#">Reviews</a></li>
            <li><a href="#">Blog</a></li>
            <!-- <li><a href="#">Sign Up</a></li>
            <li><a href="#">Login</a></li> -->
            <li>
                <a href="#">
                <i class="fa fa-user"></i>    
                veroxyle
                <i class="fa fa-chevron-down" style="font-size: 0.8em;"></i>
                </a>
                <ul>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#" class="logout">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>

<script>
    var htmldata='a';

    function generate(){
        var token = "<?php echo $newUser->authToken();?>";
        htmldata = "https://cseprofessor.ml/signup.php?token=" + token;
        var td = '<input type="text" class="token-display" value="'+ htmldata +'" readonly><br>';
        var button = '<button id="cpy-btn-btn" onclick="myFunction()">copy token</button>';
        $(".response").html("");
        $(".response").append(td);
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

    <aside class="sidebar">
        <div class="buttons new_post"> <a>create new post</a></div>
        <div class="buttons users"><a onclick="">manage users</a></div>
        <div class="buttons posts"><a onclick="">manage posts</a></div>
        <div class="buttons token"><a onclick="generate()">generate signup token</a></div>
    </aside>

    <div class="main-content">
        <div class="welcome">
            <p>Welcome, <span><?php echo $_SESSION['name'];?></span> to the admin dashboard.</p>
        </div>

        <section>
            <div class="response"></div>
        </section>
    </div>
   
    <script>
        $('.new_post').click(function(){
            var x = postform();
            $('.response').html("");
            $('.response').append(x);
        });

        $('.users').click(function(){
            <?php
                $sql = "SELECT * FROM userDB WHERE is_admin = 0";
                $result = $GLOBALS['conn']->query($sql);
                if($result && $result->num_rows > 0){
                    $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
                    foreach($fetch_data as $data){
                        ?>
                            var id = <?php echo $data['id']?>;
                            var name = <?php echo $data['fullname']?>;
                            var username = <?php echo $data['username']?>;
                            postusers(id,name, username);
                        <?php
                    }
                } 
            ?>
        });
    </script>
</body>
</html>