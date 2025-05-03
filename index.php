<?php
include 'config.php'; // Include the configuration file

// echo $base_url;exit;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Fancy Number</title>
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

    <!-- Main Content -->
    <main class="container my-4">
        <!-- Image Slider -->
        <div id="mainCarousel" class="carousel slide mb-4 rounded"
            data-bs-ride="carousel">
            <!-- Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mainCarousel"
                    data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mainCarousel"
                    data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#mainCarousel"
                    data-bs-slide-to="2"></button>
                <button type="button" data-bs-target="#mainCarousel"
                    data-bs-slide-to="3"></button>
                <button type="button" data-bs-target="#mainCarousel"
                    data-bs-slide-to="4"></button>
            </div>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img
                        src="<?php echo $base_url; ?>assets/images/sliders/Mobile_C_B132_1004318955_1_11zon.jpg"
                        class="d-block w-100" alt="Mobile Offer">
                </div>
                <div class="carousel-item">
                    <img
                        src="<?php echo $base_url; ?>assets/images/sliders/Music_1011905_2_11zon.jpg"
                        class="d-block w-100" alt="Music Offer">
                </div>
                <div class="carousel-item">
                    <img
                        src="<?php echo $base_url; ?>assets/images/sliders/Technology_1009273_3_11zon.jpg"
                        class="d-block w-100" alt="Technology Offer 1">
                </div>
                <div class="carousel-item">
                    <img
                        src="<?php echo $base_url; ?>assets/images/sliders/Technology_1009274_4_11zon.jpg"
                        class="d-block w-100" alt="Technology Offer 2">
                </div>
                <div class="carousel-item">
                    <img
                        src="<?php echo $base_url; ?>assets/images/sliders/Technology_1009275_5_11zon.jpg"
                        class="d-block w-100" alt="Technology Offer 3">
                </div>
            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button"
                data-bs-target="#mainCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button"
                data-bs-target="#mainCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Two Column Section -->
        <section class="row mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="p-4 bg-light rounded h-100">
                    <h3>Recharge & Pay Bills</h3>
                    <div class="billing-options">
                        <p>✅ Prepaid Recharge Lines:</p>
                        <ul>
                            <li>Top up your prepaid number instantly –
                                anytime, anywhere!</li>
                            <li>Quick and secure prepaid recharge at your
                                fingertips.</li>
                        </ul>
                    </div>

                    <div class="billing-options">
                        <p>✅ Postpaid Recharge Lines:</p>
                        <ul>
                            <li>Pay your postpaid bill in just a few clicks
                                – easy and fast!</li>
                            <li>Manage your monthly mobile bills with quick
                                postpaid recharge options.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right side section - 4 equal height columns -->
            <div class="col-md-6">
                <div class="p-4 bg-light rounded h-100">
                    <h3 class="mb-4">New to Vi?</h3>

                    <div class="row g-3 row-eq-height">
                        <!-- Added row-eq-height class -->
                        <!-- Get Vi SIM Card -->
                        <div class="col-md-3 col-6 mb-3">
                            <!-- Added col-6 for mobile -->
                            <div class="card h-100 border-0 bg-transparent">
                                <div
                                    class="card-body text-center p-3 d-flex flex-column">
                                    <div
                                        class="bg-primary text-white rounded-circle mx-auto mb-3"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i
                                            class="fas fa-sim-card fa-2x"></i>
                                    </div>
                                    <h5 class="flex-grow-1">Get Vi SIM</h5>
                                    <!-- Added flex-grow -->
                                    <div class="d-grid gap-2">
                                        <a href="#"
                                            class="btn btn-outline-primary btn-sm">Buy
                                            Prepaid SIM</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buy Postpaid SIM -->
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card h-100 border-0 bg-transparent">
                                <div
                                    class="card-body text-center p-3 d-flex flex-column">
                                    <div
                                        class="bg-info text-white rounded-circle mx-auto mb-3"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i
                                            class="fas fa-credit-card fa-2x"></i>
                                    </div>
                                    <h5 class="flex-grow-1">Postpaid
                                        Plans</h5>
                                    <div class="d-grid gap-2">
                                        <a href="#"
                                            class="btn btn-outline-info btn-sm">Buy
                                            Postpaid SIM</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Port to Vi -->
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card h-100 border-0 bg-transparent">
                                <div
                                    class="card-body text-center p-3 d-flex flex-column">
                                    <div
                                        class="bg-success text-white rounded-circle mx-auto mb-3"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i
                                            class="fas fa-exchange-alt fa-2x"></i>
                                    </div>
                                    <h5 class="flex-grow-1">Port to Vi</h5>
                                    <div class="d-grid gap-2">
                                        <a href="#"
                                            class="btn btn-outline-success btn-sm">Port
                                            your number</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Buy Fancy Number -->
                        <div class="col-md-3 col-6 mb-3">
                            <div class="card h-100 border-0 bg-transparent">
                                <div
                                    class="card-body text-center p-3 d-flex flex-column">
                                    <div
                                        class="bg-warning text-white rounded-circle mx-auto mb-3"
                                        style="width: 60px; height: 60px; line-height: 60px;">
                                        <i class="fas fa-star fa-2x"></i>
                                    </div>
                                    <h5 class="flex-grow-1">Fancy
                                        Number</h5>
                                    <div class="d-grid gap-2">
                                        <a href="#"
                                            class="btn btn-outline-warning btn-sm">Choose
                                            number</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Five Cards Section -->
        <section class="row mb-4 card-section">
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt fa-3x mb-3"></i>
                        <h5 class="card-title">Mobile</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-home fa-3x mb-3"></i>
                        <h5 class="card-title">Home</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-wifi fa-3x mb-3"></i>
                        <h5 class="card-title">Internet</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-tv fa-3x mb-3"></i>
                        <h5 class="card-title">TV</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-phone fa-3x mb-3"></i>
                        <h5 class="card-title">Contact</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-6 mb-3">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-store fa-3x mb-3"></i>
                        <h5 class="card-title">Store</h5>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Postpaid Plans Section -->
        <section class="mb-4">
            <div class="position-relative mb-3">
                <h2 class="text-center mb-0">Best Postpaid Plans</h2>
                <div class="position-absolute end-0 top-0">
                    <button class="btn btn-outline-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#locationModal">
                        <span id="selectedLocationText">Select
                            Location</span>
                        <i class="fas fa-map-marker-alt"></i>
                    </button>
                    <span id="displayLocation" class="ms-2 d-none"></span>
                </div>
            </div>

            <!-- Location Modal -->
            <div class="modal fade" id="locationModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Select Your
                                Location</h5>
                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <select class="form-select" id="locationSelect">
                                <option value>Choose your city</option>
                                <option value="New York">New York</option>
                                <option value="Los Angeles">Los
                                    Angeles</option>
                                <option value="Chicago">Chicago</option>
                                <option value="Houston">Houston</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary"
                                id="saveLocation">Save</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Plan Tabs -->
            <div class="plan-tab">
                <ul class="nav nav-tabs" id="planTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="individual-tab"
                            data-bs-toggle="tab"
                            data-bs-target="#individual" type="button"
                            role="tab">Individual Plan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="family-tab"
                            data-bs-toggle="tab" data-bs-target="#family"
                            type="button" role="tab">Family Plan</button>
                    </li>
                </ul>
                <div
                    class="tab-content p-3 border border-top-0 rounded-bottom">
                    <div class="tab-pane fade show active" id="individual"
                        role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Basic
                                            Plan</h5>
                                        <p class="card-text">$9.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Standard
                                            Plan</h5>
                                        <p
                                            class="card-text">$19.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Premium
                                            Plan</h5>
                                        <p
                                            class="card-text">$29.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="family" role="tabpanel">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Family
                                            Basic</h5>
                                        <p
                                            class="card-text">$19.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Family
                                            Plus</h5>
                                        <p
                                            class="card-text">$29.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Family
                                            Premium</h5>
                                        <p
                                            class="card-text">$39.99/month</p>
                                        <button
                                            class="btn btn-primary">Select</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-3">
                <a href="<?php echo $base_url; ?>plans.html" class="btn btn-outline-primary">View
                    All Plans</a>
            </div>
        </section>

        <!-- Help Section -->
        <section class="row mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="p-4 bg-light rounded h-100">
                    <h3>May I Help You?</h3>
                    <p>Our team is ready to assist you with any questions or
                        design needs you may have.</p>
                    <a href="<?php echo $base_url; ?>contact-us/">
                        <button class="btn btn-primary">Contact Us</button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row h-100">
                    <div class="col-12 mb-3">
                        <div class="p-3 bg-light rounded h-100">
                            <h4>FAQ</h4>
                            <p>Find answers to common questions about our
                                services and products.</p>
                            <a href="#"
                                class="btn btn-sm btn-outline-secondary">View
                                FAQs</a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-3 bg-light rounded h-100">
                            <h4>Join With Us</h4>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/"
                                    target="_blank"><i
                                        class="fab fa-facebook"></i></a>
                                <a href="https://x.com/" target="_blank"><i
                                        class="fab fa-twitter"></i></a>
                                <a href="https://www.instagram.com/"
                                    target="_blank"><i
                                        class="fab fa-instagram"></i></a>
                                <a href="https://www.youtube.com/"
                                    target="_blank"><i
                                        class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- QR Code and Address Section -->
        <section class="row mb-4">
            <div class="col-md-6 mb-3 mb-md-0">
                <div class="p-4 bg-light rounded h-100 text-center">
                    <h4>Visit Our Store</h4>
                    <img src="<?php echo $base_url; ?>assets/images/SGIhBN.png" alt="QR Code"
                        class="img-fluid mb-3">
                    <p>Scan the QR code to get directions to our nearest
                        store.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-4 bg-light rounded h-100">
                    <h4>Our Address</h4>
                    <address>
                        <strong>Company Name</strong><br>
                        123 Main Street<br>
                        City, State 12345<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                    <p> Open From<strong> Monday to Friday, 9:00 AM to 5:00
                            PM</strong></p>
                </div>
            </div>
        </section>
    </main>

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
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const locationModal = new bootstrap.Modal(document.getElementById('locationModal'));
            const saveBtn = document.getElementById('saveLocation');
            const locationSelect = document.getElementById('locationSelect');
            const selectedLocationText = document.getElementById('selectedLocationText');
            const displayLocation = document.getElementById('displayLocation');

            // Load saved location from localStorage if available
            const savedLocation = localStorage.getItem('selectedLocation');
            if (savedLocation) {
                updateLocationDisplay(savedLocation);
            }

            saveBtn.addEventListener('click', function() {
                const selectedValue = locationSelect.value;
                if (selectedValue) {
                    // Save to localStorage
                    localStorage.setItem('selectedLocation', selectedValue);

                    // Update display
                    updateLocationDisplay(selectedValue);

                    // Close modal
                    locationModal.hide();
                } else {
                    alert('Please select a location');
                }
            });

            function updateLocationDisplay(location) {
                selectedLocationText.textContent = location;
                displayLocation.textContent = `(${location})`;
                displayLocation.classList.remove('d-none');
            }
        });
    </script>
</body>

</html>