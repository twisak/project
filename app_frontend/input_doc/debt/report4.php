<?php
        include('../../../config/connect.php');
        include('../../../config/constant.php');
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
<?php include '../../include_title.php'; ?>
    <!-- Bootstrap Core CSS -->

    <!-- แบมะ -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/report1.css" rel="stylesheet">
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

            $doc_id = $_GET['id'];
            //echo $doc_id;

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

            // $list = $result_debt['list'];
            $list = unserialize($result_debt['list']);
            // $money_num = $result_debt['money_num'];
            $money_num = unserialize($result_debt['money_num']);

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

            $sql_teacher1 = "SELECT * FROM tb_teacher WHERE teacher_id = '".$approve."' ";
            $query_teacher1 = mysqli_query($conn,$sql_teacher1);
            $result_teacher1 = mysqli_fetch_assoc($query_teacher1);
            $t_firstname1 = $result_teacher1['t_firstname'];
            $t_lastname1 = $result_teacher1['t_lastname'];
            $position_id1 = $result_teacher1['position_id'];

            $sql_position1 = "SELECT * FROM tb_position WHERE position_id = '".$position_id1."' ";
            $query_position1 = mysqli_query($conn,$sql_position1);
            $result_position1 = mysqli_fetch_assoc($query_position1);
            $position_name1 = $result_position1['position_name'];

            $sql_teacher2 = "SELECT * FROM tb_teacher WHERE teacher_id = '".$disburse."' ";
            $query_teacher2 = mysqli_query($conn,$sql_teacher2);
            $result_teacher2 = mysqli_fetch_assoc($query_teacher2);
            $t_firstname2 = $result_teacher2['t_firstname'];
            $t_lastname2 = $result_teacher2['t_lastname'];
            $position_id2 = $result_teacher2['position_id'];

            $sql_position2 = "SELECT * FROM tb_position WHERE position_id = '".$position_id2."' ";
            $query_position2 = mysqli_query($conn,$sql_position2);
            $result_position2 = mysqli_fetch_assoc($query_position2);
            $position_name2 = $result_position2['position_name'];

            $sql_teacher3 = "SELECT * FROM tb_teacher WHERE teacher_id = '".$payer."' ";
            $query_teacher3 = mysqli_query($conn,$sql_teacher3);
            $result_teacher3 = mysqli_fetch_assoc($query_teacher3);
            $t_firstname3 = $result_teacher3['t_firstname'];
            $t_lastname3 = $result_teacher3['t_lastname'];
            $position_id3 = $result_teacher3['position_id'];

            $sql_position3 = "SELECT * FROM tb_position WHERE position_id = '".$position_id3."' ";
            $query_position3 = mysqli_query($conn,$sql_position3);
            $result_position3 = mysqli_fetch_assoc($query_position3);
            $position_name3 = $result_position3['position_name'];






?>



