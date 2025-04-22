<?php
header('Content-Type: application/json');
ob_start();
session_start();
include '../includes/db_conn.php';

if (!isset($_SESSION['user_id'])) {
    echo json_encode(['error' => 'User not logged in']);
    exit;
}

$user_id = $_SESSION['user_id'];
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? null;
$gender = $_POST['gender'] ?? '';
$weight = $_POST['weight'] ?? null;
$height = $_POST['height'] ?? null;
$email = $_POST['gmail'] ?? null;

// Kiểm tra user_info
$check = $conn->prepare("SELECT * FROM user_info WHERE user_id = ?");
$check->bind_param("i", $user_id);
$check->execute();
$check->store_result();  

if ($check->num_rows > 0) {
    $stmt = $conn->prepare("
        UPDATE user_info SET
            full_name = ?, age = ?, gender = ?, weight = ?, height = ?
        WHERE user_id = ?
    ");
    $stmt->bind_param("sisdsi", $name, $age, $gender, $weight, $height, $user_id);
} else {
    $stmt = $conn->prepare("
        INSERT INTO user_info (user_id, full_name, age, gender, weight, height)
        VALUES (?, ?, ?, ?, ?, ?)
    ");
    $stmt->bind_param("isidii", $user_id, $name, $age, $gender, $weight, $height);
}

$stmt1 = $conn->prepare("
    UPDATE users SET email = ? WHERE id = ?
");
$stmt1->bind_param("si", $email, $user_id);

if ($stmt->execute() && $stmt1->execute()) {
    header("Location: ../index.php");
    exit;
} else {
    echo json_encode(['error' => 'Save failed', 'detail' => $stmt->error . ' / ' . $stmt1->error]);
}
?>
