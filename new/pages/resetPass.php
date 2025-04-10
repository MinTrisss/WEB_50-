<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  <link rel="stylesheet" href="../assets/css/login.css">
</head>
<body>
  <div class="login-container">
    <div>
      <button type="button" class="out-btn" onclick="window.history.back();">X</button>
    </div>
    <h2>Reset Password</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="hidden" name="user_id" value="<?php echo $_GET['user_id']; ?>">

      <div class="input-group">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" required>
      </div>
      <div class="input-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" required>
      </div>
      <button type="submit" name="submit" class="signin-btn">Reset</button>
    </form>
  </div>
</body>

<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'fit_life');

    $user_id = $_POST['user_id'];
    $new_password = $_POST['new_password'];
    $confirm_pass = $_POST['confirm_password'];

    if ($new_password === $confirm_pass) {
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        $query = "UPDATE users SET password = '$hashed_password' WHERE id = $user_id";
        if (mysqli_query($conn, $query)) {
            header("Location: login.php");
            exit();
        } else {
            echo "<script>alert('Update failed.');</script>";
        }
    } else {
            echo "<p style='text-align:center;color:red;'>Account not found!</p>";
    }

    mysqli_close($conn);
}
?>
</html>
