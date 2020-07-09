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

        $sql_tb_strategic = "DELETE FROM tb_strategic WHERE id = '$id'";

        $db_query_strategic = mysqli_query($conn,$sql_tb_strategic);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_strategic.php'</script>";
    ?>

  </body>
</html>
