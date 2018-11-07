<?php 
require "connect.php";
require "functions.php";
$fname =$lname= $email = $password =$phoneno=$state=$city=$locality=  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();

  $stmt = $conn->prepare("INSERT INTO users (fname, lname,email,phoneno,state,city,locality,password)  VALUES (?,?,?,?,?,?,?,?)"); 
  $stmt->bind_param("ssssssss",$fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
  
  $fname = cleanInput($_POST["fname"]);
  $lname =cleanInput($_POST["lname"]);
  $email =cleanInput($_POST["email"]);
  $phoneno =cleanInput($_POST["phoneno"]);
  $state =cleanInput($_POST["state"]);
  $city =cleanInput($_POST["city"]);
  $locality =cleanInput($_POST["locality"]);
  $password =md5(cleanInput($_POST["password"]));

  if(isempty($email)) {
		$_SESSION['email_empty_error'] = "email address is empty";
		// header("Location: https://tastybyte.azurewebsites.net");
	}

  	if(isempty($password)) {
		$_SESSION['password_empty_error'] = "password is empty";
		// header("Location: https://tastybyte.azurewebsites.net");
	}


$stmt->execute();
if(!$stmt->execute())
{
  $_SESSION['email_unique_error'] = "Email has already been taken";
		$_SESSION['email_script'] = "<script> $(document).ready(function(){ $('#myModal').modal('show'); }); </script>";
		header("Location: https://tastybyte.azurewebsites.net/index.php"); 
}

//$result = $conn->query($stmt);
$_SESSION['username'] = $fname;
 $_SESSION['name'] = $fname . " " . $lname; //Full name of user
 //$_SESSION['uid'] = $row['id'];
 header("Location: https://tastybyte.azurewebsites.net/index.php");
// $_SESSION['script'] = "<script> $(document).ready(function(){ $('#myModal').modal('show'); }); </script>";
// header("Location: https://tastybyte.azurewebsites.net/index.php");
	
}
?>






