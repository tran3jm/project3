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
  <title> Modern Lily </title>
</head>
<body class = "section">
   <!-- Header with link to each page -->

   <!-- <h1 class = "lily-descrip"> AUTHENTIC · HIGHLY-ACCLAIMED · ORIGINAL </h1>
   <img src="images/arrow.png" alt="peter changs" class="arrow"> -->

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
      <span style="font-size:40px;color:black;cursor:pointer;width:30px" onclick="openNav()" class="sidebar-icon altmenu">&#9776;</span>
    </header>
        <!-- Restaurant cover image -->
    <div class = "submitOrder">
      <img src="../images/modernlily.png" alt="cover" class="heading">
    </div>
    <nav class = "nav links submitOrder" style="--items: 5;">
      <a href="index.php">HOME</a>
      <a href="about.php">OUR STORY</a>
      <a href="menu.php">MENU</a>
      <a href="contact.php">CONTACT US</a>
      <a href="location.php">LOCATION</a>
      <span class="line"></span>
    </nav>
    <?php 
          if (isset($_SESSION['loggedin'])) {
              printf(" <a href=\"profile.php\"><img src = \"../images/sign_in.png\" class = \"profile\"></a>");
          } else {
              printf(" <a href=\"signin.php\"><img src = \"../images/sign_in.png\" class = \"profile\"></a>");
          }
      ?>
  </header>
  
    <!-- Dynamic Greeting --> 
    <div class="popup">
      <button id="close">&times;</button>
      <h1 id="greeting">This is the title.</h1>
    </div>

  <!-- Mini-description of restaurant -->
  <div class = "div-section section">
    <img src = "../images/location.jpeg" alt="location" class = "skinny-image">
    <div class = "learnmore section">
    <h1>What is Modern Lily?</h1>
      <p style="font-size:25px"> Modern Lily is a restaurant with fine, affordable cuisine that is fusian-asian inspired.
          Our creative, delcious food and beverages take from multiple asian cultures 
          and comes together to create a unique expierence of fine-dining. Modern Lily  
          has a little something for everyone. Come dine with us.
      </p>
    <!-- Button click directs to about page -->
    <button class="click-button" onclick="window.location.href='about.php'">LEARN MORE</button>
    </div>
  </div>
  
  <!-- Background Image and Javascript -->
  <script src = "../js/header.js"> </script>
  <script src = "../js/greeting.js"> </script>
</div>
</body>
</html>