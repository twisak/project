
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include('../../../../../config/connect.php');
    include('../../../../../config/constant.php');
    
    
    $doc_id = $_POST['doc_id'];
    $person_id = $_POST['person_id'];
    $project_id = $_POST['project_id'];
    $activity_id = $_POST['activity_id'];
    $government = $_POST['government'];
    $at = $_POST['at'];
    $date_current = date('Y-m-d');
    $title_id = $_POST['title_id'];
    $budget_id = $_POST['budget_id'];
    $budget_year = $_POST['budget_year'];
    $num_person = $_POST['num_person'];
    $num_period = $_POST['num_period'];
    $price_period = $_POST['price_period'];
    $supplies_id = $_POST['supplies_id'];
    $control_id = $_POST['control_id'];
    

        $sql = "INSERT INTO tb_note_record1 (doc_id,person_id,project_id,activity_id,government,at,date_current,title_id,budget_id,budget_year,num_person,num_period,price_period,supplies_id,control_id)
        VALUES('$doc_id','$person_id','$project_id','$activity_id','$government','$at','$date_current','$title_id','$budget_id','$budget_year','$num_person','$num_period','$price_period','$supplies_id','$control_id')";

        $db_query = mysqli_query($conn,$sql);
        //  echo $sql;
        //  echo "////////$db_query//////////";
                //  echo "<br>";
                //echo $query;


      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='../index.php'</script>";

?>
</body>
</html>
