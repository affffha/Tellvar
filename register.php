<?php
    session_start();
    if(isset($_SESSION["id"])){
        header("location:index.php");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Link Swiper's CSS -->
    <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- style.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- style login .css-->
    <link href="stylelog.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="styleRegis.css">  
    <link href="stylenav.css" rel="stylesheet">
    <title>Registration</title>

</head>

<body>
   <div class="row"> <?php include "navbar.php";?> 
        <div class="container" >
            <div class="title">Registration</div>
                <div class="content">
                     
                    <?php 
                        if(isset($_SESSION["add_login"]) && $_SESSION["add_login"]=="error"){
                                echo "<div class='overlay'>
                                        <div class='popup'>
                                            <i class='far fa-times-circle fail'></i>
                                            <h2>Registration failed</h2>
                                            <a class='close' href='register.php'>&times;</a>
                                            <div class='content-a'> Duplicate user account name, please try again.</div>
                                            <div class='backH'>
                                                <a class='clink' href='index.php'>Back Home</a>,
                                                <a class='clink' href='register.php'>Try again</a>
                                                </div>
                                        </div>
                                    </div>
                            ";
                            unset($_SESSION["add_login"]);
                            
                        } elseif(isset($_SESSION["add_login"]) && $_SESSION["add_login"]=="success"){ 
                        ?>
                            <div class="overlay">
                                <div class="popup">
                                    <i class="far fa-check-circle pass"></i>
                                    <h2>Registration failed</h2>
                                    <a class="close" href="register.php">&times;</a>
                                        <div class="passHome">
                                            <a class="clink" href="index.php">
                                                Please login
                                            </a>
                                        </div>
                                </div>
                            </div>  
                        <?php unset($_SESSION["add_login"]);
                        $_SESSION["register"]=1;
                        } ?>
                    
                    <form action="register_save.php" method="POST">
                        <div class="user-details">
                            <div class="input-box">
                                <span class="details">Login</span>
                                <input name="signup-login" type="email" placeholder="Enter your User" required>
                            </div>
                            <div class="input-box"></div>
                            <div class="input-box">
                                <span class="details">Password</span>
                                <input name="signup-pwd" type="password" placeholder="Enter your Password" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Confirm-Password</span>
                                <input type="password" placeholder="Enter your Password-confirm" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Name</span>
                                <input name="name" type="text" placeholder="Enter your First Name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Surname</span>
                                <input name="surname" type="text" placeholder="Enter your Second Name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input name="phone" type="text" placeholder="Enter your number" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Date of Birth</span>
                                <select name="d_birth" id="day"></select>
                                <select name="m_birth" id="month"></select>
                                <select name="y_birth" id="year"></select>
                            </div>
                        
                        </div>
                        <div class="gender-details">
                            <input type="radio" name="gender" id="dot-1"value="m">
                            <input type="radio" name="gender" id="dot-2"value="f">
                            <input type="radio" name="gender" id="dot-3"value="u">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="dot-1">
                                    <span class="dot one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="dot-2">
                                    <span class="dot two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="dot-3">
                                    <span class="dot three"></span>
                                    <span class="gender">Gender unspecified</span>
                                </label>
                            </div>
                        </div>
                        <div class="button" >
                            <input type="submit" value="Register" >
                        </div>
                    </form>
                    
                    <div id="id01" class="modal">
                        <div class="modal-content animate" action="/action_page.php">
                            <span onclick="document.getElementById('id01').style.display='none'"
                            class="close" title="Close Modal">&times;</span>
                            
                            <section class="forms-section">
                                <div class="forms">
                                    <!--   Login   -->
                                    <div class="form-wrapper is-active">
                                        <button type="button" class="switcher switcher-login">
                                        <i class='fas fa-sign-in-alt'></i> Login
                                        <span class="underline"></span>
                                        </button>
                                        <form class="form form-login" action="verify.php" method="POST">
                                            <fieldset>
                                                <legend>Please, enter your email and password for login.</legend>
                                                
                                                <?php if(isset($_SESSION["error"])){?>
                                                    <div class="alert">
                                                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                                        <strong> Please check again. </strong>
                                                    </div>
                                                <?php
                                                }else{ ?>
                                                    <label></label>
                                                <?php } ?>
                                                <div class="input-block">
                                                    <label for="login-email">E-mail</label>
                                                    <input id="login-email" type="email" name="login" required>
                                                </div>
                                                    <label></label>
                                                <div class="input-block">
                                                    <label for="login-password">Password</label>
                                                    <input id="login-password" type="password" name="pass" required>
                                                </div>
                                            </fieldset>
                                            <button type="submit" class="btn-login">Login</button>
                                        </form>
                                    </div>

                                    <!--   กรอบหลัง login   -->
                                    <div class="form-wrapper">
                                        <button type="button" class="switcher switcher-signup">
                                         <label ></label>
                                        </button>
                                        <!---->
                                        <div class="form form-signup" >
                                            <fieldset>                                                
                                            <div class="input-block">
                                            <br><br><br><br>
                                            <br><br><br><br>
                                            <br><br><br><br>                                                      
                                            </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>
    <script src="birth.js"></script>
</html>