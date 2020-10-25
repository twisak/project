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
<?php 
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
?>
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

                            $doc_id = $_GET['id'];
                            $sql_debt = "SELECT * FROM tb_debt WHERE doc_id = '".$doc_id."' ";
                            $query_debt = mysqli_query($conn,$sql_debt);
                            $result_debt = mysqli_fetch_assoc($query_debt);
                
                            $date_depart = $result_debt['date_depart'];

                            // if( $date_depart == "0000-00-00") {
                                                  
                            //     $date_depart = "-";
                            
                            // }elseif($date_depart != "0000-00-00"){
                            
                            //     $date_depart;
                            // }

                                $subday_date_depart = substr($date_depart,8);
                                $submonth_date_depart = substr($date_depart,5,-3);
                                $subyear_date_depart = substr($date_depart,0,-6);

                                //echo "//////$depart_from///////";

                                

                        ?>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                    <?php 
                                               if( $depart_from == "") {
                                                  
                                                $depart_from = "";
                                                echo "<?php if($depart_from=='บ้านพัก'){ ?>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' checked value='>บ้านพัก</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' value='>สำนักงาน</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>
                                                <?php }?>";
                                            
                                            }elseif($depart_from != "")
                                            {
                                            
                                                $depart_from;

                                                //echo "//////$depart_from///////";
                                                if($depart_from == "บ้านพัก"){
                                                echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$depart_from'>บ้านพัก</td>
                                                      <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>สำนักงาน</td>
                                                      <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>";
                                                }elseif($depart_from == "สำนักงาน") { 
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>บ้านพัก</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$depart_from'>สำนักงาน</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>";
                                                }elseif($depart_from == "ประเทศไทย") {
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>บ้านพัก</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>สำนักงาน</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$depart_from'>ประเทศไทย</td>";
                                                }        
                                            }
                                        ?>

                                        
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตั้งแต่วันที่</td>
                                        <?php 
                                               if( $subday_date_depart == "00") {
                                                  
                                                $subday_date_depart = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$subday_date_depart<div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($subday_date_depart != "00")
                                            {
                                            
                                                $subday_date_depart;
                                                $day = str_replace($numarabic,$numthai,$subday_date_depart);

                                                //echo "//////$submonth_date_depart///////";

                                                echo "<td class='border-0 padding-0 text-center'>$day<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <?php
                                                if( $submonth_date_depart == "00") {
                                                  
                                                    $submonth_date_depart = "&nbsp;&nbsp;";
                                                    echo "<td class='border-0 padding-0 text-center'>$submonth_date_depart<div class='line-bottom-dashed'></div></td>";
                                                
                                                }elseif($submonth_date_depart != "00")
                                                {
                                                
                                                    $submonth_date_depart;

                                                    //echo "//////$submonth_date_depart///////";
                
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
                                                    //echo "//////$month_thai2///////";

                                                    echo "<td class='border-0 padding-0 text-center'>$month_thai2<div class='line-bottom-dashed'></div></td>";
                                                }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <?php 
                                               if( $subyear_date_depart == "0000") {
                                                  
                                                $subyear_date_depart = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$subyear_date_depart<div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($subyear_date_depart != "0000")
                                            {
                                            
                                                $subyear_date_depart;
                                                $year = str_replace($numarabic,$numthai,$subyear_date_depart+543);

                                                //echo "//////$submonth_date_depart///////";

                                                echo "<td class='border-0 padding-0 text-center'>$year<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <?php 
                                        //echo "//////$time_depart///////";
                                               if( $time_depart == "") {
                                                  
                                                $time_depart = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$time_depart<div class='line-bottom-dashed'></div></td>";

                                            
                                            }elseif($time_depart != "")
                                            {
                                            
                                                $time_depart;
                                                
                                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                                                $time_depart1 = str_replace($numarabic,$numthai,$time_depart);

                                                echo "<td class='border-0 padding-0 text-center'>$time_depart1<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">น.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <?php

                        $subday_date_back = substr($date_back,8);
                        $submonth_date_back = substr($date_back,5,-3);
                        $subyear_date_back = substr($date_back,0,-6);


                        ?>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                      <td width="1" class="text-nowrap border-0 padding-0">ถึง</td>
                                      <?php 
                                               if( $back == "") {
                                                  
                                                $back = "";
                                                echo "<?php if($back=='บ้านพัก'){ ?>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' checked value='>บ้านพัก</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' value='>สำนักงาน</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>
                                                <?php }?>";
                                            
                                            }elseif($back != "")
                                            {
                                            
                                                $back;

                                                //echo "//////$back///////";
                                                if($back == "บ้านพัก"){
                                                echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$back'>บ้านพัก</td>
                                                      <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>สำนักงาน</td>
                                                      <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>";
                                                }elseif($back == "สำนักงาน") { 
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>บ้านพัก</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$back'>สำนักงาน</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ประเทศไทย</td>";
                                                }elseif($back == "ประเทศไทย") {
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>บ้านพัก</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=''  value=''>สำนักงาน</td>
                                                          <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value='$back'>ประเทศไทย</td>";
                                                }        
                                            }
                                        ?>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ถึงวันที่</td>
                                        <?php 
                                               if( $subday_date_back == "00") {
                                                  
                                                $subday_date_back = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$subday_date_back<div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($subday_date_back != "00")
                                            {
                                            
                                                $subday_date_back;
                                                $day = str_replace($numarabic,$numthai,$subday_date_back);

                                                //echo "//////$submonth_date_depart///////";

                                                echo "<td class='border-0 padding-0 text-center'>$day<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <?php
                                                if( $submonth_date_back == "00") {
                                                  
                                                    $submonth_date_back = "&nbsp;&nbsp;";
                                                    echo "<td class='border-0 padding-0 text-center'>$submonth_date_back<div class='line-bottom-dashed'></div></td>";
                                                
                                                }elseif($submonth_date_back != "00")
                                                {
                                                
                                                    $submonth_date_back;

                                                    //echo "//////$submonth_date_back///////";
                
                                                    $str_month2 = $submonth_date_back;
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
                                                    //echo "//////$month_thai2///////";

                                                    echo "<td class='border-0 padding-0 text-center'>$month_thai2<div class='line-bottom-dashed'></div></td>";
                                                }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <?php 
                                               if( $subyear_date_back == "0000") {
                                                  
                                                $subyear_date_back = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$subyear_date_back<div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($subyear_date_back != "0000")
                                            {
                                            
                                                $subyear_date_back;
                                                $year = str_replace($numarabic,$numthai,$subyear_date_back+543);

                                                //echo "//////$submonth_date_depart///////";

                                                echo "<td class='border-0 padding-0 text-center'>$year<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <?php 
                                        //echo "//////$time_depart///////";
                                               if( $time_back == "") {
                                                  
                                                $time_back = "&nbsp;&nbsp;";
                                                echo "<td class='border-0 padding-0 text-center'>$time_back<div class='line-bottom-dashed'></div></td>";

                                            
                                            }elseif($time_back != "")
                                            {
                                            
                                                $time_back;
                                                
                                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");
                                                $time_back1 = str_replace($numarabic,$numthai,$time_back);

                                                echo "<td class='border-0 padding-0 text-center'>$time_back1<div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
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
                                        <?php 

                                        // echo "/////$open_money/////";
                                               if( $open_money == "") {
                                                  
                                                $open_money = "";
                                                echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ข้าพเจ้า</td>
                                                <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' value=''>คณะเดินทาง</td>";
                                            
                                            }elseif($open_money != "")
                                            {
                                            
                                                $open_money;
                                                if($open_money=="ข้าพเจ้า"){
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value=''>ข้าพเจ้า</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name=' value=''>คณะเดินทาง</td>";
                                                }elseif($open_money=="คณะเดินทาง") {
                                                    echo "<td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' value=''>ข้าพเจ้า</td>
                                                    <td width='1' class='text-nowrap border-0 padding-0'><input type='radio' name='' checked value=''>คณะเดินทาง</td>";
                                                }
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">ดังนี้</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php 
                                $sql_debt = "SELECT * FROM tb_debt WHERE doc_id = '".$doc_id."' ";
                                $query_debt = mysqli_query($conn,$sql_debt);
                                $result_debt = mysqli_fetch_assoc($query_debt);
                    
                                $lend_num = $result_debt['lend_num'];

                                $sql ="SELECT * FROM tb_lend WHERE doc_id = '".$lend_num."'";
                                $query = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                {
                                    $allowance = $row['allowance'];
                                    $allowance_day = $row['allowance_day'];
                                    $allowance_price = $row['allowance_price'];
                                    $rest = $row['rest'];
                                    $rest_price = $row['rest_price'];
                                    $room = $row['room'];
                                    $num_night = $row['num_night'];
                                    $vehicle_num = $row['vehicle_num'];
                                    $vehicle_price = $row['vehicle_price'];
                                    $regis = $row['regis'];
                                    $regis_num = $row['regis_num'];
                                    $fication_day = $row['fication_day'];
                                    $num_people = $row['num_people'];
                                    $num_hour = $row['num_hour'];
                                    $price_hour = $row['price_hour'];
                                    $students_work = $row['students_work'];
                                    $work_day = $row['work_day'];
                                    $work_price = $row['work_price'];

                                    
                                    $hand_food = $row['hand_food'];
                                    $num_food = $row['num_food'];
                                    $food_price = $row['food_price'];
                                    $snack = $row['snack'];
                                    $num_snack = $row['num_snack'];
                                    $snack_price = $row['snack_price'];
                                   
                                }
                        ?>
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
                                        <?php 

                                                // echo "/////$allowance_price/////";
                                               if( $allowance_price == "") {
                                                  
                                                $allowance_price = "";
                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$allowance_price <div class='line-bottom-dashed'></div></td>";
                                            
                                                }elseif($allowance_price != "")
                                                {
                                                
                                                    $allowance_price;
                                                    $allowance_price1 = number_format($allowance_price, 0, ".", ",") . "\n"; // US format;

                                                    echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$allowance_price1 <div class='line-bottom-dashed'></div></td>";
                                                }
                                        ?>
                                        <?php 
                                                //$allowance_sum = $allowance_day * $allowance_price;

                                                //echo "/////$allowance_sum/////";
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <?php 
                                                 if( $allowance_day && $allowance_price == "") {
                                                                
                                                    //echo "-";
                                                    $allowance_day = "0";
                                                    $allowance_price = "0";
                                                
                                                }elseif($allowance_day && $allowance_price != ""){
                                                
                                                    $allowance_day;
                                                    $allowance_price;
                                                    $rest_price;

                                                    $allowance_sum = $allowance_day * $allowance_price;
                                                    // echo "/////$allowance_price/////";
                                                    if( $allowance_sum == "") {
                                                        
                                                        $allowance_sum = "";
                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$allowance_sum <div class='line-bottom-dashed'></div></td>";
                                                    
                                                    }elseif($allowance_sum != "")
                                                    {
                                                    
                                                        $allowance_sum;
                                                        $allowance_sum1 = number_format($allowance_sum, 0, ".", ",") . "\n"; // US format

                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$allowance_sum1 <div class='line-bottom-dashed'></div></td>";
                                                    }
                                                }
                                        ?>
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
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนห้อง</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;<?php echo $room;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ห้อง</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนวัน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;<?php echo $num_night;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ราคา</td>
                                        <?php 

                                                // echo "/////$allowance_price/////";
                                            if( $rest_price == "") {
                                                  
                                                $rest_price = "";
                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$rest_price <div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($rest_price != "")
                                            {
                                            
                                                $rest_price;
                                                $rest_price1 = number_format($rest_price, 0, ".", ",") . "\n"; // US format

                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$rest_price1 <div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <?php 
                                        //echo "/////++$num_night/////";
                                                if( $num_night && $room && $rest_price == "") {
                                                                
                                                    //echo "-";
                                                    $num_night = "0";
                                                    $room = "0";
                                                    $rest_price = "0";
                                                
                                                }elseif($num_night && $room && $rest_price != ""){
                                                
                                                    $num_night;
                                                    $room;
                                                    $rest_price;

                                                    $rest_sum = $num_night * $room * $rest_price;
                                                

                                                    // $rest_sum = $num_night * $room * $rest_price;
                                       

                                                    // echo "/////$allowance_price/////";
                                                    if( $rest_sum == "") {
                                                        
                                                        $rest_sum = "";
                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$rest_sum <div class='line-bottom-dashed'></div></td>";
                                                    
                                                    }elseif($rest_sum != "")
                                                    {
                                                    
                                                        $rest_sum;
                                                        $rest_sum1 = number_format($rest_sum, 0, ".", ",") . "\n"; // US format

                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$rest_sum1 <div class='line-bottom-dashed'></div></td>";
                                                    }
                                                }
                                        ?>
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
                                            &nbsp;&nbsp;<?php echo $vehicle_num;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">คัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">คันล่ะ</td>
                                        <?php 

                                                // echo "/////$allowance_price/////";
                                            if( $vehicle_price == "") {
                                                  
                                                $vehicle_price = "";
                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$vehicle_price <div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($vehicle_price != "")
                                            {
                                            
                                                $vehicle_price;
                                                $vehicle_price1 = number_format($vehicle_price, 0, ".", ",") . "\n"; // US format

                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$vehicle_price1 <div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <?php 
                                        //echo "/////++$num_night/////";
                                                if( $vehicle_num && $vehicle_price == "") {
                                                                
                                                    //echo "-";
                                                    $vehicle_num = "0";
                                                    $vehicle_price = "0";
                                                
                                                }elseif($vehicle_num && $vehicle_price != ""){
                                                
                                                    $vehicle_num;
                                                    $vehicle_price;

                                                    $vehicle_sum = $vehicle_num * $vehicle_price;
                                                    //echo "/////++$vehicle_sum/////";
                                                
                                                
                                                    if( $vehicle_sum == "") {
                                                        
                                                        $vehicle_sum = "&nbsp;&nbsp;";
                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$vehicle_sum <div class='line-bottom-dashed'></div></td>";
                                                    
                                                    }elseif($vehicle_sum != "")
                                                    {
                                                    
                                                        $vehicle_sum;
                                                        $vehicle_sum1 = number_format($vehicle_sum, 0, ".", ",") . "\n"; // US format

                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$vehicle_sum1 <div class='line-bottom-dashed'></div></td>";
                                                    }
                                                }
                                                
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าลงทะเบียนอบรม</td>
                                        <?php 

                                                // echo "/////$allowance_price/////";
                                            if( $regis == "") {
                                                  
                                                $regis = "";
                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$regis <div class='line-bottom-dashed'></div></td>";
                                            
                                            }elseif($regis != "")
                                            {
                                            
                                                $regis;
                                                $regis1 = number_format($regis, 0, ".", ",") . "\n"; // US format

                                                echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$regis1 <div class='line-bottom-dashed'></div></td>";
                                            }
                                        ?>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท/คน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo $regis_num;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">คน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <?php 
                                                //$regis_sum = $regis * $regis_num;
                                        ?>
                                        <?php 
                                        //echo "/////++$num_night/////";
                                                if( $regis && $regis_num == "") {
                                                                
                                                    //echo "-";
                                                    $regis = "0";
                                                    $regis_num = "0";
                                                
                                                }elseif($regis && $regis_num != ""){
                                                
                                                    $regis;
                                                    $regis_num;

                                                    $sum_regis = $regis * $regis_num;
                                                    //echo "/////++$sum_regis/////";
                                                
                                                
                                                    if( $sum_regis == "") {
                                                        
                                                        $sum_regis = "&nbsp;&nbsp;";
                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$sum_regis <div class='line-bottom-dashed'></div></td>";
                                                    
                                                    }elseif($sum_regis != "")
                                                    {
                                                    
                                                        $sum_regis;
                                                        $sum_regis1 = number_format($sum_regis, 0, ".", ",") . "\n"; // US format

                                                        echo "<td class='border-0 padding-0'>&nbsp;&nbsp;$sum_regis1 <div class='line-bottom-dashed'></div></td>";
                                                    }
                                                }
                                                
                                        ?>
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
                                            &nbsp;&nbsp;ค่าสมนาคุณวิทยากรผู้ทรงคุณวุฒิ <?php echo $fication_day;?> วัน  วันละ <?php echo $num_people;?> คน<br> &nbsp;&nbsp;คนละ <?php echo $num_hour;?> ชม ชมละ <?php echo $price_hour;?> บาท<br>
                                            &nbsp;&nbsp;ค่าตอบแทนนักศึกษาช่วยงาน <?php echo $students_work;?> คน <?php echo $work_day;?> วัน <?php echo $work_price;?> บาท<br>
                                            &nbsp;&nbsp;ค่าอาหารมือหลัก จำนวน <?php echo $hand_food;?> คน คนละ <?php echo $num_food;?> มื่อ มื่อล่ะ <?php echo $food_price;?> บาท<br>
                                            &nbsp;&nbsp;ค่าอาหารว่างและเครื่องดื่ม จำนวน <?php echo $snack;?> คน คนละ <?php echo $num_snack;?> มื่อ มื่อล่ะ <?php echo $snack_price;?> บาท
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php 
                            if( $allowance_day && $allowance_price == "") {
                                                        
                                //echo "";
                                $allowance_day = "0";
                                $allowance_price = "0";
                            
                            }elseif($allowance_day && $allowance_price != ""){
                            
                                $allowance_day;
                                $allowance_price;
                                
                            }
                            //$allowance_sum = $allowance_day * $allowance_price;

                            //echo "///////$allowance_sum////////";

                            if( $num_night && $room && $rest_price == "") {
                                                        
                                //echo "";
                                $num_night = "0";
                                $room = "0";
                                $rest_price = "0";
                            
                            }elseif( $num_night && $room && $rest_price != ""){
                            
                                $num_night;
                                $room;
                                $rest_price;
                            }
                            //$rest_sum = $num_night * $room * $rest_price;
                            //echo "///////$rest_sum////////";

                            if( $vehicle_num && $vehicle_price == "") {
                                                        
                                //echo "";
                                $vehicle_num= "0";
                                $vehicle_price = "0";
                            
                            }elseif($vehicle_num && $vehicle_price != ""){
                            
                                $vehicle_num;
                                $vehicle_price;
                            }
                            //$vehicle_sum = $vehicle_num * $vehicle_price;
                            //echo "///////$vehicle_sum////////";

                            if( $regis && $regis_num == "") {
                                                        
                                //echo "";
                                $regis= "0";
                                $regis_num = "0";
                            
                            }elseif($regis && $regis_num != ""){
                            
                                $regis;
                                $regis_num;
                            }
                            //$sum = $regis * $regis_num;
                            //echo "///////$sum////////";
                            
                            
                            if( $fication_day && $num_people && $num_hour && $price_hour == "-") {
                                                                                                        
                                //echo "-";
                                $fication_day = "0";
                                $num_people = "0";
                                $num_hour = "0";
                                $price_hour = "0";

                            }elseif($fication_day && $num_people && $num_hour && $price_hour != "-"){

                                $fication_day;
                                $num_people;
                                $num_hour;
                                $price_hour;
                                $sum_fication = $fication_day * $num_people * $num_hour * $price_hour;
                            }
                            

                            if( $students_work && $work_day && $work_price == "-") {
                                                        
                                //echo "-";
                                $students_work = "0";
                                $work_day = "0";
                                $work_price = "0";
                            
                            }elseif($students_work && $work_day && $work_price != "-"){
                            
                                $students_work;
                                $work_day;
                                $work_price;
                                $sum_students = $students_work * $work_day * $work_price;
                            }
                            

                            if( $hand_food && $num_food && $food_price == "-") {
                                                        
                                //echo "-";
                                $hand_food = "0";
                                $num_food = "0";
                                $food_price = "0";
                            
                            }elseif($hand_food && $num_food && $food_price != "-"){
                            
                                $hand_food;
                                $num_food;
                                $food_price;
                                $sum_food = $hand_food * $num_food * $food_price;
                            }
                            

                            if( $snack && $num_snack && $snack_price == "-") {
                                                                
                                //echo "-";
                                $snack = "0";
                                $num_snack = "0";
                                $snack_price = "0";
                            
                            }elseif($snack && $num_snack && $snack_price != "-"){
                            
                                 $snack;
                                 $num_snack;
                                 $snack_price;
                            }

                                $sum_fication = $fication_day * $num_people * $num_hour * $price_hour;
                                $sum_students = $students_work * $work_day * $work_price;
                                $sum_food = $hand_food * $num_food * $food_price;
                                $sum_snack = $snack * $num_snack * $snack_price;
    
                                $sum = $sum_fication + $sum_students + $sum_food + $sum_snack;
                          
                                // $total = $allowance_sum + $sum_room + $sum_vehicle + $sum_regis + $sum;
                        ?>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินค่าใช้จ่ายอื่น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo number_format($sum, 0, ".", ",") . "\n"; // US format ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                                        <?php 
                                                $government = $allowance_sum + $rest_sum + $vehicle_sum + $sum_regis + $sum;
                                        ?>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo number_format($government, 0, ".", ",") . "\n"; // US format ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php 
                                    function convert($government){
                                    $txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
                                    $txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');
                                    $government = str_replace(",","",$government);
                                    $government = str_replace(" ","",$government);
                                    $government = str_replace("บาท","",$government);
                                    $government = explode(".",$government);
                                    if(sizeof($government)>2){
                                        return 'ทศนิยมหลายตัวนะจ๊ะ';
                                        exit;
                                    }
                                    $strlen = strlen($government[0]);
                                    $convert = '';
                                    for($i=0;$i<$strlen;$i++){
                                        $n = substr($government[0], $i,1);
                                        if($n!=0){
                                            if($i==($strlen-1) AND $n==1){ $convert .= 'เอ็ด'; }
                                            elseif($i==($strlen-2) AND $n==2){  $convert .= 'ยี่'; }
                                            elseif($i==($strlen-2) AND $n==1){ $convert .= ''; }
                                            else{ $convert .= $txtnum1[$n]; }
                                            $convert .= $txtnum2[$strlen-$i-1];
                                        }
                                    }
            
                                    $convert .= 'บาทถ้วน';
            
                                    return $convert;
                                    }
                                    $x = $government;
                        ?>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน(ตัวอักษร)</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php echo  convert($x);?>
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
