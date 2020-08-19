<?php
    include('../../../../../config/connect.php');
    include('../../../../../config/constant.php');
?>
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
<?php include '../../../../include_title.php'; ?>
    <!-- Bootstrap Core CSS -->

    <!-- แบมะ -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/report.css" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- แบมะ -->

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

$doc_id = $_GET['doc_id'];

$sql_note_record2 = "SELECT * FROM tb_note_record2 WHERE doc_id = '".$doc_id."' ";
$query_note_record2 = mysqli_query($conn,$sql_note_record2);
$result_note_record2 = mysqli_fetch_assoc($query_note_record2);

$doc_id = $result_note_record2['doc_id'];
$person_id = $result_note_record2['person_id'];
$project_id = $result_note_record2['project_id'];
$activity_id = $result_note_record2['activity_id'];
$government = $result_note_record2['government'];
$at = $result_note_record2['at'];
$date_current = $result_note_record2['date_current'];
$title_id = $result_note_record2['title_id'];
$str_date = $result_note_record2['str_date'];
$stp_date = $result_note_record2['stp_date'];
$real_date = $result_note_record2['real_date'];

$sql_title= "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
$query_title = mysqli_query($conn,$sql_title);
$result_title = mysqli_fetch_assoc($query_title);
$title = $result_title['title'];
$body = $result_title['body'];

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



