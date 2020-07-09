<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_GET['id'];

        $sql_tb_mission = "DELETE FROM tb_mission WHERE id = '$id'";

        $db_query_mission = mysqli_query($conn,$sql_tb_mission);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_mission.php'</script>";
    ?>

  </body>
</html>
