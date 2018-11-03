<?php
function validate($data) {
	$data = trim($data);
 	$data = stripslashes($data);
  	$data = htmlspecialchars($data);
  	return $data;
}

function isempty($data) {
	if (empty($data)) {
    	return false;
  	} else {
  		return true;
	}
}

?>