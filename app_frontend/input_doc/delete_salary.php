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

        $sql_tb_salary = "DELETE FROM tb_salary WHERE id = '$id'";

        $db_query_salary = mysqli_query($conn,$sql_tb_salary);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_doc_salary.php'</script>";
    ?>

  </body>
</html>
