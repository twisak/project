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

<<<<<<< HEAD
        // echo $id;
        $sql = "SELECT * FROM tb_person WHERE id = '".$id."' ";
        $query = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($query);

        $person_id = $result['person_id'];

        $sql_person = "DELETE FROM tb_person WHERE person_id = '$person_id'";

        $db_query_person = mysqli_query($conn,$sql_person);

        $sql_account_login = "DELETE FROM account_login WHERE person_id = '$person_id'";

        $db_query_account_login = mysqli_query($conn,$sql_account_login);
=======
        $sql_person = "DELETE FROM tb_person WHERE person_id = '$id'";

        $db_query_person = mysqli_query($conn,$sql_person);

        $sql1 = "DELETE FROM account_login WHERE person_id = '$id'";
        
        $db_query1 = mysqli_query($conn,$sql1);
>>>>>>> fd6620919118f81a69b740126085f1cee3a48e27

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_user.php'</script>";
    ?>

  </body>
</html>
