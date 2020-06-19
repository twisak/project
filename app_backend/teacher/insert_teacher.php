
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $teacher_id = $_POST['teacher_id'];
		$t_firstname = $_POST['t_firstname'];
		$t_lastname = $_POST['t_lastname'];
    $position_id = $_POST['position_id'];

		$sql_tb_teacher = "INSERT INTO tb_teacher(teacher_id,t_firstname,t_lastname,position_id)VALUES ('".$teacher_id."','".$t_firstname."','".$t_lastname."','".$position_id."')";

		$query_tb_teacher = mysqli_query($conn,$sql_tb_teacher);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_teacher.php'</script>";

?>
</body>
</html>
