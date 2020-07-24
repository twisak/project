
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/report.css" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php
            $doc_id =$_GET['doc_id'];
            $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."'";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $id = $row['id'];
                $doc_id = $row['doc_id'];
                $foreword = unserialize($row['foreword']);
                $str_date = $row['str_date'];
                $stp_date = $row['stp_date'];
                $project_id = $row['project_id'];
                $activity_id = $row['activity_id'];
                $person_id = $row['person_id'];
                $teacher_id = $row['teacher_id'];
                $number = $row['number'];
                $money = $row['money'];
                $work = $row['work'];
                $date_work = $row['date_work'];
                $government = $row['government'];
                $that = $row['that'];
                $c_day = $row['c_day'];
                $title_id = $row['title_id'];
                $people = $row['people'];
                $mid_price = $row['mid_price'];
                $chairman = $row['chairman'];
                $committee = $row['committee'];
                $secretary = $row['secretary'];
                $details = $row['details'];
                $date_start  = $row['date_start'];
                $date_end = $row['date_end'];
                $property = unserialize($row['property']);
                $scope = unserialize($row["scope"]);
                $responsible = $row['responsible'];
                $fine = unserialize($row["fine"]);
                $payment = unserialize( $row["payment"] );
                $insurance = unserialize( $row["insurance"] );
            }

            $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
            $query1 = mysqli_query($conn,$sql1);
            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
                $project_name = $row1['project_name'];
                $project_id = $row1['project_id'];
            }

            $sql3 ="SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
            $query3 = mysqli_query($conn,$sql3);
            while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
            {
                $activity = $row3['activity'];
            }

            $sql2 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
            $query2 = mysqli_query($conn,$sql2);
            while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
            {
                $prefix = $row2['prefix'];
                $firtname = $row2['firtname'];
                $lastname = $row2['lastname'];
                $position_id = $row2['position_id'];
            }
            $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
            $query4 = mysqli_query($conn,$sql4);
            while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
            {
                $t_firstname = $row4['t_firstname'];
                $t_lastname = $row4['t_lastname'];
                $position_id = $row4['position_id'];
            }
            $sql6 ="SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
            $query6 = mysqli_query($conn,$sql6);
            while($row6 = mysqli_fetch_array($query6,MYSQLI_ASSOC))
            {
                $position_name = $row6['position_name'];
            }
                    //echo $position_id;
            $sql5 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
            $query5 = mysqli_query($conn,$sql5);
            while($row5 = mysqli_fetch_array($query5,MYSQLI_ASSOC))
            {
                $title = $row5['title'];
                $body = $row5['body'];
            }
