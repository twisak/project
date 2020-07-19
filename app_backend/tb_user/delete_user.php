<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_GET['person_id'];

        $sql_person = "DELETE FROM tb_person WHERE person_id = '$id'";

        $db_query_person = mysqli_query($conn,$sql_person);

        $sql1 = "DELETE FROM account_login WHERE person_id = '$id'";
        
        $db_query1 = mysqli_query($conn,$sql1);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_user.php'</script>";
    ?>

  </body>
</html>
