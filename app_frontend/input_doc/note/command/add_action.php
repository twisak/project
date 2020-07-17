
<?php
    include('../../../../config/connect.php');
    include('../../../../config/constant.php');
	ini_set('display_errors', 1);
    error_reporting(~0);
    
    $date_current = date('Y-m-d');
    $doc_id = $_POST['doc_id'];
	$str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $title_id = $_POST['title_id'];
    $that = $_POST['that'];
    $project_id = $_POST['project_id'];
    $activity_id = $_POST['activity_id'];
    $person_id = $_POST['person_id'];
    $travel = $_POST['travel'];
    $byusing = $_POST['byusing'];
    $driver = $_POST['driver'];
    $budget_id = $_POST['budget_id'];
    

        $sql = "INSERT INTO tb_note_command (doc_id,date_current,str_date,stp_date,title_id,that,project_id,activity_id,person_id,travel,byusing,driver,budget_id)
        VALUES('$doc_id','$date_current','$str_date','$stp_date','$title_id','$that','$project_id','$activity_id','$person_id','$travel','$byusing','$driver','$budget_id')";

        $db_query = mysqli_query($conn,$sql);
        // echo $sql;
        // echo "////////$db_query//////////";
                //  echo "<br>";
                //echo $query;


      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='../command/index.php'</script>";

?>
</body>
</html>
