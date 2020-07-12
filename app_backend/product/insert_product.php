
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $product_id = $_POST['product_id'];
		$budget_id = $_POST['budget_id'];
        $product = $_POST['product'];
        $project_id = $_POST['project_id'];

		$sql_tb_product = "INSERT INTO tb_product(product_id,product,budget_id,project_id)VALUES ('".$product_id."','".$product."','".$budget_id."','".$project_id."')";

		$query_tb_product = mysqli_query($conn,$sql_tb_product);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_product.php'</script>";

?>
</body>
</html>
