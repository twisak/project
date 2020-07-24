<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $product_id = $_GET['product_id'];

        $sql_tb_product = "DELETE FROM tb_product WHERE product_id = '$product_id'";

        $db_query_product = mysqli_query($conn,$sql_tb_product);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_product.php'</script>";
    ?>

  </body>
</html>
