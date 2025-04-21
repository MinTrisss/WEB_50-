<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? '';
$gmail = $_SESSION['email'] ?? '';
?>



<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="assets/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">
            <?= $isLoggedIn ? "Welcome $username to FIT LIFE" : "FIT LIFE" ?>
      </a>

      <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
      </div>

      <div class="navbar-nav flex-column flex-lg-row gap-2">
        <!-- ms-auto đẩy sang phải, flex-column ở mobile, flex-lg-row ở desktop -->
        <!-- Mỗi thẻ <li> thành <div> để tránh lỗi Bootstrap class -->
        <div class="nav-item">
            <a class="nav-link active" href="./index.php">HOME</a>
        </div>
        <div class="nav-item">
            <a class="nav-link active" href="pages/about.php">ABOUT</a>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">EXPLORE</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="pages/workout.php">Workout log</a>
                <a class="dropdown-item" href="pages/bmi.php">BMI</a>
                <a class="dropdown-item" href="pages/exercises.php">Exercises</a>
            </div>
        </div>

            <?php if ($isLoggedIn): ?>
            <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= $username ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="userDropdown" style="min-width: 250px;">
                        <li><strong>Personal information</strong></li>
                        <li><hr class="dropdown-divider"></li>
                        <!-- Hiển thị thông tin người dùng -->
                        <li id="user-info">
                        <span id="user-info-loading">Loading...</span>
                        </li>
                        <!-- Thêm thông tin -->
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="pages/changePass.php">Change password</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><button id="add-info-btn" class="dropdown-item text-danger">Edit information</button></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="pages/logout.php">Log out</a></li>
                  </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="pages/login.php">LOG IN</a>
            </li>
            <?php endif; ?>
            </ul>
      </div>
    </div>
  </nav>
</header>
<!-- Search Bar Section -->
<div class="container my-5">
  <form action="pages/search.php" method="GET" class="d-flex position-relative search-form" role="search">
    <input class="form-control me-2" type="search" placeholder="Search workouts..." 
          aria-label="Search" name="query" id="searchInput" autocomplete="off" onkeyup="fetchSuggestions()">
    <ul id="suggestionsBox" class="list-group position-absolute w-100" style="top: 100%; z-index: 1000;"></ul>
    <button class="btn btn-outline-warning" type="submit">Search</button>
  </form>
</div>
<div class="body-img">
      <img src="assets/images/photo-1544033527-b192daee1f5b.jpeg" alt="">
</div>

<!-- Modal Add User Information -->
<div class="modal fade" id="addInfoModal" tabindex="-1" aria-labelledby="addInfoModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInfoModalLabel">Edit personal information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="updateForm" action="update_user_info.php" method="POST">
          <div class="mb-3">
            <label for="gmail" class="form-label">Gmail:</label>
            <input type="text" class="form-control" id="gmail" name="gmail" required>
          </div>
          <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="number" class="form-control" id="age" name="age" required>
          </div>
          <div class="mb-3">
            <label for="gender" class="form-label">Gender:</label>
            <select class="form-select" id="gender" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="weight" class="form-label">Weight:</label>
            <input type="number" class="form-control" id="weight" name="weight" required>
          </div>
          <div class="mb-3">
            <label for="height" class="form-label">Height:</label>
            <input type="number" class="form-control" id="height" name="height" required>
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
        <div id="updateMsg" class="mt-2 text-success"></div>
      </div>
    </div>
  </div>
</div>

<!-- add information and edit -->
<script src="assets/js/script.js"></script> 
</body>
<?php include 'includes/footer.php'; ?>
</html>