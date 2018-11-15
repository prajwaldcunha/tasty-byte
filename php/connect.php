<?php
$host = 'db4free.net';
$username = 'tastybyte';
$password = 'q1w2e3r4';
$dbname = 'tastybytedb';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
