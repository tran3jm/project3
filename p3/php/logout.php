<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/logout.css">
    <link rel="stylesheet" href="../css/profile.css">
    <link rel="modernlily" href="../images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Profile Page </title>
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
        <span style="font-size:40px;color:black;cursor:pointer" onclick="openNav()" class = "sidebar-icon">&#9776;</span>
    </header>
        <!-- Description -->
        <div class = "welcome section">
            <!-- <h1>Welcome back, <?=$_SESSION['name']?></h1> -->
            <h1>Successfully logged out!</h1>
            <div class = "logout psection">
                <h2>Hope to see you again soon!</h2>
            </div>
        </div>
    </div>
    <script src = "../js/header.js"> </script>
</body>
</html>