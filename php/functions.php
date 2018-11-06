<?php
require "connect.php";
function cleanInput($data) {
	$data = trim($data);
 	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
	$data = mysqli_real_escape_string($GLOBALS['conn'], $data);
  	return $data;
}

function isempty($data) {
	if (empty($data)) {
    	return true;
  	} else {
  		return false;
	}
}

?>