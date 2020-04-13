<?php
include_once('conn/conn.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE id='$id'";
    if($result = $conn->query($sql)){
        $row = $result -> fetch_assoc();
        $title = $row['title'];
        $category = $row['category'];
        $author = $row['author'];
        $content = $row['content'];
        $image = $row['image'];
        $date = $row['date'];
        $tags = $row['tags'];
        $status = $row['status'];
        if($status==0){
            die('No such post exists');
        }
    }
    else{
        die('No such post exists');
    }
?>

    <?php include('includes/head.php');?>
    <style>

        .title{
            width:100%;
            text-align: center;
            color:white;
            font-size:50px;
            text-transform: capitalize;
        }
        .image{
            width:500px;
            height: 500px;
            margin:20px auto;
        }

        .image img{
            height:100%;
            width:100%;
        }
        .content{
            color:white ;
            font-size:30px;
            margin-bottom:50px;
        }
    </style>
</head>
<body>
    <?php include('includes/header.php');?>
    <div class="page-wrapper">
        <div class="title">
            <p><?php echo $title; ?></p>
        </div>
        <div class="image">
            <img src="<?php echo $image; ?>" alt="post image">
        </div>
        <div class="content">
            <?php echo $content; ?>
        </div>
    </div>
    <?php include('includes/footer.php');?>
</body>
</html>