
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
$sql_salary = "SELECT * FROM tb_salary WHERE doc_id = '".$doc_id."' ";
$query_salary = mysqli_query($conn,$sql_salary);
$result_salary = mysqli_fetch_assoc($query_salary);

//$doc_id = $result_salary['doc_id'];
$person_id = $result_salary['person_id'];
$contract_id = $result_salary['contract_id'];

$day_work = unserialize($result_salary['day_work']);
$start_time = unserialize($result_salary['start_time']);
$end_time = unserialize($result_salary['end_time']);
$Job = unserialize($result_salary['Job']);
$part_time = unserialize($result_salary['part_time']);
$date_current = $result_salary['date_current'];
// $day_work = $result_salary['day_work'];
// $start_time = $result_salary['start_time'];
// $end_time = $result_salary['end_time'];
// $Job = $result_salary['Job'];
// $part_time = $result_salary['part_time'];

$sql ="SELECT * FROM tb_contract WHERE person_id = '".$person_id."'";
$query = mysqli_query($conn,$sql);
$num_rows = mysqli_num_rows($query);
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    //$doc_id = $row['doc_id'];
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

$prefix = $result_person['prefix'];
$firtname = $result_person['firtname'];
$lastname = $result_person['lastname'];
$house_num = $result_person['house_num'];
$road = $result_person['road'];
$village = $result_person['village'];
$province_id = $result_person['province_id'];
$districts_id = $result_person['districts_id'];
$amphures_id = $result_person['amphures_id'];

$sql_province = "SELECT * FROM provinces WHERE id = '".$province_id."' ";
$query_province = mysqli_query($conn,$sql_province);
$result_province = mysqli_fetch_assoc($query_province);
$name_th_p = $result_province['name_th'];

$sql_districts = "SELECT * FROM districts WHERE id = '".$districts_id."' ";
$query_districts = mysqli_query($conn,$sql_districts);
$result_districts = mysqli_fetch_assoc($query_districts);
$name_th_d = $result_districts['name_th'];

$sql_amphures = "SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
$query_amphures = mysqli_query($conn,$sql_amphures);
$result_amphures = mysqli_fetch_assoc($query_amphures);
$name_th_a = $result_amphures['name_th'];


$sql_teacher = "SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
$query_teacher = mysqli_query($conn,$sql_teacher);
$result_teacher = mysqli_fetch_assoc($query_teacher);

$t_firstname = $result_teacher['t_firstname'];
$t_lastname = $result_teacher['t_lastname'];
$position_id = $result_teacher['position_id'];

$sql_position = "SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
$query_position = mysqli_query($conn,$sql_position);
$result_position = mysqli_fetch_assoc($query_position);

$position_name = $result_position['position_name'];
     

