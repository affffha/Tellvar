<?php
    session_start();   
    if(!isset($_SESSION['id'])){  
?>
<!-- Fixed-Top -->
<nav class="navbar navbar-expand-sm navbar-dark background-color:rgba(0,0,0,0) fix-top">
    <!-- Content -->
    <div class="container-fluid">
        <!-- Brand:logo -->
        <a href="index.php" class="navbar-brand"><img src="logotellvar.png" alt="LOGO" style="width: 130px;height: 65px;"></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar : Menu -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="navbar nav-link active" data-bs-toggle="tab" href="post.php" class="nav-link active">HOME</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href="blog.php" class="nav-link active">BLOG</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">TRAVEL</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">EAT</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">HOSTEL</a></li>
            </ul>


        <!-- Dropdown : ยังไม่ได้เข้าสู่ระบบ -->
        <ul class="navbar-nav">
            <li class=" nav-item"> <button class="button2" onclick="document.getElementById('id01').style.display='block'">
                <span><i class='fas fa-sign-in-alt'></i></i></span> Login </button></li>
        </ul>
    </div>
</nav>
    <?php }else{?>
    <nav class="navbar navbar-expand-sm navbar-dark background-color:rgba(0,0,0,0) fix-top">
        <!-- Content -->
        <div class="container-fluid">
        <!-- Brand:logo -->
        <a href="index.php" class="navbar-brand"><img src="logotellvar.png" alt="LOGO" style="width: 130px;height: 65px;"></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navbar : Menu -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="navbar nav-link active" data-bs-toggle="tab" href="index.php" class="nav-link active">HOME</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href="blog.php" class="nav-link active">BLOG</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">TRAVEL</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">EAT</a></li>
                <li class="nav-item"><a class="navbar nav-link" data-bs-toggle="tab" href=" " class="nav-link active">HOSTEL</a></li>
            </ul>

        <!-- Dropdown : เข้าสู่ระบบแล้ว -->
        <ul class="nav-item dropdown">
            <a  href="#" class="nav-link dropdown-toggle style-link" data-bs-toggle="dropdown"><i class="bi bi-people-fill"></i> <?php echo $_SESSION["name"]." ".$_SESSION["surname"]?> </a>
                <div class="dropdown-menu" style="right:0">
                    <li><a href="profile.php" class="dropdown-item">PROFILE </a></li>
                    <li><a href="newpost.php" class="dropdown-item">CREATE POST </a></li>
                    <li><a href="logout.php" class="dropdown-item">LOGOUT </a></li>
                </div>
        </ul>
        
        </div>
    </nav>
    <?php } ?>
