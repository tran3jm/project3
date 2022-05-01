<?php
    # start session
    session_start();
?>
<?php
    # local db info through XAMPP... might need to change based on local db login info
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

    # set up query, get results and display to screen
    $query = "SELECT * FROM Foods";
    $result = mysqli_query($con, $query, MYSQLI_STORE_RESULT);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/contact.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/sectioning.css">
    <link rel="stylesheet" href="../css/addtocart.css">
    <link rel="icon" href="images/minimal.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title> Menu Modern Lily </title>
</head>

<body class = "section">

    <!-- Cart Popup -->
    <div class="w3-modal-content w3-animate-zoom popup">
        <button id="close">&times;</button>
        <div> <button id = "confirmation" onclick="window.location.href = 'orderconfirmation.php'">CONFIRM ORDER</button> </div>
        <!-- <script>
            $(document).ready(function() {
                $('#confirmation').click(function(){
                    let itemsInCart = getCart();
                    $.ajax({
                        type: "POST",
                        url: 'http://localhost/project3/p3/php/checkout.php',
                        data: {
                            cart : itemsInCart
                        },
                        method: "POST",
                        success: function(output){
                            // onclick="window.location.href = '../orderConfor.html'"
                            $(window).load("../orderConfor.html");
                            alert(output);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                    sessionStorage.removeItem("cart");
                });
            });
        </script> -->
        <h1 id="greeting">Cart</h1>
        <ul class="cartWrap" id = "cartList">
        </ul>
    </div>

    <div id = "menubody">
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
        <img src = "../images/shopping-cart.png" class = "cart" id = "cartIcon" onclick="open()">
    </header>

    <div class = "coverpage">
    <!-- Cover page with text -->
        <div id = "demo" class="carousel slide carousel-fade coverimage" data-ride="carousel">
             <!-- The slideshow -->
            <div class="carousel-inner">
                <div class= "carousel-item active">
                    <img src="../images/bowl.jpeg" alt="menu cover" class="d-block w-100 carousolimage">
                </div>
                <div class="carousel-item">
                    <img src="../images/foods/Dumplings.jpg" alt="Dumplings" class="d-block w-100 carousolimage">
                </div>
                <div class="carousel-item">
                    <img src="../images/foods/Pork Buns.jpg" alt="Pork bun" class="d-block w-100 carousolimage">
                </div>
                <div class="carousel-item">
                    <img src="../images/foods/Banh Mi.jpg" alt="Banh Mi" class="d-block w-100 carousolimage"> 
                </div>
                <div class="carousel-item">
                    <img src="../images/foods/Pho.jpg" alt="Pho" class="d-block w-100 carousolimage"> 
                </div>
            </div>
            
            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
         </div>
    </div>
    <h2 class="menu cover-text">OUR MENU</h2>

    <!-- Drink Menu -->
    <div class = "section">
        <h1 class="section-page">DRINK MENU</h1>
    </div>
    <div class="flex-container split-menu section">
        <img class=" menuimage split-image" src="../images/thaitea.jpeg" alt="thai tea">
    <!-- Menu items -->
        <fieldset class="center-fieldset">
            <legend>BEVERAGES</legend>
            <?php
                foreach ($rows as $row) {
                    if ($row['beverage'] == 1) {
                        printf("<div class=\"menu-item\"><div>%s <span style=\"font-size:large;\">%.2f</span> </div> 
                        <p class = \"add\" id = \"%s\" onclick=\"addToJson('drinks','%s', %.2f)\">Add to order</p></div>", $row["foodName"], 
                        $row["foodCost"], $row["foodName"], $row["foodName"], $row["foodCost"]);
                    }
                }
            ?>
        </fieldset>
    </div>

    <!-- Food Menu -->
    <div>
        <h1 class="section-page section">FOOD MENU</h1>
    </div>
    <div class="split-menu section">
        <!-- Menu items -->
        <img src="../images/foods/noodles.jpeg" alt="Drunken Noodles" class="menuimage split-image">
        <fieldset class="center-fieldset">
            <legend>FOOD</legend>
            <?php
                foreach ($rows as $row) {
                    if ($row["beverage"] == 0) {
                        printf("<div class=\"menu-item\"><div>%s <span style=\"font-size:large;\">%.2f</span> </div> 
                        <p class = \"add\" id = \"%s\" onclick=\"addToJson('foods','%s', %.2f)\">Add to order</p></div>", $row["foodName"], 
                        $row["foodCost"], $row["foodName"], $row["foodName"], $row["foodCost"]);
                    }
                }
            ?>
        </fieldset>
        <div class = "yelp section">
            <a style="font-size:20px;" href="https://www.yelp.com/">Don't be shy! Give us a rating ★★★★★</a>
        </div>
    </div>
    <script src = "../js/header.js"> </script>
    <script src = "../js/cart.js"></script>
    </div>
</body>

</html>

<?php
    mysqli_free_result($result);
    mysqli_close($con);
?>