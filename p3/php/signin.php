<?php
    # start session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/signin.css">
    <link rel="modernlily" href="../images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Login & Registration Form </title>

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
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="authenticate.php" method="post">
                    <div class="input-field">
                        <input type="text" name = "username" placeholder="Enter your Username" 
                        id="username" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name = "password" 
                        id="password"placeholder="Enter your password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck">
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        <a href="resetpassword.php" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login Now">
                    </div>
                </form>
                <div class="login-signup">
                </div>
                <span class="transition-between">Not a member?
                    <a href="#" class="text signup-link">Signup now</a>
                </span>
            </div>

            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="register.php" method="post">
                    <div class="input-field">
                        <input type="text" name = "email" placeholder="Enter your Email" required>
                        <i class="uil uil-envelope"></i>
                    </div>
                    <div class="input-field">
                        <input type="date" id="birthday" name="birthday">
                        <i class="birthday uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name = "firstname" placeholder="Enter First Name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name = "lastname" placeholder="Enter Last Name" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" name = "username" placeholder="Enter your Username" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password" class="password" name = "password" placeholder="Create a password" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="sigCheck">
                            <label for="sigCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="resetpassword.php" class="text">Forgot password?</a>
                    </div>

                    <div class="input-field button">
                        <input type="submit" id = "newaccntsubmit" value="Login Now">
                    </div>
                </form>

                <div class="login-signup">
                </div>
                <span class="transition-between">Already a member?
                    <a href="#" class="text login-link">Login now</a>
                </span>
            </div>
        </div>
    </div>
        
<script src="../js/signin.js"></script>
<script src = "../js/header.js"> </script>
</body>
</html>