?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                      <tr>
                        <td rowspan="2">
                            <br>
                            <img src="../../../../../administrator/images/Garuda_Emblem.jpg" width="70" height="80" class="img-responsive">
                        </td>
                        <td align="center" width="100%" ></td>
                        <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                      <tr>

                        <td align="center" width="100%" class="text-nowrap border-0 padding-0"><h2><strong>บันทึกข้อความ</strong></h2></td>
                        <td width="30%">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                      </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ส่วนราชการ</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $government;?>
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
             $message = "$at";//รวมเป็น
             $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
             $numarabic = array("1","2","3","4","5","6","7","8","9","0");
 
             //$test = str_replace($numthai,$numarabic,$message);
             $at1 = str_replace($numarabic,$numthai,$message);
             //echo $day_thai;
            ?>


            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $at1;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo str_replace($numarabic,$numthai,$subday_date_current);?>&nbsp;<?php echo $month_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
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
                            <td width="1" class="text-nowrap border-0 padding-0">เรื่อง</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $title;?>
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
                            <td width="1" >เรียน</td>
                            <td >
                              อธิการบดีมหาวิทยาลัยราชภัฏยะลา
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <?php

            $subday_str_date = substr($str_date,8);
            $submonth_str_date = substr($str_date,5,-3);
            $subyear_str_date = substr($str_date,0,-6);


            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
             $test = str_replace($numarabic,$numthai,$subday_date_current);

             $str_str = $submonth_str_date;
             if($str_str == "01"){
               $str_thai = "มกราคม";
             }else if($str_str == "02"){
               $str_thai = "กุมภาพันธ์";
             }else if($str_str == "03"){
               $str_thai = "มีนาคม";
             }else if($str_str == "04"){
               $str_thai = "เมษายน";
             }else if($str_str == "05"){
               $str_thai = "พฤษภาคม";
             }else if($str_str == "06"){
               $str_thai = "มิถุนายน";
             }else if($str_str == "07"){
               $str_thai = "กรกฎาคม";
             }else if($str_str == "08"){
               $str_thai = "สิงหาคม";
             }else if($str_str == "09"){
               $str_thai = "กันยายน";
             }else if($str_str == "10"){
               $str_thai = "ตุลาคม";
             }else if($str_str == "11"){
               $str_thai = "พฤศจิกายน";
             }else if($str_str == "12"){
               $str_thai = "ธันวาคม";
             }

            ?>

            <?php

            $subday_stp_date = substr($stp_date,8);
            $submonth_stp_date = substr($stp_date,5,-3);
            $subyear_stp_date = substr($stp_date,0,-6);


            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
             $test = str_replace($numarabic,$numthai,$subday_date_current);

             $str_stp = $submonth_stp_date;
             if($str_stp == "01"){
               $stp_thai = "มกราคม";
             }else if($str_stp == "02"){
               $stp_thai = "กุมภาพันธ์";
             }else if($str_stp == "03"){
               $stp_thai = "มีนาคม";
             }else if($str_stp == "04"){
               $stp_thai = "เมษายน";
             }else if($str_stp == "05"){
               $stp_thai = "พฤษภาคม";
             }else if($str_stp == "06"){
               $stp_thai = "มิถุนายน";
             }else if($str_stp == "07"){
               $stp_thai = "กรกฎาคม";
             }else if($str_stp == "08"){
               $stp_thai = "สิงหาคม";
             }else if($str_stp == "09"){
               $stp_thai = "กันยายน";
             }else if($str_stp == "10"){
               $stp_thai = "ตุลาคม";
             }else if($str_stp == "11"){
               $stp_thai = "พฤศจิกายน";
             }else if($str_stp == "12"){
               $stp_thai = "ธันวาคม";
             }

            ?>

            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยข้าพเจ้า <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;<?php echo $lastname; ?> ตำแหน่งเจ้าหน้าที่โครงการ "<?php echo $project_name; ?>" มหาวิทยาลัยราชภัฏยะลา เริ่มปฏิบัติตามสัญญาจ้างเหมาบริการ
                              เมื่อวันที่ <?php echo str_replace($numarabic,$numthai,$subday_str_date);?>&nbsp;<?php echo $str_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_str_date+543);?>
                              ถึง <?php echo str_replace($numarabic,$numthai,$subday_stp_date);?>&nbsp;<?php echo $stp_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_stp_date+543);?><td>
                        </tr>
                    </table>
                </td>
            </tr>

            <?php

            $subday_real_date = substr($real_date,8);
            $submonth_real_date = substr($real_date,5,-3);
            $subyear_real_date = substr($real_date,0,-6);


            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
             $test = str_replace($numarabic,$numthai,$subday_date_current);

             $str_real = $submonth_real_date;
             if($str_real == "01"){
               $real_thai = "มกราคม";
             }else if($str_real == "02"){
               $real_thai = "กุมภาพันธ์";
             }else if($str_real == "03"){
               $real_thai = "มีนาคม";
             }else if($str_real == "04"){
               $real_thai = "เมษายน";
             }else if($str_real == "05"){
               $real_thai = "พฤษภาคม";
             }else if($str_real == "06"){
               $real_thai = "มิถุนายน";
             }else if($str_real == "07"){
               $real_thai = "กรกฎาคม";
             }else if($str_real == "08"){
               $real_thai = "สิงหาคม";
             }else if($str_real == "09"){
               $real_thai = "กันยายน";
             }else if($str_real == "10"){
               $real_thai = "ตุลาคม";
             }else if($str_real == "11"){
               $real_thai = "พฤศจิกายน";
             }else if($str_real == "12"){
               $real_thai = "ธันวาคม";
             }

            ?>

            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้ ข้าพเจ้ามีความประสงค์ขอลาออกจากเจ้าหน้าที่โครงการ "<?php echo $project_name; ?>" เนื่องจากได้รับคัดเลือกทำหน้าที่วิทยากรผู้สอนภาษาไทยในโรงเรียนตำรวจตระเวนชายแดน สังกัดกองกำกับการตำรวจตระเวนชายแดนที่ ๔๔
                              มีผลตั้งแต่  <?php echo str_replace($numarabic,$numthai,$subday_real_date);?>&nbsp;<?php echo $real_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_real_date+543);?> เป็นต้นไป<td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td >จึงเรียนมาเพื่อโปรดทราบ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>( <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;<?php echo $lastname; ?> )</td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>เจ้าหน้าที่โครงการฯ</td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>สถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้</td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>มหาวิทยาลัยราชภัฏยะลา</td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </div>

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
            <a href="http://localhost/project_student/app_backend/input_doc/note/record/record2/show.php?doc_id=<?=$doc_id?>" onclick="window.close();">
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
