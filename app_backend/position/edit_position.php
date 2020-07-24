<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $position_id = $_POST['position_id'];
        $position_name = $_POST['position_name'];

        $sql= "UPDATE tb_position SET position_name = '".$position_name."'
                                WHERE position_id = '$position_id' ";

       $db_query = mysqli_query($conn,$sql);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_position.php'</script>";
    ?>

  </body>
</html>
