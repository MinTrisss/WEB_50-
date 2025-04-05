<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercises</title>
      <link rel="stylesheet" href="../assets/css/home.css">
      <link rel="stylesheet" href="../assets/css/exercises.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<header>
        <div class="header d-flex text-white-65">
              <div class="p-3 flex-fill align-items-center">
                    <img src="assets/images/1813361.png" alt="">
              </div>
              <div class="p-3 d-flex flex-fill flex-row-reverse ">
                    <a class="p-3 flex-fill nav-link active" href="../pages/login.php">LOG IN</a>
                    <div class="flex-fill">
                          <a class="p-3 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">EXPLORE</a>   
                          <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dashboard</a></li>
                                <li><a class="dropdown-item" href="#">Workout log</a></li>
                                <li><a class="dropdown-item" href="#">Goals</a></li>
                                <li><a class="dropdown-item" href="../pages/bmi.php">BMI</a></li>
                                <li><a class="dropdown-item" href="pages/exercises.php">Excercises</a></li>
                    </ul> 
                    </div>       
                    <a class="p-3 flex-fill nav-link active" href="#">ABOUT</a>
                    <a class="p-3 flex-fill nav-link active" href="../index.php">HOME</a>
              </div>
        </div>
      </header>
      
      <div class="container mt-5">
            <h2 class="text-center">Exercises</h2>
            <div class="row">
                  <div class="col-md-4">
                        <div class="card">
                              <img src="/FE/STATIC/images/push.jpg" class="card-img-top" alt="Push Exercises">
                              <div class="card-body">
                                    <h5 class="card-title">Push Day</h5>
                                    <p class="card-text">Exercises for chest, shoulders, and triceps.</p>
                                    <a href="/FE/TEMPLATES/push.html" class="btn btn-primary">View Workouts</a>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="card">
                              <img src="/FE/STATIC/images/pull.jpg" class="card-img-top" alt="Pull Exercises">
                              <div class="card-body">
                                    <h5 class="card-title">Pull Day</h5>
                                    <p class="card-text">Exercises for back and biceps.</p>
                                    <a href="/FE/TEMPLATES/pull.html" class="btn btn-primary">View Workouts</a>
                              </div>
                        </div>
                  </div>
                  <div class="col-md-4">
                        <div class="card">
                              <img src="/FE/STATIC/images/leg.jpg" class="card-img-top" alt="Leg Exercises">
                              <div class="card-body">
                                    <h5 class="card-title">Leg Day</h5>
                                    <p class="card-text">Exercises for legs and glutes.</p>
                                    <a href="/FE/TEMPLATES/leg.html" class="btn btn-primary">View Workouts</a>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      
</body>
<?php include '../includes/footer.php'; ?>
</html>
