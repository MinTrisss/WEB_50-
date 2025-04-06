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
        <div class="header d-flex text-white-65">
              <div class="p-3 d-flex flex-fill align-items-center justify-content-center">
                    <h2>FIT LIFE</h2>
              </div>
              <div class="p-3 d-flex flex-fill flex-row-reverse ">
                    <a class="p-3 flex-fill nav-link active" href="pages/login.php">LOG IN</a>
                    <div class="flex-fill">
                          <a class="p-3 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE</a>   
                          <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="pages/dashboasrd.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="pages/workout.php">Workout log</a></li>
                                <li><a class="dropdown-item" href="pages/goals.php">Goals</a></li>
                                <li><a class="dropdown-item" href="pages/bmi.php">BMI</a></li>
                                <li><a class="dropdown-item" href="pages/exercises.php">Excercises</a></li>
                    </ul> 
                    </div>       
                    <a class="p-3 flex-fill nav-link active" href="pages/about.php">ABOUT</a>
                    <a class="p-3 flex-fill nav-link active" href="./index.php">HOME</a>
              </div>
        </div>
      </header>
<div class="body-img">
      <img src="assets/images/photo-1544033527-b192daee1f5b.jpeg" alt="">
</div>

</body>
<?php include 'includes/footer.php'; ?>
</html>
