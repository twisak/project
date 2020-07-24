
 <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');
        
        $doc_id = $_GET['doc_id'];

        $sql_tb_debt = "DELETE FROM tb_debt WHERE doc_id = '$doc_id'";

        $db_query_debt = mysqli_query($conn,$sql_tb_debt);

        // echo "<script>alert('ลบข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='../debt/index.php'</script>";
    ?>

  </body>
</html>
