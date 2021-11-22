<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Css login -->
    <link href="stylelog.css" rel="stylesheet"> 
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Css Navbar -->
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
<style>
    img {
        border-radius: 50%;
        width:75px;
        height:75px;
        float: left;
    }
    .btn{
        background-color: #598BAF;
        color: aliceblue;
    }
    .btn:hover{
        background-color: #1c2951;
        color: aliceblue;
    }
    .name{
        font-size:20px;
        margin-top:5px;
    }
    .card-header{
        font-size:30px;
        background-color: #598BAF;
        color: aliceblue;
    }
    .card-body{
        font-size:20px;
        color: #111111;
    }
    body{
        background-image: url("https://cdn.pixabay.com/photo/2020/05/11/15/52/canon-5158887_1280.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 100%;
        

    }
</style>
</head>
<body>
<?php include 'navbar.php';?>
    <div class="row">
        <div class="col-3">

        </div>
        <div class="col-6">
            <br>
                <?php 
                    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8", "root", "");
                    $sql="SELECT t1.topic,t1.content,t2.name,t2.surname,t1.post_date FROM post as t1 INNER JOIN user as t2 
                        ON (t1.user_id=t2.id) where t1.id=$_GET[id]";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){
                        echo "<div class='card'>";
                        echo "<div class='card-header'>";
                        echo "<div>".$row['0']."</div>";
                        echo "</div>";
                        echo "<div class='card-body'>";
                        echo "<div>".$row['1']."</div><br><br>";
                        echo "<div class='row'>";
                        echo "<div class='col-6'>";
                        echo "<div>".$row['2']." ".$row['3']."</div>";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        echo "<div class='text-end'>".$row['4']."</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                    $conn=null;
                ?>
                <br>
                <div class='card'>
                    <div class='card-header'>
                        <div>Comment</div>
                    </div>
                    <div class='card-body'>
                        <form method="POST" action="post_save.php">
                        <input type="hidden" name="post_id" value="<?php $_GET['id']; ?>">
                        <div class="row">
                            <div class="col-6 name">
                                <?php                        
                                echo $_SESSION['name'];
                                echo " ";
                                echo $_SESSION['surname'];
                                ?>
                            </div>
                            
                            
                                <div class="col-6 d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button class="btn" type="submit">Submit</button>
                                </div>
                                </div>
                            <br>
                            <div class="mb-3">
                                <div>
                                    <textarea name="comment" class="form-control" placeholder="Comment" style="height:200px"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
                <?php 
                    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8", "root", "");
                    $sql="SELECT t1.comment,t2.name,t2.surname,t1.post_date FROM comment as t1 INNER JOIN user as t2 
                        ON (t1.user_id=t2.id) where t1.id=$_GET[id] ORDER BY t1.post_date";
                    $result=$conn->query($sql);
                    $i=1;
                    while($row=$result->fetch()){
                        echo "<div class='card'>";
                        echo "<div class='card-header'>";
                        echo "<div>Comment NO.".$i."</div>";
                        echo "</div>";
                        echo "<div class='card-body'>";
                        echo "<div>".$row['0']."</div><br><br>";
                        echo "<div class='row'>";
                        echo "<div class='col-6'>";
                        echo "<div>".$row['1']." ".$row['2']."</div>";
                        echo "</div>";
                        echo "<div class='col-6'>";
                        echo "<div class='text-end'>".$row['3']."</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                        $i+=1;
                    }
                    $conn=null;
                ?>
        </div>    
        <div class="col-3">

        </div>
    </div>
</body>
</html>