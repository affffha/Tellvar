<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $connect=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
        
        $sql="SELECT * FROM user";

        $result = $connect->query($sql);
        echo "<table border='1' align='center' width='500'>";
        //หัวข้อตาราง
        echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>ชื่อ</td><td>นามสกุล</td><td>phone</td><td>เพศ</td><td>วัน</td><td>เดือน</td><td>ปี</td></tr>";
        
        while($row=$result->fetch()){
            echo "<tr>";
            echo "<td>".$row["id"]."</td> "; 
            echo "<td>".$row["name"]."</td> ";  
            echo "<td>".$row["surname"]."</td> ";
            echo "<td>".$row["phone"]."</td> ";
            echo "<td>".$row["gender"]."</td> ";
            echo "<td>".$row["d_birth"]."</td> ";
            echo "<td>".$row["m_birth"]."</td> ";
            echo "<td>".$row["y_birth"]."</td> ";
            echo "</tr>";
        }
        echo "</table>";
        $connect=null;
        ?>
        
</body>
</html>