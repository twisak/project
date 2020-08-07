
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

<body id="<?php //echo $body['name'];?>">
    <div class="page">
      <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td colspan="3" class="statement-header" align="right">
                    แบบ บก.111
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ใบรับรองแทนใบเสร็จ
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                ส่วนราชการ มหาวิทยาลัยราชภัฏยะลา
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">

                    <table border="1" width="100%" class="statement-view text-gray-900">
                    <tr align="center">
                      <td width="15%" class="text-nowrap padding-0">วัน เดือน ปี</td>
                      <td class="text-nowrap padding-0">รายละเอียดการจ่าย</td>
                      <td class="text-nowrap padding-0">จำนวนเงิน</td>
                      <td class="text-nowrap padding-0">หมายเหตุ</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap padding-0">1</td>
                      <td class="text-nowrap padding-0">2</td>
                      <td class="text-nowrap padding-0">3</td>
                      <td class="text-nowrap padding-0">4</td>
                    </tr>
                    <tr>
                      <td class="text-nowrap padding-0">1</td>
                      <td class="text-nowrap padding-0">2</td>
                      <td class="text-nowrap padding-0">3</td>
                      <td class="text-nowrap padding-0">4</td>
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
                            <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น (ตัวอักษร)</td>
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

                            <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php //echo $government;?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="left">
                ขอรับรองว่า รายจ่ายข้างต้นนี้ ไม่อาจเรียกใบเสร็จรับเงินจากผู้รับเงินได้ และข้าพเจ้าได้จ่ายไปในงานของราชการโดยแท้
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px"></td>
                            <td width="200px" height="1px" align="">
                                <table width="90%" border="0" align="right">
                                    <tr>

                                        <td width="1" class="border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;<?php //echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px"></td>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="right">
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
                                <table width="90%" border="0" align="right">
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

            </table>

    </div>

    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>
