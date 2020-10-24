 <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        

        $doc_id = $_POST['doc_id'];
        $project_id = $_POST['project_id'];

        $day_work = serialize($_POST["day_work"]);
        // print_r($day_work);

        $start_time = serialize($_POST["start_time"]);
        $end_time = serialize($_POST["end_time"]);
        $Job = serialize($_POST["Job"]);
        $part_time = serialize($_POST["part_time"]);

        $sql= "UPDATE tb_salary SET   doc_id     = '".$doc_id."',
                                      person_id        = '".$person_id."',

                                    total_amount        = '".$total_amount."',
                                    perform        = '".$perform."',
                                    teacher_id        = '".$teacher_id."',
                                    day_work        = '".$day_work."',
                                    start_time        = '".$start_time."',
                                    end_time        = '".$end_time."',
                                    Job        = '".$Job."',
                                    part_time        = '".$part_time."'

                  WHERE doc_id = '".$doc_id."'";
         $db_query = mysqli_query($conn,$sql);
        //  echo $sql;
        //  echo $db_query;
        //  echo "<br>";

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_backend/input_doc/salary/show.php?doc_id=$doc_id'</script>";
    ?>

  </body>
</html>
