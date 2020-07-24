<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        //$id = $_POST['id'];
        $product_id = $_POST['product_id'];
        $product = $_POST['product'];
        $budget_id = $_POST['budget_id'];
        $project_id = $_POST['project_id'];

        $sql= "UPDATE tb_product SET product = '".$product."',
                                             budget_id = '".$budget_id."',
                                             project_id = '".$project_id."'
                              WHERE product_id = '$product_id' ";
//echo $sql;
       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_product.php'</script>";
    ?>

  </body>
</html>
