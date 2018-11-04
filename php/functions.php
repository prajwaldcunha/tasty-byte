<?php
function cleanInput($data) {
	$data = trim($data);
 	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
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