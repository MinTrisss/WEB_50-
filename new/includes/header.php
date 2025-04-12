<?php
session_start();
$isLoggedIn = isset($_SESSION['user_id']);
$username = $_SESSION['username'] ?? '';
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <?= $isLoggedIn ? "Welcome $username to FIT LIFE" : "FIT LIFE" ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav text-end">
        <li class="nav-item">
          <a class="nav-link active" href="../index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="../pages/about.php">ABOUT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../pages/workout.php">Workout log</a></li>
            <li><a class="dropdown-item" href="../pages/goals.php">Goals</a></li>
            <li><a class="dropdown-item" href="../pages/bmi.php">BMI</a></li>
            <li><a class="dropdown-item" href="../pages/exercises.php">Exercises</a></li>
          </ul>
        </li>
        <?php if ($isLoggedIn): ?>
          <li class="nav-item dropdown " style="list-style: none;">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <?= $username ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="../pages/profile.php">My Profile</a></li>
              <li><a class="dropdown-item" href="../pages/logout.php">Logout</a></li>
            </ul>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link active" href="../pages/login.php">LOG IN</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
