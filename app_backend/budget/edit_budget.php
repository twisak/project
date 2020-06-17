<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_POST['id'];
        $budget = $_POST['budget'];

        $sql_activity= "UPDATE tb_budget SET budget = '".$budget."'
                              WHERE id = '$id' ";
//echo $sql_activity;
       $db_query_activity = mysqli_query($conn,$sql_activity);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_budget.php'</script>";
    ?>

  </body>
</html>
