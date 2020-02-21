<?php
    include_once("conn/conn.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <meta name="description" content="The blog website, find latest news, how-to methods and latest news here.">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="keywords" content="blog, how to, news">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <script>header();</script>
    <div class="posts" id="latestposts"></div>
    <div class="posts" id="news"></div>
    <div class="posts" id="how_to"></div>
    <div class="posts" id="reviews"></div>
    <div class="posts" id="blog"></div>
</body>
</html>