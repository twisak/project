
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $doc_id = $_POST['doc_id'];
		$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $project_id = $_POST['project_id'];
    $person_id = $_POST['person_id'];
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


    $sql_tb_lend = "INSERT INTO tb_lend(doc_id, str_date, stp_date, project_id, person_id, allowance, allowance_price, rest, rest_price, vehicle, vehicle_price, regis, regis_num, other, other_price)
                    VALUES ('".$doc_id."','".$str_date."','".$stp_date."','".$project_id."','".$person_id."','".$allowance."',
                    '".$allowance_price."','".$rest."','".$rest_price."','".$vehicle."','".$vehicle_price."','".$regis."','".$regis_num."',
                    '".$other."','".$other_price."')";
     echo $sql_tb_lend;
     $query_tb_lend = mysqli_query($conn,$sql_tb_lend);

   	for ($i = 1; $i<= (int)$_POST["hdnCount_activity"]; $i++)
       {
           		if(isset($_POST["date_list$i"]))
   		          {
               $doc_id = $_POST["doc_id"];
               $date_list = $_POST["date_list$i"];
               $pay_type = $_POST["pay_type$i"];
               $price_list = $_POST["price_list$i"];
               $balance = $_POST["balance$i"];

   				    $sql_tbl_detail = "INSERT INTO tb_listlend(doc_id,date_list,pay_type,price_list,balance) VALUES ('".$doc_id."','".$date_list."','".$pay_type."','".$price_list."','".$balance."')";
               echo $sql_tbl_detail;
   				    $query_tbl_detail = mysqli_query($conn,$sql_tbl_detail);

                 }
   	 }



      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='tb_doc_lend.php'</script>";

?>
</body>
</html>
