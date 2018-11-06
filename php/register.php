<?php 
require "connect.php";
require "functions.php";
$fname =$lname= $email = $password = $country =  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = cleanInput($_POST["name"]);
  $lname =cleanInput($_POST["lname"]);
  $email =cleanInput($_POST["email"]);
  $phoneno =cleanInput($_POST["phoneno"]);
  $state =cleanInput($_POST["state"]);
  $city =cleanInput($_POST["city"]);
  $locality =cleanInput($_POST["locality"]);
  $password =md5(cleanInput($_POST["password"]);

  
if(isset($_POST['username'])){
  $sql = "INSERT INTO users (fname, lname,email,phoneno,state,city,locality,password)  VALUES (?,?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($sql);
  $stmt->bind_param($fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
  $stmt->execute()
}
;

}

?>