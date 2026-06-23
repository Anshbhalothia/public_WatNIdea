<?php include __DIR__ . '/includes/header.php'; ?>
<!-- home Page Content -->

<!-- Header End -->

<!-- ================= HERO SLIDER START ================= -->
<style>
/* Reset theme interference */
.hero-wrapper::before,
.hero-wrapper::after,
.hero-slider::before,
.hero-slider::after,
.hero-track::before,
.hero-track::after,
.hero-slide::before,
.hero-slide::after,
.hero::before,
.hero::after {
    content: none !important;
    display: none !important;
}

/* Wrapper */
.hero-wrapper {
    position: relative;
    overflow: hidden;
    background: #111;
}

/* VIDEO BACKGROUND */
.video-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

.video-bg video {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    opacity: 1 !important;
    filter: none !important;
}

/* Dark overlay */
.video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
}

/* Slider */
.hero-slider {
    position: relative;
    z-index: 2;
    overflow: hidden;
}

.hero-track {
    display: flex;
    transition: transform 1s ease-in-out;
}

.hero-slide {
    min-width: 100%;
}

/* Hero content */
.hero {
    padding: 100px 0;
    color: #fff !important;
    position: relative;
    z-index: 3;
}

.hero .row {
    align-items: center;
}

.hero h1 {
    font-size: 48px;
    line-height: 1.3;
    color: #fff !important;
    opacity: 1 !important;
    filter: none !important;
}

.hero h1 span {
    color: #ba2c27 !important;
}

.hero p {
    margin: 20px 0;
    color: #ddd !important;
    opacity: 1 !important;
    filter: none !important;
}

.btn-hero {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(255, 255, 255, 0.15);
    color: #fff !important;
    padding: 12px 25px;
    border-radius: 30px;
    text-decoration: none;
    border: 1px solid rgba(255, 255, 255, 0.3);
    backdrop-filter: blur(4px);
    opacity: 1 !important;
    filter: none !important;
}

.btn-hero:hover {
    background: rgba(255, 255, 255, 0.25);
    color: #fff !important;
}

/* Hero image */
.hero-img {
    position: relative;
    z-index: 3;
}

.hero-img img {
    width: 100%;
    height: auto;
    display: block;
    opacity: 1 !important;
    filter: none !important;
}

/* Dots */
.slider-dots {
    text-align: center;
    padding: 20px 0;
    position: relative;
    z-index: 3;
}

.dot {
    height: 12px;
    width: 12px;
    margin: 5px;
    display: inline-block;
    background: rgba(255, 255, 255, 0.35);
    border-radius: 50%;
    cursor: pointer;
    transition: background 0.3s;
}

.dot.active {
    background: #ba2c27;
}

/* Mobile */
@media (max-width: 991px) {
    .hero {
        text-align: center;
        padding: 60px 0;
    }
    .hero-img {
        margin-top: 30px;
    }
}
</style>

<div class="hero-wrapper">

    <!-- VIDEO BACKGROUND -->
    <div class="video-bg">
        <video autoplay muted loop playsinline>
            <source src="<?php echo BASE_URL; ?>/assets/images/hero-bg.mp4" type="video/mp4">
        </video>
    </div>

    <!-- DARK OVERLAY -->
    <div class="video-overlay"></div>

    <!-- SLIDER -->
    <div class="hero-slider">
        <div class="hero-track">

            <!-- Slide 1 -->
            <div class="hero-slide">
                <div class="hero container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Grow your brand with <span>WatNidea</span></h1>
                            <p>Digital marketing agency that turns ideas into impact.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-hero">
                                Get Started
                            </a>
                        </div>
                        <div class="col-lg-6 hero-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/hero-image.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="hero-slide">
                <div class="hero container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Boost your <span>Business</span></h1>
                            <p>High converting ad campaigns that drive results.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-hero">
                                Get Started
                            </a>
                        </div>
                        <div class="col-lg-6 hero-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/hero-image.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="hero-slide">
                <div class="hero container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Scale with <span>Strategy</span></h1>
                            <p>Grow faster with SEO & performance marketing.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-hero">
                                Get Started
                            </a>
                        </div>
                        <div class="col-lg-6 hero-img">
                            <img src="<?php echo BASE_URL; ?>/assets/images/hero-image.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- DOTS -->
    <div class="slider-dots">
        <span class="dot active" data-index="0"></span>
        <span class="dot" data-index="1"></span>
        <span class="dot" data-index="2"></span>
    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const track = document.querySelector(".hero-track");
    const dots = document.querySelectorAll(".dot");

    let index = 0;
    let interval;

    function updateSlider() {
        track.style.transform = "translateX(" + (-index * 100) + "%)";
        dots.forEach(dot => dot.classList.remove("active"));
        dots[index].classList.add("active");
    }

    function startAutoSlide() {
        interval = setInterval(() => {
            index = (index + 1) % dots.length;
            updateSlider();
        }, 6000);
    }

    function stopAutoSlide() {
        clearInterval(interval);
    }

    dots.forEach(dot => {
        dot.addEventListener("click", function () {
            stopAutoSlide();
            index = parseInt(this.dataset.index);
            updateSlider();
            startAutoSlide();
        });
    });

    startAutoSlide();

});
</script>

