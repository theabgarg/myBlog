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

    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'UNKNOWN';
        return $ipaddress;
    }
    
    $ip = get_client_ip();
    $ip = inet_pton($ip);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title;?></title>
    <meta name="keywords" content="<?php echo $tags;?>">
    <meta name="author" content="<?php echo $author;?>">
    <link rel="stylesheet" href="/assets/css/main.css">
    <script src="assets/js/jquery.js"></script>
</head>
<body>
<header>
        <div class="logo">
            <img src="/assets/images/blog.svg" alt="logo">
            <p>MyBlog</p>
        </div>
        <nav>
            <ul>
                <li><a href="/index.html">home</a></li>
                <li><a href="/login.php">admin login</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </nav>
        <form class="searchbar">
            <input type="text" name="search" id="search" placeholder="search...">
            <button type="submit" class="searchbtn"><img src="assets/images/research.svg" alt="submit"></button>
        </form>
    </header>
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

    <div class="user-section">
        <div class="like">
            <p>like</p>
        </div>
        <div class="share">
            <p>share</p>
        </div>
        <div class="report">
            <p>report</p>
        </div>
    </div>

    <div class="comment-section">
        <div class="comments">
        </div>
        <form method="post" class="submit-comment" id="submit-comment">
            <input type="text" name="name" placeholder="enter your name...">
            <input type="email" name="email" placeholder="enter email...">
            <textarea name="comment" cols="30" rows="10" placeholder="Leave a comment..."></textarea>
            <input type="submit" value="comment">
        </form>
    </div>
    <footer>
        <div class="info">
            <p>By 3AS</p>
            <p>we write blogs that matters</p>
            <p>contact: 100</p>
            <p><i>fb</i> <i>fb</i> <i>fb</i></p>
        </div>
        <form method="POST" class="contact-form">
            <label for="contact">contact us</label>
            <input type="text" name="name" id="name" placeholder="name">
            <input type="email" name="email" id="email" placeholder="email">
            <input type="submit" name="submit" value="submit">
        </form>
        <div class="sub-footer">
            &copy;2020 BY 3AS
        </div>
    </footer>

    <script>

        $(document).ready(function(){
            loadComments();
        });

        $('#submit-comment').submit(function(event) {
            event.preventDefault();
            var postid = <?php echo($id); ?>;
            var name = $('input[name=name]').val();
            var email = $('input[name=email]').val();
            var comment = $('textarea[name=comment]').val();
            $.ajax({
                type:'POST',
                url:'submitcomment.php',
                data:{id:postid,name:name,email:email,comment:comment},
                dataType:'json',
                success: function(data){
                    console.log('i did it');
                    loadComments();
                }
            });
        });

        function loadComments(){
            var postid = <?php echo($id); ?>;
            $.ajax({
                type:'POST',
                url:'loadcomments.php',
                data:{id:postid},
                dataType:'json',
                success: function(data){
                    $('.comments').html("");
                    if (data!= 'null' && data != "") {
                        for (let i = 0; i < data.length; i++) {
                            var name = data[i].name;
                            var comment = data[i].comment;
                            var date = data[i].date;
                            var commentcard = commentCard(name,comment,date);
                            $('.comments').append(commentcard);
                        }
                    }
                }
            });
        }

        $('.like p').click(function(){
            var ip = "<?php echo $ip; ?>";
            var id = <?php echo $id;?>;
            $.ajax({
                type:'POST',
                url:'likereport.php',
                data:{function:'like',ip:ip,id:id},
                dataType:'json',
                complete: function(){
                    $('.like').css("color","red");
                }
            });
        });

        $('.report p').click(function(){
            var ip = "<?php echo $ip; ?>";
            var id = <?php echo $id;?>;
            $.ajax({
                type:'POST',
                url:'likereport.php',
                data:{function:'report',ip:ip,id:id},
                dataType:'json',
                complete: function(){
                    $('.report').css("color","red");
                }
            });
        });

        
    </script>
    <script src="assets/js/main.js"></script>
    
</body>
</html>