?>
<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                      <tr>
                        <td align="center"><strong>ขอบเขตของงานจ้างเหมาบริการ</strong></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>รายละเอียดการจ้าง</strong></td>
                      </tr>
                      <tr class="border-0 padding-0" align="left">
                        <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $details;?></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>ระยะเวลาการจ้าง</strong></td>
                      </tr>
                      <tr class="border-0 padding-0" align="left">
                        <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตั้งแต่วันที่ <?php echo $day_thaiS;?>&nbsp;<?php echo $month_thaiS;?>&nbsp;<?php echo $year_thaiS;?> ถึงวันที่ <?php echo $day_thaiE;?>&nbsp;<?php echo $month_thaiE;?>&nbsp;<?php echo $year_thaiE;?></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr  align="left">
                            <td><strong>คุณสมบัติของผู้รับจ้าง</strong></td>
                        </tr>
                      <tr  align="left">
                        <td>
                            <?php
                                    $i=1;
                                    $i<="";
                                    $property1 = array($property);
                                    foreach ($property1 as $property1){
                                    $j=0;
                                        foreach ($property1 as $property1[$j]){
                                        $value = $property1[$j];
                                ?>
                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>.<?php echo $value;?><br>
                             <?php $j++; $i++; }}?>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>ขอบเขตของงานที่จ้าง</strong></td>
                      </tr>
                      <tr  align="left">
                        <td >
                            <?php
                                    $i=1;
                                    $i<="";
                                    $scope1 = array($scope);
                                    foreach ($scope1 as $scope1){
                                    $j=0;
                                    foreach ($scope1 as $scope1[$j]){
                                        $value = $scope1[$j]; 
                                ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>.<?php echo $value;?><br>
                            <?php $j++; $i++; }}?>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>ความรับผิดชอบของผู้ว่าจ้าง</strong></td>
                      </tr>
                      <tr  align="left">
                        <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $responsible;?></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>ค่าปรับและการหักเงินค่าจ้าง</strong></td>
                      </tr>
                      <tr  align="left">
                        <td>
                        <?php
                                    $i=1;
                                    $i<="";

                                    $fine1 = array($fine);
                                    foreach ($fine1 as $fine1){
                                     $j=0;
                                    foreach ($fine1 as $fine1[$j]){
                                        $value = $fine1[$j];
                        ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>.<?php echo $value;?><br>
                            <?php $j++; $i++; }}?>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>เงื่อนไขการชำระเงิน</strong></td>
                      </tr>
                      <tr  align="left">
                        <td>
                        <?php
                                $i=1;
                                $i<="";

                                $payment1 = array($payment);
                                foreach ($payment1 as $payment1){
                                $j=0;
                                foreach ($payment1 as $payment1[$j]){
                                    $value = $payment1[$j];
                        ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>.<?php echo $value;?><br> 
                            <?php $j++; $i++; }}?>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td><strong>เงื่อนไขหลักประกัน</strong></td>
                      </tr>
                      <tr  align="left">
                        <td>
                        <?php
                                $i=1;
                                $i<="";

                                $insurance1 = array($insurance);
                                foreach ($insurance1 as $insurance1){
                                $j=0;
                                foreach ($insurance1 as $insurance1[$j]){
                                    $value = $insurance1[$j];
                        ?>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $i;?>.<?php echo $value;?><br> 
                            <?php $j++; $i++; }}?>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                            <td width="50%" ></td>
                        <td width="50%">
                                    <?php 
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$chairman."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname1 = $row4['t_firstname'];
                                            $t_lastname1 = $row4['t_lastname'];
                                        }
                                    ?>
                            <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="400px" border="0" align="center">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                                    <td class="border-0 padding-0 text-center">
                                                    <?php echo $t_firstname1?>&nbsp;&nbsp;<?php echo $t_lastname1?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ประธานกรรมการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0 padding-0" align="right">(</td>
                                                    <td align="center" class="border-0 padding-0">
                                                    อาจารย์<?php echo $t_firstname1?>&nbsp;&nbsp;<?php echo $t_lastname1?>
                                                    </td>
                                                    <td class="border-0 padding-0" align="left">)</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                        </td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td width="50%" ></td>
                        <td width="50%" >
                                 <?php 
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$committee."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname2 = $row4['t_firstname'];
                                            $t_lastname2 = $row4['t_lastname'];
                                        }
                                    ?>
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="400px" border="0" align="center">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                                    <td class="border-0 padding-0 text-center">
                                                    <?php echo $t_firstname2?>&nbsp;&nbsp;<?php echo $t_lastname2?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0">กรรมการ</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0 padding-0" align="right">(</td>
                                                    <td align="center" class="border-0 padding-0">
                                                    อาจารย์<?php echo $t_firstname2?>&nbsp;&nbsp;<?php echo $t_lastname2?>
                                                    </td>
                                                    <td class="border-0 padding-0" align="left">)</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr  align="left">
                        <td width="50%" ></td>
                        <td width="50%" >
                                    <?php 
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$secretary."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname3 = $row4['t_firstname'];
                                            $t_lastname3 = $row4['t_lastname'];
                                        }
                                    ?>
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="400px" border="0" align="center">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                                    <td class="border-0 padding-0 text-center">
                                                    <?php echo $t_firstname3?>&nbsp;&nbsp;<?php echo $t_lastname3?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0">กรรมการและเลขานุกร</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0 padding-0" align="right">(</td>
                                                    <td align="center" class="border-0 padding-0">
                                                    อาจารย์<?php echo $t_firstname3?>&nbsp;&nbsp;<?php echo $t_lastname3?>
                                                    </td>
                                                    <td class="border-0 padding-0" align="left">)</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

        </table>


    </div>

    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>