<!-- ================= HERO SLIDER END ================= -->

<!-- Scrolling Ticker Section Start -->
<div class="our-scrolling-ticker">
    <!-- Scrolling Ticker Start -->
    <div class="scrolling-ticker-box">
        <div class="scrolling-content">
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-1.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-2.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-3.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-4.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-5.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-6.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-1.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-2.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-3.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-4.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-5.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-6.svg" alt=""></span>
        </div>

        <div class="scrolling-content">
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-1.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-2.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-3.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-4.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-5.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-6.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-1.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-2.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-3.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-4.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-5.svg" alt=""></span>
            <span><img src="<?php echo BASE_URL; ?>/assets/images/client-logo-6.svg" alt=""></span>
        </div>
    </div>
</div>
<!-- Scrolling Ticker Section End -->

<!-- About Us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- About Box Start -->
                <div class="about-us-box">
                    <!-- About Us Images Start -->
                    <div class="about-us-image">
                        <!-- About Us Image Start -->
                        <div class="about-us-img">
                            <figure class="image-anime reveal">
                                <img src="<?php echo BASE_URL; ?>/assets/images/about-us-image.jpg" alt="">
                            </figure>
                        </div>

                        <!-- About Us Image End -->

                        <!-- About Experience Box Start -->
                        <!-- <div class="about-experience-box">
                            <div class="about-experience-counter">
                                <h2><span class="counter">25</span>+</h2>
                            </div>
                            <div class="about-experience-content wow fadeInUp">
                                <p>Creative execution <span>Digital marketing</span></p>
                            </div>
                        </div> -->
                        <!-- About Experience Box End -->
                    </div>
                    <!-- About Us Images End -->

                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">About us</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Transforming brands with <span>digital marketing</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.2s">
                            <p>We build social-first marketing systems that grow awareness, generate leads, and create consistent momentum for brands that want to stand out.</p>
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Footer Start -->
                        <div class="about-us-footer wow fadeInUp d-flex justify-content-end" data-wow-delay="0.4s">
                                <div class="about-us-btn">
                                    <a href="<?php echo BASE_URL; ?>/index.php?page=about" class="btn-default">more about</a>
                                </div>
                            </div>
                        <!-- About Us Footer End -->

                        <!-- About Us List Start -->
                        <div class="about-us-list">
                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-about-list-item-1.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>tailored marketing solutions</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-about-list-item-2.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>proactive trends tracking</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->

                            <!-- About List Item Start -->
                            <div class="about-list-item wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-box">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/icon-about-list-item-3.svg" alt="">
                                </div>
                                <div class="about-list-content">
                                    <h3>affordable packages</h3>
                                </div>
                            </div>
                            <!-- About List Item End -->
                        </div>
                        <!-- About Us List End -->
                    </div>
                    <!-- About Us Content End -->
                </div>
                <!-- About Box End -->
            </div>
        </div>
    </div>
</div>
<!-- About Us Section End -->





















