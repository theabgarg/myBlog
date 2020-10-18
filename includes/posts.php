<?php
include_once($_SERVER["DOCUMENT_ROOT"]."/conn/conn.php");

    $offset = $_POST['offset'];

    $data[] = '';

    $sql = "SELECT * FROM posts WHERE status = '1' ORDER BY date ASC LIMIT $offset, 10";
    if($result = $GLOBALS['conn']->query($sql)) {
        while ($row = $result -> fetch_assoc()) {
            $data[] = $row;
        }

        $data = json_encode($data);
        print_r($data);
    }

?>