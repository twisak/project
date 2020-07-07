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

        $sql_teacher= "DELETE FROM tb_teacher WHERE id = '$id'";

        $db_query_teacher = mysqli_query($conn,$sql_teacher);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_teacher.php'</script>";
    ?>

  </body>
</html>
