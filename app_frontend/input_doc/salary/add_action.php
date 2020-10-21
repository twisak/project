
<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');

	ini_set('display_errors', 1);
    error_reporting(~0);

        $doc_id = $_POST['doc_id'];
        $person_id = $_POST['person_id'];
        $contract_id = $_POST['contract_id'];
        $day_work = serialize($_POST["day_work"]);
				// print_r($day_work);

        $start_time = serialize($_POST["start_time"]);
        $end_time = serialize($_POST["end_time"]);
        $Job = serialize($_POST["Job"]);
        $part_time = serialize($_POST["part_time"]);
        $date_current = date('Y-m-d');


				$sql = "INSERT INTO tb_salary (doc_id,person_id,contract_id,day_work,start_time,end_time,Job,part_time,date_current)
				 	     VALUES ('$doc_id','$person_id','$contract_id','$day_work','$start_time','$end_time',
                                 '$Job','$part_time','$date_current')";
        $db_query = mysqli_query($conn,$sql);


				echo "<script>alert('บันทึกเรียบร้อย')</script>";
				echo "<script>window.location='../salary/index.php'</script>";
?>
</body>
</html>
