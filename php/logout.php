<?php
require 'login.php';
session_destroy();
$username = null;
header('Location: https://tastybyte.azurewebsites.net/index.php');
?>