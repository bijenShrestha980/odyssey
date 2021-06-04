<!-- Start auth -->

<?php
session_start();
if (isset($_POST['submit'])) {
    $connection = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($connection, "db");
    $query = "select * from details where email = '$_POST[email]'";
    $query_run = mysqli_query($connection, $query);
    while ($row = mysqli_fetch_assoc($query_run)) {
        if ($row['email'] == $_POST['email']) {
            if ($row['password'] == $_POST['password']) {
                $_SESSION['email'] =  $row['email'];
                header("Location: index.php");
            } else {
                ?>
                <span class="error-msg">Wrong Password !!</span>
                <?php
            }
        } else {
            ?>
            <span class="error-msg">Wrong Email !!</span>
            <?php
        }
    }
}
?>

<!-- Close auth -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Odyssey Nepal - LogIn Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="apple-touch-icon" href="assets/img/apple-icon.png"> -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo.png">
    <!-- Load Require CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font CSS -->
    <link href="assets/css/boxicon.min.css" rel="stylesheet">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet"> -->
    <!-- Load Tempalte CSS -->
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!--
    
TemplateMo 561 Purple Buzz

https://templatemo.com/tm-561-purple-buzz

-->
</head>

<body>
    <!-- Header -->
    <nav id="main_nav" class="navbar navbar-expand-lg navbar-light bg-white shadow">
        <div class="container d-flex justify-content-between align-items-center">
            <a class="navbar-brand h1" href="index.php">
                <!-- <i class='bx bx-buildings bx-sm text-dark'></i> -->
                <img class="nav_logo" src="./assets/img/logo.png">
                <span class="odyssey h4">Odyssey</span> <span class="odyssey h4">Nepal</span>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler-success" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="navbar-toggler-success">
                <div class="flex-fill mx-xl-5 mb-2">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-xl-5 text-center text-dark">
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="work.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="our-team.php">Our Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="departments.php">Departments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn-outline-primary rounded-pill px-3" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <a class="nav-link" href="#"><i class='bx bx-bell bx-sm bx-tada-hover text-primary'></i></a>
                    <div class="dropdown">
                        <a class="nav-link" href="#"><i class='bx bx-cog bx-sm text-primary'></i></a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="signup.php" class="nav-link btn-outline-primary rounded-pill px-3"> Sign Up</a>
                                </li>
                                <li>
                                    <a href="login.php" class="nav-link btn-outline-primary rounded-pill px-3"> Login</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a class="nav-link" href="#"><i class='bx bx-user-circle bx-sm text-primary'></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Header -->

    <!-- Start Login -->
    <div class="container-lg">
        <div class="col-md-12 m-auto text-center py-5">
            <h1 class="pricing-header h2 semi-bold-600">Login</h1>
            <p class="pricing-footer">
                Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut facilisis.
            </p>
        </div>
    </div>

    <section class="container py-3">
        <!-- Start Login Form -->
        <? php ?>
        <form action="" class="contact-form row" method="POST" role="form">

            <div class="row pb-4">
                <div class="col-lg-12">
                    <div class="form-floating mb-4">
                        <input type="email" class="form-control form-control-lg light-300" id="floatingemail" name="email" placeholder="Email" required>
                        <label for="floatingemail light-300">Email</label>
                    </div>
                </div><!-- End Input Email -->

                <div class="col-lg-6 mb-6">
                    <div class="form-floating">
                        <i class='bx bxs-hide' onclick="seePassword()"></i>
                        <input type="password" class="form-control form-control-lg light-300" id="floatingpassword" name="password" placeholder="Password" required>
                        <label for="floatingpassword light-300">Password</label>
                    </div>
                </div><!-- End Input Password -->
            </div>
            <div class="col-md-12 col-12 m-auto text-end">
                <button type="submit" class="btn btn-secondary rounded-pill px-md-5 px-4 py-2 radius-0 text-light light-300">Login</button>
            </div>

        </form>
        <? php ?>
        <!-- End Login Form -->
    </div>
</section>


<!-- Close Login -->


