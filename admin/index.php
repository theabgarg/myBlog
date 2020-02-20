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
            var button = '<button id="cpy-btn-btn" >copy token</button>';
            $(".response").append(button);
        }
        $('#cpy-btn-btn').onclick(function(){
            var aux = document.createElement("INPUT");
            aux.setAttribute('value', htmldata);
            document.body.appendChild(aux);
            aux.select();
            document.execCommand('copy');
            document.body.removeChild(aux);
        });


            
    </script>


    <button onclick="generate()" >generate signup token</button>
    <div class="response"></div>
   
</body>
</html>