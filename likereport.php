<?php
include_once('conn/conn.php');
    $function = $_POST['function'];
    $ip = $_POST['ip'];
    $post_id = $_POST['id'];
    if($function == 'like'){
        $sql = "SELECT * FROM likes WHERE post_id='$post_id' AND ip='$ip'";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
        }
        elseif ($result && $result->num_rows == 0) {
            $sql2 = "INSERT INTO likes(post_id, ip) VALUES('$post_id', '$ip')";
            $result = $GLOBALS['conn']->query($sql2);
        }
    }
    elseif ($function=='report') {
        // $issue = $_POST['issue'];
        $sql = "SELECT * FROM report WHERE post_id='$post_id' AND ip='$ip'";
        $result = $GLOBALS['conn']->query($sql);
        if($result && $result->num_rows > 0){
        }
        elseif ($result && $result->num_rows == 0) {
            $sql2 = "INSERT INTO report(post_id, ip) VALUES('$post_id', '$ip')";
            $result = $GLOBALS['conn']->query($sql2);
        }
    }
?>