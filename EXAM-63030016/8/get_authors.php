<?php 
    $connect = new mysqli('localhost', 'root', '', 'test');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM author";
    $result = $connect->query($sql);

    $list = array();
    while($row = $result->fetch_assoc()) {
        $list[] = $row;
    }
    echo json_encode($list);
?>