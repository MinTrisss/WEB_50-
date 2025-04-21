<?php
session_start();
$user_id = $_SESSION['user_id'] ?? null;
if (isset($_POST['submit'])) {
  include '../includes/db_conn.php';

  $old_password = $_POST['old_password'];

  // Truy vấn an toàn với prepared statement
  $query = "SELECT password FROM users WHERE id = ?";
  $stmt = mysqli_prepare($conn, $query);

  if ($stmt) {
    // Gán giá trị vào placeholder ?
    mysqli_stmt_bind_param($stmt, "i", $user_id);

    // Thực thi truy vấn
    mysqli_stmt_execute($stmt);

    // Lấy kết quả trả về
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
      $hashed_password = $row['password'];

      if (password_verify($old_password, $hashed_password)) {
        header("Location: resetPass.php?user_id=" . $user_id);
        exit();
      } else {
        $error="Wrong current password.";
      }
    } else {
      $error="User not found.";
    }

    mysqli_stmt_close($stmt);
  } else {
    echo "<p style='text-align:center;color:red;'>SQL Prepare Failed</p>";
  }

  mysqli_close($conn);
}
?>

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
    <h2>Change Password</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">


      <div class="input-group">
        <label for="old_password">Your Password</label>
        <input type="password" name="old_password" required>
        <?php if (!empty($error)): ?>
                    <p style="color: red; margin-top: 5px;"><?php echo $error; ?></p>
        <?php endif; ?>
      </div>
      <button type="submit" name="submit" class="signin-btn">Confirm</button>
    </form>
  </div>
</body>
</html>
