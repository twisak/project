
<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');
    
	ini_set('display_errors', 1);
    error_reporting(~0);

    $doc_id = $_POST['doc_id'];
	$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $project_id = $_POST['project_id'];
    $activity_id = $_POST['activity_id'];
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

    $date_list = serialize( $_POST["date_list"] );
    $pay_type = serialize( $_POST["pay_type"] );
    $price_list = serialize( $_POST["price_list"] );
    $balance = serialize( $_POST["balance"] );

        //  print "<pre>";
        //  print_r($date_list);
        //  print "</pre>";

        //  print "<pre>";
        //  print_r($pay_type);
        //  print "</pre>";

        //  print "<pre>";
        //  print_r($price_list);
        //  print "</pre>";

        //  print "<pre>";
        //  print_r($balance);
        //  print "</pre>";

    $sql= "UPDATE tb_lend SET 
                                            str_date = '".$str_date."',
                                            stp_date = '".$stp_date."',
                                            project_id = '".$project_id."',
                                            activity_id = '".$activity_id."',
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
                                            other_price = '".$other_price."',
                                            date_list = '".$date_list."',
                                            pay_type = '".$pay_type."',
                                            price_list = '".$price_list."',
                                            balance = '".$balance."'
                          WHERE doc_id = '$doc_id' ";

      $query = mysqli_query($conn,$sql);
                    //  echo $sql;
                    //  echo $query;
                    //  echo "<br>";

      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='http://localhost/project_student/app_backend/input_doc/lend/show.php?doc_id=$doc_id'</script>";

?>
</body>
</html>
