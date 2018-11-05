<?php
	session_start();
	$_SESSION['username'] = null;
	session_destroy();
	header('Location: https://tastybyte.azurewebsites.net/index.php');
?>