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
    <style>/* Navbar Base */
/* --- Modern Navigation Styling --- */

/* 1. Main Nav Link Enhancements */
.nav-item > a {
    position: relative;
    color: #ffffff !important;
    font-weight: 500;
    padding: 10px 15px !important;
    transition: color 0.3s ease;
    text-transform: uppercase;
    font-size: 14px;
    letter-spacing: 0.5px;
}

.nav-item > a:hover {
    color: #ba2c27 !important; /* Neon Green highlight */
}

/* 2. Sleek Animated Underline */
.nav-item > a::before {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0px;
    left: 50%;
    transform: translateX(-50%);
    background: #ba2c27;
    transition: all 0.4s cubic-bezier(0.68, -0.55, 0.27, 1.55);
}

.nav-item > a:hover::before {
    width: 70%;
}

/* 3. The "Impressive" Dropdown (Submenu) */
.has-submenu {
    position: relative;
}

.submenu {
    position: absolute;
    top: 120%; /* Space for entrance animation */
    left: 0;
    min-width: 250px;
    background: rgba(20, 20, 20, 0.95); /* Deep dark background */
    backdrop-filter: blur(10px); /* Glassmorphism effect */
    border-top: 3px solid #ba2c27;
    border-radius: 0 0 8px 8px;
    padding: 15px 0;
    list-style: none;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease-in-out;
    box-shadow: 0 15px 35px rgba(0,0,0,0.5);
    z-index: 999;
}

.has-submenu:hover .submenu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    top: 100%;
}

/* 4. Submenu Links Styling */
.submenu li a {
    display: block;
    padding: 12px 25px;
    color: #e0e0e0;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
    border-left: 0 solid #ba2c27;
}

.submenu li a:hover {
    background: rgba(173, 255, 47, 0.1); /* Subtle green glow */
    color: #ba2c27;
    padding-left: 35px; /* Sliding effect on hover */
    border-left: 4px solid #ba2c27;
}

/* 5. Icons & Arrows */
.fa-angle-down {
    font-size: 12px;
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.has-submenu:hover .fa-angle-down {
    transform: rotate(180deg);
}

/* 6. Header Sticky Polish */
.header-sticky {
    background: rgba(0, 0, 0, 0.8) !important;
    backdrop-filter: blur(15px);
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}</style>
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

            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=home">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=about">About Us</a>
            </li>
<li class="nav-item has-submenu">
    <a class="nav-link" href="#">Services <i class="fa fa-angle-down"></i></a>

    <ul class="submenu">
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=aura_Architecture">Aura Architecture</a></li>
        <!-- <li><a href="<?php echo BASE_URL; ?>/index.php?page=brandIdentity">Brand Identity</a></li> -->
        <!-- <li><a href="<?php echo BASE_URL; ?>/index.php?page=rebranding">Rebranding</a></li> -->
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=the_digital_hq">The Digital HQ</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=seoServices">SEO Services</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=the_eco_system">The Eco System</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=the_hype_engine">The Hype Engine</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=growth_alchemy">Growth Alchemy</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=kinetic_studio">Kinetic Studio</a></li>
        <li><a href="<?php echo BASE_URL; ?>/index.php?page=synthetic_cinema">Synthetic Cinema </a></li>
    </ul>
</li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/index.php?page=contact">Contact Us</a>
            </li>

        </ul>
    </div>
</div>
<!-- Main Menu End -->

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
   
            <script src="<?php echo BASE_URL; ?>/assets/js/bootstrap.bundle.min.js">
                // Toggle dropdown on mobile
document.querySelectorAll('.nav-item > a').forEach(item => {
    item.addEventListener('click', function(e) {
        if (window.innerWidth < 991) {
            e.preventDefault();
            this.parentElement.classList.toggle('active');
        }
    });
});
            </script>
