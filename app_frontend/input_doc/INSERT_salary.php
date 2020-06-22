
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $doc_id = $_POST['doc_id'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $person_id = $_POST['person_id'];
        
        $period = $_POST['period'];
        $total_amount = $_POST['total_amount'];
        $perform = $_POST['perform'];
        $month = $_POST['month'];
        $teacher_id = $_POST['teacher_id'];
        //$day_work = $_POST['day_work'];
        // $start_time = $_POST['start_time'];
        // $end_time = $_POST['end_time'];
        // $Job = $_POST['Job'];
        // $part_time = $_POST['part_time'];


	for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
		if(isset($_POST["day_work$i"]))
		{
            $day_work = $_POST["day_work$i"];
            $start_time = $_POST["start_time$i"];
            $end_time = $_POST["end_time$i"];
            $Job = $_POST["Job$i"];
            $part_time = $_POST["part_time$i"];
            
			if($day_work != "")
			{
				$sql = "INSERT INTO tb_salary (doc_id,str_date,stp_date,project_id,activity_id,person_id,period,total_amount,
                                                perform,month,teacher_id,day_work,start_time,end_time,Job,part_time)
				 	     VALUES ('$doc_id','$str_date','$stp_date','$project_id','$activity_id','$person_id','$period',
                                 '$total_amount','$perform','$month','$teacher_id','$day_work','$start_time','$end_time',
                                 '$Job','$part_time')";
                $db_query = mysqli_query($conn,$sql);
                //  echo $sql;
                //  echo $db_query;
                //  echo "<br>";
                //  echo "<br>";
			}
		}
    }
    
    if($db_query)
        {
            echo "<script>";
            echo "alert(\" บันทึกเรียบร้อย\");";
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_frontend/input_doc/tb_doc_contract.php'>";
        }
?>
</body>
</html>
