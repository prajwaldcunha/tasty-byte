<?php
$host = 'https://tastybyte.mysql.database.azure.com';
$username = 'tastybyte@tastybyte';
$password = 'Tasty#byte';
$dbname = 'tastybytedb';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
