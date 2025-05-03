<?php
include '../config.php'; // Include the configuration file

// echo $base_url;exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Fancy Number</title>
    <link rel="icon" type="image/png" sizes="64x64" href="<?php echo $base_url; ?>assets/icons/Fav-Icon.png">
    <!-- Google Fonts - Signika -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Signika:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Custome Css Family -->
    <link rel="stylesheet" href="<?php echo $base_url; ?>css/global/styles.css">

    <style>
        .form-floating {
            position: relative;
        }

        /* NEW STYLE FOR SELECT DROPDOWN */
        .form-select {
            padding-right: 45px;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .form-floating {
            position: relative;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .input-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;
        }

        .contact-icon {
            flex-shrink: 0;
        }

        .contact-form-card .form-control {
            padding-right: 45px;
            height: 56px;
        }

        .contact-form-card textarea.form-control {
            height: 120px !important;
            padding-top: 1.5rem;
        }

        .contact-info-card a:hover {
            text-decoration: underline !important;
            opacity: 0.9;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        /* Add to your existing CSS */
        .fa-spinner {
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .alert {
            border-radius: 0.5rem;
            padding: 1rem;
        }

        @media (max-width: 991.98px) {

            .contact-form-card,
            .contact-info-card {
                padding: 2rem !important;
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="container-fluid py-2 border-bottom">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="d-flex align-items-center">
                    <a href="<?php echo $base_url; ?>" class="text-decoration-none d-flex align-items-center">
                        <!-- Uncomment and use your actual logo image -->
                        <!-- <img src="assets/images/logo.png" alt="Jyoti Enterprises Logo" class="me-2" style="height: 50px;"> -->
                        <span class="h4 mb-0 text-dark">Jyoti Enterprises</span>
                    </a>
                </div>
            </div>
            <div class="col-md-5">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid p-0">
                        <button class="navbar-toggler" type="button"
                            data-bs-toggle="collapse"
                            data-bs-target="#navbarNav">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse"
                            id="navbarNav">
                            <ul class="navbar-nav">
                                <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle"
                                            href="#" id="menu1">Menu 1</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="#">Submenu 1</a></li>
                                            <li><a class="dropdown-item"
                                                    href="#">Submenu 2</a></li>
                                        </ul>
                                    </li> -->
                                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $base_url; ?>">Home</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $base_url; ?>premium-number">Premium Number</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $base_url; ?>">Even Number</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $base_url; ?>">Odd Number</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="<?php echo $base_url; ?>contact-us">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-md-4">
                <div class="d-flex align-items-center justify-content-end">
                    <form class="d-flex me-3">
                        <input class="form-control me-2" type="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success"
                            type="submit"><i
                                class="fas fa-search"></i></button>
                    </form>
                    <div>
                        <a href="<?php echo $base_url; ?>" class="me-2">Login</a>
                        <a href="<?php echo $base_url; ?>" class="me-2">Register</a>
                        <a href="<?php echo $base_url; ?>">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Body Section -->

    <div class="container my-5">
        <div class="row g-5">
            <!-- Left Column - Contact Form -->
            <div class="col-lg-6">
                <div class="contact-form-card p-4 p-lg-5 h-100 shadow-lg rounded-4" style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); border-top: 5px solid #0d6efd;">
                    <h2 class="mb-4 fw-bold" style="color: #0d6efd;">Send Us a Message</h2>

                    <form id="contactForm" class="mt-4">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control rounded-3 border-1 border-primary shadow-sm"
                                        id="name" name="name" placeholder="John Doe" required>
                                    <label for="name">Full Name</label>
                                    <div class="input-icon text-primary">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control rounded-3 border-1 border-primary shadow-sm"
                                        id="email" name="email" placeholder="name@example.com" required>
                                    <label for="email">Email Address</label>
                                    <div class="input-icon text-primary">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="tel" class="form-control rounded-3 border-1 border-primary shadow-sm"
                                        id="phone" name="phone" placeholder="+1 234 567 8900">
                                    <label for="phone">Phone Number</label>
                                    <div class="input-icon text-primary">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select rounded-3 border-1 border-primary shadow-sm"
                                        id="service" name="service" style="height: 56px;" required>
                                        <option value="" selected disabled>Select Service</option>
                                        <option value="Prepaid">Prepaid</option>
                                        <option value="Postpaid">Postpaid</option>
                                    </select>
                                    <label for="service">Service Type</label>
                                    <div class="input-icon text-primary">
                                        <i class="fas fa-sim-card"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control rounded-3 border-1 border-primary shadow-sm"
                                        id="message" name="message" placeholder="Your message"
                                        style="height: 120px;" required></textarea>
                                    <label for="message">Your Message</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="submit" id="submitBtn" class="btn btn-primary btn-lg w-100 py-3 rounded-pill shadow-sm"
                                    style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%); border: none;">
                                    <i class="fas fa-paper-plane me-2"></i> Send Message
                                </button>
                            </div>
                        </div>

                        <!-- Response message container -->
                        <div id="formResponse" class="mt-3 text-center" style="display: none;"></div>
                    </form>
                </div>
            </div>

            <!-- Right Column - Contact Info -->
            <div class="col-lg-6">
                <div class="contact-info-card p-4 p-lg-5 h-100 shadow-lg rounded-4" style="background: linear-gradient(135deg, #0d6efd 0%, #0b5ed7 100%); color: white;">
                    <h2 class="mb-4 fw-bold">Contact Information</h2>

                    <div class="contact-details mt-5">
                        <div class="d-flex mb-4">
                            <div class="contact-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(255,255,255,0.2);">
                                <i class="fas fa-map-marker-alt fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Our Address</h5>
                                <p class="mb-0">123 Business Avenue,<br>City Center, New Delhi 110001</p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="contact-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(255,255,255,0.2);">
                                <i class="fas fa-phone-alt fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Call Us</h5>
                                <p class="mb-0">
                                    <a href="tel:+917869898980" class="text-white text-decoration-none">+91 786 989898 0</a><br>
                                    <a href="tel:+917247272724" class="text-white text-decoration-none">+91 724 727272 4</a>
                                </p>
                            </div>
                        </div>

                        <div class="d-flex mb-4">
                            <div class="contact-icon rounded-circle d-flex align-items-center justify-content-center" style="width: 50px; height: 50px; background: rgba(255,255,255,0.2);">
                                <i class="fas fa-envelope fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="mb-1">Email Us</h5>
                                <p class="mb-0">
                                    <a href="mailto:admin@fancynumber.shop" class="text-white text-decoration-none">admin@fancynumber.shop</a><br>
                                    <a href="mailto:jeevan@fancynumber.shop" class="text-white text-decoration-none">jeevan@fancynumber.shop</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="map-container mt-5 rounded-3 overflow-hidden shadow-sm" style="height: 250px; background: #ddd;">
                        <!-- Google Map Embed -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d653.9479399146086!2d78.37962654182199!3d17.450788303499877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93d92b00428d%3A0xb4a9bdb8f4fd4301!2sCyber%20Towers!5e1!3m2!1sen!2sin!4v1746084445893!5m2!1sen!2sin" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>

                    <div class="social-links mt-4 text-center">
                        <a href="https://www.facebook.com/" class="text-white mx-2"><i class="fab fa-facebook-f fa-lg"></i></a>
                        <a href="https://x.com/" class="text-white mx-2"><i class="fab fa-twitter fa-lg"></i></a>
                        <a href="https://www.instagram.com/" class="text-white mx-2"><i class="fab fa-instagram fa-lg"></i></a>
                        <a href="https://www.linkedin.com/feed/" class="text-white mx-2"><i class="fab fa-linkedin-in fa-lg"></i></a>
                        <a href="https://www.youtube.com/" class="text-white mx-2"><i class="fab fa-youtube fa-lg"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Body Section End -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>About Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Mobile Plans</a></li>
                        <li><a href="#">Internet Services</a></li>
                        <li><a href="#">TV Packages</a></li>
                        <li><a href="#">Home Solutions</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-4 mb-md-0">
                    <h5>Support</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Community</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Legal</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                        <li><a href="#">GDPR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Copyright -->
    <div class="bg-dark text-white py-3">
        <div class="container text-center">
            <p class="mb-0">&copy; 2025 <a href="<?php echo $base_url; ?>"
                    target="_blank"
                    class="text-white text-decoration-none">Jyoti
                    Enterprises</a>. All rights reserved.</p>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js">
    </script>

    <!-- Mail send script -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#contactForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: 'sendmail.php',
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#formResponse').html(response).show();
                    $('#contactForm')[0].reset();
                },
                error: function() {
                    $('#formResponse').html('<div class="alert alert-danger">Something went wrong. Please try again.</div>').show();
                }
            });
        });
    </script>

</body>

</html>