<!-- Our Services Section Start -->
<div class="our-services">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">services</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Our core <span>services</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="btn-default">see all services</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
           

            <div class="col-lg-12">
                <!-- Service Boxes Start -->
                <div class="service-boxes">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-1.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Brand Strategy</h3>
                            <p>We help you define your positioning, messaging, and direction so your brand stands out with purpose.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-2.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Brand Identity</h3>
                            <p> We create logos, colors, typography, and a complete visual system that truly represents your business.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>SEO Services</h3>
                            <p>We improve your search rankings and bring steady organic traffic that actually grows your business.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->

                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-4.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Digital Marketing</h3>
                            <p>We run targeted campaigns across Google Ads and other platforms to deliver measurable results and leads.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                     <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-2.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Social Media Marketing </h3>
                            <p>We build strategies, create content, and grow your audience with consistent and engaging social presence.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->
                     <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-2.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Video Shooting & Editing</h3>
                            <p>We shoot and edit professional brand films, reels, testimonials, and promotional videos for your business.</p>

                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->




                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Content Marketing</h3>
                            <p>We create useful blogs, articles, and thought leadership content that builds trust and authority.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->



                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Website Development</h3>
                            <p>We build fast, modern, and conversion-focused websites that look great and perform even better.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->



                    <div class="service-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-service-3.svg" alt="">
                        </div>
                        <div class="service-item-content">
                            <h3>Rebranding </h3>
                            <p>We completely refresh your brand look, message, and identity to match where your business is heading.</p>
                            <a href="<?php echo BASE_URL; ?>/index.php?page=services" class="readmore-btn">read more</a>
                        </div>
                    </div>
                    <!-- Service Item End -->




                </div>
                <!-- Service Boxes End -->
            </div>

            <div class="col-lg-12">
                <!-- Service Footer Start -->
                <div class="service-footer wow fadeInUp" data-wow-delay="0.8s">
                    <p> Let’s make something great together. <a href="<?php echo BASE_URL; ?>/index.php?page=contact">Get Free Quote</a></p>
                </div>
                <!-- Service Footer End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Services Section End -->

<!-- Our Brands Section Start -->
<div class="our-brands">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Our Brands Box Start -->
                <div class="our-brands-box">
                    <!-- Our Brands Content Start -->
                    <div class="our-brand-contant">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">What we do</h3>
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Elevate your <span>brand</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Section Button Start -->
                        <div class="our-brand-btn wow fadeInUp" data-wow-delay="0.2s">
                            <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default">contact us</a>
                        </div>
                        <!-- Section Button End -->
                    </div>
                    <!-- Our Brands Content End -->

                    <!-- Our Brand List Start -->
                    <div class="our-brand-list">
                        <!-- Brand List Item Start -->
                        <div class="brand-list-item wow fadeInUp">
                            <div class="icon-box">
                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-brand-item-1.svg" alt="">
                            </div>
                            <div class="brand-item-content">
                                <h3>Social advertising</h3>
                                <p>Paid campaigns built to reach the right audience and drive qualified traffic.</p>
                            </div>
                        </div>
                        <!-- Brand List Item End -->

                        <!-- Brand List Item Start -->
                        <div class="brand-list-item active wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-brand-item-2.svg" alt="">
                            </div>
                            <div class="brand-item-content">
                                <h3>Reel creation</h3>
                                <p>Short-form content designed for reach, saves, shares, and consistent brand recall.</p>
                            </div>
                        </div>
                        <!-- Brand List Item End -->

                        <!-- Brand List Item Start -->
                        <div class="brand-list-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="<?php echo BASE_URL; ?>/assets/images/icon-brand-item-3.svg" alt="">
                            </div>
                            <div class="brand-item-content">
                                <h3>Content strategies</h3>
                                <p>Monthly themes, hooks, captions, and publishing plans aligned to business goals.</p>
                            </div>
                        </div>
                        <!-- Brand List Item End -->
                    </div>
                    <!-- Our Brand List End -->
                </div>
                <!-- Our Brands Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Brands Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-choose-us">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Why choose us</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Creative <span>growth</span> strategies</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default">contact us</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-3 col-md-6 order-lg-1 order-1">
                <!-- Why Choose List Start -->
                <div class="why-choose-list">
                    <!-- Why Choose List Item Start -->
                    <div class="why-choose-list-item wow fadeInUp">
                        <h3>Tailored strategies</h3>
                        <p>Every plan is customized around your audience, offer, and growth target.</p>
                    </div>
                    <!-- Why Choose List Item End -->

                    <!-- Why Choose List Item Start -->
                    <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Proven results</h3>
                        <p>We track metrics that matter: reach, engagement, leads, and conversions.</p>
                    </div>
                    <!-- Why Choose List Item End -->
                </div>
                <!-- Why Choose List End -->
            </div>

            <div class="col-lg-6 order-lg-2 order-3">
                <div class="why-choose-images">
                    <div class="why-choose-circle">
                        <img src="<?php echo BASE_URL; ?>/assets/images/why-choose-circle.png" alt="">
                    </div>

                    <div class="why-choose-img">
                        <img src="<?php echo BASE_URL; ?>/assets/images/why-choose-img.png" alt="">
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 order-lg-2 order-2">
                <!-- Why Choose List Start -->
                <div class="why-choose-list">
                    <!-- Why Choose List Item Start -->
                    <div class="why-choose-list-item wow fadeInUp">
                        <h3>Expert team</h3>
                        <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                    </div>
                    <!-- Why Choose List Item End -->

                    <!-- Why Choose List Item Start -->
                    <div class="why-choose-list-item wow fadeInUp" data-wow-delay="0.25s">
                        <h3>End-to-end solutions</h3>
                        <p>We create customized social media strategies that align with your brand's unique goals and values.</p>
                    </div>
                    <!-- Why Choose List Item End -->
                </div>
                <!-- Why Choose List End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Our Feature Section Start -->
