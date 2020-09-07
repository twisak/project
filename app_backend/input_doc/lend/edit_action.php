
<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');
    
	ini_set('display_errors', 1);
    error_reporting(~0);

    $doc_id = $_POST['doc_id'];
	$str_date = $_POST['str_date'];
    $project = $_POST['project'];
    $activity = $_POST['activity'];
    $person_id = $_POST['person_id'];
	$teacher_id = $_POST['teacher_id'];
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

    $sql= "UPDATE tb_lend SET 
                                            str_date = '".$str_date."',
                                            project = '".$project."',
                                            activity = '".$activity."',
                                            person_id = '".$person_id."',
											teacher_id = '".$teacher_id."',
                                            allowance = '".$allowance."',
                                            allowance_price = '".$allowance_price."',
                                            rest_price = '".$rest_price."',
                                            room = '".$room."',
                                            num_night = '".$num_night."',
                                            vehicle_num = '".$vehicle_num."',
                                            vehicle_price = '".$vehicle_price."',
                                            regis = '".$regis."',
                                            regis_num = '".$regis_num."',
                                            fication_day = '".$fication_day."',
                                            num_people = '".$num_people."',
                                            num_hour = '".$num_hour."',
                                            price_hour = '".$price_hour."',
                                            students_work = '".$students_work."',
                                            work_day = '".$work_day."',
                                            work_price = '".$work_price."',
                                            hand_food = '".$hand_food."',
                                            num_food = '".$num_food."',
                                            food_price = '".$food_price."',
                                            snack = '".$snack."',
                                            num_snack = '".$num_snack."',
                                            snack_price = '".$snack_price."',
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
