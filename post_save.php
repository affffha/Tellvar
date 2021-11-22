<?php
    session_start();
    $comment = $_POST['comment'];
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8", "root", "");

    $sql = "INSERT INTO comment (comment, post_date, user_id, post_id)
            VALUES ('$comment', NOW(), '$user_id', '$post_id')";

    $conn->exec($sql);
    header("location:post.php?id=$post_id");
?>