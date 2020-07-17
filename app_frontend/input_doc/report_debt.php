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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->

    <!-- แบมะ -->
    <link href="../css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/report.css" rel="stylesheet">
    <link href="../assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- แบมะ -->

    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<?php

            include '../../administrator/connect.php';

            $doc_id = $_GET['id'];
            echo $doc_id;

            $sql_debt = "SELECT * FROM tb_debt WHERE doc_id = '".$doc_id."' ";
            $query_debt = mysqli_query($conn,$sql_debt);
            $result_debt = mysqli_fetch_assoc($query_debt);

            $doc_id = $result_debt['doc_id'];
            $date_current = $result_debt['date_current'];
            $name_train = $result_debt['name_train'];
            $project_id = $result_debt['project_id'];
            $activity_id = $result_debt['activity_id'];
            $person_id = $result_debt['person_id'];
            $teacher_id = $result_debt['teacher_id'];
            $money_from = $result_debt['money_from'];
            $money_from_id = $result_debt['money_from_id'];
            $lend_num = $result_debt['lend_num'];
            $note_that = $result_debt['note_that'];
            $date_note = $result_debt['date_note'];
            $under = $result_debt['under'];
            $along_with = $result_debt['along_with'];
            $go_practice = $result_debt['go_practice'];
            $depart_from = $result_debt['depart_from'];
            $date_depart = $result_debt['date_depart'];
            $time_depart = $result_debt['time_depart'];
            $back = $result_debt['back'];
            $date_back = $result_debt['date_back'];
            $time_back = $result_debt['time_back'];
            $open_money = $result_debt['open_money'];
            $allowance = $result_debt['allowance'];
            $allowance_day = $result_debt['allowance_day'];
            $allowance_price = $result_debt['allowance_price'];
            $allowance_sum = $result_debt['allowance_sum'];
            $rest = $result_debt['rest'];
            $rest_day = $result_debt['rest_day'];
            $rest_sum = $result_debt['rest_sum'];
            $vehicle = $result_debt['vehicle'];
            $vehicle_sum = $result_debt['vehicle_sum'];
            $other = $result_debt['other'];
            $other_sum = $result_debt['other_sum'];
            $document_num = $result_debt['document_num'];

            $list = $result_debt['list'];
            $money_num = $result_debt['money_num'];

            $approve = $result_debt['approve'];
            $disburse = $result_debt['disburse'];
            $payer = $result_debt['payer'];

            $sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
            $query_project = mysqli_query($conn,$sql_project);
            $result_project = mysqli_fetch_assoc($query_project);
            $project_name = $result_project['project_name'];

            $sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
            $query_activity = mysqli_query($conn,$sql_activity);
            $result_activity = mysqli_fetch_assoc($query_activity);
            $activity = $result_activity['activity'];

            $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
            $query_person = mysqli_query($conn,$sql_person);
            $result_person = mysqli_fetch_assoc($query_person);
            $prefix  = $result_person['prefix'];
            $firtname = $result_person['firtname'];
            $lastname = $result_person['lastname'];
            $idcard = $result_person['idcard'];
            $position_id = $result_person['position_id'];
            $house_num = $result_person['house_num'];
            $road = $result_person['road'];
            $village = $result_person['village'];
            $alley = $result_person['alley'];
            $province_id = $result_person['province_id'];
            $districts_id = $result_person['districts_id'];
            $amphures_id = $result_person['amphures_id'];

            $sql_position = "SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
            $query_position = mysqli_query($conn,$sql_position);
            $result_position = mysqli_fetch_assoc($query_position);
            $position_name = $result_position['position_name'];

            $sql_provinces = "SELECT * FROM provinces WHERE id = '".$province_id."' ";
            $query_provinces = mysqli_query($conn,$sql_provinces);
            $result_provinces = mysqli_fetch_assoc($query_provinces);
            $name_th_p = $result_provinces['name_th'];

            $sql_amphures = "SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
            $query_amphures = mysqli_query($conn,$sql_amphures);
            $result_amphures = mysqli_fetch_assoc($query_amphures);
            $name_th_a = $result_amphures['name_th'];

            $sql_districts = "SELECT * FROM districts WHERE id = '".$districts_id."' ";
            $query_districts = mysqli_query($conn,$sql_districts);
            $result_districts = mysqli_fetch_assoc($query_districts);
            $name_th_d = $result_districts['name_th'];

            $sql_teacher = "SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
            $query_teacher = mysqli_query($conn,$sql_teacher);
            $result_teacher = mysqli_fetch_assoc($query_teacher);
            $t_firstname = $result_teacher['t_firstname'];
            $t_lastname = $result_teacher['t_lastname'];






