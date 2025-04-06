<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Exercises</title>
      <link rel="stylesheet" href="../assets/css/exercises.css">
      <link rel="stylesheet" href="../assets/css/home.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include '../includes/header.php'; ?>  
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
