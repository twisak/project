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
        //$product_id = $_POST['product_id'];
        $mission = $_POST['mission'];
        $product_id = $_POST['product_id'];
        $project_id = $_POST['project_id'];

        $sql= "UPDATE tb_mission SET mission = '".$mission."',
                                     product_id = '".$product_id."',
                                     project_id = '".$project_id."'
                              WHERE id = '$id'";
//echo $sql;
       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_mission.php'</script>";
    ?>

  </body>
</html>
s