<div class="our-feature">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- Our Feature Content Start -->
                <div class="our-feature-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">What We do Best</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">A Full Service <span>Digital Marketing</span> Agency With a Creative Edge</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">watNidea brings together branding, creativity, and digital marketing under one roof. That means we can handle strategy, identity, campaigns, content, design, and execution without making things complicated.
                                We’re especially good at helping brands that need clearer positioning, better visuals, and a stronger digital presence. Some clients come for brand strategy. Others need SEO, social media support, or video work. Many need a mix of everything. Whatever your situation, we make sure all the pieces work together.
                                Our focus is always on clarity, consistency, and results. We want your audience to understand your brand quickly, trust it easily, and remember it longer.
                                </p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Feature Body Start -->
                    <!-- <div class="our-feature-body wow fadeInUp" data-wow-delay="0.4s"> -->
                        <!-- Our Feature Body Item Start -->
                        <!-- <div class="our-feature-body-item">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-feature-body.svg" alt="">
                            <h3>Keyword research excellence</h3>
                        </div> -->
                        <!-- Our Feature Body Item End -->

                        <!-- Our Feature Body Content Start -->
                        <!-- <div class="our-feature-body-content">
                            <p>Our powerful features are designed to drive social growth by.</p>
                        </div> -->
                        <!-- Our Feature Body Content End -->

                        <!-- <div class="our-feature-body-item">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-feature-body.svg" alt="">
                            <h3>Viral Content Strategy</h3>
                        </div>

                        <div class="our-feature-body-content">
                            <p>We create hooks, storytelling formats, and content frameworks designed to maximize reach, saves, and shares.</p>
                        </div> -->








                    <!-- </div> -->
                    <!-- Our Feature Body End -->

                    <!-- Our Feature Button Start -->
                    <div class="our-feature-btn wow fadeInUp" data-wow-delay="0.6s">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default">Discover more</a>
                    </div>
                    <!-- Our Feature Button End -->
                </div>
                <!-- Our Feature Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Our Feature Images Start -->
                <div class="our-feature-images">
                    <!-- Our Feature Image Start -->
                    <div class="our-feature-img-1 our-feature-image">
                        <figure class="image-anime reveal">
                            <img src="<?php echo BASE_URL; ?>/assets/images/feature-img-1.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Feature Image End -->

                    <!-- Our Feature Img 2 Start -->
                    <div class="our-feature-img-2">
                        <!-- Our Feature Image Start -->
                        <div class="our-feature-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo BASE_URL; ?>/assets/images/feature-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Our Feature Image End -->

                        <!-- Our Feature Image Start -->
                        <div class="our-feature-image">
                            <figure class="image-anime reveal">
                                <img src="<?php echo BASE_URL; ?>/assets/images/feature-img-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Our Feature Image End -->
                    </div>
                    <!-- Our Feature Img 2 End -->

                    <!-- Our Client Box Start -->
                    <!-- <div class="our-client-box">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-satisficed-client.svg" alt="">
                        </div>

                        <div class="client-box-content">
                            <h3><span class="counter">2500</span>+</h3>
                            <p>Satisficed client</p>
                        </div>
                    </div> -->
                    <!-- Our Client Box End -->
                </div>
                <!-- Our Feature Images End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Feature Section End -->

