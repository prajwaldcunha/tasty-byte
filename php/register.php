<?php 
require "connect.php";
require "functions.php";
$fname =$lname= $email = $password = $country =$phoneno=$state=$city=$locality=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
  $fname = cleanInput($_POST["fname"]);
  $lname =cleanInput($_POST["lname"]);
  $email =cleanInput($_POST["email"]);
  $phoneno =cleanInput($_POST["phoneno"]);
  $state =cleanInput($_POST["state"]);
  $city =cleanInput($_POST["city"]);
  $locality =cleanInput($_POST["locality"]);
  $password =md5(cleanInput($_POST["password"]));

  $stmt = $GLOBALS[$conn]->prepare("INSERT INTO users (fname, lname,email,phoneno,state,city,locality,password)  VALUES (?,?,?,?,?,?,?,?)"); 
  $stmt->bind_param("ssssssss",$fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
  $stmt->execute();

  	header("Location: https://tastybyte.azurewebsites.net/index.php");

 
 
}
 



?>






