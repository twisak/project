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

        $sql_position= "DELETE FROM tb_position WHERE id = '$id'";

        $db_query_position = mysqli_query($conn,$sql_position);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_position.php'</script>";
    ?>

  </body>
</html>
