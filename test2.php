<form class="new-post-form" method="post">
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title"><br>
    <label for="image">Image</label><br>
    <input type="file" name="image" id="image"><br>
    <label for="desc">Short Description</label><br>
    <input type="text" name="description" id="description"><br>
    <label for="category">Select Category</label><br>
    <select name="category" id="category">
        <option value="how_to">How To</option>
        <option value="news">News</option>
        <option value="reviews">Reviews</option>
        <option value="blog">Blog</option>
    </select><br>
    <input type="checkbox" name="publish" id="publish">
    <p class="publish-now">Publish Now?</p><br>
    <input type="submit" value="submit">
</form>




<?php
    if(isset($_POST['submit'])){
        $newUser = new user;
        $token = $conn -> real_escape_string($_POST['token']);
        $username = $conn -> real_escape_string($_POST['username']);

        $usernameCheck = $newUser -> verifyUsername($username);
        if(!$usernameCheck){
            die("username already exist <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
        }
        $name = $conn -> real_escape_string($_POST['name']);
        $email = $conn -> real_escape_string($_POST['email']);

        $emailCheck = $newUser->checkEmail($email);
        if(!$emailCheck){
            die("email already exist <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
        }
        $password = $conn -> real_escape_string($_POST['password']);
        
        $target_dir = "assets/images/user";
        $extension =  $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($extension, PATHINFO_EXTENSION));
        $target_file = $target_dir . $username . $imageFileType;
        if(file_exists($target_file)){
            unlink($target_file);
        }
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            die("Uploaded file is not a image <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
            $uploadOk = 0;
        }

        if ($_FILES["image"]["size"] > 500000) {
            die("file size too large <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed. <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
            $uploadOk = 0;
        }
        
        if(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
        } else {
            die("Error occured while uploading image <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
        }

        if($username=="" || $name=="" || $email=="" || $password==""){
            die("Fields missing. <br> <a href='cseprofessor.ml/signup.php?token=".$token."'>signup again</a>");
        }

        $newUser -> addUser($token, $username, $name, $mobile, $email, $password, $target_file);
    }
?>