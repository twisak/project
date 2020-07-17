<?php
        include('../../../../config/connect.php');
        include('../../../../config/constant.php');
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
                <td colspan="3" class="statement-header" align="center">
                    <strong>บันทึกข้อความ</strong>
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
                            <td width="1" class="text-nowrap border-0 padding-0">ส่วนราชการ</td>
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
                            <td width="1" class="text-nowrap border-0 padding-0">ที่</td>
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
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" >เรื่อง</td>
                            <td >
                              ขออนุมัติการดำเนินการจ้างเหมาบริการเจ้าหน้าที่โครงการยกระดับคุณภาพการเรียนรู้ด้านการอ่านการเขียนและการคิดวิเคราะห์ของนักเรียนในระดับการศึกษาขั้นพื้นฐานในพื้นที่ชายแดนใต้ โดยวิธีเฉพาะเจาะจง
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" >เรียน</td>
                            <td >
                              อธิการบดีมหาวิทยาลัยราชภัฏยะลา
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ตามที่ โดรงการจัดตั้งสถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ มหาวิทยาลัยราชภัฏยะลา ได้รับจัดสรรงบประมาณแผ่นดิน มหาวิทยาลัยราชภัฏ ประจำปงบประมาณ พ.ศ.๒๕๖๒ โครงการ ยกระดับคุณภาพการเรียนรู้ด้านการอ่านการเขียนและการคิดวิเคราะห์ของนักเรียนในระดับการศึกษาขั้นพื้นฐานในพื้นที่ชายแดนใต้ รายการจ้างเหมาบริการเจ้าหน้าที่โครงการยกระดับคุณภาพการเรียนรู้ด้านการอ่านการเขียนและการคิดวิเคราะห์ของนักเรียนในระดับการศึกษาขั้นพื้นฐานในพื้นที่ชายแดนใต้จำนวน ๑ คน ระยะเวลาปฏิบัติงาน ๕ งวด งวดละ ๑๓,๓๐๐ บาท เป็นเงินทั้งสิ้น ๖๖,๕๐๐ บาท (หกหมื่นหกพันห้าร้อยบาทถ้วน) นั้น<td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้สถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ จึงขออนุมัติจ้างเหมาบริการเจ้าหน้าที่โครงการยกระดับคุณภาพการเรียนรู้ด้านการอ่านการเขียนและการคิดวิเคราะห์ของนักเรียนในระดับการศึกษาขั้นพื้นฐานในพื้นที่ชายแดนใต้ วุฒิปริญญาตรี จำนวน ๑ คน คคือ นางสาวซัมซูรีย์ มะลีละ เพื่อให้การดำเนินการจัดจ้างถูกต้องตามพระราชบัญญัติการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. ๒๕๖๐ ระเบียบกระทรวงการคลังว่าด้วยการจัดซื้อจัดจ้างและการบริหารพัสดุภาครัฐ พ.ศ. ๒๕๖๐ รวมถึงกฏกระทรวงและประกาศคณะกรรมการที่เกี่ยวข้อง จึงขอเสนอรายชื่อผู้ตรวจรับพัสดุและ ผู้ควบคุมการปฏิบัติงาน ดังนี้<td>
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
                            <td >๑. อาจารย์ปนัดดา เรืองสงค</td>
                            <td></td>
                            <td></td>
                            <td>ผู้ตรวจรับพัสดุ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td >๒. อาจารย์ซอและ เกปัน</td>
                            <td></td>
                            <td></td>
                            <td>ผู้ควบคุมการปฏิบัติงาน</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
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
                            <td >จึงเรียนมาเพื่อโปรดทราบ</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td class="statement-header" align="center">&nbsp;
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>( อาจารย์ซอและ เกปัน )</td>
                            <td></td>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>อาจารย์ประจำหลักสูตรเทคโนโลยีสารสนเทศ</td>
                            <td></td>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>มหาวิทยาลัยราชภัฏยะลา</td>
                            <td></td>
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
