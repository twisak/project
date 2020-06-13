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
        $activity_id = $_POST['activity_id'];
        $activity = $_POST['activity'];

        $sql_activity= "UPDATE tb_activity SET activity_id = '".$activity_id."',
                                                activity = '".$activity."'
                              WHERE id = '$id' ";

        $db_query_activity = mysqli_query($conn,$sql_activity);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_activity.php'</script>";
    ?>

  </body>
</html>
