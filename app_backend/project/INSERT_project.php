
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $project_id = $_POST['project_id'];
        $project_name = $_POST['project_name'];
        // $hdn = $_POST['hdnCount'];
        // echo $activity; 

	for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
		if(isset($_POST["activity$i"]))
		{
            $activity = $_POST["activity$i"];
            //echo $activity; 
			if($activity != "")
			{
				$sql = "INSERT INTO tb_activity (project_id,activity) 
				 	     VALUES ('$project_id','$activity')";
                $db_query = mysqli_query($conn,$sql);
                //echo $sql; 
                //echo $db_query; 
                //echo "<br>";
			}
		}
    }
    //echo "<br>";
    $sql1 = "INSERT INTO tb_project (project_id, project_name) 
			VALUES ('$project_id','$project_name')";
            $db_query1 = mysqli_query($conn,$sql1);
            //echo $sql1; 
            //echo $db_query1; 
            
    mysqli_close($conn);
    
    if($db_query) 
        {
            echo "<script>";
            echo "alert(\" บันทึกเรียบร้อย\");"; 
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_backend/project/tb_project.php'>";
        }
?>
</body>
</html>