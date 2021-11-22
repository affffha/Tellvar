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

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 

    <!-- Icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
   
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
                                <!-- เพิ่ม span id-->
                                <span class="details">Login <span id="chekregis"></span> </span>
                                <input name="signup-login" type="email" placeholder="Enter your User"  onblur="checkuser(this.value)" required>
                                
                            </div>
                            <div class="input-box"></div>

                            <!-- เพิ่ม span id   icon class-->
                            <div class="input-box">
                                <span class="details">Password <span id="check-pwd"> </span></span>
                                <input type="password" id="signup-pwd" name="signup-pwd" placeholder="Enter your Password" onblur="checkpwd(this.value)" required>
                                <i class="toggle-password fa fa-fw fa-eye-slash"></i>
                            </div>

                            <!-- เพิ่ม span id-->
                            <div class="input-box">
                                <span class="details">Confirm-Password<span id="check-pwd1"></span></span>
                                <input type="password" id="confirm-pwd" name="confirm-pwd" placeholder="Enter your Password-confirm" onblur="checkpwd(this.value)" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Name</span>
                                <input name="name" type="text" placeholder="Enter your First Name" required>
                            </div>
                            <div class="input-box">
                                <span class="details">Surname</span>
                                <input name="surname" type="text" placeholder="Enter your Second Name" required>
                            </div>

                            <!-- เพิ่ม maxlength="20" class="numbers"  -->
                            <div class="input-box">
                                <span class="details">Phone Number</span>
                                <input name="phone" type="text" placeholder="Enter your number" maxlength="10" class="numbers" required>
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
                            <input id="submit" type="submit" value="Register">
                        </div>
                    </form>


                    <!-- Login -->
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

                                                    <!--เพิ่ม  #i  เพิ่ม ใน index ด้วย-->
                                                <div class="input-block">
                                                    <label for="login-password">Password</label>
                                                    <input id="login-password" type="password" name="pass" required>
                                                    <i class="toggle-password-log fa fa-fw fa-eye-slash toggle-password-log"></i>
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        /* โชว์รหัสผ่าน */
        function password_show_hide(){
            let x=document.getElementById("password");
            let show_eye=document.getElementById("show_eye");
            let hide_eye=document.getElementById("hide_eye");
            hide_eye.classList.remove("d-none");
            if(x.type=="password"){
                x.type="text";
                show_eye.style.display="none";
                hide_eye.style.display="block";
            }else{
                x.type="password";
                show_eye.style.display="block";
                hide_eye.style.display="none";
            }
        }

        /* เช็ค login ซ้ำ */
        function checkuser(val) {
            $.ajax({
                type: 'POST',
                url: 'checkregister.php?check=1',
                data: 'signup-login='+val,
                success: function(data) {
                    $('#chekregis').html(data);
                }
            });
        }

        /* เช็ค รหัสผ่านตรงกัน */
        function checkpwd(val) {
            $.ajax({
                type: 'POST',
                url: 'checkregister.php?check=2', 
                data :{'signup-pwd':$("#signup-pwd").val() ,'confirm-pwd': $("#confirm-pwd").val()},
                success: function(data) {
                    $('#check-pwd').html(data);
                    $('#check-pwd1').html(data);
                }
            });
        }

        /* ใส่ได้เฉพาะตัวเลข  */
        $("input.numbers").keypress(function(event) {
            return /\d/.test(String.fromCharCode(event.keyCode));
        });
    </script>

      <!-- ดู รหัสผ่าน ทั้งสองช่อง-->
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");  /* ช่องที่ 1  */
            input1 =$("#confirm-pwd").parent().find("input");  /* ช่องที่ 2 */
            if (input.attr("type") == "password" || input1.attr("type") == "password" ) {
                input.attr("type", "text");
                input1.attr("type", "text");
            } else {
                input.attr("type", "password");
                input1.attr("type", "password");
            }
        });
        

        /* ดูรหัส login */
        $(".toggle-password-log").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
    <script src="birth.js"></script>

</body>
</html>