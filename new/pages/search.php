<?php
  $query = isset($_GET['query']) ? trim($_GET['query']) : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: #1e1e1e;
      color: white;
      font-family: 'Segoe UI', sans-serif;
    }

    .container {
      padding-top: 60px;
    }

    .result-box {
      background-color: #2f2f2f;
      padding: 30px;
      margin-bottom: 30px;
      border-radius: 12px;
    }

    .result-box h4 {
      color: #ffce54;
    }
  </style>
</head>
<body>

  <?php include '../includes/header.php'; ?>

  <div class="container">
    <h2 class="text-center mb-5">Search Results for: <em><?= htmlspecialchars($query) ?></em></h2>

    <?php
      // Dữ liệu mẫu (mô phỏng tìm kiếm)
      $workouts = [
        [
          'title' => 'Bench Press',
          'description' => 'Classic strength workout for upper body.',
          'link' => 'strength.php'
        ],
        [
          'title' => 'Jumping Jacks',
          'description' => 'Great warm-up for full-body cardio.',
          'link' => 'physical-fitness.php'
        ],
        [
          'title' => 'Deadlift',
          'description' => 'Powerful compound movement for the posterior chain.',
          'link' => 'strength.php'
        ],
        [
          'title' => 'Plank',
          'description' => 'Hold this position to strengthen your core.',
          'link' => 'physical-fitness.php'
        ],
        [
            'title' => 'Mountain Climbers',
            'description' => 'Dynamic, full-body exercise that builds core strength and cardiovascular endurance.',
            'link' => 'physical-fitness.php'
        ],
        [
            'title' => 'Burpees',
            'description' => 'A high-intensity move combining squats, pushups, and jumps for full-body strength and stamina.',
            'link' => 'physical-fitness.php'
        ],
        [
            'title' => 'High Knees',
            'description' => 'A cardio-intensive move that engages your core, improves coordination, and burns calories.',
            'link' => 'physical-fitness.php'
        ],
        [
            'title' => 'Bodyweight Squats',
            'description' => 'A functional movement to strengthen your quads, glutes, and hamstrings with no equipment.',
            'link' => 'physical-fitness.php'
        ],
        [
            'title' => 'Shoulder Press',
            'description' => 'Build shoulder mass and strength. Can be done seated or standing.',
            'link' => 'strength.php'
        ],
        [
            'title' => 'Pull Ups',
            'description' => 'A great bodyweight exercise to develop upper back and arm strength.',
            'link' => 'strength.php'
        ],
        [
            'title' => 'HIIT',
            'description' => 'High-Intensity Interval Training (HIIT) alternates short bursts of intense exercise with recovery periods.',
            'link' => 'fatloss.php'
        ],
        [
            'title' => 'Jump Rope',
            'description' => 'Jumping rope is a quick, full-body cardio exercise that burns major calories in minimal time.',
            'link' => 'fatloss.php'
        ],
        [
            'title' => 'Jump Squats',
            'description' => 'Build strength while increasing heart rate, perfect for fat loss and muscle toning.',
            'link' => 'fatloss.php'
        ],
        [
            'title' => 'Bicycle crunches',
            'description' => 'Bicycle crunches engage your core and obliques to build abdominal strength and burn fat.',
            'link' => 'fatloss.php'
        ],
        [
            'title' => 'Barbell Row',
            'description' => 'helps develop back and biceps muscles, extremely effective for those who want to increase thick back muscles.',
            'link' => 'weightgain.php'
        ],
        [
            'title' => 'Incline Dumbbell Press',
            'description' => 'Focus on the upper chest, helping you develop a muscular upper body.',
            'link' => 'weightgain.php'
        ],
        [
            'title' => 'Dumbbell Lunges',
            'description' => 'This is a simple but very effective exercise in developing glutes and legs with dumbbells.',
            'link' => 'weightgain.php'
        ],
        [
            'title' => 'Dumbbell Shoulder Press',
            'description' => 'This is a great exercise to develop the shoulder muscles, can be done sitting or standing depending on your preference.',
            'link' => 'weightgain.php'
        ],
      ];

      $resultsFound = false;

      foreach ($workouts as $item) {
        if (stripos($item['title'], $query) !== false || stripos($item['description'], $query) !== false) {
          $resultsFound = true;
          echo '
            <div class="result-box">
              <h4>' . htmlspecialchars($item['title']) . '</h4>
              <p>' . htmlspecialchars($item['description']) . '</p>
              <a href="' . $item['link'] . '" class="btn btn-warning btn-sm">View Workout</a>
            </div>
          ';
        }
      }

      if (!$resultsFound) {
        echo '<p class="text-center">No results found.</p>';
      }
    ?>
    
    <div class="text-center mt-4">
      <a href="../index.php" class="btn btn-secondary">← Back to Home</a>
    </div>
  </div>

</body>
</html>
