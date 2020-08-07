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
                        <td >เงินสดหรือใบสำตัญ</td>
                        <td >จำนวนเงิน</td>
                      </tr>
                      <?php

                            $i=1;
                            $i<="";

                            $doc_id = $_GET['doc_id'];
                            //echo $doc_id;

                            $sql ="SELECT * FROM tb_lend WHERE doc_id = '".$doc_id."'";
                            $query = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                            {
                                $date_list = unserialize( $row["date_list"] );
                                $pay_type = unserialize( $row["pay_type"] );
                                $price_list = unserialize( $row["price_list"] );
                                $balance = unserialize( $row["balance"] );
                            }

                            $balance1 = array($balance);

                                foreach ($balance1 as $balance1){
                                $j=0;
                                foreach ($balance1 as $balance1[$j]){
                                    $value1 = $balance1[$j];
                                    $j++;
                                }
                                //echo "</ul>";
                            }
                            $price_list1 = array($price_list);

                                foreach ($price_list1 as $price_list1){
                                $j=0;
                                foreach ($price_list1 as $price_list1[$j]){
                                    $value2 = $price_list1[$j];
                                    $j++;
                                }
                                //echo "</ul>";
                            }
                            $pay_type1 = array($pay_type);

                                foreach ($pay_type1 as $pay_type1){
                                $j=0;
                                foreach ($pay_type1 as $pay_type1[$j]){
                                    $value3 = $pay_type1[$j];
                                    $j++;
                                }
                                //echo "</ul>";
                            }
                            $date_list1 = array($date_list);

                                foreach ($date_list1 as $date_list1){
                                $j=0;
                                foreach ($date_list1 as $date_list1[$j]){
                                    $value = $date_list1[$j];
                                    $value1 = $balance1[$j];
                                    $value2 = $price_list1[$j];
                                    $value3 = $pay_type1[$j];

                                //}
                                //echo "</ul>";
                            //}
                        ?>
                      <tr align="center">
                        <td ><?php echo $i;?></td>
                        <td ><?php echo $value;?></td>
                        <td ><?php echo $value3;?></td>
                        <td ><?php echo $value2;?></td>
                        <td ><?php echo $value1;?></td>
                        <td ></td>
                        <td ></td>
                      </tr>
                      <?php $j++; $i++; }}?>
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
            <a href="#" onClick="JavaScript:history.back();">
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
