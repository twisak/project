<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_POST['id'];
        $strategic = $_POST['strategic'];
        $mission_id = $_POST['mission_id'];

        $sql= "UPDATE tb_strategic SET strategic = '".$strategic."',
                                     mission_id = '".$mission_id."'
                              WHERE id = '$id'";
//echo $sql;
       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_strategic.php'</script>";
    ?>

  </body>
</html>
s