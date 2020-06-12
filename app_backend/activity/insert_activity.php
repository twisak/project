
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$activity_id = $_POST['activity_id'];
		$activity = $_POST['activity'];


		$sql_tb_activity = "INSERT INTO tb_activity(activity_id,activity) VALUES ('".$activity_id."','".$activity."')";

		$query_tb_activity = mysqli_query($conn,$sql_tb_activity);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_activity.php'</script>";

?>
</body>
</html>
