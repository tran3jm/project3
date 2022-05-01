<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/greeting.css">
    <link rel="modernlily" href="../images/minimal.jpg">
    <link rel="icon" href="../images/minimal.jpg">
    <title> Credit Info </title>
</head>
<body class = "section">
    <!-- Header with logo and dropdown icon w/ table -->
    <header>
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
    <div class = "coverpage">
        <img src="images/setting.jpeg" alt="cover contact" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">Order Conformation</h2>
    </div>

    <div>
        <h1 class = "contact-form" style="text-align: left;">Order Conformation</h1>
    </div>

    <div class = "contact-form">
        <!-- Orders -->
        <form>
            <fieldset class = "contact-fieldset">
                <legend>First Name: *</legend>
                <input type="text" id="fname" name="fname"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Last Name: *</legend>
                <input type="text" id="lname" name="lname"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Email: *</legend>
                <input type="email" id="email" name="email"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Phone Number*</legend>
                <input type="number" id="pnum" name="pnum"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Credit Card Number: *</legend>
                <input type="number" id="ccnumber" name="ccnumber"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Security Number*</legend>
                <input type="number" id="securityNumber" name="fname"><br><br>
            </fieldset>
            <fieldset class = "contact-fieldset">
                <legend>Expiration Date *</legend>
                <input type="month" id="expDate" name="expDate"><br><br>
            </fieldset>
            
            <fieldset class = "contact-fieldset">
                <legend>Message: *</legend>
                <input type="email" id="message" name="message" class = "message"><br><br>
            </fieldset>
            <input type="submit" value="Submit" class = "submit">
        </form>
    </div>
    <script src = "js/header.js"> </script>
</body>
</html>