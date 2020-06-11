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

$sql_tb_note = "INSERT INTO tb_note(doc_id,person_id,project_id) VALUES ('".$doc_id."','".$person_id."','".$project_id."')";

$query_tb_note = mysqli_query($conn,$sql_tb_note);

echo "<script>alert('บันทึกข้อมูลของท่านเรียบร้อยแล้ว')</script>";
echo "<script>window.location='input_doc_note.php'</script>";

?>


  </body>
</html>
