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
<?php

     include '../../administrator/connect.php';
     $doc_id =$_GET['id'];
     $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."'";
     $query = mysqli_query($conn,$sql);
     while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
     {
         $doc_id = $row['doc_id'];
         $foreword = $row['foreword'];
         $str_date = $row['str_date'];
         $stp_date = $row['stp_date'];
         $project_id = $row['project_id'];
         $person_id = $row['person_id'];
     }

     $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
     $query1 = mysqli_query($conn,$sql1);
     while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
     {
         $project_name = $row1['project_name'];
         $project_id = $row1['project_id'];
     }

     $sql3 ="SELECT * FROM tb_activity WHERE project_id = '".$project_id."' ";
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
         //$prefix = $row2['prefix'];
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
                        <td align="center">ใบสำคัญรับเงิน</td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr>
                        <td width="50%"></td>
                        <td width="50%">วันที่ 30 เดือน กันยายน พ.ศ. 2562</td>
                      </tr>
                      <tr>
                        <td colspan="2">ข้าพเจ้า.........................บ้านเลขที่.................หมู่ที่.................</td>
                      </tr>
                      <tr>
                        <td colspan="2">ถนน.................ตำบล.................อำเภอ...............จังหวัด.......................</td>
                      </tr>
                      <tr>
                        <td colspan="2">ได้รับเงินจาก ............................... ดังรายละเอียดต่อไปนี้</td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="1" width="100%" class="statement-view text-gray-900">

                      <tr>
                        <td rowspan="2" align="center">รายการ</td>
                        <td colspan="2" align="center">ลำดับ</td>

                      </tr>

                      <tr>

                        <td></td>
                        <td align="center">สต.</td>
                      </tr>

                      <tr>
                        <td>- ค่าจ้างเหมาบริการเจ้าหน้าที่ประสานงานโครงการฯ โครงการ "พัฒนาครูและบุคลากรทางการศึกษาเพื่อลดความเหลื่อมล้ำจากผลกระทบของเหตุการณ์ความไม่สงบในพื้นที่ชายแดนใต้" งวดที่ 12 ประจำเดือน กันยายน 2562</td>
                        <td>15,000</td>
                        <td>-</td>
                      </tr>

                      <tr>
                        <td>รวมเงิน (ตัวอักษร) เป็นเงินหนึ่งหมื่นห้าพันบาทถ้วน</td>
                        <td>15,000</td>
                        <td>-</td>
                      </tr>

                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">

<tr align="center">
  <td>ลง..................ผู้รับเงิน</td>
</tr>
<tr align="center">
  <td>(นางสาวปาตีเมาะห์ สาและ)</td>
</tr>

                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">

<tr align="center">
  <td>ลง..................ผู้จ่ายเงิน</td>
</tr>
<tr align="center">
  <td>(....................................)</td>
</tr>

                    </table>
                    <br>
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
