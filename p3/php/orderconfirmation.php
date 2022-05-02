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
    <link rel="stylesheet" href="../css/creditInfo.css"> 
    <link rel="modernlily" href="images/minimal.jpg">
    <link rel="icon" href="images/minimal.jpg">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title> Credit Info </title>
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

    <!-- Cover page with text -->
    <div class = "coverpage">
        <img src="../images/setting.jpeg" alt="cover contact" style="width:100%;" class = "coverimage">
        <h2 class="cover-text">Order Conformation</h2>
    </div>

    <div class = "contact-form">
        <h1 class = "cover" style="padding-left:10px; text-align: left;">Customer Information</h1>
    </div>
    <!-- customer Personal information -->
    <div class="grid-container">
    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>First Name: *</legend>
                <input type="text" id="fname" name="fname"placeholder="John"><br><br>
            </fieldset>
    </form>

    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Last Name: *</legend>
                <input type="text" id="lname" name="lname" placeholder="Doe"><br><br>
            </fieldset>
    </form>
    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Email: *</legend>
                <input type="email" id="email" name="email" placeholder="john.doe@gmail.com"><br><br>
            </fieldset>
</form>
    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Phone Number: *</legend>
                <input type="number" id="pnum" name="pnum" placeholder="(123)-456-7890" pattern="([0-9]{3})-[0-9]{3}-[0-9]{4}"><br><br>
            </fieldset>
</form> 
</div>

<h1 style="text-align: left; padding: 0px 10px; margin: 0px 12px; background-color:white;">Credit Card Information</h1>
<!-- Forms for cutomers credit/debit card information-->
<div class="grid-container">
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>First Name: *</legend>
                <input type="text" id="ccfname" name="ccfname" placeholder="John"><br><br>
            </fieldset>
</form>
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Last Name: *</legend>
                <input type="text" id="cclname" name="cclname" placeholder="Doe"><br><br>
            </fieldset>
</form>
<form class="long-form information-form">
            <fieldset class = "form-fieldset">
                <legend>Credit Card Number: *</legend>
                <input type="text" id="ccnumber" name="ccnumber" placeholder="1111 2222 3333 4444 5555" pattern="[0-9]{4} [0-9]{3} [0-9]{4} [0-9]{3} [0-9]{4}"><br><br>
            </fieldset>
</form>
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Security Number: *</legend>
                <input type="text" id="securityNumber" name="fname" placeholer="123" pattern="[0-9]{3}"><br><br>
            </fieldset>
</form>
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Expiration Date: *</legend>
                <input type="month" id="expDate" name="expDate"><br><br>
            </fieldset>
</form>

</div>

    <!-- check out button-->
    <div class = "submitOrder">
        <button id="submitcheckout"  class = "submit">SUBMIT ORDER</button>
        <script>
        $(document).ready(function() {
            $('#submitcheckout').click(function(){
                let itemsInCart = getCart();
                $.ajax({
                    type: "POST",
                    url: 'http://localhost/project3/p3/php/checkout.php',
                    data: {
                        cart : itemsInCart
                    },
                    method: "POST",
                    success: function(output){
                        alert(output);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
                sessionStorage.removeItem("cart");
            });
        });
        </script>
     </div>

    
    <script src = "../js/header.js"> </script>
    <script src = "../js/cart.js"> </script>
</body>
</html>