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

  <?php require_once 'config.php'; ?>

  <!-- Handle form submission -->
  <?php
  if (isset($_POST['addBtn']) && !empty($_POST['numberInput'])) {
    $input = $conn->real_escape_string($_POST['numberInput']);
    $digits = preg_replace('/\D/', '', $input);
    $sum = array_sum(str_split($digits));

    // Get and validate price
    $price = isset($_POST['priceInput']) ? $_POST['priceInput'] : '100.00';

    // Proper price validation
    if (!preg_match('/^\d+\.\d{2}$/', $price)) {
      die(json_encode(['success' => false, 'message' => 'Invalid price format']));
    }

    $price = $conn->real_escape_string($price);

    // Insert into database
    $sql = "INSERT INTO number_entries (number_input, digit_sum, price) VALUES ('$input', '$sum', '$price')";
    if ($conn->query($sql)) {
      // header("Location: " . $_SERVER['PHP_SELF']);
      // exit();
    } else {
      $insert_error = "Error: " . $conn->error;
    }
  }

  // NEW: Get total count for pagination info
  $totalCount = $conn->query("SELECT COUNT(*) as total FROM number_entries")->fetch_assoc()['total'];
  $totalPages = ceil($totalCount / 5);
  ?>

  <div class="container py-5">
    <div class="row">
      <!-- Left Column - Digit Calculator -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="card shadow h-100">
          <div class="card-header bg-primary text-white">
            <h1 class="h4 mb-0">Digit Sum Calculator</h1>
          </div>

          <div class="card-body">
            <?php if (isset($insert_error)): ?>
              <div class="alert alert-danger"><?php echo $insert_error; ?></div>
            <?php endif; ?>

            <form method="post" action="">
              <div class="mb-4">
                <label for="numberInput" class="form-label">Enter numbers (digits will be summed individually)</label>
                <div class="input-group">
                  <input
                    type="text"
                    id="numberInput"
                    name="numberInput"
                    class="form-control"
                    placeholder="Type numbers here..."
                    required>
                  <button class="btn btn-primary" type="submit" name="addBtn" id="addBtn" style="width: 120px;">
                    <i class="bi bi-plus-lg"></i> Add
                  </button>
                </div>
              </div>
              <input type="hidden" name="priceInput" value="100.00">
            </form>

            <div class="alert alert-success" id="resultAlert">
              <h4 class="alert-heading">Digit Sum</h4>
              <div id="runningTotal" class="display-4">0</div>
              <hr>
              <p class="mb-0" id="calculationDetails">No digits entered</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column - Display stored data -->
      <div class="col-md-6">
        <div class="card shadow h-100">
          <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
            <h1 class="h4 mb-0">Stored Entries</h1>
            <div class="pagination-controls">
              <button class="btn btn-sm btn-outline-light prev-btn" disabled>
                <i class="bi bi-chevron-left"></i> Prev
              </button>
              <span class="mx-2 page-info">Page 1 of <?php echo $totalPages; ?></span>
              <button class="btn btn-sm btn-outline-light next-btn" <?php echo $totalPages <= 1 ? 'disabled' : ''; ?>>
                Next <i class="bi bi-chevron-right"></i>
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Number</th>
                    <th>Digit Sum</th>
                    <th>Price (₹)</th>
                    <th>Time</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody id="entriesTableBody">
                  <?php
                  // Fetch first page entries
                  $sql = "SELECT * FROM number_entries ORDER BY created_at DESC LIMIT 5";
                  $result = $conn->query($sql);

                  if ($result && $result->num_rows > 0) {
                    while ($entry = $result->fetch_assoc()) {
                      echo "<tr id='entry-{$entry['id']}'>";
                      echo "<td>{$entry['number_input']}</td>";
                      echo "<td class='digit-sum'>{$entry['digit_sum']}</td>";
                      echo "<td>₹" . number_format($entry['price'], 2) . "</td>";
                      echo "<td>{$entry['created_at']}</td>";
                      echo "<td>
                                        <button class='btn btn-sm btn-warning edit-btn' 
                                                data-id='{$entry['id']}'
                                                data-number='{$entry['number_input']}'
                                                data-price='{$entry['price']}'>
                                            <i class='bi bi-pencil'></i> Edit
                                        </button>
                                        <button class='btn btn-sm btn-danger delete-btn' 
                                                data-id='{$entry['id']}'>
                                            <i class='bi bi-trash'></i> Delete
                                        </button>
                                      </td>";
                      echo "</tr>";
                    }
                  } else {
                    echo "<tr><td colspan='5' class='text-center'>No entries yet</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Entry</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editForm">
            <input type="hidden" id="editId">
            <div class="mb-3">
              <label for="editNumber" class="form-label">Number</label>
              <input type="text" class="form-control" id="editNumber" required>
            </div>
            <div class="mb-3">
              <label for="editPrice" class="form-label">Price (₹)</label>
              <input type="number" step="0.01" class="form-control" id="editPrice" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Confirm Delete</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this entry? This action cannot be undone.</p>
          <input type="hidden" id="deleteId">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Real-time digit sum calculation
    const numberInput = document.getElementById('numberInput');
    const runningTotal = document.getElementById('runningTotal');
    const calculationDetails = document.getElementById('calculationDetails');

    numberInput.addEventListener('input', function() {
      const input = this.value;
      const digits = input.replace(/\D/g, '').split('');
      const numbers = digits.map(d => parseInt(d));
      const sum = numbers.reduce((acc, num) => acc + num, 0);

      runningTotal.textContent = sum;

      if (numbers.length > 0) {
        calculationDetails.textContent = `Digits entered: ${numbers.join(', ')} | Calculation: ${numbers.join(' + ')} = ${sum}`;
        runningTotal.className = numbers.length === 1 ? 'display-4 text-primary' : 'display-4 text-success';
      } else {
        calculationDetails.textContent = 'No digits entered';
        runningTotal.className = 'display-4';
      }
    });

    // Main functionality with pagination
    $(document).ready(function() {
      // Initialize modals
      var editModal = new bootstrap.Modal(document.getElementById('editModal'));
      var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));

      // Pagination variables
      let currentPage = 1;
      let totalPages = <?php echo $totalPages; ?>;

      // Load initial data
      loadPageData(currentPage);

      // Pagination functions
      function loadPageData(page) {
        $.ajax({
          url: 'get_entries.php?page=' + page,
          type: 'GET',
          dataType: 'json',
          success: function(data) {
            if (data.success) {
              const tableBody = $('#entriesTableBody');
              tableBody.empty();

              if (data.entries.length > 0) {
                data.entries.forEach(entry => {
                  tableBody.append(`
                    <tr id="entry-${entry.id}">
                      <td>${entry.number_input}</td>
                      <td class="digit-sum">${entry.digit_sum}</td>
                      <td>₹${parseFloat(entry.price).toFixed(2)}</td>
                      <td>${entry.created_at}</td>
                      <td>
                        <button class="btn btn-sm btn-warning edit-btn" 
                                data-id="${entry.id}"
                                data-number="${entry.number_input}"
                                data-price="${entry.price}">
                          <i class="bi bi-pencil"></i> E
                        </button>
                        <button class="btn btn-sm btn-danger delete-btn" 
                                data-id="${entry.id}">
                          <i class="bi bi-trash"></i> D
                        </button>
                      </td>
                    </tr>
                  `);
                });
              } else {
                tableBody.append('<tr><td colspan="5" class="text-center">No entries found</td></tr>');
              }

              currentPage = page;
              totalPages = data.totalPages;
              updatePaginationControls();
            }
          },
          error: function(xhr) {
            console.error("Error loading page:", xhr.responseText);
            alert('Error loading data');
          }
        });
      }

      function updatePaginationControls() {
        $('.page-info').text(`Page ${currentPage} of ${totalPages}`);
        $('.prev-btn').prop('disabled', currentPage <= 1);
        $('.next-btn').prop('disabled', currentPage >= totalPages);
      }

      // Pagination button handlers
      $(document).on('click', '.next-btn', function() {
        if (currentPage < totalPages) {
          loadPageData(currentPage + 1);
        }
      });

      $(document).on('click', '.prev-btn', function() {
        if (currentPage > 1) {
          loadPageData(currentPage - 1);
        }
      });

      // Edit button click handler
      $(document).on('click', '.edit-btn', function() {
        var id = $(this).data('id');
        var number = $(this).data('number');
        var price = $(this).data('price');

        $('#editId').val(id);
        $('#editNumber').val(number);
        $('#editPrice').val(price);

        editModal.show();
      });

      // Save changes button - MODIFIED to refresh page after edit
      $('#saveChangesBtn').click(function() {
        var id = $('#editId').val();
        var number = $('#editNumber').val();
        var price = $('#editPrice').val();

        if (!number || !price) {
          alert('Please fill all fields');
          return;
        }

        $.ajax({
          url: 'update_entry.php',
          type: 'POST',
          dataType: 'json',
          data: {
            id: id,
            number: number,
            price: price
          },
          success: function(data) {
            if (data.success) {
              loadPageData(currentPage); // Refresh current page after edit
              editModal.hide();
            } else {
              alert('Error: ' + data.message);
            }
          },
          error: function(xhr) {
            try {
              var response = JSON.parse(xhr.responseText);
              alert('Error: ' + (response.message || xhr.statusText));
            } catch (e) {
              alert('Error: Invalid server response');
            }
          }
        });
      });

      // Delete button click handler - MODIFIED to refresh page after delete
      $(document).on('click', '.delete-btn', function() {
        var id = $(this).data('id');
        $('#deleteId').val(id);
        deleteModal.show();
      });

      // Confirm delete button
      $('#confirmDeleteBtn').click(function() {
        var id = $('#deleteId').val();

        $.ajax({
          url: 'delete_entry.php',
          type: 'POST',
          dataType: 'json',
          data: {
            id: id
          },
          success: function(data) {
            if (data.success) {
              loadPageData(currentPage); // Refresh current page after delete
              deleteModal.hide();
            } else {
              alert('Error: ' + data.message);
            }
          },
          error: function(xhr) {
            try {
              var response = JSON.parse(xhr.responseText);
              alert('Error: ' + (response.message || xhr.statusText));
            } catch (e) {
              alert('Error: Invalid server response');
            }
          }
        });
      });

      // Handle form submission for new entries
      $(document).on('submit', 'form', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
          url: '',
          type: 'POST',
          data: formData,
          success: function() {
            loadPageData(1); // Always go to first page after adding new entry
            $('#numberInput').val(''); // Clear input
            runningTotal.textContent = '0'; // Reset counter
            calculationDetails.textContent = 'No digits entered';
          },
          error: function(xhr) {
            alert('Error adding entry');
          }
        });
      });
    });
  </script>

</body>

</html>