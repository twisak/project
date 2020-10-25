
<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');
	ini_set('display_errors', 1);
    error_reporting(~0);

        $doc_id = $_POST['doc_id'];
        echo $doc_id;
        $foreword = serialize( $_POST["foreword"] );
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $person_id = $_POST['person_id'];
        $teacher_id = $_POST['teacher_id'];
        $number = $_POST['number'];
        $money = $_POST['money'];
        //$amount = $_POST['amount'];
        $work = $_POST['work'];
        $date_work = $_POST['date_work'];
        $government = $_POST['government'];
        $that = $_POST['that'];
        $c_day = $_POST['c_day'];
        $title_id = $_POST['title_id'];
        $people = $_POST['people'];
        $mid_price = $_POST['mid_price'];

        $chairman = $_POST['chairman'];
        $committee = $_POST['committee'];
        $secretary = $_POST['secretary'];

        $details = $_POST['details'];
        $date_start  = $_POST['date_start'];
        $date_end = $_POST['date_end'];
        $property = serialize( $_POST["property"] );
        $scope = serialize( $_POST["scope"] );
        $responsible = $_POST['responsible'];
        $fine = serialize( $_POST["fine"] );
        $payment = serialize( $_POST["payment"] );
        $insurance = serialize( $_POST["insurance"] );
        $date_current = date('Y-m-d');

        
         
		
				$sql = "INSERT INTO tb_contract (doc_id,foreword,str_date,stp_date,project_id,activity_id,person_id,
                                                teacher_id,number,money,work,date_work,government,that,
                                                c_day,title_id,people,mid_price,chairman,committee,secretary,
                                                details,date_start,date_end,property,scope,responsible,fine,payment,insurance,date_current)
				 	     VALUES ('$doc_id','$foreword','$str_date','$stp_date','$project_id','$activity_id','$person_id','$teacher_id','$number',
                                 '$money','$work','$date_work','$government','$that','$c_day','$title_id','$people','$mid_price','$chairman','$committee','$secretary',
                                 '$details','$date_start','$date_end','$property','$scope','$responsible','$fine','$payment','$insurance','$date_current')";
                $db_query = mysqli_query($conn,$sql);
                 // echo $sql;
                //  echo $db_query;
                //  echo "<br>";
                //  echo "<br>";
       
            
        
	
    
    if($db_query)
        {
            echo "<script>";
            echo "alert(\" บันทึกเรียบร้อย\");";
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_frontend/input_doc/contract/index.php'>";
        }
?>
</body>
</html>
