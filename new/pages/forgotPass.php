<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Forgot password</title>
    <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body?>
<div class="login-container">
    <div >
        <button type="button" class="out-btn" onclick="window.history.back();">X</button>
    </div>
    <h2>Forgot password</h2>
    <form method="POST" action="">
        <div class="input-group">
            <label>Enter Email or Username:</label>
            <input type="text" name="identifier" required>
        </div>
        <button type="submit" name="submit" class="signin-btn">Send requirement</button>
    </form>
</div>

<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'fit_life');
    $identifier = mysqli_real_escape_string($conn, $_POST['identifier']);

    $query = "SELECT * FROM users WHERE username = '$identifier' OR email = '$identifier'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        header("Location: resetPass.php?user_id=" . $user['id']);
        exit();
    } else {
        echo "<p style='text-align:center;color:red;'>Account not found!</p>";
    }

    mysqli_close($conn);
}
?>
</body>