?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" align="center" width="100%" class="statement-view">
            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>บันทึกการปฏิบัติงานประจำวันของเจ้าหน้าที่ประสานงานโครงการฯ</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>โครงการ "<?php echo $project_name; ?>"</strong>
                </td>
            </tr>

            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>หน่วยงาน โครงการจัดตั้งสถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ มหาวิทยาลัยราชภัฏยะลา</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>ชื่อ - สกุล <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?></strong>
                </td>
            </tr>

            <tr>
                <td colspan="2">

                </td>
            </tr>
            <?php
                $contract_id = $result_salary['contract_id'];

                $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$contract_id."'";
                $query = mysqli_query($conn,$sql);
                $num_rows = mysqli_num_rows($query);
                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                {
                   
                    //$doc_id = $row['doc_id'];
                    $foreword = unserialize($row['foreword']);
                }
            ?>
            <tr>
                <td>
                    <table border="0" align="center" width="100%" class="statement-view text-gray-900">
                        <?php
                                    $i=1;
                                    $i<="";
                                   $foreword1 = array($foreword);

                                    foreach ($foreword1 as $foreword1){
                                     $j=0;
                                     echo "<p><b>ภาระหน้าที่ที่ได้รับมอบหมายตามบันทึกข้อตกลง/ขอบเขตของงาน (TOR) ได้แก่</b></p>";
                                     //echo "<ul>";
                                        foreach ($foreword1 as $foreword1[$j]){
                                             $value = $foreword1[$j];
                                             //echo "<tr><td>{$value}</td></tr>";
                                            //echo "<li>{$value}</li>";
                                            $j++;

                                   // echo "</ul>";


                                ?>
                        <tr>
                            <td colspan="3" align="left">
                                &nbsp;&nbsp;<?php echo $i;?>.<?php echo $value?> <br>
                            </td>
                        </tr>
                        <?php $i++; }}?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table border="1" width="100%" class="text-gray-900">

                        <tr>
                            <td width="20%" align="center">วัน เดือน ปี</td>
                            <td width="20%" align="center">ระหว่างเวลา..ถึง..</td>
                            <td width="22%" align="center">งานในหน้าที่</td>
                            <td width="13%" align="center">งานพิเศษ</td>
                            <td width="%" align="center">ข้อเสนอ/ข้อปรับปรุง/ผู้ควบคุมการปฏิบัติงาน</td>
                        </tr>



                        <?php
                        $i=1;
                        $i<="";
                            $day_work = unserialize($result_salary['day_work']);
                            $start_time = unserialize($result_salary['start_time']);
                            $end_time = unserialize($result_salary['end_time']);
                            $Job = unserialize($result_salary['Job']);
                            $part_time = unserialize($result_salary['part_time']);

                            $day_work1 = array($day_work);
                                foreach ($day_work1 as $day_work1){
                                $j=0;
                                foreach ($day_work1 as $day_work1[$j]){
                                    $value_day_work = $day_work1[$j];
                                    $j++;
                                }
                            }

                            $start_time1 = array($start_time);
                                foreach ($start_time1 as $start_time1){
                                $j=0;
                                foreach ($start_time1 as $start_time1[$j]){
                                    $value_start_time = $start_time1[$j];
                                    $j++;
                                }
                            }

                            $end_time1 = array($end_time);
                                foreach ($end_time1 as $end_time1){
                                $j=0;
                                foreach ($end_time1 as $end_time1[$j]){
                                    $value_end_time = $end_time1[$j];
                                    $j++;
                                }
                            }

                            $Job1 = array($Job);
                                foreach ($Job1 as $Job1){
                                $j=0;
                                foreach ($Job1 as $Job1[$j]){
                                        $value_Job = $Job1[$j];
                                        $j++;
                                }
                                }

                            $part_time1 = array($part_time);
                            // print_r($part_time1);
                            //     print_r($Job1);
                            //         print_r($start_time1);
                            //             print_r($end_time1);
                            //                 print_r($day_work1);
                                foreach ($part_time1 as $part_time1){
                                $j=0;
                                foreach ($part_time1 as $part_time1[$j]){
                                            $value_part_time = $part_time1[$j];
                                            $value_day_work = $day_work1[$j];
                                            $value_start_time = $start_time1[$j];
                                            $value_end_time = $end_time1[$j];
                                            $value_Job = $Job1[$j];

                                            //echo "//////////$value_day_work///////////";

                                $strDate = explode("-", "$value_day_work");//วันปัจจุบัน

                                $str_day = $strDate[2];
                                $str_month = $strDate[1];
                                $str_year = $strDate[0];

                                $message = "$str_year";
                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                                //$test = str_replace($numthai,$numarabic,$message);
                                $year_thai = str_replace($numarabic,$numthai,$message);
                                //echo $year_thai;

                                $message = "$str_day";
                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");


                                //$test = str_replace($numthai,$numarabic,$message);
                                $day_thai = str_replace($numarabic,$numthai,$message);

                                    if($str_month == "01"){
                                    $month_thai = "ม.ค.";
                                    }else if($str_month == "02"){
                                    $month_thai = "ก.พ.";
                                    }else if($str_month == "03"){
                                    $month_thai = "มี.ค.";
                                    }else if($str_month == "04"){
                                    $month_thai = "เม.ย.";
                                    }else if($str_month == "05"){
                                    $month_thai = "พ.ค.";
                                    }else if($str_month == "06"){
                                    $month_thai = "มิ.ย.";
                                    }else if($str_month == "07"){
                                    $month_thai = "ก.ค.";
                                    }else if($str_month == "08"){
                                    $month_thai = "ส.ค.";
                                    }else if($str_month == "09"){
                                    $month_thai = "ก.ย.";
                                    }else if($str_month == "10"){
                                    $month_thai = "ต.ค.";
                                    }else if($str_month == "11"){
                                    $month_thai = "พ.ย.";
                                    }else if($str_month == "12"){
                                    $month_thai = "ธ.ค.";
                                    }

                                $message = "$value_start_time";
                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                                //$test = str_replace($numthai,$numarabic,$message);
                                $value_start_time1 = str_replace($numarabic,$numthai,$message);

                                $message = "$value_end_time";
                                $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                                //$test = str_replace($numthai,$numarabic,$message);
                                $value_end_time1 = str_replace($numarabic,$numthai,$message);

                    ?>

                        <tr>
                            <?php $i; ?>
                            <td align="center"><?php echo $day_thai;?> <?php echo $month_thai;?> <?php echo $year_thai;?></td>
                            <td align="center"><?php echo $value_start_time1; ?>-<?php echo $value_end_time1;?> น.</td>
                            <td align="center">- <?php echo $value_Job; ?></td>
                            <td align="center"><?php echo $value_part_time; ?></td>
                            <td align="center"><?php echo $value_part_time; ?></td>
                        </tr>
                        <?php $j++; $i++; }}?>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">มาปฏิบัติงาน จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;<?php //echo $total;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>

                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">ไม่มาปฏิบัติ จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;<?php //echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
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
                <td class="statement-header" align="center">
                    ขอรับรองว่าผลการปฏิบัติงานตามที่ได้บันทึก และรายงานเป็นความจริงทุกประการ
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="200px" height="1px">
                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="10" class="text-nowrap border-0 padding-0">ผู้บันทึก</td>
                                        <td></td>
                                        <td width="10" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname; ?>&nbsp;&nbsp;<?php //echo $t_lastname; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้ควบคุม</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                        <td></td>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>
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
            <a href="http://localhost/project_student/app_frontend/input_doc/salary/show.php?id=<?=$doc_id?>">
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
