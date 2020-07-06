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
                <td width="100%">

                    <table border="0" width="100%" class="statement-view text-gray-900">
                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="right">ส่วนที่ 1</td>
                                    </tr>
                                    <tr>
                                        <td align="right">แบบ 8708</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">สัญญาเงินยืมเลขที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
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
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ชื่อผู้ยืม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>


                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="center">ใบเบิกค่าใช้จ่ายในการเดินทางไปราชการ</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td align="left" align="50%"></td>
                                        <td align="right" align="50%">มหาวิทยาลัยราชภัฏยะลา อำเภอเมือง จังหวัดยะลา</td>
                                    </tr>
                                </table>

                            </td>
                        </tr>

                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
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


                        <tr>
                            <td>

                                <table border="0" width="100%" class="statement-view text-gray-900">
                                    <tr>
                                        <td>
                                            เรื่อง ขออนุมัติเบิกค่าใช้จ่ายในการเดินทางไปราชการ
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            เรียน อธิการบดีมหาวิทยาลัยราชภัฏยะลา
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
                                        <td width="1" class="text-nowrap border-0 padding-0">ตามคำสั่ง/บันทึกที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ลงวันที่</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ได้อนุมัติให้</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ช้าพเจ้า</td>
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
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">สังกัด</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">พร้อมด้วย</td>
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
                                        <td width="1" class="text-nowrap border-0 padding-0">ไปปฏิบัติราชการ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>

                                        <td width="1" class="text-nowrap border-0 padding-0">โดยออกเดินทางจาก</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">บ้านพัก</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">สำนักงาน</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตั้งแต่วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>01
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>พฤศจิกายน
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>2540
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>20.00
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">น.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ถึง</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">บ้านพัก</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">สำนักงาน</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ประเทศไทย</td>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ตั้งแต่วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>01
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เดือน</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>พฤศจิกายน
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">พ.ศ.</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>2540
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">เวลา</td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $government;?>20.00
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">น.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td>
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเวลาไปราชการครั้งนี้</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ชั่วโมง</td>
                                        <td></td>
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
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">ข้าพเจ้าขอเบิกค่าใช้จ่ายเดินทางไปราชการสำหรับ</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">ข้าพเจ้า</td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><input type="radio" name="" value="">คณะเดินทาง</td>

                                        <td width="1" class="text-nowrap border-0 padding-0">ดังนี้</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าเบี้ยเลี้ยงเดินทางประเภท</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันละ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าเช่าที่พักประเภท</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนวัน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">วัน</td>
                                        <td width="1"></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าพาหนะ</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td colspan="2">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าใช้จ่ายอื่น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวม</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงินทั้งสิ้น</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td></td>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวนเงิน(ตัวอักษร)</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-center">ข้าพเจ้ารับรองว่ารายการที่กล่าวมาข้างต้นเป็นความจริง และหลักฐานการจ่ายที่ส่งมาด้วย</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="100%">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $government;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ฉบับ รวมทั้งจำนวนเงินที่ขอเบิกถูกต้องตามกฏหมายทุกประการ</td>
                                        <td></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-0 padding-0">
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="300px" border="0" align="right">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                                    <td class="border-0 padding-0 text-center">
                                                        <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ผู้ขอรับเงิน</td>
                                                </tr>
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
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" class="border-0 padding-0">
                                <table width="100%" border="0">
                                    <tr>
                                        <td width="100%" class="border-0">
                                            <table width="300px" border="0" align="right">
                                                <tr>
                                                    <td width="1" class="text-nowrap border-0 padding-0">ตำแหน่ง</td>
                                                    <td class="border-0 padding-0 text-center">
                                                        <?php //echo $t_firstname;?>&nbsp;&nbsp;<?php //echo $t_lastname;?>
                                                        <div class="line-bottom-dashed">&nbsp;</div>
                                                    </td>
                                                    <td width="1" class="text-nowrap border-0 padding-0"></td>
                                                    <td width="1"></td>
                                                    <td width="1"></td>
                                                    <td width="1"></td>
                                                </tr>
                                            </table>
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