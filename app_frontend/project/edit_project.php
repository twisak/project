<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $project_id = $_POST['project_id'];
        $project_name = $_POST['project_name'];
        $fiscal_year = $_POST['fiscal_year'];
        $principle = $_POST['principle'];
        $budget = $_POST['budget'];

        $sql_project= "UPDATE tb_project SET    project_name = '".$project_name."',
                                                fiscal_year = '".$fiscal_year."',
                                                principle = '".$principle."',
                                                budget = '".$budget."'
                              WHERE project_id = '$project_id' ";


        $db_query_project = mysqli_query($conn,$sql_project);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_project.php'</script>";
    ?>

  </body>
</html>
