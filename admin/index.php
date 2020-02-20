<?php
    session_start();
    print_r($_SESSION);

    include("../api/user.api.php");

    $newUser = new user;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../assets/js/jquery.js"></script>
</head>
<body>

<script>
        function generate(){
            var token = "<?php echo $newUser->authToken();?>";
            var htmldata = "https://cseprofessor.ml/signup?token=" + token;
            document.write(htmldata);
        }
    </script>


    <button onclick="generate()" >generate signup token</button>
    <div class="response"></div>
   
</body>
</html>