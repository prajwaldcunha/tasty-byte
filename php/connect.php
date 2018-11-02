<?php
$host = 'tastybyte.mysql.database.azure.com';
$username = 'tastybyte@tastybyte';
$password = 'Tasty#byte';
$db_name = 'tastybytedb';

//Establishes the connection
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/ssl/html/BaltimoreCyberTrustRoot.crt.pem", NULL, NULL) ;

mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL11: '.mysqli_connect_error());
}





$con=mysqli_connect($conn, $host, $username, $password, $db_name, 3306);

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$con=mysqli_init();
if (!$con)
  {
  die("mysqli_init failed");
  }
echo "init pass";
mysqli_ssl_set($con,"key.pem","cert.pem","cacert.pem",NULL,NULL); 

if (!mysqli_real_connect($con,"localhost","user1","datasoft123","hr"))
  {
  die("Connect Error: " . mysqli_connect_error());
  }


//Run the Select query
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM customers');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

//Close the connection
mysqli_close($conn);
?>