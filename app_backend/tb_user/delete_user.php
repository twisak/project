<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_GET['id'];

        // echo $id;
        $sql = "SELECT * FROM tb_person WHERE id = '".$id."' ";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($query);

        $person_id = $result['person_id'];

        $sql_person = "DELETE FROM tb_person WHERE person_id = '$person_id'";

        $db_query_person = mysqli_query($conn,$sql_person);

        $sql_account_login = "DELETE FROM account_login WHERE person_id = '$person_id'";

        $db_query_account_login = mysqli_query($conn,$sql_account_login);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_user.php'</script>";
    ?>

  </body>
</html>
