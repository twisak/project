
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $doc_id = $_POST['doc_id'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $person_id = $_POST['person_id'];
        $teacher_id = $_POST['teacher_id'];
        $number = $_POST['number'];
        $money = $_POST['money'];
        $amount = $_POST['amount'];
        $work = $_POST['work'];
        $date_work = $_POST['date_work'];
        $government = $_POST['government'];
        $that = $_POST['that'];
        $c_day = $_POST['c_day'];
        $title_id = $_POST['title_id'];
        $people = $_POST['people'];
        $mid_price = $_POST['mid_price'];
        $property = serialize( $_POST["property"] );
        $scope = serialize( $_POST["scope"] );
        $responsible = $_POST['responsible'];
        $fine = serialize( $_POST["fine"] );
        $payment = serialize( $_POST["payment"] );
        $insurance = serialize( $_POST["insurance"] );
        
        // print "<pre>";
        // print_r($scope);
        // print "</pre>";

        // print "<pre>";
        // print_r($property);
        // print "</pre>";

        // print "<pre>";
        // print_r($fine);
        // print "</pre>";


	for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
		if(isset($_POST["foreword$i"]))
		{
            $foreword = $_POST["foreword$i"];
            //echo $foreword;
			if($foreword != "")
			{
				$sql = "INSERT INTO tb_contract (doc_id,foreword,str_date,stp_date,project_id,person_id,
                                                teacher_id,number,money,amount,work,date_work,government,that,
                                                c_day,title_id,people,mid_price,property,scope,responsible,fine,
                                                payment,insurance)
				 	     VALUES ('$doc_id','$foreword','$str_date','$stp_date','$project_id','$person_id','$teacher_id','$number',
                                 '$money','$amount','$work','$date_work','$government','$that','$c_day','$title_id','$people','$mid_price',
                                 '$property','$scope','$responsible','$fine','$payment','$insurance')";
                $db_query = mysqli_query($conn,$sql);
                 echo $sql;
                 echo $db_query;
                 echo "<br>";
                 echo "<br>";
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
