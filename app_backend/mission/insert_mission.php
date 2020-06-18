
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $mission_id = $_POST['mission_id'];
		$product_id = $_POST['product_id'];
		$mission = $_POST['mission'];

		$sql_tb_mission = "INSERT INTO tb_mission(mission_id,mission,product_id)VALUES ('".$mission_id."','".$mission."','".$product_id."')";

		$query_tb_mission = mysqli_query($conn,$sql_tb_mission);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_mission.php'</script>";

?>
</body>
</html>
