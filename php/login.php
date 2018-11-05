<?php
require 'connect.php';
require 'functions.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	session_start();
	$email = cleanInput($_POST['email']);
	$password= md5(cleanInput($_POST['password']));

	if(isempty($email)) {
		$_SESSION['email_empty_error'] = "email address is empty";
		// header("Location: https://tastybyte.azurewebsites.net");
	}

	if(isempty($password)) {
		$_SESSION['password_empty_error'] = "password is empty";
		// header("Location: https://tastybyte.azurewebsites.net");
	}

	$sql = 'SELECT email, password,fname FROM users where email = "' . $email . '" and password = "' . $password . '"';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_array()) {
	        $_SESSION['username'] = $row['fname'];
	    }
	} else {
	    $_SESSION['validation_error'] = "Username and password does not match";
	    header("Location: https://tastybyte.azurewebsites.net/index.php");
	}
}
?>