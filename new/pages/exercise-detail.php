<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercise Detail</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #1e1e1e;
      color: #fff;
      font-family: 'Segoe UI', sans-serif;
    }

    .exercise-container {
      max-width: 900px;
      margin: 50px auto;
      padding: 20px;
    }

    .exercise-section {
      background-color: #2f2f2f;
      padding: 30px;
      margin-bottom: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .exercise-section img {
      max-width: 100%;
      border-radius: 12px;
      margin-bottom: 20px;
    }

    .exercise-section h3 {
      color: #ffce54;
      font-weight: bold;
    }

    .exercise-section p {
      font-size: 1rem;
      line-height: 1.7;
    }

    .btn-back {
      display: inline-block;
      margin-top: 20px;
      color: #fff;
      text-decoration: none;
      background-color: #007bff;
      padding: 10px 20px;
      border-radius: 8px;
    }

    .btn-back:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>

  <?php include '../includes/header.php'; ?>

  <div class="exercise-container">

    <div class="exercise-section">
      
      <div class="container exercise-detail text-white">

    <!-- Video hướng dẫn -->
    <div class="ratio ratio-16x9 mb-4">
    <iframe src="https://www.youtube.com/embed/gRVjAtPip0Y" 
            title="Bench Press Video" 
            allowfullscreen></iframe>
  </div>

      <h3>🏋️ Bench Press</h3>
      <p>The bench press is a classic upper body strength exercise focusing on chest, triceps, and shoulders.</p>
      <p><strong>Muscles worked:</strong> Chest, Shoulders, Triceps</p>
      <p><strong>Level:</strong> Intermediate</p>
    </div>

    <div class="exercise-section">
      <h3>🦵 Squats</h3>
      <p>Squats are essential for developing leg and glute strength. Great for overall lower body development.</p>
      <p><strong>Muscles worked:</strong> Quads, Hamstrings, Glutes</p>
      <p><strong>Equipment:</strong> Barbell or Dumbbells</p>
    </div>

    <div class="exercise-section">
      <h3>🏋️ Deadlift</h3>
      <p>Deadlifts are one of the most effective compound movements, engaging multiple muscle groups simultaneously.</p>
      <p><strong>Muscles worked:</strong> Back, Hamstrings, Core</p>
      <p><strong>Form Tip:</strong> Keep your back straight and core tight.</p>
    </div>

    <div class="exercise-section">
      <h3>💪 Shoulder Press</h3>
      <p>This pressing movement helps build shoulder mass and strength. Can be done seated or standing.</p>
      <p><strong>Muscles worked:</strong> Deltoids, Triceps</p>
      <p><strong>Equipment:</strong> Dumbbells or Barbell</p>
    </div>

    <div class="exercise-section">
      <img src="../assets/images/pullups.jpg" alt="Pull Ups">
      <h3>🧗 Pull Ups</h3>
      <p>Pull ups are a great bodyweight exercise to develop upper back and arm strength.</p>
      <p><strong>Muscles worked:</strong> Lats, Biceps, Core</p>
      <p><strong>Variation:</strong> Try wide grip or chin-up style for different focus.</p>
    </div>

    <a href="strength.php" class="btn-back">← Back to Strength Workouts</a>

  </div>

</body>
</html>
