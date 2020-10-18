<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){

        }
        else{
            header('location: /login.php');
        }
    }else{
        header('location: /login.php');
    }
    include($_SERVER["DOCUMENT_ROOT"]."/api/user.api.php");
    include($_SERVER["DOCUMENT_ROOT"]."/conn/conn.php");

    $newUser = new user;
?>



<!-- post form handler -->
<?php

    if(isset($_POST['post'])){
      $title = $conn->real_escape_string($_POST['title']);
      $category = $conn->real_escape_string($_POST['category']);
      $description = $conn->real_escape_string($_POST['description']);
      $author = $conn->real_escape_string($_POST['author']);
      $content = $conn->real_escape_string($_POST['content']);
      $image = $_FILES['image'];
      $tags = $conn->real_escape_string($_POST['tags']);

      if (isset($_POST['approval'])) {
        $approval = 1;
      }
      else{
        $approval = 0;
      }

      $t = time();

      $target_dir = $_SERVER["DOCUMENT_ROOT"]."/assets/images/post/";
        $extension =  $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = strtolower(pathinfo($extension, PATHINFO_EXTENSION));
        $target_output = $username.$t.".".$imageFileType;
        $target_file = $target_dir . $username . $t . "." . $imageFileType;
        $target_output2 = "/assets/images/post/".$target_output;
        if(file_exists($target_file)){
            die("image with same name already exist");
        }
        $check = getimagesize($_FILES["image"]["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
        } else {
            die("Uploaded file is not a image <br>");
            $uploadOk = 0;
        }

        if ($_FILES["image"]["size"] > 500000) {
            die("file size too large <br>");
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br>");
            $uploadOk = 0;
        }
        
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        } else {
            die("Error occured while uploading image <br>");
        }


        $sql = "INSERT INTO posts (title, category, description, author, content, image, tags, status) VALUES('$title', '$category', '$description', '$author', '$content', '$target_output2', '$tags', '$approval')";
        if($GLOBALS['conn']->query($sql)){
          echo 'posted successfully. go to <a href="index.php">admin panel</a>';
        }
    }

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
    <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/dcm9dj37j8vyvw6nee8r7yy6byp2wnen986xcd2egsl02fcu/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  tinymce.init({
    selector: '#content',
    width: 700,
    height: 500,
    plugins: [
      'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      'table emoticons template paste help'
    ],
    toolbar: 'undo redo | styleselect | font fontsize| bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullpage | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      favs: {title: 'My Favorites', items: 'code visualaid | searchreplace | spellchecker | emoticons'}
    },
    menubar: 'favs file edit view insert format tools table help',
    content_css: 'css/content.css'	
  });

  </script>
</head>
<body>
  
  <form method="post" enctype="multipart/form-data" class="post-form">
    <input type="text" name="title" id="title" placeholder="title of post"><br>
    <select name="category" id="category">
      <option value="blog">blog</option>
      <option value="news">news</option>
      <option value="review">review</option>
    </select><br>
    <input type="text" name="description" id="description" placeholder="say something about this post"><br>
    <input type="text" name="author" id="author" value="<?php echo $_SESSION['username']; ?>" readonly><br>
    <textarea name="content" id="content"></textarea><br>
    <input type="file" name="image" id="image" placeholder="thumbnail for post"><br>
    <input type="text" name="tags" id="tags" placeholder="example: blog, cat, dog, etc..."><br>
    <input type="checkbox" name="approval" id="approval"><br>
    <input type="submit" value="post" name="post">
  </form>


</body>
</html>
