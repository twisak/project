<?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');

        // $id = $_POST['id'];
        $doc_id = $_POST['doc_id'];
        $foreword = serialize( $_POST["foreword"] );
        $str_date = $_POST['str_date'];
        $stp_date = $_POST['stp_date'];
        $project_id = $_POST['project_id'];
        $activity_id = $_POST['activity_id'];
        $person_id = $_POST['person_id'];
        $teacher_id = $_POST['teacher_id'];
        $number = $_POST['number'];
        $money = $_POST['money'];
        //$amount = $_POST['amount'];
        $work = $_POST['work'];
        $date_work = $_POST['date_work'];
        $government = $_POST['government'];
        $that = $_POST['that'];
        // $c_day = $_POST['c_day'];
        $title_id = $_POST['title_id'];
        $people = $_POST['people'];
        $mid_price = $_POST['mid_price'];
        $details = $_POST['details'];
        $date_start  = $_POST['date_start'];
        $date_end = $_POST['date_end'];

        $property = serialize( $_POST["property"] );
        $scope = serialize( $_POST["scope"] );
        $responsible = $_POST['responsible'];
        $fine = serialize( $_POST["fine"] );
        $payment = serialize( $_POST["payment"] );
        $insurance = serialize( $_POST["insurance"] );

         print "<pre>";
         print_r($foreword);
         print "</pre>";

         print "<pre>";
         print_r($insurance);
         print "</pre>";

    // if($foreword != "")
    // {
        // for ($i = 1; $i<= (int)$_POST["hdnCount"];$i++){
        //     if(isset($_POST["foreword$i"]))
        //     {
        //         $foreword = $_POST["foreword$i"];
        //         //echo $foreword;
        //         if($foreword != "")
        //         {
                    $sql= "UPDATE tb_contract SET doc_id     = '".$doc_id."',
                                                foreword        = '".$foreword."',
                                                str_date        = '".$str_date."',
                                                stp_date      = '".$stp_date."',
                                                project_id      = '".$project_id."',
                                                activity_id      = '".$activity_id."',
                                                person_id        = '".$person_id."',
                                                teacher_id        = '".$teacher_id."',
                                                number        = '".$number."',
                                                money        = '".$money."',
                                                work        = '".$work."',
                                                date_work        = '".$date_work."',
                                                government        = '".$government."',
                                                that        = '".$that."',
                                                title_id        = '".$title_id."',
                                                people        = '".$people."',
                                                mid_price        = '".$mid_price."',
                                                details        = '".$details."',
                                                date_start        = '".$date_start."',
                                                date_end        = '".$date_end."',
                                                property        = '".$property."',
                                                scope        = '".$scope."',
                                                responsible        = '".$responsible."',
                                                fine        = '".$fine."',
                                                payment        = '".$payment."',
                                                insurance        = '".$insurance."'
                              WHERE doc_id = '".$doc_id."'";
                    $db_query = mysqli_query($conn,$sql);
                    //  echo $sql;
                    //  echo $db_query;
                    //  echo "<br>";

                    // echo $db_query;

        // 
        // echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        // echo "<script>window.location='../contract/index.php'</script>";

        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location='http://localhost/project_student/app_frontend/input_doc/contract/show.php?id=$doc_id'</script>";
    ?>

  </body>
</html>
