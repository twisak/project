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
        

        $idd = $_POST['idd'];

        $doc_id = $_POST['doc_id'];
        $title_id = $_POST['title_id'];
        $at = $_POST['at'];
        $mug = $_POST['mug'];

        $send_with = serialize($_POST["send_with"]);
        $number = serialize($_POST["number"]);

        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $no = $_POST['no'];
        $heading = $_POST['heading'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $location = $_POST['location'];
        $invite = $_POST['invite'];
        $teacher_under = $_POST['teacher_under'];
        $date_current = date('Y-m-d');
        $person_id = $_POST['person_id'];




        $sql= "UPDATE tb_note_book1 SET   doc_id     = '".$doc_id."',
                                    title_id        = '".$title_id."',
                                    at        = '".$at."',
                                    mug      = '".$mug."',

                                    send_with      = '".$send_with."',
                                    number        = '".$number."',

                                    project_id        = '".$project_id."',
                                    activity_id        = '".$activity_id."',
                                    no        = '".$no."',
                                    heading        = '".$heading."',
                                    str_date        = '".$str_date."',
                                    stp_date        = '".$stp_date."',
                                    location        = '".$location."',
                                    invite        = '".$invite."',
                                    teacher_under        = '".$teacher_under."',
                                    date_current        = '".$date_current."',
                                    person_id = '".$person_id."'

                  WHERE id = '".$idd."'";
         $db_query = mysqli_query($conn,$sql);
        //  echo $sql;
        //  echo $db_query;
        //  echo "<br>";

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_frontend/input_doc/note/invite/invite1/show.php?id=$idd'</script>";
    ?>

  </body>
</html>
