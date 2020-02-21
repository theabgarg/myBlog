<?php
    include_once("conn/conn.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <style>
        ul{}
        ul a:active{background-color:#d90000;}
        ul a li{}
        .active{background-color:#d90000;}
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('ul a').click(function(){
                // $('a li').css("background-color", "none");
                $(this).css("background-color", "#d90000");
            });
        });
    </script>
</head>
<body>
    <script>header();</script>
    <div class="posts" id="latest_post">
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            <img src="..." class="card-img-top" alt="...">
        </div>
    </div>
    <div class="posts" id="how_to"></div>
    <div class="posts" id="blog"></div>
    <div class="posts" id="review"></div>

    <script>
        $(document).ready(function(){

        });
    </script>
</body>
</html>