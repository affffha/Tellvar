<?php
    session_start();
        if($_SESSION["role"]=="a"){
            $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
            $sql="DELETE FROM post where id=$_GET[id]";
            $conn->exec($sql);
            $sql2="DELETE FROM comment where post_id=$_GET[id]";
            $conn->exec($sql2);
            $conn=null;
            header("location:blog.php");
            die();
        }else{
            header("location:blog.php");
            die();
        }
?>