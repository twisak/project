
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

		$budget_id = $_POST['budget_id'];
		$product = $_POST['product'];

		$sql_tb_product = "INSERT INTO tb_product(product,budget_id)VALUES ('".$product."','".$budget_id."')";

		$query_tb_product = mysqli_query($conn,$sql_tb_product);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_product.php'</script>";

?>
</body>
</html>