<!-- Start Footer -->
<footer class="bg-secondary pt-4">
    <div class="container">
        <div class="row py-4">

            <div class="col-lg-4 col-12 align-left">
                <a class="navbar-brand" href="index.php">
                    <!-- <i class='bx bx-buildings bx-sm text-light'></i> -->
                    <img class="nav_logo" src="./assets/img/logo.png" style="background: #fff;border: 1px solid white; border-radius: 40px;">
                    <span class="text-light h5">Odyssey</span> <span class="text-light h5 semi-bold-600">Nepal</span>
                </a>
                <p class="text-light my-lg-4 my-2">
                    You can connect us through these social sites.
                </p>
                <ul class="list-inline footer-icons light-300">
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.facebook.com/odysseyynepal">
                            <i class='bx bxl-facebook-square bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://twitter.com/NepalOdyssey/status/1400059472026820609?ref_src=twsrc%5Etfw%7Ctwcamp%5Eembeddedtimeline%7Ctwterm%5Eprofile%3ANepalOdyssey%7Ctwgr%5EeyJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2hvcml6b25fdHdlZXRfZW1iZWRfOTU1NSI6eyJidWNrZXQiOiJodGUiLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3R3ZWV0X2VtYmVkX2NsaWNrYWJpbGl0eV8xMjEwMiI6eyJidWNrZXQiOiJjb250cm9sIiwidmVyc2lvbiI6bnVsbH19%7Ctwcon%5Etimelinechrome&ref_url=https%3A%2F%2Flocalhost%2Fodyssey%2Findex.php">
                            <i class='bx bxl-twitter bx-md'></i>
                        </a>
                    </li>
                    <li class="list-inline-item m-0">
                        <a class="text-light" target="_blank" href="https://www.instagram.com/odysseyynepal/?fbclid=IwAR0lltjzHYv6y_BKoWVEVWKK5A217zo3RT-B5B8EX99M890VWSRqLKUnaV4">
                            <i class='bx bxl-instagram bx-md'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-5 col-md-4 my-sm-0 mt-4">
                <h3 class="h4 pb-lg-3 text-light light-300">Quick Links</h3>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light" href="index.php">Home</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="about.php">About Us</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="work.php">Gallery</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="our-team.php">Our Team</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="departments.php">Departments</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bxs-chevron-right bx-xs'></i><a class="text-decoration-none text-light py-1" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 my-sm-0 mt-4">
                    <h2 class="h4 pb-lg-3 text-light light-300">For Contact</h2>
                    <ul class="list-unstyled text-light light-300">
                        <li class="pb-2">
                            <i class='bx-fw bx bx-phone bx-xs'></i><a class="text-decoration-none text-light py-1" href="tel:+977 980-8429293">+977 980-8429293</a>
                        </li>
                        <li class="pb-2">
                            <i class='bx-fw bx bx-mail-send bx-xs'></i><a class="text-decoration-none text-light py-1" href="mailto:odysseynepal@outlook.com">odysseynepal@outlook.com</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <div class="w-100 bg-primary py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-start text-center text-light light-300">
                            © Copyright 2021 Odyssey Nepal. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <p class="text-lg-end text-center text-light light-300">
                            Designed by <a rel="sponsored" class="text-decoration-none text-light" href="https://templatemo.com/" target="_blank"><strong>Bijen Shrestha</strong></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->


    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Load jQuery require for isotope -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Isotope -->
    <script src="assets/js/isotope.pkgd.js"></script>
    <!-- Page Script -->
    <script>
        $(window).load(function() {
            // init Isotope
            var $projects = $('.projects').isotope({
                itemSelector: '.project',
                layoutMode: 'fitRows'
            });
            $(".filter-btn").click(function() {
                var data_filter = $(this).attr("data-filter");
                $projects.isotope({
                    filter: data_filter
                });
                $(".filter-btn").removeClass("active");
                $(".filter-btn").removeClass("shadow");
                $(this).addClass("active");
                $(this).addClass("shadow");
                return false;
            });
        });

        function seePassword() {
            var x = document.getElementById("floatingpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
    <!-- Templatemo -->
    <script src="assets/js/templatemo.js"></script>
    <!-- Custom -->
    <script src="assets/js/custom.js"></script>




</body>

</html>