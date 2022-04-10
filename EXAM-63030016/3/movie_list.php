<?php 
    $connect = new mysqli('localhost', 'root', '', 'test');

    if ($connect->connect_error) {
        die("Something wrong.: " . $connect->connect_error);
    }

    $sql = "SELECT * FROM movies";
    $result = $connect->query($sql);

    $count = 0;
    while($row = $result->fetch_assoc()) {
        $count += 1;
    }

    $result = $connect->query($sql);
    
    $sum = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR...nsitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
    <p><b>Movie List [<a href="http://localhost/62030312/3/new_movie.html">+</a>]</b></p>

    <p>พบ <?php echo $count; ?> เรื่อง</p>

    <table border="1">
        <thead>
            <tr>
                <th>Year</th>
                <th>ภาพยนต์</th>
                <th>รายได้รวม</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['mv_year']; ?></td>
                    <td><?php echo $row['mv_name'];?></td>
                    <td style="text-align:right"><?php echo number_format($row['mv_revenue']); ?></td>
                    <?php $sum += $row['mv_revenue']; ?>
                </tr>
            <?php endwhile ?>
            <tr>
                <td colspan="2" style="text-align:center">รวม</td>
                <td style="text-align:right"><?php echo number_format($sum); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>