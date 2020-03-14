<?php
    include_once("./conn/conn.php")
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
    <meta http-equiv="Content-Type" content="text/html">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <script>header();</script>
    <div class="posts" id="latestposts">
        <?php
            $sql = "SELECT * FROM posts ORDER BY post_date ASC LIMIT 5";
            $result = $GLOBALS['conn']->query($sql);
            if($result && $result->num_rows > 0){
                $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
                foreach ($fetch_data as $data){
                    ?>
                    <script>
                    var img;
                    var title = "<?php echo $data['title'];?>";
                    var shortDesc = "<?php echo $data['short_desc']?>";
                    var author = "<?php echo $data['username'];?>";
                    var date = <?php echo $data['post_date'];?> * 1000;
                    var postDate = new Date(date);
                    var post = potsDesign(img, title, shortDesc, username, postDate);
                    document.write(post);
                    </script>
                    "after script
                    <?php
                }
            }
        ?>
    </div>
    <div class="posts" id="news">
    <?php
        $sql = "SELECT * FROM posts WHERE category='news' ORDER BY post_date ASC LIMIT 5";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            foreach ($fetch_data as $data){
                ?>
                <script>
                var img = <?php echo $data['img'];?>;
                var title = <?php echo $data['title'];?>;
                var shortDesc = <?php echo $data['short_desc']?>;
                var author = <?php echo $data['username'];?>;
                var date = <?php echo $data['post_date'];?> * 1000;
                var postDate = new Date(date);
                var post = potsDesign(img, title, shortDesc, username, postDate);
                document.write(post);
                </script>
                <?php
            }
        }
        ?>
    </div>
    <div class="posts" id="how_to">
    <?php
        $sql = "SELECT * FROM posts WHERE category='how_to' ORDER BY post_date ASC LIMIT 5";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            foreach ($fetch_data as $data){
                ?>
                <script>
                var img = <?php echo $data['img'];?>;
                var title = <?php echo $data['title'];?>;
                var shortDesc = <?php echo $data['short_desc']?>;
                var author = <?php echo $data['username'];?>;
                var date = <?php echo $data['post_date'];?> * 1000;
                var postDate = new Date(date);
                var post = potsDesign(img, title, shortDesc, username, postDate);
                document.write(post);
                </script>
                <?php
            }
        }
        ?>
    </div>
    <div class="posts" id="reviews">
    <?php
        $sql = "SELECT * FROM posts WHERE ccategory='reviews' ORDER BY post_date ASC LIMIT 5";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            foreach ($fetch_data as $data){
                ?>
                <script>
                var img = <?php echo $data['img'];?>;
                var title = <?php echo $data['title'];?>;
                var shortDesc = <?php echo $data['short_desc']?>;
                var author = <?php echo $data['username'];?>;
                var date = <?php echo $data['post_date'];?> * 1000;
                var postDate = new Date(date);
                var post = potsDesign(img, title, shortDesc, username, postDate);
                document.write(post);
                </script>
                <?php
            }
        }
        ?>
    </div>
    <div class="posts" id="blog">
    <?php
        $sql = "SELECT * FROM posts WHERE category='blog' ORDER BY post_date ASC LIMIT 5";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            foreach ($fetch_data as $data){
                ?>
                <script>
                var img = <?php echo $data['img'];?>;
                var title = <?php echo $data['title'];?>;
                var shortDesc = <?php echo $data['short_desc']?>;
                var author = <?php echo $data['username'];?>;
                var date = <?php echo $data['post_date'];?> * 1000;
                var postDate = new Date(date);
                var post = potsDesign(img, title, shortDesc, username, postDate);
                document.write(post);
                </script>
                <?php
            }
        }
        ?>
    </div>

    <script>footer();</script>
</body>
</html>