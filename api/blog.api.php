<?php

class Blog{
    private $title;
    private $username;
    private $image;
    private $content;
    private $published;

    function getPosts($username){
        $sql = "SELECT * FROM posts WHERE username = '$this->username'";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $result ->fetch_all(MYSQLI_ASSOC);
        }
    }
}


?>