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
            <tr align="center">
                <td colspan="2">
                    <table width="100%" border="0" align="center">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0 "><strong>ได้ตรวจสอบหลักฐานการเบิกจ่ายเงินที่แนบถูกต้องแล้ว&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; อนุมัติให้จ่ายได้</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td width="200px" height="1px" align="">
                                <table width="90%" border="0" align="right">
                                    <tr>

                                        <td width="1" class="border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                        &nbsp;&nbsp;<?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="right">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                          <?php //echo $t_firstname1; ?>&nbsp;<?php //echo $t_lastname1; ?>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $position_name1; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                                  <?php //echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php //echo $month_thai;?>    <?php //echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <table width="100%" border="0" align="center">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>เห็นควรอนุมัติให้เบิกจ่าย</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                           
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>

                            <td width="200px" height="1px" align="">
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                              <?php //echo $t_firstname2; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $t_lastname2; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $position_name2; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                              <?php //echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php //echo $month_thai;?>    <?php //echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr align="center">
                <td colspan="2">
                    <table width="100%" border="0" align="center">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>ได้รับเงินค่าใช้จ่ายในการเดินทางไปราชการ</strong></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px" align="">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">หมายเหตุ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $str_date; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo $t_firstname;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ไว้เป็นการถูกต้องแล้ว</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="5px">
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                          
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับเงิน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                              <?php //echo $prefix; ?><?php //echo $firtname; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $lastname; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $position_name; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php //echo $month_thai;?>    <?php //echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จากเงินยืมตามสัญญาเลขที่</td>
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
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                            
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้จ่ายเงิน</td>
                                    </tr>
                                </table>
                            </td>

                            <td width="200px" height="1px" align="">
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                              <?php //echo $t_firstname3; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php //echo $t_lastname3; ?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $position_name3; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="90%" border="0" align="">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo str_replace($numarabic,$numthai,$subday_date_current);?> <?php echo $month_thai;?>    <?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?>
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
                <td width="100%">

                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td width="100%" colspan="2">

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td width="10%">
                                            คำชี้แจง
                                        </td>
                                        <td width="90%">
                                            1.กรณีเดินทางเป็นหมู่คณะและจัดทำใบเบิกค่าใช้จ่ายรวมฉบับเดียวกัน หากระยะเวลาในการเริ่มต้นและสิ้นสุดการเดินทางของแต่ละบุคคลแตกต่างกันให้แสดงรายละเอียดของวันเวลาที่แตกต่างกันของบุคคลนั้น ในช่อง หมายเหตุ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">

                                        </td>
                                        <td width="90%">
                                            2.กรณียื่นขอเบิกค่าใช้จ่ายรายบุคคล ให้ผู้รับเงินเป็นผู้ลงลายมือชื่อผู้รับเงินและวันเดือนปีที่รับเงิน กรณีที่มีการยืมเงินให้ระบุวันที่ที่ได้รับเงินยืมเลขที่สัญญายืมและวันที่อนุมัติเงินด้วย
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="10%">

                                        </td>
                                        <td width="90%">
                                            3.กรณีที่ยื่นขอเบิกค่าใช้จ่ายรวมเป็นหมู่คณะ ผู้ขอรับเงินมิต้องลงลายมือชื่อในช่องผู้รับเงิน ทั้งนี้ ให้ผู้มีสิทธิแต่ละคน ลงลายมือชื่อผู้รับเงินในหลักฐานการจ่ายเงิน (ส่วนที่2)
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
