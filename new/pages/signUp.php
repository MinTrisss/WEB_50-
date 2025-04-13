<?php 
  $conn = mysqli_connect('127.0.0.1', 'root', '', 'fit_life');
  if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  }

  if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($conn, $_POST['username']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        $hashed_password = password_hash($password, PASSWORD_DEFAULT); //ma hoa mat khau
        
        $sql = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
          $error = "Username or Email existed!";
        }
        else {
              $sql = "INSERT INTO users (username, email, password, provider) VALUES ('$username', '$email', '$hashed_password', 'local')";

              if (mysqli_query($conn, $sql)) {
                    header("Location: login.php");
                    exit();
              } else {
                    echo "Error: " . mysqli_error($conn);
              }
        }
  }

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="../assets/css/login.css">
  <link rel="stylesheet" href="../assets/themify-icons/themify-icons.css">
</head>
<body>
  <div class="login-container">
    <div>
      <button type="button" class="out-btn" onclick="window.history.back();">X</button>
    </div>
    <h2>Sign Up</h2>
    <form method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <?php if (!empty($error)): ?>
            <p style="color: red; margin-top: 5px;"><?php echo $error; ?></p>
        <?php endif; ?>
      </div>
      <button type="submit" class="signin-btn" name="submit">Sign Up</button>
    </form>
    <p class="signup-text">Already have an account? <a href="../pages/login.php">Login</a></p>
  </div>
  
</body>
</html>


