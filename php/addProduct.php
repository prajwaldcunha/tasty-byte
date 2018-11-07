<?php
require 'connect.php';
require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

	$target_dir = "../images/";
	$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
	$uploadOk = 1;
	
	// Check file size
	if ($_FILES["imageToUpload"]["size"] > 500000) {
    	echo "Sorry, your file is too large.";
    	$uploadOk = 0;
	}

	// Allow certain file formats
	$validExt = array("jpg", "png", "gif", "jpeg");
	$validMime = array("image/jpeg","image/png");

	$extension = end(explode(".", $_FILES["imageToUpload"]["name"]));
	
	if (in_array($_FILES["imageToUpload"]["type"],$validMime) && in_array($extension, $validExt)) {
	 	echo "Extension and mime types are valid";
	}
	else {
	 	echo $_FILES["imageToUpload"] . " Has an invalid mime type or extension";
	 }

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	
	} else {
		// if everything is ok, try to upload file
	    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	

	session_start();

	$productName = cleanInput($_POST['prodName']);
	$productDesc = cleanInput($_POST['prodDesc']);
	$price = cleanInput($_POST['price']);
	$quantity = cleanInput($_POST['quantity']);
	$dateOfManu = cleanInput($_POST['dateOfManufacture']);

	$address = "";

	$userid = $_SESSION['uid'];
	
	$stmt = $conn->prepare("INSERT INTO products (name,imageurl,details,quantity,price,manufacturedate,uid) VALUES (?,?,?,?,?,?,?)");

	//$stmt->bind_param("sssssii",$fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
	//$stmt->execute();


	
}

else{
	echo "error";
}
  

?>