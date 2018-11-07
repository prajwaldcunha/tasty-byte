<?php
require 'connect.php';
require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" ) {

	

	$target_dir = "images/";
	$target_file = $target_dir . basename($_FILES["imageToUpload"]["name"]);
	$uploadOk = 1;
	//echo "tahr file ".$target_file;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$check = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
	if($check !== false) {
		echo "File is an image - " . $check["mime"] . ".";
		$uploadOk = 1;
		
	} 
	else {
		echo "File is not an image.";
		$uploadOk = 0;
	}

	// Check file size
if ($_FILES["imageToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

//echo "imageFileType ".$imageFileType;
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

	

	session_start();

	$productName=cleanInput($_POST['prodName']);
	$productDesc=cleanInput($_POST['prodDesc']);
	$price=cleanInput($_POST['price']);
	$quantity=cleanInput($_POST['quantity']);
	$dateOfManu=cleanInput($_POST['dateOfManufacture']);

	$address="";



	// add isenpty()

	
	$userid=$_SESSION['uid'];
	$stmt='SELECT * FROM USERS WHERE id="'.$userid.'"';
	$result = $conn->query($stmt);

   if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_array()) {
			$address=$row['locality'].",".$row['city'].",".$row['state'];
		}
	}else {
	  echo "<br/>0 results";
   }
  // echo "adress ".$address;

	$stmt=$GLOBALS[$conn]->prepare("INSERT INTO products (name,imageurl,details,quantity,price,manufacturedate,uid) VALUES (?,?,?,?,?,?,?)");

	//$stmt->bind_param("sssssii",$fname,$lname,$email,$phoneno,$state,$city,$locality,$password);
	//$stmt->execute();


	
}
else{
	echo "error";
}
  

?>