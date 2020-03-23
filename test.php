<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main2.css">
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="assets/images/logo.png" alt="logo" height="48" width="48">
            <h1 class="logo-text">vero<span>xyle</span></h1>
        </div>

        <i class="fa fa-bars menu-toggle"></i>

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
        $(document).ready(function(){
            $('.menu-toggle').click(function(){

                var x = $('header > ul').css({"display" : "none"});

                if(x) {
                    $('header > ul').css({"display" : "block"});
                }else{
                    $('header > ul').css({"display" : "none"});
                }
            });
        });
    </script>
</body>
</html>