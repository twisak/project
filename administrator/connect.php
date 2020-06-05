<?php

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "db_student";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	
	  mysqli_query($conn,"SET NAMES 'utf8'");
      date_default_timezone_set('Asia/Bangkok');
?>