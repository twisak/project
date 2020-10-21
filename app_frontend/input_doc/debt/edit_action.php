
    <?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        // $id = $_POST['id'];
        $doc_id = $_POST['doc_id'];
        $date_current = date('Y-m-d');
        $name_train = $_POST['name_train'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $person_id = $_POST['person_id'];
        $teacher_id = $_POST['teacher_id'];
        $money_from = $_POST['money_from'];
        //$amount = $_POST['amount'];
        $lend_num = $_POST['lend_num'];
        $note_that = $_POST['note_that'];
        $date_note = $_POST['date_note'];
        $under = $_POST['under'];

        $along_with = $_POST['along_with'];
        $go_practice = $_POST['go_practice'];
        $depart_from = $_POST['depart_from'];
        $date_depart = $_POST['date_depart'];
        $time_depart = $_POST['time_depart'];
        $back  = $_POST['back'];

        $date_back = $_POST['date_back'];
        $time_back = $_POST['time_back'];
        $open_money = $_POST['open_money'];
        // $allowance = $_POST['allowance'];
        // $allowance_day = $_POST['allowance_day'];
        // $allowance_price = $_POST['allowance_price'];
        // $allowance_sum = $_POST['allowance_sum'];
        // $rest = $_POST['rest'];
        // $rest_day = $_POST['rest_day'];
        // $rest_sum = $_POST['rest_sum'];
        // $vehicle = $_POST['vehicle'];
        // $vehicle_sum = $_POST['vehicle_sum'];
        // $other = $_POST['other'];
        // $other_sum = $_POST['other_sum'];
        $document_num = $_POST['document_num'];

        $list = serialize( $_POST["list"] );
        $money_num = serialize( $_POST["money_num"] );

        $approve = $_POST['approve'];
        $disburse = $_POST['disburse'];
        $payer = $_POST['payer'];


        //  print "<pre>";
        //  print_r($list);
        //  print "</pre>";

        //  print "<pre>";
        //  print_r($money_num);
        //  print "</pre>";

    // if($foreword != "")
    // {
        // for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
        //     if(isset($_POST["foreword$i"]))
        //     {
        //         $foreword = $_POST["foreword$i"];
        //         //echo $foreword;
        //         if($foreword != "")
        //         {
                    $sql= "UPDATE tb_debt SET   doc_id     = '".$doc_id."',
                                                date_current        = '".$date_current."',
                                                name_train        = '".$name_train."',
                                                project_id      = '".$project_id."',
                                                activity_id      = '".$activity_id."',
                                                person_id        = '".$person_id."',
                                                teacher_id        = '".$teacher_id."',
                                                money_from        = '".$money_from."',
                                                lend_num        = '".$lend_num."',
                                                note_that        = '".$note_that."',
                                                date_note        = '".$date_note."',
                                                under        = '".$under."',
                                                along_with        = '".$along_with."',
                                                go_practice        = '".$go_practice."',
                                                depart_from        = '".$depart_from."',
                                                date_depart        = '".$date_depart."',
                                                time_depart        = '".$time_depart."',
                                                back        = '".$back."',
                                                date_back        = '".$date_back."',
                                                time_back        = '".$time_back."',
                                                open_money        = '".$open_money."',
                                                document_num        = '".$document_num."',
                                                list        = '".$list."',
                                                money_num        = '".$money_num."',
                                                approve        = '".$approve."',
                                                disburse        = '".$disburse."',
                                                payer        = '".$payer."'
                              WHERE doc_id = '".$doc_id."'";
                     $db_query = mysqli_query($conn,$sql);

                     // echo $sql;
                     // echo $db_query;
                     //echo "<br>";


        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_frontend/input_doc/debt/show.php?id=$doc_id'</script>";
    ?>

  </body>
</html>
