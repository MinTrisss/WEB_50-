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
$sql = "SELECT full_name, age, gender, height, weight FROM user_info WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
} else {
    echo json_encode(['error' => 'No user info found']);
}
?>
