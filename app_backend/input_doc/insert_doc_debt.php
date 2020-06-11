<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include '../../administrator/connect.php';
    $doc_id = $_POST['doc_id'];
    $person_id = $_POST['person_id'];
    $project_id = $_POST['project_id'];
    $str_date = $_POST['str_date'];
    $stp_date = $_POST['stp_date'];

    $sql_tb_debt = "INSERT INTO tb_debt(doc_id,person_id,project_id,str_date,stp_date) VALUES ('".$doc_id."','".$person_id."','".$project_id."','".$str_date."','".$stp_date."')";

    $query_tb_debt = mysqli_query($conn,$sql_tb_debt);

    echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
    echo "<script>window.location='input_doc_debt.php'</script>";

     ?>

  </body>
</html>
