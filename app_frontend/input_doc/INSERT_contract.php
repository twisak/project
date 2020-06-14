
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $doc_id = $_POST['doc_id'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $person_id = $_POST['person_id'];
        // $hdn = $_POST['hdnCount'];
         //echo $doc_id;

	for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
		if(isset($_POST["foreword$i"]))
		{
            $foreword = $_POST["foreword$i"];
            //echo $foreword;
			if($foreword != "")
			{
				$sql = "INSERT INTO tb_contract (doc_id,foreword,str_date,stp_date,project_id,person_id)
				 	     VALUES ('$doc_id','$foreword','$str_date','$stp_date','$project_id','$person_id')";
                $db_query = mysqli_query($conn,$sql);
                // echo $sql;
                // echo $db_query;
                // echo "<br>";
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
