<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main2.css">
    <script src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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

    <div class="page-wrapper">
        <div class="post-slider">
            <h1 class="slider-title">Trending posts</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/image_1.png" alt="image.png" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day i don't know </a></h4>
                        <i class="fa fa-user">abhishek</i>
                        &nbsp;
                        <i class="fa fa-calendar">mar30, 2020</i>
                    </div>
                </div>
            </div>
        </div>
        <div class="content clearfix">
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>
                <div class="post">
                    <img src="assets/images/image_1.png" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.html">sweetest dong to be sung</a></h2>
                        <i class="fa fa-user">veroXyle</i>
                        &nbsp;
                        <i class="fa fa-calendar">mar 11, 2020</i>
                        <p class="preview-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                            Optio fuga maiores odit necessitatibus cum ipsam?
                        </p>
                        <a href="single.html" class="btn read-more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="sidebar"></div>
        </div>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section about"></div>
            <div class="footer-section links"></div>
            <div class="footer-section contact-form"></div>
        </div>

        <div class="footer-bottom">
            &copy; veroxyle | Designed by Abhishek Garg, Abhishek Kishor, MD Sharib, Aniket chaudhary
        </div>
    </footer>
    <script src="assets/js/main.js"></script>
</body>
</html>