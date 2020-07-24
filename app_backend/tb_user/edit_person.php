<?php 
        include('../../config/connect.php');
        include('../../config/constant.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        //$id = $_POST['id'];
        $person_id = $_POST['person_id'];
        $prefix = $_POST['prefix'];
        $firtname = $_POST['firtname'];
        $lastname = $_POST['lastname'];
        $idcard = $_POST['idcard'];
        $position_id = $_POST['position_id'];
        $house_num = $_POST['house_num'];
        $province_id = $_POST['province_id'];
        $districts_id = $_POST['districts_id'];
        $amphures_id = $_POST['amphures_id'];
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

                $sql= "UPDATE tb_person SET prefix        = '".$prefix."',
                                            firtname      = '".$firtname."',
                                            lastname      = '".$lastname."',
                                            idcard        = '".$idcard."',
                                            position_id   = '".$position_id."',
                                            house_num     = '".$house_num."',
                                            province_id   = '".$province_id."',
                                            districts_id  = '".$districts_id."',
                                            amphures_id   = '".$amphures_id."'
                                    WHERE person_id = '".$person_id."'";
                //echo $sql;
                $db_query = mysqli_query($conn,$sql);

                $sql1= "UPDATE account_login SET username = '".$username."',
                                                 password = '".$password."'
                                    WHERE person_id = '".$person_id."'";
                //echo $sql;
                $db_query1 = mysqli_query($conn,$sql1);
                //echo '<br>';
                //echo $db_query;
                if($db_query)
                {
                    echo "<script>";
                    echo "alert(\" แก้ไขข้อมูลเรียบร้อย\");";
                    echo "</script>";
                    echo "<meta http-equiv='refresh'content='0;url=http://localhost/project_student/app_backend/tb_user/tb_user.php'>";
                }

            
        }
    ?>

  </body>
</html>
