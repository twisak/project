<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $strategic_id = $_POST['strategic_id'];
        $strategic = $_POST['strategic'];
        $mission_id = $_POST['mission_id'];
        $project_id = $_POST['project_id'];

        $sql= "UPDATE tb_strategic SET strategic = '".$strategic."',
                                     mission_id = '".$mission_id."',
                                     project_id = '".$project_id."'
                              WHERE strategic_id = '$strategic_id'";
//echo $sql;
       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_strategic.php'</script>";
    ?>

  </body>
</html>
s