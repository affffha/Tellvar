<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:index.php");
    die();
}

$category=$_POST['category'];
$topic=$_POST['topic'];
$content=$_POST['content'];
$image=$_POST['image']['name'];
$username=$_SESSION['user_id'];


$conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
$sql="INSERT INTO post (topic,content,post_date,category,user_id,image) 
VALUES('$topic','$content',NOW(),'$category','$username','$image')";
$conn->exec($sql);
$conn=null;
header("location:index.php");
die();
?>