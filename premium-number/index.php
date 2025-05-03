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

  <!-- Body Section Start -->

  <div class="container py-5">
    <div class="row">
      <!-- Left Column - Digit Calculator -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="card shadow h-100">
          <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Digit Sum Calculator</h1>
          </div>

          <div class="card-body">
            <div class="mb-4">
              <label for="numberInput" class="form-label">Enter numbers (digits will be summed individually)</label>
              <div class="input-group">
                <input
                  type="text"
                  id="numberInput"
                  class="form-control"
                  placeholder="Type numbers here...">
                <button class="btn btn-primary" type="button" id="addBtn" style="width: 120px;">
                  <i class="bi bi-x-lg"></i> Add
                </button>
              </div>
            </div>

            <div class="alert alert-success" id="resultAlert">
              <h4 class="alert-heading">Digit Sum</h4>
              <div id="runningTotal" class="display-4">0</div>
              <hr>
              <p class="mb-0" id="calculationDetails">No digits entered</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Empty (for future content) -->
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-header bg-secondary text-white">
            <h1 class="h4 mb-0">Additional Calculator</h1>
          </div>

          <div class="card-body d-flex align-items-center justify-content-center">
            <div class="text-center text-muted">
              <i class="bi bi-layout-text-sidebar-reverse" style="font-size: 3rem;"></i>
              <p class="mt-3">Future content will appear here</p>
            </div>
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

  <!-- Total Sum of Number's -->
  <script>
    const numberInput = document.getElementById('numberInput');
    const runningTotal = document.getElementById('runningTotal');
    const calculationDetails = document.getElementById('calculationDetails');

    numberInput.addEventListener('input', function() {
      // Get input and extract all digits
      const input = this.value;
      const digits = input.replace(/\D/g, '').split('');
      const numbers = digits.map(d => parseInt(d));

      // Calculate sum
      const sum = numbers.reduce((acc, num) => acc + num, 0);

      // Update display
      runningTotal.textContent = sum;

      if (numbers.length > 0) {
        calculationDetails.textContent =
          `Digits entered: ${numbers.join(', ')} | Calculation: ${numbers.join(' + ')} = ${sum}`;

        // Visual feedback
        if (numbers.length === 1) {
          runningTotal.className = 'display-4 text-primary';
        } else {
          runningTotal.className = 'display-4 text-success';
        }
      } else {
        calculationDetails.textContent = 'No digits entered';
        runningTotal.className = 'display-4';
      }
    });
  </script>

</body>

</html>