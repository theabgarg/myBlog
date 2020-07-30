<?php
    include("../conn/conn.php");
    $username = $_POST['username'];

    $sql = "SELECT * FROM users WHERE username = '$username' and role='author'";
    if($GLOBALS['conn']->query($sql)){
        $sql = "DELETE FROM users WHERE username = '$username'";
        if ($GLOBALS['conn']->query($sql)){
            echo "user deleted successfully";
        }
        else{
            echo "Error Occured while deleting the User! : " . $GLOBALS['conn']->error;
        }
    }
    else{
        echo "This user doesn't exists!";
    }

?>