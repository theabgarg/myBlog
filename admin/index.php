<?php
    session_start();
    if(isset($_SESSION['type'])){
        if($_SESSION['type'] == 1){

        }
        else{
            header('location: https://www.macmillandictionary.com/thesaurus-category/british/not-allowed');
        }
    }else{
        header("location: https://en.wikipedia.org/wiki/The_Last_Warning");
    }
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

    var htmldata='a';

    function generate(){
        var token = "<?php echo $newUser->authToken();?>";
        htmldata = "https://cseprofessor.ml/signup?token=" + token;
        var button = '<button id="cpy-btn-btn" onclick="myFunction()">copy token</button>';
        $(".response").append(button);
    }

    function myFunction() {
        var aux = document.createElement("INPUT");
        aux.setAttribute('value', htmldata);
        document.body.appendChild(aux);
        aux.select();
        document.execCommand('copy');
        document.body.removeChild(aux);
    }
             
    </script>


    <button onclick="generate()" >generate signup token</button>
    <div class="response"></div>
   
</body>
</html>