<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title><?php echo $title; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/vendors/linericon/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/vendors/owl-carousel/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/css/magnific-popup.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/vendors/nice-select/css/nice-select.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/vendors/animate-css/animate.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/vendors/flaticon/flaticon.css'); ?>">
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/comodo/css/style.css'); ?>">
</head>

<body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h text-white" href="<?php echo base_url(); ?>">OPPIA</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav justify-content-center">
                            <li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/about'); ?>">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('login'); ?>">Login</a>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Class</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a class="nav-link" href="price.html">SD</a>
                                    <li class="nav-item"><a class="nav-link" href="games.html">SMP</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">SMA</a>
                                    <li class="nav-item"><a class="nav-link" href="elements.html">Ekstra</a>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo base_url('home/register'); ?>">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="nav-item"><a href="<?php echo base_url('register'); ?>" class="primary_btn">Register</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--================Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="home_banner_area">
        <div class="banner_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="home_left_img">
                            <img class="img-fluid" src="<?php echo base_url('assets/comodo/img/banner/home-left.png'); ?>" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner_content">
                            <h2>
                                Belajar Bersama <br>
                                Dari Mana Saja <br>
                                Dan Kapan Saja
                            </h2>
                            <p>
                                Dengan OPPIA Kamu bisa belajar dari mana saja, kapan saja, dan dengan siapa saja. Gabung dengan orang-orang untuk belajar bersama.
                            </p>
                            <div class="d-flex align-items-center">
                                <a id="play-home-video" class="video-play-button" href="https://www.youtube.com/watch?v=vParh5wE-tM">
                                    <span></span>
                                </a>
                                <div class="watch_video text-uppercase">
                                    watch the video
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/comodo/js/jquery-3.2.1.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/popper.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/stellar.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/nice-select/js/jquery.nice-select.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/isotope/imagesloaded.pkgd.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/isotope/isotope-min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/owl-carousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/jquery.ajaxchimp.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/counter-up/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/vendors/counter-up/jquery.counterup.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/mail-script.js'); ?>"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="<?php echo base_url('assets/comodo/js/gmaps.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/comodo/js/theme.js'); ?>"></script>
</body>

</html>