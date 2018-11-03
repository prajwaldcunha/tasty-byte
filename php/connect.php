<?php
$host = 'tastybyte.mysql.database.azure.com';
$username = 'tastybyte@tastybyte';
$password = 'Tasty#byte';
$db_name = 'tastybytedb';

//Establishes the connection
echo "initial";

$con=mysqli_init(); 

echo "initia2l";
mysqli_ssl_set($con, NULL, NULL, "/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL); 

echo "initial3";
mysqli_real_connect($con, "tastybyte.mysql.database.azure.com", "tastybyte@tastybyte", "Tasty#byte", "tastybytedb", 3306);

if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo "initial343";
//Run the Select query
echo "Reading data from table:";



$res = mysqli_query($conn, 'SELECT * FROM Products');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($conn);
?>