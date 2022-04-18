<?php

session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// initialising variables
$errors = array();


$email = "";
$username = "";
$dob = "";
$firstname = "";
$lastname = "";
$password1 = "";

// register users
$username = mysqli_real_escape_string($con, $_POST['username']);

if(empty($username)) {array_push($errors, "Username is required");}

// encountered no errors
if(count($errors) == 0){
	$query = "DELETE FROM `accounts` WHERE username='$username'";
	mysqli_query($con, $query);
	header('Location: changed.php');
} else {
	echo $dob;
}
?>