<?php
require 'connect.php';
require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
	$stmt = $conn->prepare("INSERT INTO queries (name,email,message)  VALUES (?,?,?)");
	$stmt->bind_param("sss",$name,$email,$message);

	$name = cleanInput($_POST['name']);
	$email = cleanInput($_POST['email']);
	$message = cleanInput($_POST['messsage']);
	
	if(!($stmt->execute())) {
		echo "Error Insert";
	}

	header("Location: https://tastybyte.azurewebsites.net/index.php");
}
?>