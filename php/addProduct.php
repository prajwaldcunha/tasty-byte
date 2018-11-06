<?php
require 'connect.php';
require 'functions.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$productName=cleanInput($_POST['']);
	$productDesc=cleanInput($_POST['']);
	$price=cleanInput($_POST['']);
	$quantity=cleanInput($_POST['']);
	$dateOfManu=cleanInput($_POST['']);


	//accept files.
	$file=cleanInput($_POST['']);

	$userName=$_SESSION['username'];

	$sql="SELECT * FROM USERS";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

}

?>