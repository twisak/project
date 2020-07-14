<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $idd = $_POST['idd'];
        $doc_id = $_POST['doc_id'];
        $date_current = date('Y-m-d');
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $title_id = $_POST['title_id'];
        $that = $_POST['that'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $person_id = $_POST['person_id'];
        $travel = $_POST['travel'];
        $byusing = $_POST['byusing'];
        $driver = $_POST['driver'];
        $budget_id = $_POST['budget_id'];


                    $sql= "UPDATE tb_note_command SET   doc_id     = '".$doc_id."',
                                                date_current        = '".$date_current."',
                                                str_date        = '".$str_date."',
                                                stp_date      = '".$stp_date."',
                                                title_id      = '".$title_id."',
                                                that        = '".$that."',
                                                project_id        = '".$project_id."',
                                                activity_id        = '".$activity_id."',
                                                person_id        = '".$person_id."',
                                                travel        = '".$travel."',
                                                byusing        = '".$byusing."',
                                                driver        = '".$driver."',
                                                budget_id        = '".$budget_id."'

                              WHERE id = '".$idd."'";

// echo $sql;

                     $db_query = mysqli_query($conn,$sql);
                    //  echo $sql;
                    //  echo $db_query;
                    //  echo "<br>";


        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_doc_note_command.php'</script>";
    ?>

  </body>
</html>
