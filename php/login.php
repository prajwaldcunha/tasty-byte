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

	$sql = 'SELECT id,email, password,fname,lname FROM users where email = "' . $email . '" and password = "' . $password . '"';
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_array()) {
	        $_SESSION['username'] = $row['fname'];
			$_SESSION['email_id']=$row['email'];
	        $_SESSION['name'] = $row['fname'] . " " . $row['lname']; //Full name of user
	        $_SESSION['uid'] = $row['id'];
			header("Location: https://tastybyte.azurewebsites.net/index.php");
	    }
	} else {
	    $_SESSION['validation_error'] = "Username and password does not match";
		$_SESSION['script'] = "<script> $(document).ready(function(){ $('#myModal').modal('show'); }); </script>";
		header("Location: https://tastybyte.azurewebsites.net/index.php");
	}
}
?>