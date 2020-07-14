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
        $title_id = $_POST['title_id'];
        $at = $_POST['at'];
        $mug = $_POST['mug'];

        $send_with = serialize($_POST["send_with"]);
        $number = serialize($_POST["number"]);

        $project_id = $_POST['project_id'];
        $date_current = date('Y-m-d');
        $person_id = $_POST['person_id'];




        $sql= "UPDATE tb_note_book3 SET   doc_id     = '".$doc_id."',
                                    title_id        = '".$title_id."',
                                    at        = '".$at."',
                                    mug      = '".$mug."',

                                    send_with      = '".$send_with."',
                                    number        = '".$number."',

                                    project_id        = '".$project_id."',
                                    date_current        = '".$date_current."',
                                    person_id = '".$person_id."'

                  WHERE id = '".$idd."'";
         $db_query = mysqli_query($conn,$sql);
         // echo $sql;
        //  echo $db_query;
        //  echo "<br>";

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='tb_doc_note_invite.php'</script>";
    ?>

  </body>
</html>
