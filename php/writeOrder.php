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