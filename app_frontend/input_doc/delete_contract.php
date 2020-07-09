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

        $sql_tb_contract = "DELETE FROM tb_contract WHERE id = '$id'";

        $db_query_contract = mysqli_query($conn,$sql_tb_contract);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_doc_contract.php'</script>";
    ?>

  </body>
</html>
