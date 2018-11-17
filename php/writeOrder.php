<?php
require  'connect.php';
require 'functions.php';
session_start();
?>

<html lang="en">
<head>
	<link href="../css/googleapis.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="../css/animate.css">

	<link rel="stylesheet" href="../css/owl.carousel.min.css">
	<link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="../css/magnific-popup.css">

	<link rel="stylesheet" href="../css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="../css/jquery.timepicker.css">

	<link rel="stylesheet" href="../css/icomoon.css">
	<link rel="stylesheet" href="../css/style.css">

	<link rel="stylesheet" href="../css/product.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
</head>

<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
		$orderdate=date("Y-m-d");
		$pid = $_SESSION['pid'];
		$uid=$_SESSION['uid'];
		$stmt = $conn->prepare("INSERT INTO orders (uid,pid,orderdate) VALUES (?,?,?)");
		$stmt->bind_param("iss",$uid,$pid,$orderdate);
		$stmt->execute();
		
		$stmt= "UPDATE products SET soldout=1 where id=" . $pid;
		
		if($conn->query($stmt) === TRUE){
			$sql = "SELECT name, price, pickup_address, products.city as pcity, fname, lname, email, phoneno, email FROM users, products WHERE products.uid= users.id AND products.id = " . $pid;
			$result = $conn->query($sql);
			$row = $result->fetch_array();
			
			$pname = $row['name'];
			$price = $row['price'];
			$pickup_address = $row['pickup_address'];
			$city = $row['pcity'];
			$seller_name = $row['fname'] . " " . $row['lname'];
			$phone = $row['phoneno'];
			$emailAdd = $row['email'];
			
			include_once "../../../vendor/autoload.php";
			
			$text = "Hi " . $_SESSION['username'] . ",\n Your order has been successfully placed!\nName of the product : " . $pname . "\nPrice : " . $price . "\nPickup Address : " . $pickup_address . ", " . $city . "\nSeller Name: " . $seller_name . "\nPhone : " . $phone . "\nEmail Address : " . $emailAdd . "\n";
			$html = "<html>
			<head></head>
			<body>
			<p>Hi " . $_SESSION['username'] . "<br>
			Your order has been successfully placed!<br>
			Name of the product : " . $pname . "<br>
			Price : " . $price . "<br>
			Pickup Address : " . $pickup_address . ", " . $city . "<br>
			Seller Name: " . $seller_name . "<br>
			Phone : " . $phone . "<br>
			Email Address : " . $emailAdd . "<br>
			</p>
			</body>
			</html>";
				 // This is your From email address
			$from = array('dcunhaprajwal@gmail.com' => 'TastyByte');
				 // Email recipients
			$to = array(
				$_SESSION['email_id']
			);
				 // Email subject
			$subject = 'Order Confirmation';
			
				 // Login credentials
			$username = 'azure_05b433688cf0f94d14ea288a577b4c05@azure.com';
			$password = 'q1w2e3r4t5';
			
			
				 // Setup Swift mailer parameters
			$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 587));
			$transport->setUsername($username);
			$transport->setPassword($password);
			$swift = (new Swift_Mailer($transport));
			
				 // Create a message (subject)
			$message = new Swift_Message($subject);
			
				 // attach the body of the email
			$message->setFrom($from);
			$message->setBody($html, 'text/html');
			$message->setTo($to);
			$message->addPart($text, 'text/plain');
			
				 // send message
			if ($recipients = $swift->send($message, $failures))
			{
				     // This will let us know how many users received this message
			}
			
			
			$_SESSION['orderInfo'] = "You have successfully ordered the product!";
			$_SESSION['orderScript'] = "<script> $(document).ready(function(){ $('#orderInfo').modal('show'); }); </script>";
			header("Location: menu.php");							   
		}
		else{
			$_SESSION['orderInfo'] = "Problem in ordering the product";
			$_SESSION['orderScript'] = "<script> $(document).ready(function(){ $('#orderInfo').modal('show'); }); </script>";
			header("Location: menu.php");							   
		}
	}
	?>

</body>
</html>