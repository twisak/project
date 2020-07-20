    <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        $id = $_GET['id'];

        $sql_tb_contract = "DELETE FROM tb_contract WHERE id = '$id'";

        $db_query_contract = mysqli_query($conn,$sql_tb_contract);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../contract/index.php'</script>";
    ?>

  </body>
</html>
