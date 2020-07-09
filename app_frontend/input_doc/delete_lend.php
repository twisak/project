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

        $sql_tb_lend = "DELETE FROM tb_lend WHERE id = '$id'";

        $db_query_lend = mysqli_query($conn,$sql_tb_lend);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_doc_lend.php'</script>";
    ?>

  </body>
</html>
