<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] === "POST") {

    
//     if (!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {

//         header('Content-Type: application/json');

//         error_log(print_r($_POST, true)); 

//         function clean($data) {
//             return htmlspecialchars(trim($data));
//         }

//         $fname = clean($_POST['fname'] ?? '');
//         $email = clean($_POST['email'] ?? '');

//         if (!$fname || !$email) {
//             echo json_encode([
//                 "success" => false,
//                 "message" => "Required fields missing"
//             ]);
//             exit;
//         }

//         echo json_encode([
//             "success" => true,
//             "message" => "Form submitted successfully"
//         ]);
//         exit;
//     }
// }
?> -->




<?php include __DIR__ . '/includes/header.php'; ?>
<!-- contact Page Content -->

<!-- Header End -->

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span>WatNidea</span></h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo BASE_URL; ?>/index.php?page=home">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">conatct us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Scrolling Ticker Section Start -->
<!-- <div class="our-scrolling-ticker subpages-scrolling-ticker"> -->
    <!-- Scrolling Ticker Start -->
    <!-- <div class="scrolling-ticker-box">
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
</div> -->
<!-- Scrolling Ticker Section End -->

<!-- Contact Information Section Start -->
<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Contact Info Box Start -->
                <div class="contact-info-box">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-mail.svg" alt="">
                        </div>
                        <div class="contact-info-contant">
                            <p>Email us today for content, strategy, and growth support.</p>
                            <h3><a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item active">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-phone.svg" alt="">
                        </div>
                        <div class="contact-info-contant">
                            <p>Contact us to elevate your brand and build stronger digital visibility.</p>
                            <h3><a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"><?php echo SITE_PHONE; ?></a></h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->

                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item">
                        <div class="icon-box">
                            <img src="<?php echo BASE_URL; ?>/assets/images/icon-location.svg" alt="">
                        </div>
                        <div class="contact-info-contant">
                            <p>Visit or call us for personalized digital marketing support.</p>
                            <h3><?php echo SITE_ADDRESS; ?></h3>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
                <!-- Contact Info Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Information Section End -->

<!-- Contact Us Form Section Start -->
<div class="contact-us-form">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-7">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Contact us</h3>
                    <h2 class="text-anime-style-2" data-cursor="-opaque">Get in <span>touch</span> with us</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-5">
                <!-- Section Title Content Start -->
                <div class="section-title-content">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">Connect with WatNidea for tailored digital marketing solutions that elevate your brand, engage your audience, and drive results.</p>
                </div>
                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Contact Form Start -->
                <div class="contact-form">
                    <form id="contactForm" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                        <div class="row">
                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter your mobile no." required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your e-mail" required>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-md-12 mb-5">
                                <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write message..."></textarea>
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="col-md-12 ">
                                <button type="submit" class="btn-default"><span>submit message</span></button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact Form End -->
            </div>

                    <div id="formResponse"></div>

        </div>
    </div>
</div>
<!-- Contact Us Form Section End -->

<!-- Google Map Section Start -->
<div class="google-map">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Google Map IFrame Start -->
                <div class="google-map-iframe">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map IFrame End -->
            </div>
        </div>
    </div>
</div>
<!-- Google Map Section End -->

<!-- Footer Start -->
 <script>
document.getElementById("contactForm").addEventListener("submit", async function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const responseBox = document.getElementById("formResponse");

    responseBox.innerHTML = "Sending...";

    try {
        const res = await fetch("/contact_handler.php", {
            method: "POST",
            body: formData
        });

        const data = await res.json();

        if (data.success) {
            responseBox.innerHTML = "<p style='color:green'>" + data.message + "</p>";
            this.reset();
        } else {
            responseBox.innerHTML = "<p style='color:red'>" + data.message + "</p>";
        }

    } catch {
        responseBox.innerHTML = "<p style='color:red'>Server error</p>";
    }
});
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>