
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $id = $_POST['id'];
    $doc_id = $_POST['doc_id'];
		$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $project_id = $_POST['project_id'];
    $person_id = $_POST['person_id'];
		$teacher_id = $_POST['teacher_id'];
    $allowance = $_POST['allowance'];
    $allowance_price = $_POST['allowance_price'];
    $rest = $_POST['rest'];
    $rest_price = $_POST['rest_price'];
    $vehicle = $_POST['vehicle'];
    $vehicle_price = $_POST['vehicle_price'];
    $regis = $_POST['regis'];
    $regis_num = $_POST['regis_num'];
    $other = $_POST['other'];
    $other_price = $_POST['other_price'];


    $sql_tb_lend= "UPDATE tb_lend SET doc_id = '".$doc_id."',
                                            str_date = '".$str_date."',
                                            stp_date = '".$stp_date."',
                                            project_id = '".$project_id."',
                                            person_id = '".$person_id."',
																						teacher_id = '".$teacher_id."',
                                            allowance = '".$allowance."',
                                            allowance_price = '".$allowance_price."',
                                            rest = '".$rest."',
                                            rest_price = '".$rest_price."',
                                            vehicle = '".$vehicle."',
                                            vehicle_price = '".$vehicle_price."',
                                            regis = '".$regis."',
                                            regis_num = '".$regis_num."',
                                            other = '".$other."',
                                            other_price = '".$other_price."'
                          WHERE id = '$id' ";

     $query_tb_lend = mysqli_query($conn,$sql_tb_lend);

      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='tb_doc_lend.php'</script>";

?>
</body>
</html>
