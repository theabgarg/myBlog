<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'author'){

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

    <!-- header -->
    <?php include("includes/header.php"); ?>

    <!-- sidebar -->
    <?php include("includes/sidebar.php"); ?>

    <!-- response -->
    <div class="main-content">
        <div class="welcome">
            <p>Welcome, <span><?php echo $_SESSION['name'];?></span> to the admin dashboard.</p>
        </div>

        <section>
            <div class="response">
            </div>
        </section>
    </div>









<!-- javascript -->


<script>
    var htmldata='a';
    
    $('.posts').click(function(){
        $('.response').html("");
        var offset = 0;
        console.log("i'm in!")
        $.ajax({
            type:'POST',
            url: '/myBlog/includes/posts.php',
            data : {offset:offset},
            dataType: 'json',
            success: function(data){
                if (data!= 'null') {
                for (let i = 1; i < data.length; i++) {
                    var id = data[i].id;
                    var title = data[i].title;
                    var category = data[i].category;
                    var description = data[i].description;
                    var author = data[i].author;
                    var image = data[i].image;
                    var date = data[i].date;
                    var cards = '<div class="manage-post"><div class="image"><img src="'+image+'"></div><div class="details"><p class="title">'+title+'</p><p class="description">'+description+'</p></div><div class="delete"><button class="delete-post" onclick="deletePost('+id+')">delete</button></div></div>';
                    $('.response').append(cards);
                }
                }
            }
        });
    });

    function deletePost(id){
        $.ajax({
            type:'POST',
            url: 'deletePost.php',
            data : {id:id},
            dataType: 'html',
            success: function(data){
                $('.posts').trigger("click");
                console.log("deleted");
            }
        });
    }


</script>
<script src="../assets/js/main.js"></script>
</body>
</html>