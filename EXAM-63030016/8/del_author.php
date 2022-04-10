<?php 
    $connect = new mysqli('localhost', 'root', '', 'test');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
    }

    $sql = "DELETE FROM author WHERE authorID='".$_POST["author_id"]."'";

    $query = mysqli_query($connect, $sql);
    mysqli_close($connect);
?>