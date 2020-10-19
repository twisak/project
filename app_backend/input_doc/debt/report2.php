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
  <?php include '../../include_title.php'; ?>
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

<body id="<?php //echo $body['name'];?>">
    <div class="page">

        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td width="100%">

                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="right">ส่วนที่ 1</td>
                                    </tr>
                                    <tr>
                                        <td align="right">แบบ 8708</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <?php 
                            $message = "$lend_num";//รวมเป็น
                            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                
                            //$test = str_replace($numthai,$numarabic,$message);
                            $lend_num1 = str_replace($numarabic,$numthai,$message);
                            //echo $day_thai;
                        ?>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">สัญญาเงินยืมเลขที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $lend_num1;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ชื่อผู้ยืม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $prefix;?><?php echo $firtname;?>&nbsp;<?php echo $lastname;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="center">ใบเบิกค่าใช้จ่ายในการเดินทางไปราชการ</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="left" align="50%"></td>
                                        <td align="right" align="50%">มหาวิทยาลัยราชภัฏยะลา อำเภอเมือง จังหวัดยะลา</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td class="border-0 padding-0 text-center">
                                          <?php echo str_replace($numarabic,$numthai,$subday_date_current);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <td class="border-0 padding-0 text-center">
                                                          <?php echo $month_thai;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ปี</td>
                                        <td class="border-0 padding-0 text-center">
                                          <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td>
                                            เรื่อง ขออนุมัติเบิกค่าใช้จ่ายในการเดินทางไปราชการ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            เรียน อธิการบดีมหาวิทยาลัยราชภัฏยะลา
                                        </td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <?php 
                            $message = "$note_that";//รวมเป็น
                            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                            $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                
                            //$test = str_replace($numthai,$numarabic,$message);
                            $note_that1 = str_replace($numarabic,$numthai,$message);
                            //echo $day_thai;
                        ?>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตามคำสั่ง/บันทึกที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $note_that1;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <?php

                                        $subday_date_note = substr($date_note,8);
                                        $submonth_date_note = substr($date_note,5,-3);
                                        $subyear_date_note = substr($date_note,0,-6);


                                        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                        $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                                         $test = str_replace($numarabic,$numthai,$subday_date_current);

                                         $str_month1 = $submonth_date_note;
                                         if($str_month1 == "01"){
                                           $month_thai1 = "มกราคม";
                                         }else if($str_month1 == "02"){
                                           $month_thai1 = "กุมภาพันธ์";
                                         }else if($str_month1 == "03"){
                                           $month_thai1 = "มีนาคม";
                                         }else if($str_month1 == "04"){
                                           $month_thai1 = "เมษายน";
                                         }else if($str_month1 == "05"){
                                           $month_thai1 = "พฤษภาคม";
                                         }else if($str_month1 == "06"){
                                           $month_thai1 = "มิถุนายน";
                                         }else if($str_month1 == "07"){
                                           $month_thai1 = "กรกฎาคม";
                                         }else if($str_month1 == "08"){
                                           $month_thai1 = "สิงหาคม";
                                         }else if($str_month1 == "09"){
                                           $month_thai1 = "กันยายน";
                                         }else if($str_month1 == "10"){
                                           $month_thai1 = "ตุลาคม";
                                         }else if($str_month1 == "11"){
                                           $month_thai1 = "พฤศจิกายน";
                                         }else if($str_month1 == "12"){
                                           $month_thai1 = "ธันวาคม";
                                         }

                                        ?>

                                        <td width="1" class="text-nowrap border-0 padding-0">ลงวันที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo str_replace($numarabic,$numthai,$subday_date_note);?>&nbsp;<?php echo $month_thai1; ?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_date_note+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ได้อนุมัติให้</td>
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
                                            &nbsp;&nbsp;<?php echo $prefix;?><?php echo $firtname;?>&nbsp;<?php echo $lastname;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $position_name;?>
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
                                        <td width="1" class="text-nowrap border-0 padding-0">สังกัด</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $under;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">พร้อมด้วย</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $along_with;?>
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
                                        <td width="1" class="text-nowrap border-0 padding-0">ไปปฏิบัติราชการ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $go_practice;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">โดยออกเดินทางจาก</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php

                        $subday_date_depart = substr($date_depart,8);
                        $submonth_date_depart = substr($date_depart,5,-3);
                        $subyear_date_depart = substr($date_depart,0,-6);


                        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                        $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                         $test = str_replace($numarabic,$numthai,$subday_date_depart);

                         $str_month2 = $submonth_date_depart;
                         if($str_month2 == "01"){
                           $month_thai2 = "มกราคม";
                         }else if($str_month2 == "02"){
                           $month_thai2 = "กุมภาพันธ์";
                         }else if($str_month2 == "03"){
                           $month_thai2 = "มีนาคม";
                         }else if($str_month2 == "04"){
                           $month_thai2 = "เมษายน";
                         }else if($str_month2 == "05"){
                           $month_thai2 = "พฤษภาคม";
                         }else if($str_month2 == "06"){
                           $month_thai2 = "มิถุนายน";
                         }else if($str_month2 == "07"){
                           $month_thai2 = "กรกฎาคม";
                         }else if($str_month2 == "08"){
                           $month_thai2 = "สิงหาคม";
                         }else if($str_month2 == "09"){
                           $month_thai2 = "กันยายน";
                         }else if($str_month2 == "10"){
                           $month_thai2 = "ตุลาคม";
                         }else if($str_month2 == "11"){
                           $month_thai2 = "พฤศจิกายน";
                         }else if($str_month2 == "12"){
                           $month_thai2 = "ธันวาคม";
                         }

                        ?>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>

                                      <?php if($depart_from=="บ้านพัก"){ ?>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">บ้านพัก</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">สำนักงาน</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                    <?php }elseif($depart_from=="สำนักงาน") { ?>
                                      <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name=""  value="">บ้านพัก</td>
                                      <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">สำนักงาน</td>
                                      <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                    <?php }elseif($depart_from=="ประเทศไทย") { ?>
                                         <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name=""  value="">บ้านพัก</td>
                                         <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name=""  value="">สำนักงาน</td>
                                         <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">ประเทศไทย</td>
                                       <?php } ?>


                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตั้งแต่วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo str_replace($numarabic,$numthai,$subday_date_depart);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $month_thai2;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo str_replace($numarabic,$numthai,$subyear_date_depart+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $time_depart;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">น.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php

                        $subday_date_back = substr($date_back,8);
                        $submonth_date_back = substr($date_back,5,-3);
                        $subyear_date_back = substr($date_back,0,-6);


                        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                        $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                         $test = str_replace($numarabic,$numthai,$subday_date_depart);

                         $str_month3 = $submonth_date_back;
                         if($str_month3 == "01"){
                           $month_thai3 = "มกราคม";
                         }else if($str_month3 == "02"){
                           $month_thai3 = "กุมภาพันธ์";
                         }else if($str_month3 == "03"){
                           $month_thai3 = "มีนาคม";
                         }else if($str_month3 == "04"){
                           $month_thai3 = "เมษายน";
                         }else if($str_month3 == "05"){
                           $month_thai3 = "พฤษภาคม";
                         }else if($str_month3 == "06"){
                           $month_thai3 = "มิถุนายน";
                         }else if($str_month3 == "07"){
                           $month_thai3 = "กรกฎาคม";
                         }else if($str_month3 == "08"){
                           $month_thai3 = "สิงหาคม";
                         }else if($str_month3 == "09"){
                           $month_thai3 = "กันยายน";
                         }else if($str_month3 == "10"){
                           $month_thai3 = "ตุลาคม";
                         }else if($str_month3 == "11"){
                           $month_thai3 = "พฤศจิกายน";
                         }else if($str_month3 == "12"){
                           $month_thai3 = "ธันวาคม";
                         }

                        ?>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                      <td width="1" class="text-nowrap border-0 padding-0">ถึง</td>
                                        <?php if($back=="บ้านพัก"){ ?>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">บ้านพัก</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">สำนักงาน</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                          <?php }elseif($back=="สำนักงาน") { ?>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">บ้านพัก</td>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">สำนักงาน</td>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                          <?php }elseif($back=="ประเทศไทย") { ?>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">บ้านพัก</td>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">สำนักงาน</td>
                                            <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">ประเทศไทย</td>
                                             <?php } ?>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ถึงวันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo str_replace($numarabic,$numthai,$subday_date_back);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $month_thai3;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo str_replace($numarabic,$numthai,$subyear_date_back+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $time_back;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">น.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td>
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเวลาไปราชการครั้งนี้</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ชั่วโมง</td>
                                        <td></td>
                                    </tr>
                                </table>
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
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">ข้าพเจ้าขอเบิกค่าใช้จ่ายเดินทางไปราชการสำหรับ</td>
                                        <?php if($open_money=="ข้าพเจ้า"){ ?>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">ข้าพเจ้า</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">คณะเดินทาง</td>
                                        <?php }elseif($open_money=="คณะเดินทาง") { ?>
                                          <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ข้าพเจ้า</td>
                                          <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" checked value="">คณะเดินทาง</td>
                                        <?php } ?>

                                        <td width="1" class="text-nowrap border-0 padding-0">ดังนี้</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าเบี้ยเลี้ยงเดินทางประเภท</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $allowance;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $allowance_day;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันละ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $allowance_price;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $allowance_sum;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าเช่าที่พักประเภท</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $rest;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนวัน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $rest_day;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp<?php echo $rest_sum;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าพาหนะ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $vehicle;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $vehicle_sum;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าใช้จ่ายอื่น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $other;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $other_sum;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน(ตัวอักษร)</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-center">ข้าพเจ้ารับรองว่ารายการที่กล่าวมาข้างต้นเป็นความจริง และหลักฐานการจ่ายที่ส่งมาด้วย</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ฉบับ รวมทั้งจำนวนเงินที่ขอเบิกถูกต้องตามกฏหมายทุกประการ</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-0 padding-0">
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="300px" border="0" align="right">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                                    <td class="border-0 padding-0 text-center">
                                                        
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ผู้ขอรับเงิน</td>
                                                </tr>
                                                <tr>
                                                    <td class="border-0 padding-0" align="right">(</td>
                                                    <td align="center" class="border-0 padding-0">
                                                        <?php echo $prefix;?><?php echo $firtname;?>&nbsp;<?php echo $lastname;?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
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
                            <td colspan="3" class="border-0 padding-0">
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="300px" border="0" align="right">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                                    <td class="border-0 padding-0 text-center">
                                                        <?php echo $position_name;?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0"></td>
                                                    <td width="1"></td>
                                                    <td width="1"></td>
                                                    <td width="1"></td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                    </table>

                </td>
            </tr>

        </table>

    </div>
    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>
