
<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');

	ini_set('display_errors', 1);
    error_reporting(~0);

    $doc_id = $_POST['doc_id'];
	$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $project_id = $_POST['project_id'];
    $person_id = $_POST['person_id'];

    $teacher_id = $_POST['teacher_id'];
    $activity_id = $_POST['activity_id'];

    $allowance = $_POST['allowance'];
    $allowance_price = $_POST['allowance_price'];
    
    $rest_price = $_POST['rest_price'];
    $room = $_POST['room'];
    $num_night = $_POST['num_night'];

    $vehicle_num = $_POST['vehicle_num'];
    $vehicle_price = $_POST['vehicle_price'];

    $regis = $_POST['regis'];
    $regis_num = $_POST['regis_num'];

    $fication_day = $_POST['fication_day'];
    $num_people = $_POST['num_people'];
    $num_hour = $_POST['num_hour'];
    $price_hour = $_POST['price_hour'];

    $students_work = $_POST['students_work'];
    $work_day = $_POST['work_day'];
    $work_price = $_POST['work_price'];

    $hand_food = $_POST['hand_food'];
    $num_food = $_POST['num_food'];
    $food_price = $_POST['food_price']; 

    $snack = $_POST['snack'];
    $num_snack = $_POST['num_snack'];
    $snack_price = $_POST['snack_price'];

    

    $date_list = serialize( $_POST["date_list"] );
    $pay_type = serialize( $_POST["pay_type"] );
    $price_list = serialize( $_POST["price_list"] );
    $balance = serialize( $_POST["balance"] );
    $date_current = date('Y-m-d');

        // print "<pre>";
        // print_r($date_list);
        // print "</pre>";

        // print "<pre>";
        // print_r($pay_type);
        // print "</pre>";

        // print "<pre>";
        // print_r($price_list);
        // print "</pre>";

        // print "<pre>";
        // print_r($balance);
        // print "</pre>";


    // for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
	// 	if(isset($_POST["date_list$i"]))
	// 	{
            
            // $date_list = $_POST["date_list$i"];
            // $pay_type = $_POST["pay_type$i"];
            // $price_list = $_POST["price_list$i"];
            // $balance = $_POST["balance$i"];
            
			// if($date_list != "")
			// {
                $sql = "INSERT INTO tb_lend (doc_id,str_date,stp_date,project_id,person_id,teacher_id,activity_id,allowance, 
                                             allowance_price,rest_price,room,num_night,vehicle_num,vehicle_price,regis,regis_num,
                                             fication_day,num_people,num_hour,price_hour,students_work,work_day,work_price,hand_food,
                                             num_food,food_price,snack,num_snack,snack_price,date_list,pay_type,price_list,balance,date_current)
                                VALUES ('$doc_id','$str_date','$stp_date','$project_id','$person_id','$teacher_id','$activity_id','$allowance',
                                        '$allowance_price','$rest_price','$room','$num_night','$vehicle_num','$vehicle_price','$regis','$regis_num',
                                        '$fication_day','$num_people','$num_hour','$price_hour','$students_work','$work_day','$work_price','$hand_food',
                                        '$num_food','$food_price','$snack','$num_snack','$snack_price','$date_list','$pay_type','$price_list','$balance','$date_current')";
                
                $query = mysqli_query($conn,$sql);
                //  echo $sql;
                //  echo $query;
                //  echo "<br>";
                //echo $query;

    //         }
    //     }
    // }

      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='../lend/index.php'</script>";

?>
</body>
</html>
