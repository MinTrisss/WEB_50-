<?php
session_start();

// connect database
$conn = mysqli_connect('127.0.0.1', 'root', '', 'fit_life');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$error = ''; 

if (isset($_POST['submit'])) {
    $identifier = mysqli_real_escape_string($conn, $_POST['identifier']);
    $password = $_POST['password']; 

    $sql = "SELECT * FROM users WHERE (email = '$identifier' OR username = '$identifier') AND provider = 'local'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../index.php");
            exit();
        } else {
            $error = "Wrong password or username.";
        }
    } else {
        $error = "Account not found!";
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/themify-icons/themify-icons.css">
</head>
<body>
    <div class="login-container">
        <div>
            <button type="button" class="out-btn" onclick="window.history.back();">X</button>
        </div>
        <h2>Login</h2>
        <form action="" method="POST">
            <div class="input-group">
                <label for="username">Email or Username</label>
                <input type="text" id="username" name="identifier" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <?php if (!empty($error)): ?>
                    <p style="color: red; margin-top: 5px;"><?php echo $error; ?></p>
                <?php endif; ?>
            </div>
            <div class="forgot-password">
                <a href="../pages/forgotPass.php">Forgot password?</a>
            </div>
            <button type="submit" name="submit" class="signin-btn">Login</button>
        </form>
        <div class="social-login">
            <p>Login with</p>
            <div class="social-icons">
                <button class="google-login ti-google"></button>
                <button class="facebook-login ti-facebook"></button>
            </div>
        </div>
        <p class="signup-text">Don't have account? <a href="../pages/signUp.php">Sign up</a></p>
    </div>
</body>

</html>
