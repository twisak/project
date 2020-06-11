<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
		include '../../administrator/connect.php';
        
        $person_id = $_POST['person_id'];
		$prefix = $_POST['prefix'];
		$firtname = $_POST['firtname'];
		$lastname = $_POST['lastname'];
		$idcard = $_POST['idcard'];
		$address = $_POST['address'];
		$username = $_POST['username'];
		$password = $_POST['password'];
       	$status = $_POST['status'];
		
		
    
    
        // $check = "SELECT username FROM tbmember WHERE username = '$username' ";
        // $db_query = mysqli_query($conn, $check);
        // $num=mysqli_num_rows($db_query);

        // if($num > 0)
        // {
        // echo "<script>";
        // echo "alert('Username ซ้ำ! กรุณากรอกข้อมูลใหม่');";
        // echo "window.history.back();";
        // echo "</script>";
        // }else
        // { 
            
        $sql = "INSERT INTO tb_person (prefix,firtname,lastname,idcard,address,person_id) 
        VALUES('$prefix','$firtname','$lastname','$idcard','$address','$person_id')";
         
        $db_query = mysqli_query($conn,$sql);
            
        $sql1 = "INSERT INTO account_login (person_id,username,password,position) 
        VALUES('$person_id','$username','$password','$position')";
         
        $db_query1 = mysqli_query($conn,$sql1);
           
            // echo $sql;
            // echo $db_query;
            // echo $sql1;
            // echo $db_query1;
		if($db_query) 
        {
            echo "<script>";
            echo "alert(\" สมัครสมาชิกเรียบร้อย\");"; 
            echo "</script>";
            echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_backend/tb_user/tb_user.php'>";
        }
        //}
	?>
</body>
</html>
