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
        $position_id = $_POST['position_id'];
        $house_num = $_POST['house_num'];
        $amphures_id = $_POST['amphures_id'];
        $districts_id = $_POST['districts_id'];
        $province_id = $_POST['province_id'];
		$username = $_POST['username'];
		$password = $_POST['password'];
       	$status = $_POST['status'];
        $con_password = $_POST['con_password'];

        if($password != $con_password)
		{
            echo "<script>";
            echo "alert('กรุณายืนยันรหัสผ่านให้ถูกต้อง');";
            echo "window.history.back();";
            echo "</script>";
        }else
        {

            $check = "SELECT username FROM account_login WHERE username = '$username' ";
            $db_query = mysqli_query($conn, $check);
            $num=mysqli_num_rows($db_query);

            if($num > 0)
            {
                echo "<script>";
                echo "alert('Username ซ้ำ! กรุณากรอกข้อมูลใหม่');";
                echo "window.history.back();";
                echo "</script>";
            }else
            {

                $sql = "INSERT INTO tb_person (prefix,firtname,lastname,idcard,position_id,house_num,province_id,districts_id,amphures_id,person_id)
                VALUES('$prefix','$firtname','$lastname','$idcard','$position_id','$house_num','$province_id','$districts_id','$amphures_id','$person_id')";

                $db_query = mysqli_query($conn,$sql);
                // echo $sql;
                // echo "<br>";
                $sql1 = "INSERT INTO account_login (person_id,username,password,status)
                VALUES('$person_id','$username','$password','$status')";
                
                $db_query1 = mysqli_query($conn,$sql1);
         
        

             //echo $sql;
            // echo $db_query;
             //echo $sql1;
            // echo $db_query1;
                if($db_query)
                {
                    echo "<script>";
                    echo "alert(\" บันทึกข้อมูลของท่านเรียบร้อยแล้ว\");";
                    echo "</script>";
                    echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_backend/tb_user/tb_user.php'>";
                }
                
            }
        }
	?>
</body>
</html>
