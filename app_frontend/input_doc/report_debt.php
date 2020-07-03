<?php session_start();
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
    <link href="../assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                <td colspan="2">

                </td>
                <td width="200px" height="1px">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>ใบยืมพัสดุเลขที่</strong></td>
                            <td class="border-0 padding-0 text-center">
                                <?php //echo print_null($borrow->code);?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <h3>แบบฟอร์มการขอยืมพัสดุ</h3>
                    คณะวิทยาการอิสลาม มหาวิทยาลัยสงขลานครินทร์ <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="text-indent-50" align="left">
                    เพื่ออำนวยความสะดวกแก่บุคลากร คณะวิทยาการอิสลาม ในการปฏิบัติงานต่างๆ และมีความต้องการใช้พัสดุก่อน สามารถยืมพัสดุของคณะวิทยาการอิสลาม โดยกรอกแบบฟอร์มการขอยืมพัสดุข้างท้ายนี้ ส่งที่งานพัสดุ สำนักงานเลขานุการ คณะวิทยาการอิสลาม ก่อนวันที่ประสงค์จะใช้งานไม่น้อยกว่า 5 วันทำการ
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="2">

                </td>
                <td width="200px" height="1px">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0"><strong>วันที่</strong></td>
                            <td class="border-0 padding-0 text-center">
                                <?php //echo print_null($borrow->created_at);?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="50%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>ชื่อ-สกุล</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $prefix;?><?php //echo $firtname;?>&nbsp;&nbsp;<?php //echo $lastname;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="50%" class="border-0 padding-0">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>หน่วยงาน</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo print_null($borrow->department);?>
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
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="50%" class="border-0">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>เบอร์ติดต่อ</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo print_null($borrow->tel);?>
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
                <td colspan="3">
                    <strong>มีความประสงค์จะขอยืมพัสดุ ดังรายการต่อไปนี้</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%" border="0">
                        <?php 
                        //$r = 1;
                        //foreach ($borrow->items as $index => $item) {?>
                        <tr>
                            <td width="80%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" height="30" class="text-nowrap border-0 padding-0"><?php //echo ($index+1)?>&nbsp;&nbsp;</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $item['title'];?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="20%" class="border-0 padding-0">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo $item['count'];?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php //$r+=1; }?>

                        <?php //for ($i=$r; $i <= 5 ; $i++) {?>
                        <tr>
                            <td width="50%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" height="30"  class="text-nowrap border-0 padding-0"><?php //echo $i;?>&nbsp;&nbsp;</td>
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="50%" class="border-0 padding-0">
                                <table width="100%" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">จำนวน</td>
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php //}?>

                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>วัตถุประสงค์การใช้งานเพื่อ</strong></td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo print_null($borrow->objective);?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>วัน/เวลาที่ประสงค์จะใช้งาน </strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo print_null($borrow->start_date);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>กำหนดส่งของวัน/เวลาที่ส่งคืน</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            &nbsp;&nbsp;<?php //echo print_null($borrow->return_date);?>
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
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>เบอร์โทรศัพท์ที่สามารถติดต่อได้</strong></td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo print_null($borrow->tel);?>
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
                <td colspan="3">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0 padding-0">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>สถานที่ ที่ประสงค์จะใช้งาน</strong></td>
                                        <td class="border-0 padding-0">
                                            &nbsp;&nbsp;<?php //echo print_null($borrow->location);?>
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
                <td colspan="3">
                    <strong>หมายเหตุ</strong>
                    <ol>
                        <li>กรณีพัสดุที่ยืมชำรุด ผู้ยืมยินดีชำระค่าซ่อมแซมตามความเสียหายของพัสดุ</li>
                        <li>กรณีพัสดุที่ยืมสูญหาย ผู้ยืมยินดีหาพัสดุเดียวกันมาทดแทนหรือชำระเงินตามราคาพัสดุ</li>
                        <li>การยืม-คืน ต้องยืมและคืนที่งานพัสดุ เท่านั้น </li>
                    </ol>
                </td>
            </tr>
            <tr>
                <td colspan="3" height="60" class="border-0">
                    &nbsp;
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
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้ยืม</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo print_null($borrow->name);?>
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
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="50%" class="border-0">
                                <strong class="d-block text-center">ความเห็นผู้รับผิดชอบพัสดุ</strong>
                                <table width="80%" border="0" align="center">
                                    <tr>
                                        <td colspan="3" class="border-0">
                                            <table border="0" align="center">
                                                <tr>
                                                    <td width="20" class="text-nowrap border-0 padding-0">
                                                        <?php //echo ($borrow->status == 1) ? '&#x2611;' : '&#9744;';?>
                                                    </td>
                                                    <td class="text-nowrap border-0 padding-0">อนุมัติ</td>
                                                    <td width="30">&nbsp;</td>
                                                    <td class="text-nowrap border-0 padding-0">
                                                    <?php //echo ($borrow->status == 0) ? '&#x2611;' : '&#9744;';?>
                                                    </td>
                                                    <td class="text-nowrap border-0 padding-0">ไม่อนุมัติ</td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" height="56" class="border-0">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            นางสาวนูรไอนี หมาดหมีน
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-0 padding-0"></td>
                                        <td align="center" class="border-0 padding-0">
                                            เจ้าหน้าที่พัสดุ
                                        </td>
                                        <td class="border-0 padding-0" align="left"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="50%" class="border-0">
                                <strong class="d-block text-center">ได้คืนพัสดุทั้งหมดแล้ว</strong>
                                <table width="80%" border="0" align="center">
                                    <tr>
                                        <td colspan="3" height="25" class="border-0">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้คืน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            <?php //echo print_null($borrow->name);?>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-0 padding-0">วันที่ (</td>
                                        <td align="center" class="border-0 padding-0">
                                            &nbsp;
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0">
                                            &nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0">
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับคืน</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                            นางสาวนูรไอนี หมาดหมีน
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap border-0 padding-0">วันที่ (</td>
                                        <td align="center" class="border-0 padding-0">
                                            &nbsp;
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