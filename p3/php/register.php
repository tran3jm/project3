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


$email = "";
$username = "";
$dob = "";
$firstname = "";
$lastname = "";
$password1 = "";

// register users
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
// $dob = strtotime($_POST['birthday']);
$firstname = mysqli_real_escape_string($con, $_POST['firstname']);
$lastname = mysqli_real_escape_string($con, $_POST['lastname']);
$password1 = mysqli_real_escape_string($con, $_POST['password']);

if(empty($username)) {array_push($errors, "Username is required");}
// if($dob) {
// 	$new_date = date('Y-m-d', $time);
// } else {
// 	array_push($errors, "Invalid Date of Birth");
// }
if(empty($email)) {array_push($errors, "Email is required");}
if(empty($password1)) {array_push($errors, "Password is required");}
if(empty($firstname)) {array_push($errors, "First name is required");}
if(empty($lastname)) {array_push($errors, "Last name is required");}

$user_check_query = "SELECT * FROM users WHERE userUsername = '$username' or userEmail = '$email'";

$results = mysqli_query($con, $user_check_query);
$user = mysqli_fetch_assoc($results);

if($user) {
	if($user['username'] === $username){array_push($errors, "Username already exists!");}
	if($user['email'] === $email){array_push($errors, "Email already exists!");}
}
// encountered no errors
if(count($errors) == 0){
	$password = password_hash($password1, PASSWORD_DEFAULT);
	$query = "INSERT INTO `users` (`userUsername`, `userFName`, `userLName`, `userEmail`, `userPassword`) 
		VALUES ('$username', '$firstname', '$lastname', '$email', '$password')";
	mysqli_query($con, $query);
	session_regenerate_id();
	$_SESSION['loggedin'] = TRUE;
	$_SESSION['name'] = $_POST['username'];
	$_SESSION['id'] = $id;
	header('Location: accntcreated.php');
} else {
	foreach ($errors as $value) {
		echo $value;
	}
}
?>