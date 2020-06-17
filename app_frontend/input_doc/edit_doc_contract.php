<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
        include '../../administrator/connect.php';

        $id = $_POST['id'];
        $doc_id = $_POST['doc_id'];
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $person_id = $_POST['person_id'];
        //$foreword = $_POST['foreword'];
         //echo $doc_id;

    // if($foreword != "")
    // {
        for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
            if(isset($_POST["foreword$i"]))
            {
                $foreword = $_POST["foreword$i"];
                //echo $foreword;
                if($foreword != "")
                {
                    $sql= "UPDATE tb_person SET doc_id     = '".$doc_id."',
                                                foreword        = '".$foreword."',
                                                str_date        = '".$str_date."',
                                                stp_date      = '".$stp_date."',
                                                project_id      = '".$project_id."',
                                                person_id        = '".$person_id."'
                              WHERE id = '".$id."'";
                    //$db_query = mysqli_query($conn,$sql);
                     echo $sql;
                     //echo $db_query;
                     echo "<br>";
                }
            }
        }
    // }else
     //{
    //             if($foreword == "")
    //             {
    //                 $id1 = $_POST['id'];
    //                 $doc_id1 = $_POST['doc_id'];
    //                 $str_date1 = $_POST['str_date'];
    //                 $stp_date1 = $_POST['stp_date'];
    //                 $project_id1 = $_POST['project_id'];
    //                 $person_id1 = $_POST['person_id'];
    //                 $foreword1 = $_POST['foreword'];

    //                 $sql= "UPDATE tb_person SET doc_id     = '".$doc_id1."',
    //                                             foreword        = '".$foreword1."',
    //                                             str_date        = '".$str_date1."',
    //                                             stp_date      = '".$stp_date1."',
    //                                             project_id      = '".$project_id1."',
    //                                             person_id        = '".$person_id1."'
    //                           WHERE id = '".$id1."'";
    //                 //$db_query = mysqli_query($conn,$sql);
    //                  echo $sql;
    //                 // echo $db_query;
    //                  echo "<br>";
    //             }
          
    // }

        // echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        // echo "<script>window.location='tb_user.php'</script>";
    ?>

  </body>
</html>
