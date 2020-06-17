
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$product_id = $_POST['product_id'];
		$mission = $_POST['mission'];

		$sql_tb_mission = "INSERT INTO tb_mission(mission,product_id)VALUES ('".$mission."','".$product_id."')";

		$query_tb_mission = mysqli_query($conn,$sql_tb_mission);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_mission.php'</script>";

?>
</body>
</html>
