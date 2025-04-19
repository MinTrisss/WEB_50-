<?php
$query = isset($_GET['query']) ? strtolower(trim($_GET['query'])) : '';

$workouts = [
  'Bench Press',
  'Deadlift',
  'Squats',
  'Plank',
  'Burpees',
  'Mountain Climbers',
  'Pull Ups',
  'Shoulder Press',
  'Jumping Jacks',
  'Bodyweight Squats',
  'High Knees'
];

$suggestions = [];

foreach ($workouts as $item) {
  if (stripos($item, $query) !== false) {
    $suggestions[] = $item;
  }
}

header('Content-Type: application/json');
echo json_encode($suggestions);
