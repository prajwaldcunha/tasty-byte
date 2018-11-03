<?php
$host = 'tastybyte.mysql.database.azure.com';
$username = 'tastybyte@tastybyte';
$password = 'Tasty#byte';
$db_name = 'tastybytedb';

//Establishes the connection
echo "initial";

$con=mysqli_init(); 


echo "initial003";


mysqli_ssl_set($con,NULL,NULL, "/ssl/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ; 

mysqli_options(MYSQLI_OPT_SSL_VERIFY_SERVER_CERT, true);
mysqli_real_connect($con, "tastybyte.mysql.database.azure.com", "tastybyte@tastybyte", "Tasty#byte", "tastybytedb", 3306,SQLI_CLIENT_SSL);


if (mysqli_connect_errno($con)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
echo "initial343";
//Run the Select query
echo "Reading data from table:";



$res = mysqli_query($con, 'SELECT * FROM Products');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($con);
?>