<?php
session_start();
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == 'admin') {
    } else {
        header('location: ../login.php');
    }
} else {
    header("location: ../login.php");
}
include("../conn/conn.php");
include("../api/user.api.php");

$newUser = new user();

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
            <p>Welcome, <span><?php echo $_SESSION['name']; ?></span> to the admin dashboard.</p>
        </div>

        <section>
            <div class="response">
            </div>
        </section>
    </div>









    <!-- javascript -->


    <script>
        var htmldata = 'a';

        function generate() {
            var token = "<?php echo $newUser->authToken(); ?>";
            htmldata = "freelog.xyz/signup.php?token=" + token;
            var td = '<input type="text" class="token-display" value="' + htmldata + '" readonly><br>';
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

        $('.users').click(function() {
            $('.response').html(" ");
            console.log("i'm in!")
            <?php
            $sql = "SELECT * FROM users WHERE role='author'";
            $result = $GLOBALS['conn']->query($sql);
            if ($result && $result->num_rows > 0) {
                $fetch_data = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($fetch_data as $data) {
            ?>
                    var img = "/" + "<?php echo $data['profile_pic'] ?>";
                    var name = "<?php echo $data['name'] ?>";
                    var username = "<?php echo $data['username'] ?>";
                    var usercard = postUser(img, name, username);
                    $('.response').append(usercard);
                <?php
                }
            } else {
                ?>
                console.log("i failed!!");
            <?php
            }
            ?>
        });


        $('.posts').click(function() {
            $('.response').html("");
            var offset = 0;
            console.log("i'm in!")
            $.ajax({
                type: 'POST',
                url: '/includes/posts.php',
                data: {
                    offset: offset
                },
                dataType: 'json',
                success: function(data) {
                    if (data != 'null') {
                        for (let i = 1; i < data.length; i++) {
                            var id = data[i].id;
                            var title = data[i].title;
                            var category = data[i].category;
                            var description = data[i].description;
                            var author = data[i].author;
                            var image = data[i].image;
                            var date = data[i].date;
                            var cards = '<div class="manage-post"><div class="image"><img src="' + image + '"></div><div class="details"><p class="title">' + title + '</p><p class="description">' + description + '</p></div><div class="delete"><button class="delete-post" onclick="deletePost(' + id + ')">delete</button></div></div>';
                            $('.response').append(cards);
                        }
                    }
                }
            });
        });

        function deleteUser(name) {
            $.ajax({
                type: 'POST',
                url: 'deleteuser.php',
                data: {
                    username: name
                },
                dataType: 'html',
                success: function(data) {
                    location.reload();
                }
            });
        }

        function deletePost(id) {
            $.ajax({
                type: 'POST',
                url: 'deletePost.php',
                data: {
                    id: id
                },
                dataType: 'html',
                success: function(data) {
                    $('.posts').trigger("click");
                    console.log("deleted");
                }
            });
        }
    </script>
    <script src="../assets/js/main.js"></script>
</body>

</html>