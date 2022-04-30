<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'modernlilydb';  
# connect to db with info above
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

# make sure connection is good
if ( mysqli_connect_errno() ) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$array = json_decode($_POST["cart"], true);

$userid = 1; // seth question :,)
$insertOrderQuery = "INSERT INTO `Orders` (`userID`) VALUES ('$userid')";

mysqli_query($con, $insertOrderQuery);

$orderid =  mysqli_insert_id($con); // gets the order_id associated with the most recent insert statement.

foreach ($array as $value) {
    $selectQuery = "SELECT foodID FROM Foods WHERE foodName='{$value['name']}'" ;
    $result = mysqli_query($con, $selectQuery);
    while($row = mysqli_fetch_array($result))
     {
        $foodid = $row['foodID'];  
        $insertOrderItemQuery = "INSERT INTO `OrderItems` (`orderID`, `foodID`) VALUES ('$orderid', '$foodid')";
        mysqli_query($con, $insertOrderItemQuery);
     } 
}


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/sectioning.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/greeting.css">
    <link rel="stylesheet" href="css/conformationStyle.css">
    <link rel="modernlily" href="images/minimal.jpg">
    <link rel="icon" href="images/minimal.jpg">
    <title> Order Conformation Modern Lily </title>
</head>
<body>
    <!-- Header with logo and dropdown icon w/ table -->
    <!-- <header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.html">HOME</a>
            <a href="about.html">OUR STORY</a>
            <a href="menu.html">MENU</a>
            <a href="contact.html">CONTACT US</a>
            <a href="location.html">LOCATION</a>
            <a href="signin.html" class = "login-sidemenu">LOG IN</a>
            <a href="signin.html">REGISTER</a>
        </div>
        <span style="font-size:40px;color:black;cursor:pointer" onclick="openNav()" class = "sidebar-icon">&#9776;</span>
    </header>

    <!-- Cover page with text -->
    <!-- <div class = "coverpage">
        <img src="images/setting.jpeg" alt="cover contact" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">Order Conformation</h2>
    </div>

    <div class = "section">
        <h1 class = "cover" style="text-align: left;">Order Conformation</h1>
    </div>
    <!-- Order Conformation section-->
    <!-- <div class = "section conformation-section">
        <img class = "check-image"src="images/checkicon.png" alt="check mark image"> 
        <h2>Thank You For Ordering With Modern Lily</h2>
        <p>Comeback again for the best fusion-asian food in Virginia.</p>     
    </div>
    <script src = "js/header.js"> </script>
</body>
</html> -->