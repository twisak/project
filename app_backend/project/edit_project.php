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
        $project_id = $_POST['project_id'];
        $project_name = $_POST['project_name'];
        $fiscal_year = $_POST['fiscal_year'];
        $budget_id = $_POST['budget_id'];
        $product_id = $_POST['product_id'];
        $mission_id = $_POST['mission_id'];
        $strategic_id = $_POST['strategic_id'];

        $sql_project= "UPDATE tb_project SET project_id = '".$project_id."',
                                                project_name = '".$project_name."',
                                                fiscal_year = '".$fiscal_year."',
                                                budget_id = '".$budget_id."',
                                                product_id = '".$product_id."',
                                                mission_id = '".$mission_id."',
                                                strategic_id = '".$strategic_id."'
                              WHERE id = '$id' ";


        $db_query_project = mysqli_query($conn,$sql_project);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_project.php'</script>";
    ?>

  </body>
</html>
