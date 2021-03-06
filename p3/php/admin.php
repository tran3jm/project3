<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/greeting.css">
    <link rel="icon" href="../images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Admin Page </title>
</head>

<body>
    <!-- Header with logo and dropdown icon w/ table -->
    <header>
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
    <div class="profilepage section">
        <!-- Cover page with text -->
        <div class = "coverprofile coverpage">
            <img src="../images/sign_in.png" alt="cover about" class = "profileimage">
            <h2 class = "profilename">Administration</h2>
            <p class="username">@admin</p>
            <div class = "profile-options">
                <a href="resetpassword.php" class="option">RESET PASSWORD</a>
                <a href="logout.php"  class="option">LOGOUT</a>
            </div>
        </div>
        <!-- Description -->
        <div class = "welcome">
            <!-- <h1>Welcome back, <?=$_SESSION['name']?></h1> -->
            <h1>Admin Account</h1>
            <div class = "accountinfo">
                <h2>Admins:</h2>
                <ul style="list-style-type:none;">
                    <li>Joselyne Tran</li>
                    <li>Junior Gartemala</li>
                </ul>
                <h2>Email: admin@test.com</h2>
                <h2>Password: *****</h2>

            </div>
        </div>
    </div>
    <script src = "../js/header.js"> </script>
</body>
</html>