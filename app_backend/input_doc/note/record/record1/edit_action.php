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
        $date_current = date('Y-m-d');
        $person_id = $_POST['person_id'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $government = $_POST['government'];
        $at = $_POST['at'];
        $title_id = $_POST['title_id'];
        $budget_id = $_POST['budget_id'];
        $budget_year = $_POST['budget_year'];
        $num_person = $_POST['num_person'];
        $num_period = $_POST['num_period'];
        $price_period = $_POST['price_period'];
        $supplies_id = $_POST['supplies_id'];
        $control_id = $_POST['control_id'];


                    $sql= "UPDATE tb_note_record1 SET   doc_id     = '".$doc_id."',
                                                date_current        = '".$date_current."',
                                                person_id        = '".$person_id."',
                                                project_id      = '".$project_id."',
                                                activity_id      = '".$activity_id."',
                                                government        = '".$government."',
                                                at        = '".$at."',
                                                title_id        = '".$title_id."',
                                                budget_id        = '".$budget_id."',
                                                budget_year        = '".$budget_year."',
                                                num_person        = '".$num_person."',
                                                num_period        = '".$num_period."',
                                                price_period        = '".$price_period."',
                                                supplies_id        = '".$supplies_id."',
                                                control_id        = '".$control_id."'
                              WHERE id = '".$idd."' ";

// echo $sql;

                     $db_query = mysqli_query($conn,$sql);
                    //  echo $sql;
                    //  echo $db_query;
                    //  echo "<br>";


        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_frontend/input_doc/record/record1/show.php?id=$idd'</script>";
    ?>

  </body>
</html>
