<?php
    # start session
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/greeting.css">
    <link rel="stylesheet" href="../css/conformationStyle.css">
    <link rel="modernlily" href="images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Order Conformation Modern Lily </title>
</head>
<body class = "section">
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

    <!-- Cover page with text -->
    <div class = "coverpage">
        <img src="../images/setting.jpeg" alt="cover contact" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">Order Conformation</h2>
    </div>

    <!-- Order Conformation section-->
    <div class = "conformation-section">
        <img class = "check-image"src="images/checkicon.png" alt="check mark image"> 
        <h2>Thank You For Ordering With Modern Lily</h2>
        <p>Comeback again for the best fusion-asian food in Virginia.</p>     
    </div>
    <script src = "../js/header.js"> </script>
</body>
</html>