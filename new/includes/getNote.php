<?php
session_start();
$conn = mysqli_connect("127.0.0.1", "root", "", "fit_life");
$user_id = $_SESSION['user_id'];

$sql = "SELECT * FROM notes WHERE user_id = $user_id";
$result = mysqli_query($conn, $sql);

$events = [];
while ($row = mysqli_fetch_assoc($result)) {
    $events[] = [
        "id" => $row['id'],
        "title" => $row['content'],
        "start" => $row['note_date']
    ];
}
echo json_encode($events);