<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td colspan="3" class="statement-header" align="right">
                    <strong>ส่วนที่ 2</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="right">
                    แบบ 8708
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>หลักฐานการจ่ายเงินค่าใช้จ่ายในการเดินทางไปราชการ</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    มหาวิทยาลัยราชภัฏยะลา อำเภอเมือง จังหวัดยะลา
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>

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
                    <table width="100%" border="0" align="right">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ประกอบใบเบิกค่าใช้จ่ายในการเดินทางของ</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $prefix;?><?php echo $firtname;?>&nbsp;<?php echo $lastname;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">ลงวันที่</td>
                            <td class="border-0 padding-0 text-center">
                                <?php echo str_replace($numarabic,$numthai,$subday_date_current);?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                            <td class="border-0 padding-0 text-center">
                                <?php echo $month_thai;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                            <td class="border-0 padding-0 text-center">
                                <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20px">
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="1" align="right">
                        <tr>
                            <td rowspan="2" class="text-nowrap padding-0">ลำดับที่</td>
                            <td rowspan="2" class="text-nowrap padding-0">ชื่อ</td>
                            <td rowspan="2" class="text-nowrap padding-0">ตำแหน่ง</td>
                            <td colspan="4" class="text-nowrap padding-0">ค่าใช้จ่าย</td>

                            <td rowspan="2" class="text-nowrap padding-0">รวม</td>
                            <td rowspan="2" class="text-nowrap padding-0">ลายมือชื่อผู้รับเงิน</td>
                            <td rowspan="2" class="text-nowrap padding-0">วัน/เดือน/ปี ที่รับเงิน</td>
                            <td rowspan="2" class="text-nowrap padding-0">หมายเหตุ</td>
                        </tr>
                        <tr align="center">
                            <td class="text-nowrap padding-0">ค่าเบี้ยเลี้ยง</td>
                            <td class="text-nowrap padding-0">ค่าเช่าที่พัก</td>
                            <td class="text-nowrap padding-0">ค่าพาหนะ</td>
                            <td class="text-nowrap padding-0">ค่าใช้จ่ายอื่น</td>
                        </tr>

                        <?php
                        $i=1;
                        $i<="";
                        ?>

                        <tr>
                            <td class="text-nowrap padding-0"><?php echo $i; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;<?php echo $lastname; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $position_name; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $allowance_sum; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $rest_sum; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $vehicle_sum; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $other_sum; ?></td>
                            <td class="text-nowrap padding-0">
                            <?php

                            if($allowance_sum=="")
                            {
                              $allowance_sum_a = 0;
                            }else{
                              $allowance_sum_a = $allowance_sum;
                            }

                            if($rest_sum=="")
                            {
                              $rest_sum_a = 0;
                            }else{
                              $rest_sum_a = $rest_sum;
                            }

                            if($vehicle_sum=="")
                            {
                              $vehicle_sum_a = 0;
                            }else{
                              $vehicle_sum_a = $vehicle_sum;
                            }

                            if($other_sum=="")
                            {
                              $other_sum_a = 0;
                            }else{
                              $other_sum_a = $other_sum;
                            }


                            $sum_price = $allowance_sum_a+$rest_sum_a+$vehicle_sum_a+$other_sum_a;
                            echo $sum_price; ?></td>
                            <td class="text-nowrap padding-0"><?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;<?php echo $lastname; ?></td>
                            <td class="text-nowrap padding-0"><?php echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php echo $month_thai;?>    <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?></td>
                            <td class="text-nowrap padding-0"></td>
                        </tr>

                            <?php $i++; ?>

                        <tr>
                            <td colspan="3" class="text-nowrap padding-0">รวมเงิน</td>
                            <!-- <td class="text-nowrap padding-0"></td>
                            <td class="text-nowrap padding-0"></td>
                            <td class="text-nowrap padding-0"></td>
                            <td class="text-nowrap padding-0"></td> -->
                            <td class="text-nowrap padding-0" colspan="5">                            <?php

                                                        if($allowance_sum=="")
                                                        {
                                                          $allowance_sum_a = 0;
                                                        }else{
                                                          $allowance_sum_a = $allowance_sum;
                                                        }

                                                        if($rest_sum=="")
                                                        {
                                                          $rest_sum_a = 0;
                                                        }else{
                                                          $rest_sum_a = $rest_sum;
                                                        }

                                                        if($vehicle_sum=="")
                                                        {
                                                          $vehicle_sum_a = 0;
                                                        }else{
                                                          $vehicle_sum_a = $vehicle_sum;
                                                        }

                                                        if($other_sum=="")
                                                        {
                                                          $other_sum_a = 0;
                                                        }else{
                                                          $other_sum_a = $other_sum;
                                                        }


                                                        $sum_price = $allowance_sum_a+$rest_sum_a+$vehicle_sum_a+$other_sum_a;
                                                        echo $sum_price; ?></td>
                            <td colspan="3" class="text-nowrap padding-0">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตามสัญญาเงินยืมเลขที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                              <!-- <?php echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php echo $month_thai;?>    <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?> -->
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20px">
                </td>
            </tr>

            <?php

            function convertAmountToLetter($number)
            {
              if (empty($number)) return "";
              $number = strval($number);
              $txtnum1 = array('ศูนย์', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า', 'สิบ');
              $txtnum2 = array('', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน', 'สิบ', 'ร้อย', 'พัน', 'หมื่น', 'แสน', 'ล้าน');
              $number = str_replace(",", "", $number);
              $number = str_replace(" ", "", $number);
              $number = str_replace("บาท", "", $number);
              $number = explode(".", $number);
              if (sizeof($number) > 2) {
                return '';
                exit;
              }
              $strlen = strlen($number[0]);
              $convert = '';
              for ($i = 0; $i < $strlen; $i++) {
                $n = substr($number[0], $i, 1);
                if ($n != 0) {
                  if ($i == ($strlen-1) && $n == 1) {
                    $convert .= 'เอ็ด';
                  } elseif ($i == ($strlen - 2) && $n == 2) {
                    $convert .= 'ยี่';
                  } elseif ($i == ($strlen - 2) && $n == 1) {
                    $convert .= '';
                  } else {
                    $convert .= $txtnum1[$n];
                  }
                  $convert .= $txtnum2[$strlen - $i - 1];
                }
              }
              $convert .= 'บาท';
              if (sizeof($number) == 1) {
                $convert .= 'ถ้วน';
              } else {
                if ($number[1] == '0' || $number[1] == '00' || $number[1] == '') {
                  $convert .= 'ถ้วน';
                } else {
                  $number[1] = substr($number[1], 0, 2);
                  $strlen = strlen($number[1]);
                    for ($i = 0; $i < $strlen; $i++) {
                      $n = substr($number[1], $i, 1);
                      if ($n != 0) {
                        if ($i > 0 && $n == 1 ) {
                          $convert.= 'เอ็ด';
                        } elseif ($i == 0 && $n == 2) {
                          $convert .= 'ยี่';
                        } elseif ($i == 0 && $n == 1) {
                          $convert .= '';
                        } else {
                          $convert .= $txtnum1[$n];
                        }
                        $convert .= $i==0 ? $txtnum2[1] : '';
                      }
                    }
                  $convert .= 'สตางค์';
                }
              }
              return $convert.PHP_EOL;
            }

            ?>


            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น (ตัวอักษร)</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo convertAmountToLetter($sum_price); ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้จ่ายเงิน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px"></td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                              <?php echo $t_firstname3; ?>&nbsp;<?php echo $t_lastname3; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px"></td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $position_name3; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px"></td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php echo $month_thai;?>    <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td height="20px">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-center"><strong>คำชี้แจง</strong></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">1.ค่าเบี้ยเลี้ยงและค่าเช่าที่พักให้ระบุอัตราวันละและจำนวนวันที่ขอเบิกแต่ละบุคคลในช่องหมายเหตุ</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">2.ให้ผู้มีสิทธิแต่ละคนเป็นผู้ลงลายมือชือผู้รับเงินและวันเดือนปีที่ได้รับเงิน กรณีเป็นการรับจากเงินยืม ให้ระบุวันที่ที่ได้รับเงินยืม</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">3.ผู้จ่ายเงินยืมหมายถึงผู้ที่ขอยืมเงินจากทางราชการ และจ่ายเงินยืมนั้นให้แก่ผู้เดินทางแต่ละคน เป็นผู้ลงลายมือชื่อ</td>
                                    </tr>
                                </table>
                            </td>
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
            <a href="http://localhost/project_student/app_frontend/input_doc/debt/show.php?id=<?=$doc_id?>" onclick="window.close();">
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
