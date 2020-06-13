
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$project_id = $_POST['project_id'];
		$project_name = $_POST['project_name'];
		$fiscal_year = $_POST['fiscal_year'];
		$budget_id = $_POST['budget_id'];
		$product_id = $_POST['product_id'];
		$mission_id = $_POST['mission_id'];
		$strategic_id = $_POST['strategic_id'];
		$principle = $_POST['principle'];
		$budget = $_POST['budget'];

		$sql_tb_project = "INSERT INTO tb_project(project_id,project_name,fiscal_year,budget_id,product_id,mission_id,strategic_id,principle,budget) 
        VALUES ('".$project_id."','".$project_name."','".$fiscal_year."','".$budget_id."','".$product_id."','".$mission_id."','".$strategic_id."','".$principle."','".$budget."')";

		$query_tb_project = mysqli_query($conn,$sql_tb_project);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_project.php'</script>";

?>
</body>
</html>
