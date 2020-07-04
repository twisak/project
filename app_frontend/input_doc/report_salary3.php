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
<head>
    <meta charset="utf-8">
<title>css print report table continue</title>
<style type="text/css">
* {
    margin:0;
    padding:0;
    font-family:Arial, "times New Roman", tahoma;
    font-size:12px;
}
html {
    font-family:Arial, "times New Roman", tahoma;
    font-size:12px;
    color:#000000;
}
body {
    font-family:Arial, "times New Roman", tahoma;
    font-size:12px;
    padding:0;
    margin:0;
    color:#000000;
}
.headTitle {
    font-size:12px;
    font-weight:bold;
    text-transform:uppercase;
}
.headerTitle01 {
    border:1px solid #333333;
    border-left:2px solid #000;
    border-bottom-width:2px;
    border-top-width:2px;
    font-size:11px;
}
.headerTitle01_r {
    border:1px solid #333333;
    border-left:2px solid #000;
    border-right:2px solid #000;
    border-bottom-width:2px;
    border-top-width:2px;
    font-size:11px;
}
/* สำหรับช่องกรอกข้อมูล  */
.box_data1 {
    font-family:Arial, "times New Roman", tahoma;
    height:18px;
    border:0px dotted #333333;
    border-bottom-width:1px;
}
/* กำหนดเส้นบรรทัดซ้าย  และด้านล่าง */
.left_bottom {
    border-left:2px solid #000;
    border-bottom:1px solid #000;
}
/* กำหนดเส้นบรรทัดซ้าย ขวา และด้านล่าง */
.left_right_bottom {
    border-left:2px solid #000;
    border-bottom:1px solid #000;
    border-right:2px solid #000;
}
/* สร้างช่องสี่เหลี่ยมสำหรับเช็คเลือก */
.chk_box {
    display:block;
    width:10px;
    height:10px;
    overflow:hidden;
    border:1px solid #000;
}
/* css ส่วนสำหรับการแบ่งหน้าข้อมูลสำหรับการพิมพ์ */
@media all
{
    .page-break { display:none; }
    .page-break-no{ display:none; }
}
@media print
{
    .page-break { display:block;height:1px; page-break-before:always; }
    .page-break-no{ display:block;height:1px; page-break-after:avoid; }
}
</style>
</head>
</head>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="1" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                      <tr>
                        <td align="center">บันทึกการปฏิบัติงานประจำวันของเจ้าหน้าที่ประสานงานโครงการฯ</td>
                      </tr>
                      <tr>
                        <td align="center">โครงการ "<?php echo $project_name; ?>"</td>
                      </tr>
                      <tr>
                        <td align="center">หน่วยงาน โครงการจัดตั้งสถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ มหาวิทยาลัยราชภัฏยะลา</td>
                      </tr>
                      <tr>
                        <td align="center">ชื่อ - สกุล <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr>
                        <td>ภาระหน้าที่ที่ได้รับมอบหมายตามบันทึกข้อตกลง/ขอบเขตของงาน (TOR) ได้แก่</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. ออกแบบและจีดทำปฏิทินการดำเนินโครงการ</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. ประสานงานการดำเนินโครงการภายในหน่วยงานและหน่วยงานภาย</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. รับผิดชอบงานธุรการโครงการ</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. สรุปผลการดำเนินงานเบื้องต้นตามปฏิทินการทำงานตลอดจนปัญหา และข้อเสนอเพื่อนำสู่การพิจารณาจากผู้รับผิดชอบโครงการและแลกเปลี่ยนกับผู้มีส่วนร่วมเกี่ยวข้องต่อไป</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. ดูและระบบการเงินของโครงการ การจัดซื้อจัดจ้าง งานพัสดุของโครงการ</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. จัดประชุมของแต่ละกิจกรรมของโครงการ</td>
                      </tr>
                      <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7. สรุปผลการดำเนินงานเบื้องต้นตามปฏิทินการทำงานตลอดจนปัญหาและข้อเสนอแนะเพื่อนำสู่การพิจารณาจากผู้รับผิดชอบโครงการและการแลกเปลี่ยนกับผู้มีส่วนร่วมเกี่ยวข้องต่อไป</td>
                      </tr>

                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="1" width="100%" class="statement-view text-gray-900">

                      <tr>
                        <td width="15%" align="center">วัน เดือน ปี</td>
                        <td width="10%" align="center">ระหว่างเวลา..ถึง..</td>
                        <td width="30%" align="center">งานในหน้าที่</td>
                        <td width="15%" align="center">งานพิเศษ</td>
                        <td width="30%" align="center">ข้อเสนอ/ข้อปรับปรุง/ผู้ควบคุมการปฏิบัติงาน</td>
                      </tr>



                      <?php
                            $i=1;
                            $i<="";

                          //   $id = $_GET['id'];
                          //   echo $id;
                          //
                          //   $sql1 ="SELECT * FROM tb_salary WHERE id = '".$id."'";
                          //   $query1 = mysqli_query($conn,$sql1);
                          //   while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                          //   {
                          //     $day_work = unserialize( $row1["day_work"] );
                          //     $start_time = unserialize( $row1["start_time"] );
                          //     $end_time = unserialize( $row1["end_time"] );
                          //     $Job = unserialize( $row1["Job"] );
                          //     $part_time = unserialize( $row1["part_time"] );
                          // }

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


                        ?>

                      <tr>
                        <?php $i; ?>
                        <td align="center"><?php echo $value_day_work;?></td>
                        <td align="center"><?php echo $value_start_time; ?>-<?php echo $value_end_time;?> น.</td>
                        <td align="center">- <?php echo $value_Job; ?></td>
                        <td align="center"><?php echo $value_part_time; ?></td>
                        <td>
                            <table border="0" width="100%" class="statement-view text-gray-900">
                              <tr>
                                <td align="center">(อาจารย์ซอและ เกปัน)</td>
                              </tr>
                              <tr>
                                <td align="center">อาจารย์</td>
                              </tr>
                            </table>
                        </td>
                      </tr>
      <?php $j++; $i++; }}?>
                    </table>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="1" width="100%" class="statement-view text-gray-900">
                      <tr>
                          <td width="5%"></td>
                        <td width="45%" align="center">

  <table border="0" width="100%" class="statement-view text-gray-900">
    <tr>
      <td class="text-nowrap border-0 padding-0" width="1%" >มาปฏิบัติงาน จำนวน</td>
      <td colspan="2" class="border-0 padding-0"  width="1%">
      test
          <div class="line-bottom-dashed">&nbsp;</div>
      </td>
      <td class="text-nowrap border-0 padding-0" width="1%" >วัน</td>
    </tr>
  </table>

                        </td>

                        <td width="45%" align="center">
                          <table border="0" width="100%" class="statement-view text-gray-900">
                            <tr>
                              <td class="text-nowrap border-0 padding-0" width="1%" >ไม่มาปฏิบัติ จำนวน</td>
                              <td colspan="2" class="border-0 padding-0"  width="1%">
                              test
                                  <div class="line-bottom-dashed">&nbsp;</div>
                              </td>
                              <td class="text-nowrap border-0 padding-0" width="1%" >วัน</td>
                            </tr>
                          </table>
                        </td>
                        <td width="5%"></td>
                      </tr>
                    </table>
                    <br />
                </td>
            </tr>

            <tr>
                <td   class="statement-header" align="center">
                  ขอรับรองว่าผลการปฏิบัติงานตามที่ได้บันทึก และรายงานเป็นความจริงทุกประการ
                </td>
            </tr>

            <tr>
                <td   class="statement-header">
                    <table border="1" width="100%" class="statement-view text-gray-900">
                      <tr>
                        <td width="50%" align="center">

                          <table border="0" width="100%" class="statement-view text-gray-900">
                            <tr>
                                <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                <td class="border-0 padding-0">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                    <div class="line-bottom-dashed">&nbsp;</div>
                                </td>
                                <td width="1" class="text-nowrap border-0 padding-0">ผู้บันทึก</td>
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

                        <td width="50%" align="center">

                          <table border="0" width="100%" class="statement-view text-gray-900">
                            <tr>
                                <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                <td class="border-0 padding-0">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>
                                    <div class="line-bottom-dashed">&nbsp;</div>
                                </td>
                                <td width="1" class="text-nowrap border-0 padding-0">ผู้ควบคุม</td>
                            </tr>
                            <tr>
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
                    <br />
                </td>
            </tr>

        </table>
<br>

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


</body>

</html>
