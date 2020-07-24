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
        $teacher_id = $_POST['teacher_id'];
        $t_firstname = $_POST['t_firstname'];
        $t_lastname = $_POST['t_lastname'];
        $position_id = $_POST['position_id'];

        $sql_teacher= "UPDATE tb_teacher SET    t_firstname = '".$t_firstname."',
                                                t_lastname = '".$t_lastname."',
                                                position_id = '".$position_id."'
                              WHERE teacher_id = '$teacher_id' ";


        $db_query_teacher = mysqli_query($conn,$sql_teacher);

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_teacher.php'</script>";
    ?>

  </body>
</html>
