
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';
    
    
    $doc_id = $_POST['doc_id'];
    $person_id = $_POST['person_id'];
    $project_id = $_POST['project_id'];
    $activity_id = $_POST['activity_id'];
    $government = $_POST['government'];
    $at = $_POST['at'];
    $date_current = date('Y-m-d');
    $title_id = $_POST['title_id'];
    $str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $real_date = $_POST['real_date'];
    

        $sql = "INSERT INTO tb_note_record2 (doc_id,person_id,project_id,activity_id,government,at,date_current,title_id,str_date,stp_date,real_date)
        VALUES('$doc_id','$person_id','$project_id','$activity_id','$government','$at','$date_current','$title_id','$str_date','$stp_date','$real_date')";

        $db_query = mysqli_query($conn,$sql);
         echo $sql;
         echo "////////$db_query//////////";
                //  echo "<br>";
                //echo $query;


    //   echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
    //   echo "<script>window.location='tb_doc_note_record.php'</script>";

?>
</body>
</html>
