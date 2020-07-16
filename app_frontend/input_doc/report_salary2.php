<?php //session_start();
// if($_SESSION['status'] == 'Admin')
// {
// }
// elseif($_SESSION['status'] == 'Personal')
// {
// }
// else
// {
//     echo "<script>";
//     echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
//     echo "</script>";
//     echo "<meta http-equiv='refresh' content='0;url=../../administrator/logout.php'>";
// }
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
                <td width="100%" class="statement-header"  align="center">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                        <tr>
                            <img src="../../administrator/images/Emblem_of_Rajabhat_Yala.png" width="100" height="120" class="img-responsive"> 
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td width="100%" class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                        <tr>
                            <td align="center"><b>ใบสำคัญรับเงิน</b></td>
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
                            <td width="50%">วันที่ <?php echo $day_thai; ?> เดือน <?php echo $month_thai; ?> พ.ศ. <?php echo $year_thai; ?></td>
                        </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%" class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr align="left">
                            <td colspan="1">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ข้าพเจ้า</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $prefix; ?><?php echo $firtname;?>&nbsp;<?php echo $lastname; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">บ้านเลขที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $house_num;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <!-- <td width="1" class="text-nowrap border-0 padding-0">หมู่ที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $village;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td> -->
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="1">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <!-- <td width="1" class="text-nowrap border-0 padding-0">ถนน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $road;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td> -->

                                        <td width="1" class="text-nowrap border-0 padding-0">ตำบล</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $name_th_d;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">อำเภอ</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $name_th_a;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จังหวัด</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $name_th_p;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="1">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ได้รับเงินจาก มหาวิทยาลัยราชภัฏยะลา</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $name_th_d;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ดังรายละเอียดต่อไปนี้</td>
                                        <td width="1" class="text-nowrap border-0 padding-0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    </tr>
                                </table>
                            </td>
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
                            <td>- ค่าจ้างเหมาบริการเจ้าหน้าที่ประสานงานโครงการฯ โครงการ "<?php echo $project_name?>" งวดที่ <?php echo $perform1?> ประจำเดือน <?php echo $month_thaiM?>&nbsp;<?php echo $year_thaiM?></td>
                            <td><?php echo $period1?></td>
                            <td>-</td>
                        </tr>

                        <tr>
                            <td>รวมเงิน (ตัวอักษร) เป็นเงิน<?php echo  convert($x);?></td>
                            <td><?php echo $period1?></td>
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

    <script src="<?php //echo site_common_node_modules_url('jquery/dist/jquery.min.js');?>"></script>
</body>

</html>