<!-- Key Facts Section Start -->
<div class="key-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Key Facts Box Start -->
                <div class="key-facts-box">
                    <!-- Key Facts Image Start -->
                    <div class="key-facts-image">
                        <figure class="image-anime">
                            <img src="<?php echo BASE_URL; ?>/assets/images/key-facts-image.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Key Facts Image End -->

                    <!-- Key Facts Content Start -->
                    <div class="key-facts-content">
                        <!-- Key Facts Header Start -->
                        <div class="key-facts-header">
                            <!-- Section Tite Start -->
                            <div class="section-title">
                                <h3 class="wow fadeInUp">key facts</h3>
                                <h2 class="text-anime-style-2" data-cursor="-opaque">Key <span>facts</span> about our success</h2>
                            </div>
                            <!-- Section Tite End -->

                            <!-- Free Consultation Circle Start -->
                            <div class="free-consultation-circle">
                                <a href="<?php echo BASE_URL; ?>/index.php?page=contact"><img src="<?php echo BASE_URL; ?>/assets/images/free-consultation-circle.png" alt=""></a>
                            </div>
                            <!-- Free Consultation Circle End -->
                        </div>
                        <!-- Key Facts Header End -->

                        <!-- Key Facts Body Start -->
                        <div class="key-facts-body">
                            <!-- Key Facts Counter Start -->
                            <div class="key-facts-couner">
                                <h2><span class="counter">235</span>+</h2>
                                <p>With over 530 successful SEO projects completed.</p>
                            </div>
                            <!-- Key Facts Counter End -->

                            <!-- Key Facts Counter Start -->
                            <div class="key-facts-couner">
                                <h2><span class="counter">25</span>k+</h2>
                                <p>With over 530 successful SEO projects completed.</p>
                            </div>
                            <!-- Key Facts Counter End -->

                            <!-- Key Facts Counter Start -->
                            <div class="key-facts-couner">
                                <h2><span class="counter">97</span>%</h2>
                                <p>With over 530 successful SEO projects completed.</p>
                            </div>
                            <!-- Key Facts Counter End -->

                            <!-- Key Facts Counter Start -->
                            <div class="key-facts-couner">
                                <h2><span class="counter">1.1</span>k+</h2>
                                <p>With over 530 successful SEO projects completed.</p>
                            </div>
                            <!-- Key Facts Counter End -->
                        </div>
                        <!-- Key Facts Body End -->
                    </div>
                    <!-- Key Facts Content End -->
                </div>
                <!-- Key Facts Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Key Facts Section End -->

<!-- Social Media Marketing Packages Section Start -->
<div class="our-pricing">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Social Media Marketing Packages</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Elevating Your Social Influence <span>&amp; Market Dominance</span>.</h2>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="section-title-content wow fadeInUp" data-wow-delay="0.2s">
                    <p>Choose the plan that fits your growth stage. From essential presence management to aggressive market dominance, each package is built for measurable output.</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div class="pricing-item wow fadeInUp h-100 d-flex flex-column" style="width: 100%; border-radius: 12px; padding: 40px 30px;">
                    <div class="pricing-header mb-4 text-center">
                        <img class="mb-3 mx-auto" src="<?php echo BASE_URL; ?>/assets/images/icon-pricing-1.svg" alt="" style="height: 60px; max-width: 100%;">
                        <h3 class="mb-2" style="font-weight: 700;">Starter Plan</h3>
                        <p class="text-muted mb-4 mx-auto" style="font-size: 0.95rem; min-height: 48px;">For maintaining a basic social media presence.</p>
                        <h2 class="mb-0" style="font-size: 2.5rem; font-weight: 700;"><sup>&#8377;</sup>25,000<sub style="font-size: 1rem; font-weight: 400; color: #6c757d;">/month</sub></h2>
                    </div>
                    <div class="pricing-footer flex-grow-1 text-start mb-4">
                        <ul class="list-unstyled" style="padding-left: 0;">
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>12-15 Reels / month</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Basic Video Editing</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Basic Captions</span></li>
                            <li class="mb-3 d-flex opacity-50"><i class="fa-solid fa-times text-danger me-3 mt-1"></i> <span class="text-decoration-line-through">Content Strategy &amp; Funnels</span></li>
                        </ul>
                    </div>
                    <div class="pricing-body mt-auto text-center">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default w-80 d-block text-center" style="border-radius: 8px;">Get started</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div class="pricing-item highlighted-box wow fadeInUp h-100 d-flex flex-column" data-wow-delay="0.25s" style="width: 100%; border-radius: 12px; padding: 40px 30px; position: relative;">
                    <div class="pricing-header mb-4 text-center pb-3 border-bottom border-light border-opacity-25">
                        <div class="fw-bold text-uppercase d-inline-block px-3 py-1 rounded-pill mb-3" style="background: rgba(255,255,255,0.2); font-size: 0.75rem; letter-spacing: 1px;">Recommended</div>
                        <h3 class="mb-2 text-white" style="font-weight: 700;">Growth Plan</h3>
                        <p class="mb-4 mx-auto" style="font-size: 0.95rem; min-height: 48px; opacity: 0.9;">Ideal for consistent growth, engagement &amp; lead generation.</p>
                        <h2 class="mb-0 text-white" style="font-size: 2.5rem; font-weight: 700;"><sup>&#8377;</sup>45,000<sub style="font-size: 1rem; font-weight: 400; opacity: 0.8;">/month</sub></h2>
                    </div>
                    <div class="pricing-footer flex-grow-1 text-start mb-4 text-white">
                        <ul class="list-unstyled" style="padding-left: 0;">
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>25-30 Reels / month</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>4-6 Carousel posts</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>Complete Content Strategy</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>Hook &amp; Script Writing</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>High-quality Video Editing</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>Caption &amp; CTA Optimization</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>Basic DM Funnel Guidelines</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-circle-check me-3 mt-1" style="color: #fff;"></i> <span>Weekly Performance Tracking</span></li>
                        </ul>
                    </div>
                    <!-- <div class="pricing-body mt-auto text-center">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default btn-highlighted w-100 d-block text-center" style="border-radius: 8px;">Claim your growth</a>
                    </div> -->
                    <div class="pricing-body mt-auto text-center">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default w-80 d-block text-center" style="border-radius: 8px;">Claim your growth</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <div class="pricing-item wow fadeInUp h-100 d-flex flex-column" data-wow-delay="0.5s" style="width: 100%; border-radius: 12px; padding: 40px 30px;">
                    <div class="pricing-header mb-4 text-center">
                        <img class="mb-3 mx-auto" src="<?php echo BASE_URL; ?>/assets/images/icon-pricing-1.svg" alt="" style="height: 60px; max-width: 100%;">
                        <h3 class="mb-2" style="font-weight: 700;">Domination Plan</h3>
                        <p class="text-muted mb-4 mx-auto" style="font-size: 0.95rem; min-height: 48px;">For brands who want aggressive growth &amp; market dominance.</p>
                        <h2 class="mb-0" style="font-size: 2.5rem; font-weight: 700;"><sup>&#8377;</sup>85,000<sub style="font-size: 1rem; font-weight: 400; color: #6c757d;">/month</sub></h2>
                    </div>
                    <div class="pricing-footer flex-grow-1 text-start mb-4">
                        <ul class="list-unstyled" style="padding-left: 0;">
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>30-35 Reels / month</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>8-10 Carousel posts</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Complete Content (Dom+Intl)</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Viral Hook &amp; Script Writing</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>High-end Video Editing</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>DM Funnel Setup</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Weekly Strategy Calls</span></li>
                            <li class="mb-3 d-flex"><i class="fa-solid fa-check text-success me-3 mt-1"></i> <span>Trend &amp; Competitor Analysis</span></li>
                        </ul>
                    </div>
                    <div class="pricing-body mt-auto text-center">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default w-80 d-block text-center" style="border-radius: 8px;">Claim your dominance</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Social Media Marketing Packages Section End -->

