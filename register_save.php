<?php
   session_start();   
   $login= $_POST['signup-login'];
   $passwd= $_POST['signup-pwd'];
   $name= $_POST['name'];
   $surname= $_POST['surname'];
   $phone= $_POST['phone'];
   $gender= $_POST['gender'];
   $d_birth=$_POST['d_birth'];
   $m_birth=$_POST['m_birth'];
   $y_birth=$_POST['y_birth'];
   
        $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
        $passwd= sha1($passwd);
        
        //เช็คล็อคอินมีในดาต้าเบสแล้วยัง 
        $sql="SELECT * FROM user where login='$login'";
        $result=$conn->query($sql);
        
        //เช็คซ้ำ
        if($result->rowCount()==1){
            $_SESSION["add_login"]="error";   //สร้าง add_login สำหรับการแสดงผลซ้ำ
        }else{
            $sql1="INSERT INTO user(login,password,name,surname,phone,gender,d_birth,m_birth,y_birth,role) 
                VALUES('$login','$passwd','$name','$surname','$phone','$gender','$d_birth','$m_birth','$y_birth','m')";
                $conn->exec($sql1);
                $_SESSION["add_login"]="success";
        }
        $conn=null;
        header("location:register.php");
        die();
?>