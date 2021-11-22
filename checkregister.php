<?php
    $check = $_GET["check"];
   
    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");

    if($check == 1){
        $login= $_POST['signup-login'];
        $sql="SELECT * FROM user where login='$login'";
        $result=$conn->query($sql);

        if(empty($login)){
            echo "<span style='color: red'><i class='far fa-times-circle fail'></i></span>";
        }else if($result->rowCount()==1){
            echo "<span style='color: red'><i class='far fa-times-circle fail'></i>User already associated.</span>";
        }else{
            echo "<span style='color: green;'><i class='far fa-check-circle pass'></i></span>";
        }
    }

    if($check== 2){
         if(empty($_POST['signup-pwd']) || empty($_POST['confirm-pwd'])){
            echo "<span style='color: red'><i class='far fa-times-circle fail'></i></span>";
         }else if($_POST['signup-pwd'] != $_POST['confirm-pwd']){
            echo "<span style='color: red'><i class='far fa-times-circle fail'></i>do not math.</span>";        
        }else{
            echo "<span style='color: green;'><i class='far fa-check-circle pass'></i></span>";
        }
    }


    $conn = null;
?>