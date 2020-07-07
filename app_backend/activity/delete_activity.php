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

        $sql_activity= "DELETE FROM tb_activity WHERE id = '$id'";

        $db_query_activity = mysqli_query($conn,$sql_activity);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_activity.php'</script>";
    ?>

  </body>
</html>
