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

        $sql_project= "DELETE FROM tb_project WHERE id = '$id'";

        $db_query_project = mysqli_query($conn,$sql_project);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_project.php'</script>";
    ?>

  </body>
</html>
