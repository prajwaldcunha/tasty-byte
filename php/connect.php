<?php
$host = 'sql12.freemysqlhosting.net';
$username = 'sql12282497';
$password = 'CcZVphdsuJ';
$dbname = 'sql12282497';

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
