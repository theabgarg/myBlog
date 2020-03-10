<?php

class Blog{
    private $username;

    function __construct($username) {
        $this->username = $username;
    }
    
    function getPosts(){
        $sql = "SELECT * FROM posts WHERE username = '$this->username' ORDER BY post_date ASC";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            $fetch_data = json_encode($fetch_data);
        }
        elseif($result && $result->num_rows <=0){
            $fetch_data = "No Posts found!!";
            $fetch_data = json_encode($fetch_data);
        }
        else{
            $fetch_data = "an Error occured" . $GLOBALS['conn']->error;
        }
        return $fetch_data;
    }

    function getUnpublishedPosts(){
        $sql = "SELECT * FROM posts WHERE username = '$this->username' AND approval = 0 ORDER BY post_date ASC";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            $fetch_data = json_encode($fetch_data);
        }
        elseif($result && $result->num_rows <=0){
            $fetch_data = "No Posts found!!";
            $fetch_data = json_encode($fetch_data);
        }
        else{
            $fetch_data = "an Error occured" . $GLOBALS['conn']->error;
        }
        return $fetch_data;
    }

    function editPost($id){
        $sql = "SELECT * FROM posts WHERE id='$id' AND username='$this->username'";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
            $fetch_data = $result ->fetch_all(MYSQLI_ASSOC);
            $fetch_data = json_encode($fetch_data);
        }
        elseif($result && $result->num_rows <=0){
            $fetch_data = "No Posts found!!";
            $fetch_data = json_encode($fetch_data);
        }
        else{
            $fetch_data = "an Error occured" . $GLOBALS['conn']->error;
        }
        return $fetch_data;
    }

    function savePost($title, $image, $short_desc, $content, $approval){
        
    }

    function getLatestPosts($offset, $limit){
        $sql = "SELECT * FROM posts ORDER BY post_date ASC";
    }
}


?>