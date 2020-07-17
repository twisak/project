
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include('../../../../../config/connect.php');
    include('../../../../../config/constant.php');
    
    $doc_id = $_POST['doc_id'];
    $title_id = $_POST['title_id'];
    $at = $_POST['at'];
    $mug = $_POST['mug'];

    $send_with = serialize($_POST["send_with"]);
    $number = serialize($_POST["number"]);

    $project_id = $_POST['project_id'];
    $strategic_id = $_POST['strategic_id'];
    $day = $_POST['day'];
    $time_start = $_POST['time_start'];
    $time_end = $_POST['time_end'];
    $location = $_POST['location'];
    $invite_person = $_POST['invite_person'];
    $num = $_POST['num'];
    $date_inside = $_POST['date_inside'];
    $date_current = date('Y-m-d');
    $person_id = $_POST['person_id'];

        // print "<pre>";
        // print_r($send_with);
        // print "</pre>";

        // print "<pre>";
        // print_r($number);
        // print "</pre>";
    
    

        $sql = "INSERT INTO tb_note_book2 (doc_id,title_id,at,mug,send_with,number,project_id,strategic_id,day,time_start,time_end,
                                            location,invite_person,num,date_inside,date_current,person_id)
                                      VALUES('$doc_id','$title_id','$at','$mug','$send_with','$number','$project_id','$strategic_id'
                                            ,'$day','$time_start','$time_end','$location','$invite_person','$num','$date_inside','$date_current','$person_id')";

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
