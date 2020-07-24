<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        
        //$product_id = $_POST['product_id'];
        $title_id = $_POST['title_id'];
        $title = $_POST['title'];
        $body = $_POST['body'];

        $sql= "UPDATE tb_title SET  title = '".$title."',
                                    body = '".$body."'
                              WHERE title_id = '$title_id' ";
// echo $sql;
       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_title.php'</script>";
    ?>

  </body>
</html>
