<?php 
require "connect.php";
require "functions.php";
$fname =$lname= $email = $password = $country =$phoneno=$state=$city=$locality=  "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = mysqli_real_escape_string($conn,$_POST["fname"]);
  $lname =mysqli_real_escape_string($conn,$_POST["lname"]);
  $email =mysqli_real_escape_string($conn,$_POST["email"]);
  $phoneno =mysqli_real_escape_string($conn,$_POST["phoneno"]);
  $state =mysqli_real_escape_string($conn,$_POST["state"]);
  $city =mysqli_real_escape_string($conn,$_POST["city"]);
  $locality =mysqli_real_escape_string($conn,$_POST["locality"]);
  $password =md5(mysqli_real_escape_string($conn,$_POST["password"]);

  

  $sql ="INSERT INTO users (fname, lname,email,phoneno,state,city,locality,password)  VALUES (?,?,?,?,?,?,?,?)";
  $stmt = mysqli_prepare($sql);
  $stmt->bind_param($fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
  $result = mysqli_query($conn,$sql);
  
  if($con->query($sql)==TRUE)
         {
         echo "Yoy Data Save Successfully!!!";
         }
  if (!mysqli_query($conn,$sql)) {
  die('Error: ' . mysqli_error($con));
}
  $_SESSION['username'] = $row['fname'];
			header("Location: https://tastybyte.azurewebsites.net/index.php");


}

?>