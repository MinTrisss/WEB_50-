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
  <style>
    .exercise-card img {
      height: 200px;
      object-fit: cover;
    }

    .exercise-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .exercise-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body>
<?php include '../includes/header.php'; ?>  

  <div class="container mt-5">
    <h2 class="text-center mb-4">Fitness Goals</h2>
    <div class="row g-4">
      <div class="col-md-3">
        <div class="card exercise-card">
          <img src="../assets/images/strength.png" class="card-img-top" alt="Strength">
          <div class="card-body">
            <h5 class="card-title">Strength</h5>
            <p class="card-text">Workouts focused on building muscle power and endurance.</p>
            <a href="#" class="btn btn-primary">View Workouts</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card exercise-card">
          <img src="../assets/images/fitness.png" class="card-img-top" alt="Physical Fitness">
          <div class="card-body">
            <h5 class="card-title">Physical Fitness</h5>
            <p class="card-text">Overall fitness routines to improve stamina and flexibility.</p>
            <a href="#" class="btn btn-primary">View Workouts</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card exercise-card">
          <img src="../assets/images/fatloss.png" class="card-img-top" alt="Fat Loss">
          <div class="card-body">
            <h5 class="card-title">Fat Loss</h5>
            <p class="card-text">Cardio and HIIT workouts designed to burn fat efficiently.</p>
            <a href="#" class="btn btn-primary">View Workouts</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card exercise-card">
          <img src="../assets/images/weightgain.png" class="card-img-top" alt="Weight Gain">
          <div class="card-body">
            <h5 class="card-title">Weight Gain</h5>
            <p class="card-text">Mass-building routines for healthy weight and muscle gain.</p>
            <a href="#" class="btn btn-primary">View Workouts</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php include '../includes/footer.php'; ?>  
</body>
</html>
