<?php
    include_once('conn/conn.php');
    if (isset($_POST['id'])) {
        $post_id = $_POST['id'];
        $name = $_POST['name'];
        $name = $GLOBALS['conn']->real_escape_string($name);
        $email = $_POST['email'];
        $email = $GLOBALS['conn']->real_escape_string($email);
        $comment = $_POST['comment'];
        // $comment = $GLOBALS['conn']->real_escape_string($comment);

        $sql = "INSERT INTO comments(post_id,name,email,comment) VALUES('$post_id', '$name', '$email', '$comment')";
        $result = $GLOBALS['conn']->query($sql);
        if($result) {
            $data = "success";
            $data = json_encode($data);
            print_r($data);
        } else {
            $data = $GLOBALS['conn']->error;
            $data = json_encode($data);
            print_r($data);
        }
    }
?>