
    <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        $doc_id = $_GET['id'];

        $sql_tb_lend = "DELETE FROM tb_lend WHERE doc_id = '$doc_id'";

        $db_query_lend = mysqli_query($conn,$sql_tb_lend);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../lend/index.php'</script>";
    ?>

  </body>
</html>
