<?php
include("conn/conn.php");

$search = $_POST['search'];

$data =[];

$sql = "SELECT * FROM posts WHERE title LIKE '%$search%'";
if($result = $GLOBALS['conn']->query($sql)) {
    while ($row = $result -> fetch_assoc()) {
        $data[] = $row;
    }

    $data = json_encode($data);
    print_r($data);
}
    

?>