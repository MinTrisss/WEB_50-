<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? '';
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
      <?php include 'Location: '; ?>

</head>
<body>
<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">
            <?= $isLoggedIn ? "Welcome $username to FIT LIFE" : "FIT LIFE" ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" href="./index.php">HOME</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" href="pages/about.php">ABOUT</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">EXPLORE</a>
            <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pages/workout.php">Workout log</a></li>
                  <li><a class="dropdown-item" href="pages/goals.php">Goals</a></li>
                  <li><a class="dropdown-item" href="pages/bmi.php">BMI</a></li>
                  <li><a class="dropdown-item" href="pages/exercises.php">Exercises</a></li>
            </ul>
            </li>

            <?php if ($isLoggedIn): ?>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><?= $username ?></a>
            <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="../pages/profile.php">My Profile</a></li>
                  <li><a class="dropdown-item" href="../pages/logout.php">Logout</a></li>
            </ul>
            </li>
            <?php else: ?>
            <li class="nav-item">
            <a class="nav-link" href="../pages/login.php">LOG IN</a>
            </li>
            <?php endif; ?>
            </ul>
      </div>
      </div>
      </nav>
      </header>
<div class="body-img">
      <img src="assets/images/photo-1544033527-b192daee1f5b.jpeg" alt="">
</div>

</body>
<?php include 'includes/footer.php'; ?>
</html>