<!-- How It Work Section Start -->
<div class="how-it-works">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- How It Work Content Start -->
                <div class="how-it-work-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">How it work</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Step-by-Step guide to social <span>success</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We follow a structured system to move your brand from low visibility to consistent reach, engagement, and leads.
From strategy and content creation to execution and scaling, every step is designed to deliver measurable growth.
Our approach focuses on attracting the right audience, building trust, and converting attention into real business results.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- Our Agency Circle Start -->
                    <div class="our-agency-circle">
                        <a href="<?php echo BASE_URL; ?>/index.php?page=contact">
                            <figure>
                                <img src="<?php echo BASE_URL; ?>/assets/images/our-agency-circle.svg" alt="">
                            </figure>
                            <div class="agency-circle-arrow">
                                <img src="<?php echo BASE_URL; ?>/assets/images/our-agency-arrow.svg" alt="">
                            </div>
                        </a>
                    </div>
                    <!-- Our Agency Circle End -->
                </div>
                <!-- How It Work Content End -->
            </div>

            <div class="col-lg-6">
                <!-- How It Work List Start -->
                <div class="how-it-work-list">
                    <!-- How Work List Item Start -->
                    <div class="how-work-list-item wow fadeInUp">
                        <div class="how-work-list-image">
                            <img src="<?php echo BASE_URL; ?>/assets/images/how-work-list-bg.jpg" alt="">
                        </div>

                        <div class="how-work-list-content">
                            <h3>Discover</h3>
                            <p>We start by learning about your business, your goals, your market, and your audience.</p>
                        </div>
                        <div class="how-work-list-no">
                            <h2>01</h2>
                        </div>
                    </div>
                    <!-- How Work List Item End -->

                    <!-- How Work List Item Start -->
                    <div class="how-work-list-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="how-work-list-image">
                            <img src="<?php echo BASE_URL; ?>/assets/images/how-work-list-bg.jpg" alt="">
                        </div>

                        <div class="how-work-list-content">
                            <h3>Plan </h3>
                            <p>Then we build a smart approach tailored to what you want to achieve — whether it’s brand strategy, marketing plans, content direction, or a full website and campaign roadmap.</p>
                        </div>
                        <div class="how-work-list-no">
                            <h2>02</h2>
                        </div>
                    </div>
                    <!-- How Work List Item End -->

                    <!-- How Work List Item Start -->
                    <div class="how-work-list-item active wow fadeInUp" data-wow-delay="0.4s">
                        <div class="how-work-list-image">
                            <img src="<?php echo BASE_URL; ?>/assets/images/how-work-list-bg.jpg" alt="">
                        </div>

                        <div class="how-work-list-content">
                            <h3> Create</h3>
                            <p>Once the direction is set, we move into design, writing, development, video production, and campaign execution. Everything supports your brand properly.</p>
                        </div>
                        <div class="how-work-list-no">
                            <h2>03</h2>
                        </div>
                    </div>
                    <!-- How Work List Item End -->

                    <!-- How Work List Item Start -->
                    <div class="how-work-list-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="how-work-list-image">
                            <img src="<?php echo BASE_URL; ?>/assets/images/how-work-list-bg.jpg" alt="">
                        </div>

                        <div class="how-work-list-content">
                            <h3>Launch and Improve</h3>
                            <p>After launch, we check the results and keep refining. SEO, PPC, content, or performance marketing — we focus on steady, ongoing improvement.</p>
                        </div>
                        <div class="how-work-list-no">
                            <h2>04</h2>
                        </div>
                    </div>
                    <!-- How Work List Item End -->
                </div>
                <!-- How It Work List End -->
            </div>
        </div>
    </div>
