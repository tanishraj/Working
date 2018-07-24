<?php 
	include_once "MainConfiguration.php";

	$connection=mysqli_connect($DBServerName, $DBUserName, $DBPassword, $DBName);
	if(!$connection){
		die('Connect Error: ' .mysqli_connect_errno());
	}
	mysqli_set_charset($connection, 'utf8');
	//echo "Success";
 ?>