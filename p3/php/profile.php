<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'modernlilydb';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT userUsername, userPassword, userEmail, userFName, userLName FROM users WHERE userID = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->bind_result($username, $password, $email, $firstname, $lastname);
$stmt->execute();
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sectioning.css">
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
            <a href="../index.html">HOME</a>
            <a href="../about.html">OUR STORY</a>
            <a href="../menu.html">MENU</a>
            <a href="../contact.html">CONTACT US</a>
            <a href="../location.html">LOCATION</a>
            <a href="../signin.html" class = "login-sidemenu">LOG IN</a>
            <a href="../signin.html">REGISTER</a>
        </div>
        <span style="font-size:40px;color:white;cursor:pointer" onclick="openNav()" class = "sidebar-icon">&#9776;</span>
    </header>
    <div class="profilepage section">
        <!-- Cover page with text -->
        <div class = "coverprofile coverpag psectione">
            <img src="../images/sign_in.png" alt="cover about" class = "profileimage">
            <h2 class = "profilename">Peacho Tran</h2>
            <p class="username">@username</p>
            <div class = "profile-options">
                <a href="resetpassword.php" class="option">RESET PASSWORD</a>
                <a href="logout.php"  class="option">LOGOUT</a>
            </div>
        </div>
        <!-- Description -->
        <div class = "welcome psection">
        <h1>Welcome back, <?=$username?></h1>
            <div class = "accountinfo psection">
            <h2>First Name: <?=$firstname?></h2>
                <h2>Last Name: <?=$lastname?></h2>
                <h2>Username: <?=$username?></h2>
                <h2>Email: <?=$email?></h2>
                <h2>Password: ******</h2>


            </div>
        </div>
    </div>
    <script src = ../js/header.js> </script>
</body>
</html>