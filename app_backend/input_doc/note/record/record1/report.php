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

$doc_id = $_GET['doc_id'];

$sql_note_record1 = "SELECT * FROM tb_note_record1 WHERE doc_id = '".$doc_id."' ";
$query_note_record1 = mysqli_query($conn,$sql_note_record1);
$result_note_record1 = mysqli_fetch_assoc($query_note_record1);

$doc_id = $result_note_record1['doc_id'];
$person_id = $result_note_record1['person_id'];
$project_id = $result_note_record1['project_id'];
$activity_id = $result_note_record1['activity_id'];
$government = $result_note_record1['government'];
$at = $result_note_record1['at'];
$date_current = $result_note_record1['date_current'];
$title_id = $result_note_record1['title_id'];
$budget_id = $result_note_record1['budget_id'];
$budget_year = $result_note_record1['budget_year'];
$num_person = $result_note_record1['num_person'];
$num_period = $result_note_record1['num_period'];
$price_period = $result_note_record1['price_period'];
$supplies_id = $result_note_record1['supplies_id'];
$control_id = $result_note_record1['control_id'];

$sql_supplies= "SELECT * FROM tb_teacher WHERE teacher_id = '".$supplies_id."' ";
$query_supplies = mysqli_query($conn,$sql_supplies);
$result_supplies = mysqli_fetch_assoc($query_supplies);
$t_firstname_s = $result_supplies['t_firstname'];
$t_lastname_s = $result_supplies['t_lastname'];

$sql_control= "SELECT * FROM tb_teacher WHERE teacher_id = '".$control_id."' ";
$query_control = mysqli_query($conn,$sql_control);
$result_control = mysqli_fetch_assoc($query_control);
$t_firstname_c = $result_control['t_firstname'];
$t_lastname_c = $result_control['t_lastname'];

$sql_title= "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
$query_title = mysqli_query($conn,$sql_title);
$result_title = mysqli_fetch_assoc($query_title);
$title = $result_title['title'];
$body = $result_title['body'];

$sql_budget= "SELECT * FROM tb_budget WHERE budget_id = '".$budget_id."' ";
$query_budget = mysqli_query($conn,$sql_budget);
$result_budget = mysqli_fetch_assoc($query_budget);
$budget = $result_budget['budget'];

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
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>ส่วนราชการ</strong></td>
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



            $budget_year1 = substr($budget_year,+543);

            $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
            $numarabic = array("1","2","3","4","5","6","7","8","9","0");

            $budget_year2 = str_replace($numarabic,$numthai,$budget_year1);

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
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>ที่</strong></td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $at;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>วันที่</strong></td>
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
                            <td width="1"  class="text-nowrap border-0 padding-0"><strong>เรื่อง</strong></td>
                            <td >
                              <?php echo $title; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">เรียน</td>
                            <td >
                              อธิการบดีมหาวิทยาลัยราชภัฏยะลา
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตามที่ โครงการ<?php echo $project_name; ?> ได้รับจัดสรร<?php echo $budget; ?> มหาวิทยาลัยราชภัฏ ประจำปีงบประมาณ <?php echo $budget_year2; ?> โครงการ "<?php echo $project_name; ?>" ประจำปีงบประมาณ&nbsp;<?php echo str_replace($numarabic,$numthai,$budget_year);; ?>&nbsp;จำนวน <?php echo str_replace($numarabic,$numthai,$num_person); ?> คน ระยะเวลาปฏิบัติงาน
                              <?php echo str_replace($numarabic,$numthai,$num_period); ?> งวด งวดละ <?php echo str_replace($numarabic,$numthai,$price_period);?> บาท เป็นเงินทั้งสิ้น
                              <?php echo str_replace($numarabic,$numthai,$price_period*$num_period); ?> บาท (<?php echo convertAmountToLetter($price_period*$num_period); ?>) นั้น<td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้สถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ จึงขออนุมัติจ้างเหมาบริการเจ้าหน้าที่โครงการ "<?php echo $project_name; ?>" วุฒิปริญญาตรี จำนวน <?php echo $num_person; ?> คน คือ <?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>  เพื่อให้การดำเนินการจัดจ้างถูกต้องตามพระราชบัญญัติการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. ๒๕๖๐ ระเบียบกระทรวงการคลังว่าด้วยการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. ๒๕๖๐ รวมถึงกฏกระทรวงและประกาศคณะกรรมการที่เกี่ยวข้อง จึงขอเสนอรายชื่อผู้ตรวจรับพัสดุและ ผู้ควบคุมการปฏิบัติงาน ดังนี้<td>
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
                            <td >๑. อาจารย์<?php echo $t_firstname_s; ?>&nbsp;<?php echo $t_lastname_s; ?></td>
                            <td></td>
                            <td></td>
                            <td>ผู้ตรวจรับพัสดุ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td >๒. อาจารย์<?php echo $t_firstname_c; ?>&nbsp;<?php echo $t_lastname_c; ?></td>
                            <td></td>
                            <td></td>
                            <td>ผู้ควบคุมการปฏิบัติงาน</td>
                            <td></td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
                            <td>( อาจารย์ซอและ เกปัน )</td>
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
                            <td>อาจารย์ประจำหลักสูตรเทคโนโลยีสารสนเทศ</td>
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
            <a href="http://localhost/project_student/app_backend/input_doc/note/record/record1/show.php?doc_id=<?=$doc_id?>" onclick="window.close();">
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
