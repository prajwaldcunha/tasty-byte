<?php
require 'connect.php';
require 'functions.php';
session_start();

$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$stmt = $conn->prepare("INSERT INTO queries (name,email,message)  VALUES (?,?,?)");
	$stmt->bind_param("sss",$name,$email,$message);

	$name = cleanInput($_POST['name']);
	$email = cleanInput($_POST['email']);
	$message = cleanInput($_POST['message']);
	
	if($stmt->execute()) {
		$_SESSION['querysuccess'] = '<script>alert("Thank you for your feedback");</script>';
		header("Location: https://tastybyte.azurewebsites.net/index.php");
	}
}
?>