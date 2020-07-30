<?php
    include_once('conn/conn.php');
    $id = $_POST['id'];
    $sql = "SELECT * FROM comments WHERE post_id='$id'";
    if($result = $GLOBALS['conn']->query($sql)) {
        while ($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }

        $data = json_encode($data);
        print_r($data);
    }
?>