<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script> 
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="stylelog.css"> 
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <title>tellvar TELLVAR</title>
</head>
<body>
    <!-- เรียกใช้ NAVBAR -->
    <?php include 'navbar.php';?>
    
    <!-- Swiper -->
    <div class="swiper mySwiper slibar-fix-top">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/08/40/lake-6632026_1280.jpg" alt="picture">
            <span class="title-text"><p>ภูเขาาาาาาาาาาาาา</p></span>
            <span class="sub-text"><p>งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง</p></span>
            <a href="#" class="button button1"><i class="bi bi-caret-right-fill"></i> Read more <i class="bi bi-caret-left-fill"></i></a>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/08/40/lake-6632026_1280.jpg" alt="picture">
            <span class="title-text"><p>ภูเขาาาาาาาาาาาาา</p></span>
            <span class="sub-text"><p>งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง</p></span>
            <a href="#" class="button button1"><i class="bi bi-caret-right-fill"></i> Read more <i class="bi bi-caret-left-fill"></i></a>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/08/40/lake-6632026_1280.jpg" alt="picture">
            <span class="title-text"><p>ภูเขาาาาาาาาาาาาา</p></span>
            <span class="sub-text"><p>งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง</p></span>
            <a href="#" class="button button1"><i class="bi bi-caret-right-fill"></i> Read more <i class="bi bi-caret-left-fill"></i></a>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/08/40/lake-6632026_1280.jpg" alt="picture">
            <span class="title-text"><p>ภูเขาาาาาาาาาาาาา</p></span>
            <span class="sub-text"><p>งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง</p></span>
            <a href="#" class="button button1"><i class="bi bi-caret-right-fill"></i> Read more <i class="bi bi-caret-left-fill"></i></a>
        </div>
        <div class="swiper-slide">
            <img src="https://cdn.pixabay.com/photo/2021/09/17/08/40/lake-6632026_1280.jpg" alt="picture">
            <span class="title-text"><p>ภูเขาาาาาาาาาาาาา</p></span>
            <span class="sub-text"><p>งงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงงง</p></span>
            <a href="#" class="button button1"><i class="bi bi-caret-right-fill"></i> Read more <i class="bi bi-caret-left-fill"></i></a>
        </div>
      </div>
      <div class="swiper-button-next" style="color:#424242;"></div>
      <div class="swiper-button-prev" style="color:#424242;"></div>
      <div class="swiper-pagination" style="color:#212121;"></div>
    </div>
    
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
        cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "fraction",
        },
        autoplay: {
            delay: 5000,
        },
        loop: true,
        spaceBetween: 0, /* กำหนดให้นาฟบาร์อยู่บนสไลด์ */ 
        mousewheel: true,
        keyboard: true,
        });
    </script>

    <!-- Top Block -->
    <div class="container mt-5"> <!-- ให้มีการเว้น mt-5 : เว้นข้างบน 5 -->
        <h1>9 Top Blog</h1>
        <p>It is the most 9 top blogvthat people comment.</p>
        <div class="row"> <!-- แถว 1 -->
            <div class="col-lg-3"> <!-- หลัก 1 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 2 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div> 
            </div>
            <div class="col-lg-3"> <!-- หลัก 3 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 4 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div>
            </div>
        </div>
        <br>
        <div class="row"> <!-- แถว 2 -->
        <div class="col-lg-3"> <!-- หลัก 1 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 2 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div> 
            </div>
            <div class="col-lg-3"> <!-- หลัก 3 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 4 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div>
            </div>
        </div>
        <br>
        <div class="row"> <!-- แถว 3 -->
        <div class="col-lg-3"> <!-- หลัก 1 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 2 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div> 
            </div>
            <div class="col-lg-3"> <!-- หลัก 3 -->
                <div class="card">
                    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"> <!-- หลัก 4 -->
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">เต่าน้อย</h4>
                        <p class="card-text">เต่าน้อยว่ายน้ำในตั้ลเลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลลล</p>
                        <a href="#" class="btn btn-warning btn-sm">Read more</a>
                    </div>
                    <img class="card-img-bottom" src="https://cdn.pixabay.com/photo/2015/07/27/19/47/turtle-863336_1280.jpg">
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>

    <!-- pop up login -->

  <div id="id01" class="modal">
        <div class="modal-content animate" action="/action_page.php">
            <span onclick="document.getElementById('id01').style.display='none'"
            class="close" title="Close Modal">&times;</span>

            <section class="forms-section">
                <div class="forms">
                    <div class="form-wrapper is-active">
                        <button type="button" class="switcher switcher-login">
                        <i class='fas fa-sign-in-alt'></i> Login
                        <span class="underline"></span>
                        </button>
                        <form class="form form-login">
                            <fieldset>
                                <legend>Please, enter your email and password for login.</legend>
                                <div class="input-block">
                                    <label for="login-email">E-mail</label>
                                    <input id="login-email" type="email" required>
                                </div>
                                <div class="input-block">
                                    <label for="login-password">Password</label>
                                    <input id="login-password" type="password" required>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn-login">Login</button>
                        </form>
                    </div>
                    <div class="form-wrapper">
                        <button type="button" class="switcher switcher-signup">
                        <i class="fas fa-user-edit"></i> Sign Up
                        <span class="underline"></span>
                        </button>
                        <form class="form form-signup">
                            <fieldset>
                                <legend>Please, enter your email, password and password confirmation for sign up.</legend>
                                <div class="input-block">
                                <label for="signup-email">Usename</label>
                                <input id="signup-email" type="text" required>
                                </div>
                                <div class="input-block">
                                <label for="signup-email">E-mail</label>
                                <input id="signup-email" type="email" required>
                                </div>
                                <div class="input-block">
                                <label for="signup-password">Password</label>
                                <input id="signup-password" type="password" required>
                                </div>
                                <div class="input-block">
                                <label for="signup-password-confirm">Confirm password</label>
                                <input id="signup-password-confirm" type="password" required>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn-signup">Continue</button>
                        </form>
                    </div>
                </div>
            </section>
         </div>
    </div>

</body>

<script>
    const switchers = [...document.querySelectorAll('.switcher')]
    switchers.forEach(item => {
        item.addEventListener('click', function() {
            switchers.forEach(item => item.parentElement.classList.remove('is-active'))
            this.parentElement.classList.add('is-active')
        })
    })
</script>

<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
 
</html>