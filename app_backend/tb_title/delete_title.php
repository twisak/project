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

        $sql_title= "DELETE FROM tb_title WHERE id = '$id'";

        $db_query_title = mysqli_query($conn,$sql_title);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_title.php'</script>";
    ?>

  </body>
</html>
