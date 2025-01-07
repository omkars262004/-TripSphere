<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>



<?php 
session_start();
if(isset($_SESSION['error'])): ?>
       <div class="error"><?php echo $_SESSION['error']; ?></div>
       <?php unset($_SESSION['error']); ?>
   <?php endif; ?>


    <div class="container">
        <div class="form-box login">
            <!--debugging : changed action from login.php to register.php. status : worked successfully -->
            <form action="register.php" method="POST"> <!-- Change action to login.php -->
                <h1>Login</h1>
                <div class="input-box">
                <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name="Login" class="btn">Login</button>
                <p>or login with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="register.php" method="POST"> <!-- Change action to register.php -->
                <h1>Registration</h1>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <button type="submit" name="Register" class="btn">Register</button>
                <p>or register with social platforms</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxl-google'></i></a>
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-linkedin'></i></a>
                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hello Welcome!</h1>
                <p>Don't have any account?</p>
                <button type="button" class="btn register-btn" value="register">Register</button>
            </div>
        </div>
        <div class="toggle-box">
            <div class="toggle-panel toggle-right">
                <h1>Welcome Back!</h1>
                <p>Already have an account</p>
                <button type="button" class="btn login-btn" value="login">Login</button>
            </div>
        </div>
   
    </div>
    

   <script src="js/script.js"></script>
</body>
</html>