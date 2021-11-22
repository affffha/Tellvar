
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
    <link href="styleindex.css" rel="stylesheet">
    <link href="stylenav.css" rel="stylesheet">
    <title>Document</title>
</head>
<style>
    h2{
        color:#598BAF
    }
    .post{
        height:100px;
        color:#598BAF;
        z-index: initial;
        position:relative;
    }

    .post:hover{
        background-color: #598BAF;
        color: aliceblue;
    }

    

    .btn{
        z-index: 3;
        position:relative;
    }

    

    .stretched-link{
        color:#598BAF;
        background-color: transparent;
        text-decoration: none;
        font-size:20px; 
        
    }
    a:hover{
        color: aliceblue;
        
        
    }
    body{
        background-image: url("https://cdn.pixabay.com/photo/2020/05/11/15/52/canon-5158887_1280.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 100%;

    }
    

</style>
<script>
        function myFunction(){
            let r=confirm("Delete this blog?");
            return r;
        }
    </script>
<body>
    <?php include 'navbar.php';?>
    <br>
    <div class="row">
        <div class="col-1">

        </div>
        <div class="col-10">
            <div class="row">
                <div class="col-4">
                    <div class='card'>
                        <div class='card-body'>
                            <h2 class=text-center><i class="bi bi-truck"></i> TRAVEL</h2>
                        </div>
                    </div>
                    <br>
                    <?php
                    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
                    $category=1;
                    $sql="SELECT t3.name,t1.id,t1.topic,t2.name,t2.surname,t1.post_date FROM post as t1 INNER JOIN user as t2 ON (t1.user_id=t2.id)
                    INNER JOIN category as t3 ON (t1.category=t3.id) WHERE t1.category=$category ORDER BY t1.post_date DESC";           
                    $result=$conn->query($sql);

                    while($row=$result->fetch())
                    {
                    
                    echo "<div class='card post'>";
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    echo "<div class='col-10'>";
                    echo "<div><a class='stretched-link ;' href=post.php?id=".$row[ '1']."> ".$row['2']."</a></div> ";
                    echo "</div>";
                    echo "<div class='col-2'>";
                    if($_SESSION['role']=='a'){
                        echo "<a class='btn btn-danger btn-sm' href=delete.php?id=".$row['1'].
                        " onclick='return myFunction();'>Delete</a>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                    echo "<div class='row'>";
                    echo "<div class='col-6'>
                            <div class='text-start'>".$row['3']." ".$row['4']."</div>";
                    echo "</div>";
                    echo "<div class='col-6'>
                            <div class='text-end'>".$row['5']."</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                    
                    }
                    
                    $conn=null;
                    ?>
                    
                </div>
                <div class="col-4">
                    <div class='card'>
                        <div class='card-body'>
                            <h2 class=text-center><i class="bi bi-shop"></i> EAT</h2>
                        </div>
                    </div>
                    <br>
                    <?php
                    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
                    $category=2;
                    $sql="SELECT t3.name,t1.id,t1.topic,t2.name,t2.surname,t1.post_date FROM post as t1 INNER JOIN user as t2 ON (t1.user_id=t2.id)
                    INNER JOIN category as t3 ON (t1.category=t3.id) WHERE t1.category=$category ORDER BY t1.post_date DESC";           
                    $result=$conn->query($sql);

                    while($row=$result->fetch())
                    {
                    
                    echo "<div class='card post'>";
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    echo "<div class='col-10'>";
                    echo "<p><a class='stretched-link' href=post.php?id=".$row[ '1']."> ".$row['2']."</a></p> ";
                    echo "</div>";
                    echo "<div class='col-2'>";
                    if($_SESSION['role']=='a'){
                        echo "<a class='btn btn-danger btn-sm' href=delete.php?id=".$row['1'].
                        " onclick='return myFunction();'>Delete</a>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-6'>
                            <p class='text-start'>".$row['3']." ".$row['4']."</p>";
                    echo "</div>";
                    echo "<div class='col-6'>
                            <p class='text-end'>".$row['5']."</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                    
                    }
                    $conn=null;
                    ?>
                </div>
                <div class="col-4">
                    <div class='card'>
                        <div class='card-body'>
                            <h2 class=text-center><i class="bi bi-building"></i> HOSTEL</h2>
                        </div>
                    </div>
                    <br>
                    <?php
                    $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
                    $category=3;
                    $sql="SELECT t3.name,t1.id,t1.topic,t2.name,t2.surname,t1.post_date FROM post as t1 INNER JOIN user as t2 ON (t1.user_id=t2.id)
                    INNER JOIN category as t3 ON (t1.category=t3.id) WHERE t1.category=$category ORDER BY t1.post_date DESC";           
                    $result=$conn->query($sql);

                    while($row=$result->fetch())
                    {
                    
                    echo "<div class='card post'>";
                    echo "<div class='card-body'>";
                    echo "<div class='row'>";
                    echo "<div class='col-10'>";
                    echo "<p><a class='stretched-link' href=post.php?id=".$row[ '1']."> ".$row['2']."</a></p> ";
                    echo "</div>";
                    echo "<div class='col-2'>";
                    if($_SESSION['role']=='a'){
                        echo "<a class='btn btn-danger btn-sm' href=delete.php?id=".$row['1'].
                        " onclick='return myFunction();'>Delete</a>";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "<div class='row'>";
                    echo "<div class='col-6'>
                            <p class='text-start'>".$row['3']." ".$row['4']."</p>";
                    echo "</div>";
                    echo "<div class='col-6'>
                            <p class='text-end'>".$row['5']."</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "<br>";
                    
                    }
                    $conn=null;
                    ?>
                </div>
            </div>
        </div>
        <div class="col-1">

        </div>
    </div>
</body>
</html>