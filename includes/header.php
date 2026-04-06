<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="<?php echo SITE_DESCRIPTION; ?>">
    <meta name="keywords" content="">
    <meta name="author" content="WatNidea">
    <!-- Page Title -->
    <title><?php echo SITE_NAME; ?> | <?php echo SITE_TAGLINE; ?></title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/assets/images/favicon.png">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&amp;display=swap" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="<?php echo BASE_URL; ?>/assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="<?php echo BASE_URL; ?>/assets/css/slicknav.min.css" rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/swiper-bundle.min.css">
    <!-- Font Awesome Icon Css (local fallback) -->
    <link href="<?php echo BASE_URL; ?>/assets/css/all.min.css" rel="stylesheet" media="screen">
    <!-- Font Awesome CDN fallback when local webfonts are missing -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-3xD/drVMxTiFvR5TfQ6IhJgvh+OshzM0/5Bg2bkZxlQ6jZ6fYQU1MbiH8A4m353YJ+2dW1qg6KV+yE9yjFCWSUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Animated Css -->
    <link href="<?php echo BASE_URL; ?>/assets/css/animate.css" rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/magnific-popup.css">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/mousecursor.css">
    <!-- Main Custom Css -->
    <link href="<?php echo BASE_URL; ?>/assets/css/custom.css" rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="<?php echo BASE_URL; ?>/assets/images/loader.svg" alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <!-- Logo Start -->
                    <a class="navbar-brand" href="<?php echo BASE_URL; ?>/index.php?page=home">
                        <img src="<?php echo BASE_URL; ?>/assets/images/watnidea-logo.png" alt="WatNidea" style="width: 190px; height: auto;">
                    </a>
                    <!-- Logo End -->

                    <!-- Main Menu Start -->
                    <div class="collapse navbar-collapse main-menu justify-content-start">
                        <div class="nav-menu-wrapper">
                            <ul class="navbar-nav ms-auto" id="menu">
                                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=home">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=about">About Us</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=services">Services</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=contact">Contact Us</a></li>
                            </ul>
                        </div>

                        <!-- Header Social Box Start -->
                        <div class="header-social-box d-inline-flex">
                            <!-- Header Social Links Start -->
                            <div class="header-social-links">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <!-- Header Social Links End -->

                            <!-- Header Btn Start -->
                            <div class="header-btn">
                                <!-- Toggle Button trigger modal Start -->
                                <button class="btn btn-popup" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="<?php echo BASE_URL; ?>/assets/images/header-btn-dot.svg" alt=""></button>
                                <!-- Toggle Button trigger modal End -->

                                <!-- Header Sidebar Start -->
                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>

                                    <div class="offcanvas-body">
                                        <!-- Header Contact Box Start -->
                                        <div class="header-contact-box">
                                            <div class="icon-box">
                                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-phone-accent.svg" alt="">
                                            </div>
                                            <div class="header-contact-box-content">
                                                <h3>phone</h3>
                                                <p><?php echo SITE_PHONE; ?></p>
                                            </div>
                                        </div>
                                        <!-- Header Contact Box End -->

                                        <!-- Header Contact Box Start -->
                                        <div class="header-contact-box">
                                            <div class="icon-box">
                                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-mail-accent.svg" alt="">
                                            </div>
                                            <div class="header-contact-box-content">
                                                <h3>email</h3>
                                                <p><?php echo SITE_EMAIL; ?></p>
                                            </div>
                                        </div>
                                        <!-- Header Contact Box End -->

                                        <!-- Header Contact Box Start -->
                                        <div class="header-contact-box">
                                            <div class="icon-box">
                                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-location-accent.svg" alt="">
                                            </div>
                                            <div class="header-contact-box-content">
                                                <h3>address</h3>
                                                <p><?php echo SITE_ADDRESS; ?></p>
                                            </div>
                                        </div>
                                        <!-- Header Contact Box End -->

                                        <!-- Header Social Links Start -->
                                        <div class="header-social-links sidebar-social-links">
                                            <h3>stay connected</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                        <!-- Header Social Links End -->
                                    </div>
                                </div>
                                <!-- Header Sidebar End -->
                            </div>
                            <!-- Header Btn End -->
                        </div>
                        <!-- Header Social Box End -->
                    </div>
                    <!-- Main Menu End -->
                    <div class="navbar-toggle"></div>
                </div>
            </nav>
            <div class="responsive-menu"></div>
        </div>
    </header>