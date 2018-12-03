<?php
$host = 'tastybytedb.mysql.database.azure.com';
$username = 'tastybyte@tastybytedb';
$password = 'Tasty#byte';
$dbname = 'tastybytedb';

// $host = 'sql12.freemysqlhosting.net';
// $username = 'sql12265606';
// $password = 'LpJJbn34q3';
// $dbname = 'sql12265606';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
