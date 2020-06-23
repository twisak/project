
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

    $doc_id = $_POST['doc_id'];
	$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $project_id = $_POST['project_id'];
    $person_id = $_POST['person_id'];

    $teacher_id = $_POST['teacher_id'];
    $activity_id = $_POST['activity_id'];

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

    for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
		if(isset($_POST["date_list$i"]))
		{
            
            $date_list = $_POST["date_list$i"];
            $pay_type = $_POST["pay_type$i"];
            $price_list = $_POST["price_list$i"];
            $balance = $_POST["balance$i"];
            
			if($date_list != "")
			{
                $sql = "INSERT INTO tb_lend (doc_id,str_date,stp_date,project_id,person_id,teacher_id,activity_id,allowance, 
                                            allowance_price,rest,rest_price,vehicle,vehicle_price,regis,regis_num,other,
                                            other_price,date_list,pay_type,price_list,balance)
                                VALUES ('$doc_id','$str_date','$stp_date','$project_id','$person_id','$teacher_id','$activity_id','$allowance',
                                        '$allowance_price','$rest','$rest_price','$vehicle','$vehicle_price','$regis','$regis_num',
                                        '$other','$other_price','$date_list','$pay_type','$price_list','$balance')";
                
                $query = mysqli_query($conn,$sql);
                // echo $sql;
                // echo $query;
                // echo "<br>";
                //echo $query;

            }
        }
    }

      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='tb_doc_lend.php'</script>";

?>
</body>
</html>
