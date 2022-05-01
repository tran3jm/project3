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
            <a href="../index.html">HOME</a>
            <a href="../about.html">OUR STORY</a>
            <a href="menu.php">MENU</a>
            <a href="../contact.html">CONTACT US</a>
            <a href="../location.html">LOCATION</a>
            <a href="../signin.html" class = "login-sidemenu">LOG IN</a>
            <a href="../signin.html">REGISTER</a>
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
                <input type="text" id="fname" name="fname"><br><br>
            </fieldset>
    </form>

    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Last Name: *</legend>
                <input type="text" id="lname" name="lname"><br><br>
            </fieldset>
    </form>
    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Email: *</legend>
                <input type="email" id="email" name="email"><br><br>
            </fieldset>
</form>
    <form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Phone Number: *</legend>
                <input type="number" id="pnum" name="pnum"><br><br>
            </fieldset>
</form> 
</div>

<h1 style="text-align: left; padding: 0px 10px; margin: 0px 12px; background-color:white;">Credit Card Information</h1>
<!-- Forms for cutomers credit/debit card information-->
<div class="grid-container">
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>First Name: *</legend>
                <input type="text" id="ccfname" name="ccfname"><br><br>
            </fieldset>
</form>
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Last Name: *</legend>
                <input type="text" id="cclname" name="cclname"><br><br>
            </fieldset>
</form>
<form class="long-form information-form">
            <fieldset class = "form-fieldset">
                <legend>Credit Card Number: *</legend>
                <input type="text" id="ccnumber" name="ccnumber"><br><br>
            </fieldset>
</form>
<form class="information-form">
            <fieldset class = "form-fieldset">
                <legend>Security Number: *</legend>
                <input type="text" id="securityNumber" name="fname"><br><br>
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

    
    <script src = "../js/header.js"> </script>
    <script src = "../js/cart.js"> </script>
</body>
</html>