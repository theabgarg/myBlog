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
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel='shortcut icon' href='../favicon.png' type='image/x-icon' />
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="../assets/js/jquery.js"></script>
    <link rel="stylesheet" href="../assets/css/main2.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <?php include("includes/header.php"); ?>
    <?php inclued("includes/sidebar.php"); ?>

    <div class="main-content">
        <div class="welcome">
            <p>Welcome, <span><?php echo $_SESSION['name'];?></span> to the admin dashboard.</p>
        </div>

        <section>
            <div class="response"></div>
        </section>
    </div>















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
<script src="../assets/js/main.js"></script>
</body>
</html>