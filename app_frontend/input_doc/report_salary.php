<!-- <?php session_start();
if($_SESSION['status'] == 'admin')
{
}
elseif($_SESSION['status'] == 'staff')
{
}
else
{
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../../administrator/logout.php'>";
}
?> -->
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
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/report.css" rel="stylesheet">
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
     $id = $_GET['id'];

     $sql_salary = "SELECT * FROM tb_salary WHERE id = '".$id."' ";
     $query_salary = mysqli_query($conn,$sql_salary);
     $result_salary = mysqli_fetch_assoc($query_salary);

     $doc_id = $result_salary['doc_id'];
     $str_date = $result_salary['str_date'];
     $stp_date = $result_salary['stp_date'];
     $project_id = $result_salary['project_id'];
     $activity_id = $result_salary['activity_id'];
     $person_id = $result_salary['person_id'];
     $period = $result_salary['period'];
     $total_amount = $result_salary['total_amount'];
     $perform = $result_salary['perform'];
     $month = $result_salary['month'];
     $teacher_id = $result_salary['teacher_id'];

     $day_work = unserialize($result_salary['day_work']);
     $start_time = unserialize($result_salary['start_time']);
     $end_time = unserialize($result_salary['end_time']);
     $Job = unserialize($result_salary['Job']);
     $part_time = unserialize($result_salary['part_time']);
     // $day_work = $result_salary['day_work'];
     // $start_time = $result_salary['start_time'];
     // $end_time = $result_salary['end_time'];
     // $Job = $result_salary['Job'];
     // $part_time = $result_salary['part_time'];

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
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td width="50%"  class="statement-header" align="center">

                    <br>
                </td>
                <td width="50%"  class="statement-header" align="left">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr width="100%">
                        <td width=""></td>
                        <td width="1" class="text-nowrap border-0 padding-0">สถาบันพัฒนาครูและบุคลากร <br>ทางการศึกษาชายแดนใต้ <br>มหาวิทยาลัมหาวิทยาลัยราชภัฏยะลา</td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
              <td colspan="2">
              <table border="0" width="100%" class="statement-view text-gray-900">
                <td width="50%"  class="statement-header" align="center">

                    <br>
                </td>
                <td width="50%"  class="statement-header" align="left">
                  วันที่ 31 กรกฏาคม 2562
                    <br>
                </td>
              </table>
            </td>
            </tr>

            <tr>
              <td colspan="2">
                เรื่อง ส่งมอบงานจ้าง
            </td>
            </tr>

            <tr>
              <td colspan="2">
                เรียน อธิการบดีมหาวิทยาลัมหาวิทยาลัยราชภัฏยะลา
            </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                ตามที่ สถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ มหาวิทยาลัยราชภัฏยะลา ได้จ้างให้ข้าพเจ้าเป็นเจ้าหน้าที่ประจำโครงการ "ยกระดับคุณภาพการเรียนรู้ ด้านการอ่านการเขียน และการคิดวิเคราะห์ของนักเรียนในระดับการศึกษาขั้นพื้นฐานในพื้นที่ขายแดนนใต้" ตั้งแต่ วันที่ 1 กุมภาพันธ์ 2562 ถึง 30 กันยายน 2562 จำนวน 8 งวด (13,300 = 106,400บาท) เป็นเงิน 13,300 บาท รวมเป็นเงินทั้งสิ้น 13,300 บาท(หนึ่งหมื่นสามพันสามร้อยบาทถ้วน) นั้น
            </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                บัดนี้ ข้าพเจ้าได้ปฏิบัติงานดังกล่าวงวดที่ 6 (เดือน กรกฏาคม 2562) เสร็จเรียบร้อยแล้ว
             </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                จึงเรียนมาเพื่อโปรดให้คณะกรรมการตรวจรับงานจ้างดังกล่าว ทำการตรวจรับงานจ้างและขอเบิก-จ่ายต่าจ้าง ให้กับจ้าพเจ้าต่อไปด้วย
            </td>
            </tr>

            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ขอแสดงความนับถือ</td>
                                    </tr>
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รับจ้าง</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
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
              <td colspan="2">
                บันทึกรับองที่ปฏิบัติงานของผู้ควบคุมงาน
            </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                ข้าพเจ้า อาจารย์ซอและ เกปัน ตำแหน่ง ผู้อำนวยการสถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ เป็นบุคคลที่ควบคุมการปฏิบัติงานของผู้รับจ้าง ผู้ปฏิบัติงานจ้างเหมาบริการ เจ้าหน้าที่ประจำโครงการ "ยกระดับคุณภาพการเรียนรู้ด้านการอ่าน การเขียน และการคิดวิเคราะห์ของนักเรียนในระดับ การศึกษาขั้นพื้นฐานในพื้นที่ชายแดนใต้" มหาวิทยาลุยราชภัฏยะลา ขอรับรองว่านายแวอัสรี แวมายิ ได้ปฏิบัติงานเรียบร้อยแล้วตั้งแต่วันที่ 1-31 กรกฏาคม 2562
            </td>
            </tr>

            <tr>
                <td colspan="3" class="border-0 padding-0" align="right">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
<?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>
                                        </td>
                                        <td class="border-0 padding-0" align="right">)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ผู้ควบคุมการปฏิบัติงาน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

    <?php include 'report_salary2.php'; ?>

    <?php include 'report_salary3.php'; ?>

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