</div>
<!-- How It Work Section End -->

<!-- Our Testimonial Section Start -->
<div class="our-testimonial">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">testimonials</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">What <span>clients</span> say</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-4">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.2s">
                    <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default">contact us</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Testimonial Slider Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-cursor-text="Drag">
                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>“watNidea felt like a true partner. They helped us with branding, website development, and online marketing in a way that actually made sense for our business.”</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <!-- <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo BASE_URL; ?>/assets/images/author-1.jpg" alt="">
                                                </figure>
                                            </div> -->
                                            <div class="author-content">
                                                <h3>arlene mcCoy</h3>
                                                <p>Co Founder</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-body">
                                        <div class="testimonial-counter">
                                            <h2><span class="counter">80</span>K</h2>
                                            <p>Instagram Followers</p>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/testimonial-quote.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>"We needed a digital marketing agency that could handle everything from SEO to social media. watNidea delivered with clarity and creativity.”</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <!-- <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo BASE_URL; ?>/assets/images/author-2.jpg" alt="">
                                                </figure>
                                            </div> -->
                                            <div class="author-content">
                                                <h3>Oliver James</h3>
                                                <p>Co Founder</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-body">
                                        <div class="testimonial-counter">
                                            <h2><span class="counter">130</span>K</h2>
                                            <p>Instagram Followers</p>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/testimonial-quote.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>“The team understood our brand right away. Their brand identity work and content marketing made a real difference in how people see our company.”</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <!-- <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo BASE_URL; ?>/assets/images/author-3.jpg" alt="">
                                                </figure>
                                            </div> -->
                                            <div class="author-content">
                                                <h3>arlene mcCoy</h3>
                                                <p>Co Founder</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-body">
                                        <div class="testimonial-counter">
                                            <h2><span class="counter">80</span>M</h2>
                                            <p>Instagram Followers</p>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/testimonial-quote.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->

                            <!-- Testimonial Slide Start -->
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testimonial-header">
                                        <div class="testimonial-content">
                                            <p>"Working with this team has a game-changer for our brand engagement skyrocketed, we've seen a noticeable increase in sales."</p>
                                        </div>
                                        <div class="testimonial-author">
                                            <!-- <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="<?php echo BASE_URL; ?>/assets/images/author-4.jpg" alt="">
                                                </figure>
                                            </div> -->
                                            <div class="author-content">
                                                <h3>arlene mcCoy</h3>
                                                <p>Co Founder</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="testimonial-body">
                                        <div class="testimonial-counter">
                                            <h2><span class="counter">200</span>M+</h2>
                                            <p>Social Followers</p>
                                        </div>
                                        <div class="testimonial-quote">
                                            <img src="<?php echo BASE_URL; ?>/assets/images/testimonial-quote.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial Slide End -->
                        </div>
                        <div class="testimonial-pagination"></div>
                    </div>
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Testimonial Section End -->

