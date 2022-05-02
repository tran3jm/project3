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
    <header class = "borderlessHeader">

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="index.php">HOME</a>
            <a href="about.php">OUR STORY</a>
            <a href="menu.php">MENU</a>
            <a href="contact.php">CONTACT US</a>
            <a href="location.php">LOCATION</a>
            <?php 
                if (isset($_SESSION['loggedin'])) {
                    printf("<a href=\"profile.php\">PROFILE</a>");
                } else {
                    printf("<a href=\"signin.php\" class = \"login-sidemenu\">LOG IN</a>");
                    printf("<a href=\"signin.php\">REGISTER</a>");
                }
            ?>
    </div>
    <span style="font-size:40px;color:white;cursor:pointer" onclick="openNav()" class = "sidebar-icon">&#9776;</span>
    </header>
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
                    <a href="../index.php" class="text signup-link">Back</a>
                </span>
                 </div>
            </div>
        

        
<script src="../js/signin.js"></script>
</body>
</html>