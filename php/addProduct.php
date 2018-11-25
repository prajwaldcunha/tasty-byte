<?php
require 'connect.php';
require 'functions.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
	$uploadOk = 1;
	
	// Check file size
	if ($_FILES["imageToUpload"]["size"] > 500000) {
		$_SESSION['fileUploadError']='large file';
		$uploadOk = 0;
		$_SESSION['script_addProd_modal'] = "<script> $(document).ready(function(){ $('#addProdModal').modal('show'); }); </script>";
		header("Location: https://tastybyte.azurewebsites.net/php/myProduct.php");
		
	}

	// Allow certain file formats
	$validExt = array("jpg", "png", "gif", "jpeg");
	$validMime = array("image/jpeg","image/png");
	$ext_array = explode(".", $_FILES["imageToUpload"]["name"]);
	
	$extension = end($ext_array);
	
	if (in_array($_FILES["imageToUpload"]["type"],$validMime) && in_array($extension, $validExt)) {
		
		$uploadOk=1;
	}
	else {
		$uploadOk = 0;
		$_SESSION['fileUploadError_1']='Has an invalid mime type or extension';
		$_SESSION['script_addProd_modal'] = "<script> $(document).ready(function(){ $('#addProdModal').modal('show'); }); </script>";
		header("Location: https://tastybyte.azurewebsites.net/php/myProduct.php");
		
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$_SESSION['fileUploadFail']='File was not uploaded.';	
		$_SESSION['script_addProd_modal'] = "<script> $(document).ready(function(){ $('#addProdModal').modal('show'); }); </script>";
		header("Location: https://tastybyte.azurewebsites.net/php/myProduct.php");
		
	} else {
		// if everything is ok, try to upload file
		if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
			$stmt = $conn->prepare("INSERT INTO products (name,imageurl,details,quantity,price,manufacturedate, pickup_address, city, uid) VALUES (?,?,?,?,?,?,?,?,?)");

			$productName = cleanInput($_POST['prodName']);
			$productDesc = cleanInput($_POST['prodDesc']);
			$price = cleanInput($_POST['price']);
			$quantity = cleanInput($_POST['quantity']);
			
			$time = strtotime(cleanInput($_POST['dateOfManufacture']));
			$dateOfManufacture = date('Y-m-d',$time);

			$pickup_address = cleanInput($_POST['pickup_address']);
			$city = cleanInput($_POST['city']);

			$userid = $_SESSION['uid'];

			$stmt->bind_param("ssssisssi",$productName,$target_file,$productDesc,$quantity,$price, $dateOfManufacture, $pickup_address, $city, $userid);
			if(!($stmt->execute())) {
				echo "Error has occured";
			}

			header("Location: https://tastybyte.azurewebsites.net/php/myProduct.php");
			
		}

		else{
			$_SESSION['fileUploadFail']='File was not uploaded.';
			$_SESSION['script_addProd_modal'] = "<script> $(document).ready(function(){ $('#addProdModal').modal('show'); }); </script>";
			header("Location: https://tastybyte.azurewebsites.net/php/myProduct.php");
			
		}
		
	} 
}

?>