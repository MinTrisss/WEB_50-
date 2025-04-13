<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Strength Workouts</title>
  <link rel="stylesheet" href="../assets/css/goal-style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .workout-section {
      padding: 60px 0;
    }
    .workout-card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.1);
      transition: 0.3s ease;
    }
    .workout-card:hover {
      transform: scale(1.03);
    }
  </style>
</head>
<body>

  <div class="container workout-section">
    <h2 class="text-center mb-5">Strength Workouts</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card workout-card">
          <div class="card-body">
            <h5 class="card-title">Bench Press</h5>
            <p class="card-text">Classic chest press to build upper body strength.</p>
            <a href="exercise-detail.php" class="btn btn-primary">View Exercise</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card workout-card">
          <div class="card-body">
            <h5 class="card-title">Deadlift</h5>
            <p class="card-text">Full-body compound lift focusing on back and legs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card workout-card">
          <div class="card-body">
            <h5 class="card-title">Overhead Press</h5>
            <p class="card-text">Shoulder-strengthening exercise with barbell or dumbbells.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

    <a href="exercises.php" class="btn-back">← Back to Exercises</a>

    </div>
</body>
</html>
