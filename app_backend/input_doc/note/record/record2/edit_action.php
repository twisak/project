<?php 
    include('../../../../../config/connect.php');
    include('../../../../../config/constant.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

        $doc_id = $_POST['doc_id'];
        $date_current = date('Y-m-d');
        $person_id = $_POST['person_id'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $government = $_POST['government'];
        $at = $_POST['at'];
        $title_id = $_POST['title_id'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $real_date = $_POST['real_date'];

                    $sql= "UPDATE tb_note_record2 SET   doc_id     = '".$doc_id."',
                                                date_current        = '".$date_current."',
                                                person_id        = '".$person_id."',
                                                project_id      = '".$project_id."',
                                                activity_id      = '".$activity_id."',
                                                government        = '".$government."',
                                                at        = '".$at."',
                                                title_id        = '".$title_id."',
                                                str_date        = '".$str_date."',
                                                stp_date        = '".$stp_date."',
                                                real_date        = '".$real_date."'
                              WHERE doc_id = '".$doc_id."' ";

// echo $sql;

                     $db_query = mysqli_query($conn,$sql);
                    //  echo $sql;
                    //  echo $db_query;
                    //  echo "<br>";


        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_backend/input_doc/note/record/record2/show.php?doc_id=$doc_id'</script>";
    ?>

  </body>
</html>
