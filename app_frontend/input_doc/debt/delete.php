
 <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');
        
        $id = $_GET['id'];

        $sql_tb_debt = "DELETE FROM tb_debt WHERE id = '$id'";

        $db_query_debt = mysqli_query($conn,$sql_tb_debt);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../debt/index.php'</script>";
    ?>

  </body>
</html>
