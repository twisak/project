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
            </tr>
            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900" align="center">
                      <tr>
                        <td align="center"><strong>รายการส่งใช้เงินยืม</strong></td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="1" width="100%" class="statement-view text-gray-900">
                      <tr rowspan="2" align="center">
                        <td  rowspan="2">ครั้งที่</td>
                        <td  rowspan="2">วัน เดือน ปี</td>
                        <td  colspan="2" >รายการส่งใช้</td>
                        <!-- <td align="center" >4</td> -->
                        <td  rowspan="2">คงค้าง</td>
                        <td  rowspan="2" >ลายมือชื่อผู้รับ</td>
                        <td  rowspan="2" >หมายเหตุ</td>
                      </tr>

                      <tr align="center">
                        <!-- <td align="center">1</td> -->
                        <!-- <td align="center">2</td> -->
                        <td >เงินสดหรือใบสำตัญ</td>
                        <td >จำนวนเงิน</td>
                        <!-- <td align="center">5</td>
                        <td align="center">6</td>
                        <td align="center">7</td> -->
                      </tr>
                      <tr align="center">
                        <td >1</td>
                        <td >2</td>
                        <td >3</td>
                        <td >4</td>
                        <td >5</td>
                        <td >6</td>
                        <td >7</td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
                <td width="100%"  class="statement-header">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr>
                        <td width="10%">หมายเหตุ</td>
                        <td  width="90%">
                            (1) ยื่อต่อผู้อำนวยการกองคลัง หัวหน้ากองคลัง หัวหน้าแผนกคลัง หรือตำแหน่งอื่นใดที่ปฏิบัตงาน เช่นเดียวกันแล้วแต่กรณี
                        </td>
                      </tr>
                      <tr>
                        <td width="30%"></td>
                        <td  width="70%">
                            (2) ให้ระบุชื่อส่วนราชการที่จ่ายเงินยืม
                        </td>
                      </tr>
                      <tr>
                        <td width="30%"></td>
                        <td  width="70%">
                            (3) ระบุวัตถุประสงค์ที่จะนำเงินยืมไปใช้จ่าย
                        </td>
                      </tr>
                      <tr>
                        <td width="30%"></td>
                        <td  width="70%">
                            (4) เสนอต่อผู้มีอำนาจอนุมัติ
                        </td>
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