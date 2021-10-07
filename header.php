<?php
    include 'connection.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Virtual Learning Environment</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.css" rel="stylesheet">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <p class="text-uppercase fs-3 fw-bold">virtual learning environment</p>
            </div>
            <div class="social-links d-none d-md-flex align-items-center">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container">
            <nav id="navbar" class="navbar">
                <?php
                if(isset($_SESSION['login_user'])){
                    if($_SESSION['types']=='professor'){
                        ?>
                            <ul>
                                <li><button class="nav-link scrollto active" id="homepage">Homepage</button></li>
                                <li><button class="nav-link scrollto" id="viewstu">View Students</button></li>
                                <li><button class="nav-link scrollto" id="smails">Send Mail</button></li>
                                <li><button class="nav-link scrollto " id="ibox">Inbox</button></li>
                            </ul>
                            <ul class="d-flex justify-content-end">
                                <li><p class="text-danger fw-bold pt-3">Welcome ! <?php echo $_SESSION['login_user'] ?></p></li>
                                <li>
                                    <a href="logout.php" class="nav-link text-home scrollto" id="">logout</a>
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        <?php
                    }
                    else if($_SESSION['types']=='admin'){
                        ?>
                            <ul>
                                <li><button class="nav-link scrollto active" id="homepage">Homepage</button></li>
                                <li><button class="nav-link scrollto" id="instructor_info">Instructor info</button></li>
                                <li><button class="nav-link scrollto" id="viewstu">Student info</button></li>
                                <li><button class="nav-link scrollto" id="viewpar">Parents info</button></li>
                                <li><button class="nav-link scrollto " id="acour">Add Cources</button></li>
                                <li><button class="nav-link scrollto " id="dcour">Delete cources</button></li>
                            </ul>
                            <ul class="d-flex justify-content-end">
                                <li><p class="text-danger fw-bold pt-3">Welcome ! <?php echo $_SESSION['login_user'] ?></p></li>
                                <li>
                                    <a href="logout.php" class="nav-link text-home scrollto" id="">logout</a>
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        <?php
                    }
                    else if($_SESSION['types']=='parents'){
                        ?>
                            <ul>
                                <li><button class="nav-link scrollto active" id="homepage">Homepage</button></li>
                                <li><button class="nav-link scrollto" id="insa">Instructor assigned</button></li>
                                <li><button class="nav-link scrollto" id="courc">Cource Calander</button></li>
                            </ul>
                            <ul class="d-flex justify-content-end">
                                <li><p class="text-danger fw-bold pt-3">Welcome ! <?php echo $_SESSION['login_user'] ?></p></li>
                                <li>
                                    <a href="logout.php" class="nav-link text-home scrollto" id="">logout</a>
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        <?php
                    }
                    else if($_SESSION['types']=='student'){
                        ?>
                            <ul>
                                <li><button class="nav-link scrollto active" id="homepage">Homepage</button></li>
                                <li><button class="nav-link scrollto" id="mpage">MyPage</button></li>
                                <li><button class="nav-link scrollto" id="cregister">Cource Registered</button></li>
                                <li><button class="nav-link scrollto" id="ccal">Cource Calander</button></li>
                                <li><button class="nav-link scrollto" id="noti">Notifications</button></li>
                            </ul>
                            <ul class="d-flex justify-content-end">
                                <li><p class="text-danger fw-bold pt-3">Welcome ! <?php echo $_SESSION['login_user'] ?></p></li>
                                <li>
                                    <a href="logout.php" class="nav-link text-home scrollto" id="">logout</a>
                                </li>
                            </ul>
                            <i class="bi bi-list mobile-nav-toggle"></i>
                        <?php
                    }
                }
                else{
                    ?>
                    <ul>
                        <li><button class="nav-link scrollto active" id="homepage">Homepage</button></li>
                        <li><button class="nav-link scrollto" id="courceo">Course offered</button></li>
                        <li><button class="nav-link scrollto" id="courses">Cource syllabus</button></li>
                        <li><button class="nav-link scrollto " id="payment">Payment</button></li>
                        <li><button class="nav-link scrollto" id="instructor_info">Instructor info</button></li>
                        <li><button class="nav-link scrollto" id="contact">Contact us</button></li>
                    </ul>
                    <ul class="d-flex justify-content-end">
                        <li>
                            <button class="nav-link text-home scrollto" id="login_signup">Login/Sign up</button>
                        </li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                <?php
                }
                ?>
            </nav>
            <!-- .navbar -->
        </div>
    </header>
    <!-- End Header -->
        <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <!-- Template Main JS File -->
  </body>
</html>