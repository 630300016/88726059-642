<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR...nsitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
    <table border="1">
        <tr>
            <th colspan="5">สูตรคูณแม่<?php ehco $_POST['number'];?></th>
        </tr>
        <?php
        for( $i=1; $i=$_POST['count']; $i++){
            ehco'<tr>';
            ehco"<td style='text-align:center'>".($POST['number']."</td>";
            ehco"<td style='text-align:center'>x</td>";
            echo "<td style='text-align:center'>".( $i )."</td>";
            echo "<td style='text-align:center'>=</td>";
            echo "<td style='text-align:center'>".( $_POST['number'] * $i )."</td>";
            echo '</tr>';
        }
    ?>
    </table>
</body> 
</html>