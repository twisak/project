<?php
    include('../../../../../config/connect.php');
    include('../../../../../config/constant.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        $doc_id = $_GET['id'];

        $sql_tb_debt = "DELETE FROM tb_note_book1 WHERE doc_id = '$doc_id'";

        $db_query_debt = mysqli_query($conn,$sql_tb_debt);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../index.php'</script>";
    ?>

  </body>
</html>
