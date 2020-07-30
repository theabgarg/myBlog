<?php
    include_once('conn/conn.php');
    if (isset($_POST['id'])) {
        $post_id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];

        $sql = "INSERT INTO comments(post_id,name,email,comment) VALUES('$post_id', '$name', '$email', '$comment')";
        if($result = $GLOBALS['conn']->query($sql)) {
            $data = "success";
            $data = json_encode($data);
            print_r($data);
        }
    }
?>