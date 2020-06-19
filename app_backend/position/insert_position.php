
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $position_id = $_POST['position_id'];
		$position_name = $_POST['position_name'];

		$sql_tb_position = "INSERT INTO tb_position(position_id,position_name)VALUES ('".$position_id."','".$position_name."')";

		$query_tb_position = mysqli_query($conn,$sql_tb_position);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_position.php'</script>";

?>
</body>
</html>
