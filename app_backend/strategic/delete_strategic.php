<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $strategic_id = $_GET['strategic_id'];

        $sql_tb_strategic = "DELETE FROM tb_strategic WHERE strategic_id = '$strategic_id'";

        $db_query_strategic = mysqli_query($conn,$sql_tb_strategic);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_strategic.php'</script>";
    ?>

  </body>
</html>
