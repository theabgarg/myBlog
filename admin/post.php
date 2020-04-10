<?php
    session_start();
    if(isset($_SESSION['role'])){
        if($_SESSION['role'] == 'admin'){

        }
        else{
            header('location: /myblog/login.php');
        }
    }else{
        header('location: /myblog/login.php');
    }
    include($_SERVER["DOCUMENT_ROOT"]."/api/user.api.php");
    include($_SERVER["DOCUMENT_ROOT"]."/conn/conn.php");

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
    <script
    type="text/javascript"
    src='https://cdn.tiny.cloud/1/dcm9dj37j8vyvw6nee8r7yy6byp2wnen986xcd2egsl02fcu/tinymce/5/tinymce.min.js'
    referrerpolicy="origin">
  </script>
  <script type="text/javascript">
  var size = screen.width;
  size -= 20;
  tinymce.init({
    selector: '#myTextarea',
    width: size,
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
  <form action="" method="post">
    <label for=""></label>
  </form>



</body>
</html>