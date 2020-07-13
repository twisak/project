
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';
    
    $doc_id = $_POST['doc_id'];
    $title_id = $_POST['title_id'];
    $at = $_POST['at'];
    $mug = $_POST['mug'];

    $send_with = serialize($_POST["send_with"]);
    $number = serialize($_POST["number"]);

    $project_id = $_POST['project_id'];
    $activity_id = $_POST['activity_id'];
    $no = $_POST['no'];
    $heading = $_POST['heading'];
    $str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];
    $location = $_POST['location'];
    $invite = $_POST['invite'];
    $teacher_under = $_POST['teacher_under'];
    $date_current = date('Y-m-d');
    $person_id = $_POST['person_id'];

        // print "<pre>";
        // print_r($send_with);
        // print "</pre>";

        // print "<pre>";
        // print_r($number);
        // print "</pre>";
    
    

        $sql = "INSERT INTO tb_note_book1 (doc_id,title_id,at,mug,send_with,number,project_id,activity_id,no,heading,str_date,stp_date,
                                            location,invite,teacher_under,date_current,person_id)
                                      VALUES('$doc_id','$title_id','$at','$mug','$send_with','$number','$project_id','$activity_id'
                                            ,'$no','$heading','$str_date','$stp_date','$location','$invite','$teacher_under','$date_current','$person_id')";

        $db_query = mysqli_query($conn,$sql);
        //  echo $sql;
        //  echo "////////$db_query//////////";
                //  echo "<br>";
                //echo $query;


      echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
      echo "<script>window.location='tb_doc_note_invite.php'</script>";

?>
</body>
</html>
