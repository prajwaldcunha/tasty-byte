<?php
require 'connect.php';
require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	echo "prod naeme ".$_POST['prodName'];
	$productName=cleanInput($_POST['prodName']);
	$productDesc=cleanInput($_POST['prodDesc']);
	$price=cleanInput($_POST['price']);
	$quantity=cleanInput($_POST['quantity']);
	$dateOfManu=cleanInput($_POST['dateOfManufacture']);


	//accept files.
	$file=cleanInput($_POST['fileUp']);

	$userName=$_SESSION['email_id'];
	echo "user ".$userName;

	$sql="SELECT * FROM USERS WHERE email='".$userName."';";
	$result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
         echo "Name: " . $row["fname"]. "<br>";
      }
   } else {
      echo "0 results";
   }
}
else{
	echo "error";
}
  

?>