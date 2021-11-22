<?php
    if(isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>
<?php
    if(isset($_GET['name'])){
        $category=$_GET['name'];
        $textcategory=$_GET['name'];
    }else{
        $category='Categories';
        $textcategory='Please should categories';
    }
?>
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
    <link href="style.css" rel="stylesheet"><title>Document</title>
</head>

<style>
    .card{
        margin-top: 80px;
        margin-left:150px;
        width: 1000px;
        height: 550px;
    }
    .btn1{
        width: 216px;
        height: 40px;
        background-color: #757575;
        color: aliceblue;
    }
    
    .btn1:hover{
        background-color: #424242;
        color: aliceblue;
    }
    .btn2{
        width: 130px;
        
        background-color: #598BAF;
        color: aliceblue;
    }
    .btn2:hover{
        background-color: #1c2951;
        color: aliceblue;
    }
    .dropdown-item{
        width: 216px;
    }
    .dropdown-item:hover{
        background-color: #eeee;
        color: #424242;
    }
    .text1{
        margin-top: 50px;
        margin-bottom: 40px;
        color: #598BAF
    }
    div.blackground{
        background-image: url("https://cdn.pixabay.com/photo/2020/05/11/15/52/canon-5158887_1280.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 100%;
        

    }
</style>

<body>
<div class=blackground>
<?php include 'navbar.php';?>
<form action="newpost_save.php" method="POST">
<div class="row">
    <div class="col-2">

    </div>
<div class="card col-8">
<div class="card-body">

<div class="mb-3">
    <h1 class="text-center text1"><i class="bi bi-chat-right-text-fill"></i> Create Blog</h1>
</div>
<div class="mb-3">
    <div>
        <input type="text" name="topic" class="form-control" placeholder="Topic">
    </div>
</div>
<div class="mb-3">
    <div>
        <textarea name="content" class="form-control" placeholder="Content" style="height: 100px"></textarea>
    </div>
</div>
<div class="mb-3">
    <div>
        <input name="image" class="form-control" type="file" id="image" multiple>
    </div>
</div>
<div class="mb-3">
    
    <select name="category" class="form-select">
        <option value="" disabled selected hidden>Please Choose...</option>
        <?php
            $conn=new PDO("mysql:host=localhost;dbname=tellvar;charset=utf8","root","");
            $sql="SELECT * FROM category";
            foreach($conn->query($sql) as $row){
                echo "<option value=" .$row['id'].">".$row['name']."</option>";
            }
            $conn=null
        ?>
    </select>
    
</div>
<div class="mb-3">
    <center>
        <br>
        <button class="btn btn2 btn-lg" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89.471-1.178-1.178.471L5.93 9.363l.338.215a.5.5 0 0 1 .154.154l.215.338 7.494-7.494Z"/>
            </svg> Post</button>
    </center>
</div>
</div>
</div>
<div class="col-2">
    
</div>
</div>
</form>
</div>
</body>
</html>