
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $title_id = $_POST['title_id'];
		$title = $_POST['title'];
		$body = $_POST['body'];

		$sql_tb_title = "INSERT INTO tb_title(title_id,title,body)VALUES ('".$title_id."','".$title."','".$body."')";

		$query_tb_title = mysqli_query($conn,$sql_tb_title);

		echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
		echo "<script>window.location='tb_title.php'</script>";

?>
</body>
</html>
