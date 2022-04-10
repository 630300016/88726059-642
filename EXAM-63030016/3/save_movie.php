<?php
    $connect = new mysqli('localhost', 'root', '', 'test');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
    }

    $sql = "INSERT INTO movies (mv_name, mv_revenue, mv_year)
            VALUES ('".$_POST["mv_name"]."','".$_POST["mv_revenue"]."','".$_POST["mv_year"]."')";

    $query = mysqli_query($connect, $sql);
    mysqli_close($connect);

    header("Location: movie_list.php");
?>