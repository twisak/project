 <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        $id = $_GET['id'];

        $sql_tb_salary = "DELETE FROM tb_salary WHERE id = '$id'";

        $db_query_salary = mysqli_query($conn,$sql_tb_salary);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../salary/index.php'</script>";
    ?>

  </body>
</html>
