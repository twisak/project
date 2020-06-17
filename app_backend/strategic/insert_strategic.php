
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$mission_id = $_POST['mission_id'];
		$strategic = $_POST['strategic'];

		$sql_tb_strategic = "INSERT INTO tb_strategic(mission_id,strategic)VALUES ('".$mission_id."','".$strategic."')";

		$query_tb_strategic = mysqli_query($conn,$sql_tb_strategic);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_strategic.php'</script>";

?>
</body>
</html>
