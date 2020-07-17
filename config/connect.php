<?php
    session_start();
    if($_SESSION['status'] == 'Admin')
    {
    }
    elseif($_SESSION['status'] == 'Personal')
    {
    }
    else
    {
        echo "<script>";
        echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
        echo "</script>";
        echo "<meta http-equiv='refresh' content='0;url=../../administrator/logout.php'>";
    }

	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "db_document";

	$conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	
	  mysqli_query($conn,"SET NAMES 'utf8'");
      date_default_timezone_set('Asia/Bangkok');
?>