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
    <link href="../css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/report.css" rel="stylesheet">
    <link href="../assets/node_modules/font-awesome/css/" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td width="100%" class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                        <tr>
                            <td align="center">ใบสำคัญรับเงิน</td>
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%" class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td width="50%"></td>
                            <td width="50%">วันที่ 30 เดือน กันยายน พ.ศ. 2562</td>
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%" class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td class="text-nowrap border-0 padding-0" width="1%">ข้าพเจ้า</td>
                            <td colspan="2" class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td class="text-nowrap border-0 padding-0">บ้านเลขที่</td>
                            <td colspan="2" class="border-0 padding-0" width="1%">
                                &nbsp;<?php echo $house_num; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td class="text-nowrap border-0 padding-0" width="1%">หมู่ที่</td>
                            <td colspan="2" class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $village; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>

                            <!-- <td >ข้าพเจ้า.........................บ้านเลขที่.................หมู่ที่.................</td> -->
                        </tr>
                        <tr>

                            <td class="text-nowrap border-0 padding-0" width="1%">ถนน</td>
                            <td class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $road; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td class="text-nowrap border-0 padding-0" width="1%">ตำบล</td>
                            <td class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $name_th_d; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td class="text-nowrap border-0 padding-0" width="1%">อำเภอ</td>
                            <td class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $name_th_a; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td class="text-nowrap border-0 padding-0" width="1%">จังหวัด</td>
                            <td class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $name_th_p; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                        </tr>

                        <tr>

                            <td colspan="3" class="text-nowrap border-0 padding-0" width="1%">ได้รับเงินจาก มหาวิทยาลัยราชภัฏยะลา</td>
                            <td colspan="2" class="border-0 padding-0" width="8%">
                                &nbsp;<?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>&nbsp;
                                <div class="line-bottom-dashed">&nbsp;</div>
                            </td>
                            <td colspan="2" class="text-nowrap border-0 padding-0" width="1%">ดังรายละเอียดต่อไปนี้</td>

                        </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%" class="statement-header">
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
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับเงิน</td>
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
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php// echo $prefix; ?><?php //echo $firtname; ?>&nbsp;&nbsp;<?php //echo $lastname; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้จ่ายเงิน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                        <?php //echo $prefix; ?><?php //echo $firtname; ?>&nbsp;&nbsp;<?php //echo $lastname; ?>
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