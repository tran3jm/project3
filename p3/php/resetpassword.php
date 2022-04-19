<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="stylesheet" href="../css/frgtpassword.css">
    <link rel="modernlily" href="../images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Forgot Password Form </title>

    <!-- ===== Iconscout CSS ==== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>
<body>
    <div class="container">
        <div class="forgetpwrd forms">
            <div class="form login">
                <span class="title">Forgot Password?</span>

                <form action="changepassword.php" method="post">
                    <div class="input-field">
                        <input type="text" name = "username" placeholder="Enter your Username" 
                        id="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name = "password" 
                        id="password"placeholder="Enter new password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name = "password" 
                        id="password"placeholder="Confirm new password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Confirm Password Change">
                    </div>
                </form>

                <div class="login-signup"></div>
                <div>
                <span class="transition-between">Go back to Login?
                    <a href="../index.html" class="text signup-link">Back</a>
                </span>
                 </div>
            </div>
        

        
<script src="../js/signin.js"></script>
</body>
</html>