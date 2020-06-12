
<?php
	ini_set('display_errors', 1);
    error_reporting(~0);
    include '../../administrator/connect.php';

        $project_id = $_POST['project_id'];
        $project_name = $_POST['project_name'];

        $sql_check_activity = "select * from tb_project where project_id = '".$project_id."' and project_name = '".$project_name."' ";
        $query_check_activity = mysqli_query($conn,$sql_check_activity);
        // $row_cnt = $query_check_head->num_rows;
        $num_rows_activity = mysqli_num_rows($query_check_activity);

//         if ($num_rows_activity==1) {
//
//   for ($i = 1; $i<= (int)$_POST["hdnCount_activity"]; $i++)
//     {
//             if(isset($_POST["activity$i"]))
//               {
//             $project_id = $_POST["project_id"];
//             $project_name = $POST["project_name"];
//             $activity = $_POST["activity$i"];
//
//             $sql_tb_activity = "INSERT INTO tb_activity(activity,project_id,project_name) VALUES ('".$activity."','".$project_id."','".$project_name."')";
//             // echo $sql_tbl_detail;
//             $query_tb_activity = mysqli_query($conn,$sql_tb_activity);
//
//               }
//    }
//
//
// }else{

  $sql_tb_project = "INSERT INTO tb_project(project_id,project_name) VALUES ('".$project_id."','".$project_name."')";
  // echo $sql_tbl_head;
  $query_tb_project = mysqli_query($conn,$sql_tb_project);

	for ($i = 1; $i<= (int)$_POST["hdnCount_activity"]; $i++)
    {
        		if(isset($_POST["activity$i"]))
		          {
            $project_id = $_POST["project_id"];
            $activity = $_POST["activity$i"];

				    $sql_tb_activity = "INSERT INTO tb_activity(project_id,activity) VALUES ('".$project_id."','".$activity."')";
            // echo $sql_tbl_detail;
				    $query_tb_activity = mysqli_query($conn,$sql_tb_activity);

              }
	 }

 // }

            echo "<script>";
            echo "alert(\" บันทึกเรียบร้อย\");";
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_backend/project/tb_project.php'>";

?>
</body>
</html>
