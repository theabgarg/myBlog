<?php
    include("../conn/conn.php");
    $post_id = $_POST['id'];

    $sql = "SELECT * FROM posts WHERE id='$post_id'";
    if($GLOBALS['conn']->query($sql)){
        $sql = "DELETE FROM posts WHERE id='$post_id'";
        if ($GLOBALS['conn']->query($sql)){
            echo "post deleted successfully";
        }
        else{
            echo "Error Occured while deleting the post! : " . $GLOBALS['conn']->error;
        }
    }
    else{
        echo "This post doesn't exists!";
    }

?>