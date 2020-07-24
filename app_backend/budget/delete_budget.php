<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $budget_id = $_GET['budget_id'];

        $sql_tb_budget = "DELETE FROM tb_budget WHERE budget_id = '$budget_id'";

        $db_query_budget = mysqli_query($conn,$sql_tb_budget);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_budget.php'</script>";
    ?>

  </body>
</html>
