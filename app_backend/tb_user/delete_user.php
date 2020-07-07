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

        $sql_person = "DELETE FROM tb_person WHERE id = '$id'";

        $db_query_person = mysqli_query($conn,$sql_person);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_user.php'</script>";
    ?>

  </body>
</html>
