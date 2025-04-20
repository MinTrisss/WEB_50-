<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

session_start();
header('Content-Type: application/json'); // Thêm dòng này để trình duyệt biết là JSON

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'Not logged in']);
    exit;
}

include '../includes/db_conn.php';

$user_id = $_SESSION['user_id'];
$sql1 = "SELECT full_name, age, gender, height, weight FROM user_info WHERE user_id = $user_id";
$result1 = mysqli_query($conn, $sql1);
$user_info = mysqli_fetch_assoc($result1);

$sql2 = "SELECT email FROM users WHERE id = $user_id";
$result2 = mysqli_query($conn, $sql2);
$user_email = mysqli_fetch_assoc($result2);

if ($user_info && $user_email) {
    echo json_encode(array_merge($user_info, $user_email));
} else {
    echo json_encode(['error' => 'No user info found']);
}
?>
