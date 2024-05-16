<?php

session_start(); // Start the session
include 'includes/includes.inc.php';

$view = new View();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $data = $view->login($email,$pass);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="stylesheet" href="HTML files/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Login</title>
</head>
<body>
<div class="full-container">
    <div class="navbar">
        <div class="logo_with_text">
            <img src="" alt="" />
            <p>Task Sync</p>
        </div>
        <div class="navigations">
            <a href="">Home</a>
            <a href="">Contact Us</a>
            <a href="">About Us</a>
        </div>
    </div>
    <div class="body-container">
        <div class="left-body-container">
            <img src="https://media.giphy.com/media/gHPOb1fEVWu5GHL2tk/giphy.gif?cid=790b7611zo39542w2vyjj2bb1k5tba2evehbjhwocvs6jgef&ep=v1_gifs_search&rid=giphy.gif&ct=g" alt="Welcome GIF" style="width: 100%;" />
        </div>
        <div class="right-body-container">
            <div class="logo_with_text">
                <img src="" alt="" />
                <p>Task Sync</p>
            </div>
            <div class="login-container">
                <h3>Login</h3>
                <form method="post" action="">
                    <div class="login-input">
                        <label for="email">Email Address</label>
                        <div class="input-style">
                            <input type="email" id="email" name="email" />
                        </div>
                    </div>
                    <div class="login-input"><br>
                        <label for="password">Password</label>
                        <div class="input-style">
                            <input type="password" id="password" name="password" />
                        </div>
                    </div><br>
                    <div class="remember-me-container">
                        <div class="checkbox-container">
                            <input type="checkbox" name="remember_me" id="remember_me" />
                            <label for="remember_me">Remember Me</label>
                        </div>
                        <div class="forgot-password-div">
                            <a href="">Forgot Password?</a>
                        </div>
                    </div><br>
                    <div class="login-btn-div">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <div class="dont-have-acc">
                    <p>Don't have an account? <a href="">Sign Up here</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy;2024 tasksync.Inc</p>
        <p>Terms & Privacy</p>
        <div class="footer-social-media">
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
            <img src="" alt="" />
        </div>
    </div>
</div>
</body>
</html>
