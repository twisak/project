
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';
    
        $recorder = $_POST['recorder'];
		$project_id = $_POST['project_id'];
		$project_name = $_POST['project_name'];
		$fiscal_year = $_POST['fiscal_year'];
		$principle = $_POST['principle'];
        $budget = $_POST['budget'];
        $recorder = $_POST['recorder'];

		$sql_tb_project = "INSERT INTO tb_project(project_id,project_name,fiscal_year,principle,budget,recorder) 
        VALUES ('".$project_id."','".$project_name."','".$fiscal_year."','".$principle."','".$budget."','".$recorder."')";

		$query_tb_project = mysqli_query($conn,$sql_tb_project);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_project.php'</script>";

?>
</body>
</html>
