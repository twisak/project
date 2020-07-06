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

    <!-- แบมะ -->
    <link href="../css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/report.css" rel="stylesheet">
    <link href="../assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- แบมะ -->

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

?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>ใบสำคัญรับเงิน</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>สำหรับวิทยากร</strong>
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
                            <td width="1" class="text-nowrap border-0 padding-0">ใบสำคัญรับเงิน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
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
                            <td width="1" class="text-nowrap border-0 padding-0">สำหรับวิทยากร</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">ปี</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
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
                            <td width="1" class="text-nowrap border-0 padding-0">ข้าพเจ้า</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">บ้านเลขที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
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
                            <td width="1" class="text-nowrap border-0 padding-0">ตำบล/แขวง</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">อำเภอ/เขต</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">จังหวัด</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2" >
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ได้รับเงินจาก</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                            <td width="1" class="text-nowrap border-0 padding-0">รายละเอียดดังต่อไปนี้</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td>

                    <table border="1" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td align="center">รายการ</td>
                            <td colspan="2" align="center">จำนวนเงิน</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%">1</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td width="60%" align="right">บาท</td>
                            <td>2</td>
                            <td>3</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="400px" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน (</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">)</td>
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
                <td colspan="0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับเงิน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
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
                <td colspan="0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้จ่ายเงิน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
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
    <?php 
         include 'report_debt2.php'; 
         include 'report_debt3.php';
        // include 'report_debt4.php';
        // include 'report_debt5.php';
    ?>

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