<!-- Our FAQs Section Start -->
<div class="our-faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Our FAQs Content Start -->
                <div class="our-faqs-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">faqs</h3>
                        <h2 class="text-anime-style-2" data-cursor="-opaque">Answers to your common <span>questions</span></h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Find clear and concise answers to the most frequently asked questions about WatNidea's digital marketing services.</p>
                    </div>
                    <!-- Section Title End -->

                    <!-- FAQs Review Box Start -->
                    <div class="faqs-review-box">
                        <!-- Review Rating Box Start -->
                        <div class="review-rating-box">
                            <h2><span class="counter">4.9</span></h2>
                            <i class="fa-solid fa-star"></i>
                        </div>
                        <!-- Review Rating Box End -->

                        <!-- Review Client Box Start -->
                        <div class="review-client-box">
                            <!-- Review Image Start -->
                            <div class="satisfy-client-images">
                                <div class="satisfy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/satisfy-client-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/satisfy-client-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="satisfy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="<?php echo BASE_URL; ?>/assets/images/satisfy-client-img-3.jpg" alt="">
                                    </figure>
                                </div>
                            </div>
                            <!-- Testimonial Review Image End -->

                            <!-- Satisfy Client Box Start -->
                            <div class="satisfy-client-content wow fadeInUp">
                                <p>Explore our trust score Customer Reviews</p>
                            </div>
                        </div>
                        <!-- Review Client Box End -->
                    </div>
                    <!-- FAQs Review Box End -->
                </div>
                <!-- Our FAQs Content End -->
            </div>

            <div class="col-lg-6">
                <!-- FAQ Accordion Start -->
                <div class="faq-accordion" id="faqaccordion">
                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp">
                        <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What does watNidea do?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                            <div class="accordion-body">
                                <p>WatNidea is a full-service digital marketing agency offering branding, SEO, website development, social media marketing, content marketing, video production, video editing, PPC, and rebranding services.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                Do you work as a branding agency and marketing agency?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse show" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                            <div class="accordion-body">
                                <p>Yes — we act as both, helping with strategy, identity, campaigns, and growth.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                Can you help with website development and web design?

                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                            <div class="accordion-body">
                                <p>Absolutely. We build modern, responsive, conversion-focused websites.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                Do you provide Google Ads and PPC support?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                            <div class="accordion-body">
                                <p>Yes. We handle Google Ads management, PPC campaigns, and performance marketing for targeted visibility and leads.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->

                    <!-- FAQ Item Start -->
                    <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                Can you support content and video as well?

                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                            <div class="accordion-body">
                                <p>Yes — we offer content marketing, video production, and video editing services to help your brand communicate better and build trust.</p>
                            </div>
                        </div>
                    </div>
                    <!-- FAQ Item End -->
                </div>
                <!-- FAQ Accordion End -->
            </div>
        </div>
    </div>
</div>
<!-- Our FAQs Section End -->

<!-- Our Blog Section Start -->
<div class="our-blog">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-8">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Latest blog</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Insights from our <span>experts</span></h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-4">
                <!-- Section Button Start -->
                <div class="section-btn wow fadeInUp" data-wow-delay="0.25s">
                    <a href="<?php echo BASE_URL; ?>/index.php?page=contact" class="btn-default">see all posts</a>
                </div>
                <!-- Section Button End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="blog-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="<?php echo BASE_URL; ?>/assets/images/post-1.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <div class="blog-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h3><a href="blog-single.html">How to Craft Engaging Content for Instagram</a></h3>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="blog-single.html" class="readmore-btn">read more</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="blog-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="<?php echo BASE_URL; ?>/assets/images/post-2.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <div class="blog-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h3><a href="blog-single.html">Social Media Myths You Need to Ignore</a></h3>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="blog-single.html" class="readmore-btn">read more</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4 col-md-6">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <a href="blog-single.html" data-cursor-text="View">
                            <figure class="image-anime">
                                <img src="<?php echo BASE_URL; ?>/assets/images/post-3.jpg" alt="">
                            </figure>
                        </a>
                    </div>
                    <!-- Post Featured Image End -->

                    <div class="blog-item-body">
                        <!-- Post Item Content Start -->
                        <div class="post-item-content">
                            <h3><a href="blog-single.html">Effective Hashtag Strategies to Increase Reach</a></h3>
                        </div>
                        <!-- Post Item Content End -->

                        <!-- Blog Item Button Start -->
                        <div class="blog-item-btn">
                            <a href="blog-single.html" class="readmore-btn">read more</a>
                        </div>
                        <!-- Blog Item Button End -->
                    </div>
                </div>
                <!-- Post Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Our Blog Section End -->

<!-- Footer Start -->

<?php include __DIR__ . '/includes/footer.php'; ?>