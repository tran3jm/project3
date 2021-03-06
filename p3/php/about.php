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
  <link rel="stylesheet" href="../css/greeting.css">
  <link rel="icon" href="../images/minimal.jpg">
  <link rel="icon" href="../images/minimal.jpg">
    <title> About Modern Lily </title>
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
        <img src="../images/cooking.jpeg" alt="cover about" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">ABOUT US</h2>å
    </div>

    <!-- Description -->
    <div class = "about section">
        <img src="../images/chef.jpeg" alt="chef" class = "chang">
        <div>
        <h1> WHO ARE WE? </h1>
        <p>
            Modern Lily. With its loving atmosphere and good food offer, that newly opened Modern Lily
            invites you to enjoy the best of Asian-Fusion in New York City. This home has a peaceful, yet
            exciting environment that complements perfectly the wonderful kind of Asian fusion with a
            selection of fresh apps, noodles, and meats. dishes that represent the primary attraction at the
            building, served by the knowledgeable and friendly staff. Starters include the array of traditional
            Asian food components, a recent spin on food favorites, with rice, chicken wings, and vegetables.
            The menu is also filled with delicious Chinese cuisine or bubbling beverages.  <br><br>
            Appetizers include chicken, pork belly, and shrimp. Desserts are also available for desserts such as ice cream or iced
            tea. The menu is very well organized and offers a variety of options for your taste buds. The menu
            is also filled with delicious Chinese, Japanese and Korean dishes as well as dishes that are already
            popular in the area. Appetizers include a variety of Dim Sum, spring rolls, and a selection of other
            local specialties. The main course is served with a side of fried rice, noodles, and pickled
            vegetables. Dessert is a dessert made from fruit, nuts, and dried fruits. Made with lots of love. <br><br>
            Come visit us for affordable, delicious food.
        </p>
    </div>
    </div>
    <script src = "../js/header.js"> </script>
</body>
</html>