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
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
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
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="right">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">ประกอบใบเบิกค่าใช้จ่ายในการเดินทางของ</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">ลงวันที่</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>

                            <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
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
                        <tr>
                            <td class="text-nowrap padding-0">1</td>
                            <td class="text-nowrap padding-0">2</td>
                            <td class="text-nowrap padding-0">3</td>
                            <td class="text-nowrap padding-0">4</td>
                            <td class="text-nowrap padding-0">5</td>
                            <td class="text-nowrap padding-0">6</td>
                            <td class="text-nowrap padding-0">7</td>
                            <td class="text-nowrap padding-0">8</td>
                            <td class="text-nowrap padding-0">9</td>
                            <td class="text-nowrap padding-0">10</td>
                            <td class="text-nowrap padding-0">11</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-nowrap padding-0">รวมเงิน</td>
                            <td class="text-nowrap padding-0">4</td>
                            <td class="text-nowrap padding-0">5</td>
                            <td class="text-nowrap padding-0">6</td>
                            <td class="text-nowrap padding-0">7</td>
                            <td class="text-nowrap padding-0">8</td>
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
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น (ตัวอักษร)</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
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
                                            <?php //echo $str_date; ?>
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
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
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
                                            <?php //echo $str_date; ?>
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
                                            <?php //echo $str_date; ?>
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
            <a href="http://localhost/project_student/app_frontend/input_doc/debt/show.php?id=<?=$id?>" onclick="window.close();">
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
