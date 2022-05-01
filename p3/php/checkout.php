<?php
session_start();

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
print_r($array);
$userid = $_SESSION['id']; // seth question :,)
echo $_SESSION['id'];
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