<?php
    # start session
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/location.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="icon" href="../images/minimal.jpg">
    
    <title> Modern Lily Locations </title>
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
        <img src="../images/location.jpeg" alt="cover location" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">LOCATION</h2>
    </div>

    <!-- Locations -->
    <div>
        <h1 class = "section-page section"> Store locations</h1>
    </div>
    <div class = "location-section split-menu section">
        <div class="location-container">
            <div class="location-gallery">
                <img src ="../images/locations/richmond.jpg" alt = "Richmond Location" class = "split-image"> 
                    <p class="location-label">
                  Richmond, Virginia
                    </p>
            </div>
            <div class="location-gallery">
                <img src ="../images/locations/arlington.jpg" alt = "Arlington Location" class = "split-image"> 
                    <p class="location-label">
                  Arlington, Virginia
                    </p>
            </div>
            <div class="location-gallery">
                <img src ="../images/locations/annandale.jpg" alt = "Annandale Location" class = "split-image"> 
                    <p class="location-label">
                  Annandale, Virginia
                    </p>
            </div>
            <div class="location-gallery">
                <img src ="../images/locations/harrisonburg.jpg" alt = "Harrisonburg Location" class = "split-image"> 
                    <p class="location-label">
                  Harrisonburg, Virginia
                    </p>
            </div>
            <!-- <img src ="images/locations/richmond.jpg" alt = "Richmond Location" class = "split-image location-gallery">
            <img src ="images/locations/arlington.jpg" alt = "Arlington Location" class = "split-image location-gallery">
            <img src ="images/locations/annandale.jpg" alt = "Annandale Location" class = "split-image location-gallery">
            <img src ="images/locations/harrisonburg.jpg" alt = "Harrisonburg Location" class = "split-image location-gallery"> -->
        
            <button class="left-button" onclick="plusDivs(-1)">&#10094;</button>
            <button class="right-button" onclick="plusDivs(+1)">&#10095;</button>
        </div>
        <div>
         <!-- Richmond -->
        <fieldset class = "center-fieldset address">
            <legend>Richmond, Virginia</legend>
            <div class = "menu-item"> Richmond, Virginia 
                <span>2031 Wheaten Ct. Richmond, Virginia, 23930</span>
            </div>
        </fieldset>

         <!-- Arlington -->
         <fieldset class = "center-fieldset address">
            <legend>Arlington, Virginia</legend>
            <div class = "menu-item"> Arlington, Virginia 
                <span>4307 Frogger Ct. Arlington, Virginia, 23930</span>
            </div>
        </fieldset>

         <!-- Annandale -->
        <fieldset class = "center-fieldset address">
            <legend>Annandale, Virginia</legend>
            <div class = "menu-item"> Annandale, Virginia 
                <span>3200 Duckling Dr. Annandale, Virginia, 23930</span>
            </div>
        </fieldset>

         <!-- Harrisonburg -->
        <fieldset class = "center-fieldset address">
            <legend>Harrisonburg, Virginia</legend>
            <div class = "menu-item"> Harrisonburg, Virginia 
                <span>292 Centille Run Harrisonburg, Virginia, 23930</span>
            </div>
        </fieldset>
    </div>
    </div>
    <script src = "../js/header.js"> </script>
    <script src = "../js/gallary.js"></script>
</body>
</html>