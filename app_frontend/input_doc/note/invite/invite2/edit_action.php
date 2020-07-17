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
        $strategic_id = $_POST['strategic_id'];
        $day = $_POST['day'];
        $time_start = $_POST['time_start'];
        $time_end = $_POST['time_end'];
        $location = $_POST['location'];
        $invite_person = $_POST['invite_person'];
        $num = $_POST['num'];
        $date_inside = $_POST['date_inside'];
        $date_current = date('Y-m-d');
        $person_id = $_POST['person_id'];


        $sql= "UPDATE tb_note_book2 SET   doc_id     = '".$doc_id."',
                                    title_id        = '".$title_id."',
                                    at        = '".$at."',
                                    mug      = '".$mug."',

                                    send_with      = '".$send_with."',
                                    number        = '".$number."',

                                    project_id        = '".$project_id."',
                                    strategic_id        = '".$strategic_id."',
                                    day        = '".$day."',
                                    time_start        = '".$time_start."',
                                    time_end        = '".$time_end."',
                                    location        = '".$location."',
                                    invite_person        = '".$invite_person."',
                                    num        = '".$num."',
                                    date_inside        = '".$date_inside."',
                                    date_current = '".$date_current."',
                                    person_id = '".$person_id."'

                  WHERE id = '".$idd."'";
         $db_query = mysqli_query($conn,$sql);
         // echo $sql;
        //  echo $db_query;
        //  echo "<br>";

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_frontend/input_doc/invite/invite2/show.php?id=$idd'</script>";
    ?>

  </body>
</html>
