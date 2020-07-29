<?php
include('../../config/connect.php');
include('../../config/constant.php');
?>
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);

		$project_id = $_POST['project_id'];
		$project_name = $_POST['project_name'];
		$fiscal_year = $_POST['fiscal_year'];
		$principle = $_POST['principle'];
		$budget = $_POST['budget'];

		$sql_tb_project = "INSERT INTO tb_project(project_id,project_name,fiscal_year,principle,budget) 
        VALUES ('".$project_id."','".$project_name."','".$fiscal_year."','".$principle."','".$budget."')";

		$query_tb_project = mysqli_query($conn,$sql_tb_project);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_project.php'</script>";

?>
</body>
</html>
