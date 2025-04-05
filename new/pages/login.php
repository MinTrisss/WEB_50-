<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/themify-icons/themify-icons.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="forgot-password">
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="signin-btn">Login</button>
        </form>
        <div class="social-login">
            <p>Login with</p>
            <div class="social-icons">
                <button class="google-login ti-google"></button>
                <button class="facebook-login ti-facebook"></button>
            </div>
        </div>
        <p class="signup-text">Don't have account? <a href="#">Sign up</a></p>
    </div>
</body>
<?php include 'includes/footer.php'; ?>
</html>