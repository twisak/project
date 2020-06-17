
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$budget = $_POST['budget'];

		$sql_tb_budget = "INSERT INTO tb_budget(budget)VALUES ('".$budget."')";

		$query_tb_budget = mysqli_query($conn,$sql_tb_budget);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_budget.php'</script>";

?>
</body>
</html>
