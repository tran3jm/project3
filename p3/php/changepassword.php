<?php

session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'modernlilydb';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

// initialising variables
$errors = array();

if ( !isset($_POST['username'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	exit('Please fill both the username and password fields!');
}

$username = $_POST['username'];
$password1 = $_POST['password'];

if(empty($username)) {array_push($errors, "Username is required");}

// encountered no errors
if(count($errors) == 0){
	// since deleteing from the table was a mess due to FK constraints, it was easier to update the entry instead of deleting it.
	$hash = password_hash($password1, PASSWORD_DEFAULT);
	$query = "UPDATE `users` SET userPassword='$hash' WHERE userUsername='$username'";
	mysqli_query($con, $query);
	header('Location: changed.php');
} else {

}
?>