?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>ใบสำคัญรับเงิน</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>สำหรับวิทยากร</strong>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ใบสำคัญรับเงิน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">สำหรับวิทยากร</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <?php

            $subday_date_current = substr($date_current,8);
            $submonth_date_current = substr($date_current,5,-3);
            $subyear_date_current = substr($date_current,0,-6);


            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
             $test = str_replace($numarabic,$numthai,$subday_date_current);

             $str_month = $submonth_date_current;
             if($str_month == "01"){
               $month_thai = "มกราคม";
             }else if($str_month == "02"){
               $month_thai = "กุมภาพันธ์";
             }else if($str_month == "03"){
               $month_thai = "มีนาคม";
             }else if($str_month == "04"){
               $month_thai = "เมษายน";
             }else if($str_month == "05"){
               $month_thai = "พฤษภาคม";
             }else if($str_month == "06"){
               $month_thai = "มิถุนายน";
             }else if($str_month == "07"){
               $month_thai = "กรกฎาคม";
             }else if($str_month == "08"){
               $month_thai = "สิงหาคม";
             }else if($str_month == "09"){
               $month_thai = "กันยายน";
             }else if($str_month == "10"){
               $month_thai = "ตุลาคม";
             }else if($str_month == "11"){
               $month_thai = "พฤศจิกายน";
             }else if($str_month == "12"){
               $month_thai = "ธันวาคม";
             }

            ?>


            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo str_replace($numarabic,$numthai,$subday_date_current);?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $month_thai;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">ปี</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ข้าพเจ้า</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;<?php echo $lastname; ?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">บ้านเลขที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $house_num;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ตำบล/แขวง</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $name_th_d;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">อำเภอ/เขต</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $name_th_a;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">จังหวัด</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $name_th_p;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2" >
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ได้รับเงินจาก</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $money_from;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">รายละเอียดดังต่อไปนี้</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td>

                    <table border="1" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td align="center">รายการ</td>
                            <td colspan="2" align="center">จำนวนเงิน</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%" align="right">บาท</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="400px" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน (</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $firtname;?>&nbsp;&nbsp;<?php echo $lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับเงิน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php echo $prefix;?><?php echo $firtname;?>&nbsp;<?php echo $lastname;?>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้จ่ายเงิน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
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
    </div>
    <?php
         include 'report_debt2.php';
         include 'report_debt3.php';
         //include 'report_debt4.php';
         include 'report_debt5.php';
    ?>

    <ul class="right-menu">
        <li>
            <a href="#" onclick="window.print();">
                <span class="fa-stack hightlight fa-2x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-print fa-stack-1x fa-inverse"></i>
                </span>
                พิมพ์รายงาน
            </a>
        </li>
        <li>
            <a href="#" onclick="location.reload();">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-refresh fa-stack-1x fa-inverse"></i>
                </span>
                Refresh
            </a>
        </li>
        <li>
            <a href="#" onclick="window.close();">
                <span class="fa-stack fa-2x">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-times fa-stack-1x fa-inverse"></i>
                </span>
                ปิดหน้าจอนี้
            </a>
        </li>
    </ul>

    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>
