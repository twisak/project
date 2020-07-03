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

            $id = $_GET['id'];
            //echo $id;

            $sql ="SELECT * FROM tb_lend WHERE id = '".$id."'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $doc_id = $row['doc_id'];
                $str_date = $row['str_date'];
                $stp_date = $row['stp_date'];
                $project_id = $row['project_id'];
                $person_id = $row['person_id'];
                $teacher_id = $row['teacher_id'];
                $allowance = $row['allowance'];
                $allowance_price = $row['allowance_price'];
                $rest = $row['rest'];
                $rest_price = $row['rest_price'];
                $vehicle = $row['vehicle'];
                $vehicle_price = $row['vehicle_price'];
                $regis = $row['regis'];
                $regis_num = $row['regis_num'];
                $other = $row['other'];
                $other_price = $row['other_price'];

                $date_list = unserialize( $row["date_list"] );
                $pay_type = unserialize( $row["pay_type"] );
                $price_list = unserialize( $row["price_list"] );
                $balance = unserialize( $row["balance"] );
            }

            $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
            $query1 = mysqli_query($conn,$sql1);
            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
                $project_name = $row1['project_name'];
                $project_id = $row1['project_id'];
            }

            $sql3 ="SELECT * FROM tb_activity WHERE project_id = '".$project_id."' ";
            $query3 = mysqli_query($conn,$sql3);
            while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
            {
                $activity = $row3['activity'];
            }

            $sql2 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
            $query2 = mysqli_query($conn,$sql2);
            while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
            {
                $prefix = $row2['prefix'];
                $firtname = $row2['firtname'];
                $lastname = $row2['lastname'];
                $position_id = $row2['position_id'];
            }

            $sql4 ="SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
            $query4 = mysqli_query($conn,$sql4);
            while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
            {
                $position_name = $row4['position_name'];
            }

            $sql_teacher ="SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
            $query_teacher = mysqli_query($conn,$sql_teacher);
            while($row_teacher = mysqli_fetch_array($query_teacher,MYSQLI_ASSOC))
            {
                $t_firstname = $row_teacher['t_firstname'];
                $t_lastname = $row_teacher['t_lastname'];
                //$prefix = $row2['prefix'];
            }

?>
<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td width="60%">

                    <table width="100%">
                        <tr align="center">
                            <td><strong>สัญญาการยืมเงิน</strong></td>
                        </tr>
                        <tr align="left">
                            <td><strong>ยื่นต่อ หัวหน้าการคลัง</strong></td>
                        </tr>
                    </table>

                </td>
                <td width="40%">
                    <table width="100%">
                        <tr align="left">
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>เลขที่</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo print_null($borrow->code);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>วันครบกำหนด</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo print_null($borrow->code);?>
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
                            <td width="200px" height="1px">
                                <table width="60%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ข้าพเจ้า</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                                <table width="40%" border="0" align="left">
                                    <tr>
                                        <td width="5" class="text-nowrap border-0 padding-0">&nbsp;ตำแหน่ง</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $position_name; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td>สังกัด มหาวิทยาลัยราชภัฏยะลา จังหวัดยะลา มีความประสงค์ขอยืมเงินจาก มหาวิทยาลัยราชภัฏยะลา</td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">เพื่อเป็นค่าใช้จ่าย</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $project_name; ?>
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
                <td width="75%">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าเบี้ยเลี้ยง</td>
                                        <td class="border-0 padding-0">
                                        &nbsp;<?php echo $allowance; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าที่พัก</td>
                                        <td class="border-0 padding-0">
                                        &nbsp;<?php echo $rest; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าพาหนะ</td>
                                        <td class="border-0 padding-0 ">
                                        &nbsp;<?php echo $vehicle; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="60%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ค่าลงทะเบียนอบรม</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $regis; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท/คน</td>
                                    </tr>
                                </table>
                                <table width="40%" border="0" align="left">
                                    <tr>
                                        <td width="5" class="text-nowrap border-0 padding-0">&nbsp;จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $regis_num; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">คน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">อื่นๆ</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $other; ?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php
                            $num = $regis * $regis_num;
                            $total = $allowance_price + $rest_price + $vehicle_price + $num + $other_price;

                                function convert($total){
                                $txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
                                $txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');
                                $total = str_replace(",","",$total);
                                $total = str_replace(" ","",$total);
                                $total = str_replace("บาท","",$total);
                                $total = explode(".",$total);
                                if(sizeof($total)>2){
                                    return 'ทศนิยมหลายตัวนะจ๊ะ';
                                    exit;
                                }
                                $strlen = strlen($total[0]);
                                $convert = '';
                                for($i=0;$i<$strlen;$i++){
                                    $n = substr($total[0], $i,1);
                                    if($n!=0){
                                        if($i==($strlen-1) AND $n==1){ $convert .= 'เอ็ด'; }
                                        elseif($i==($strlen-2) AND $n==2){  $convert .= 'ยี่'; }
                                        elseif($i==($strlen-2) AND $n==1){ $convert .= ''; }
                                        else{ $convert .= $txtnum1[$n]; }
                                        $convert .= $txtnum2[$strlen-$i-1];
                                    }
                                }

                                $convert .= 'บาทถ้วน';

                                return $convert;
                                }
                                $x = $total;
                        ?>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">(ตัวอักษร)</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รวมเงิน(บาท)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="25%">
                  <table>
                      <tr>
                        <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $allowance_price; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $rest_price; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $vehicle_price; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $num; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $other_price; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $total; ?>
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
                    <table>
                        <tr>
                            <td colspan="2" class="text-indent-50">ข้าพเจ้าจะสัญญาว่าจะปฏิบัติตามระเบียบของทางราชกรทุกประการและจำนำใบสำคัญคู่จ่ายที่ถูกต้องพร้อมทั้งเงินเหลือจ่าย(ถ้ามี) ส่งใช้ภายในกำนหดไว้ในระเบียบการเบิกจ่ายเงินจากคลัง คือภายใน <?php echo '.........';?> วัน นับแต่วันที่ได้รับเงินยืมนี้ ถ้าข้าพเจ้าไม่ส่งตามกำหนดข้าำเจ้ายินยอมให้หักเงินเดือน ค่าจ้าง เบี้ยหวัด บำเหน็จ บำนาญ หรือเงินอื่นใดที่ข้าพเจ้าจะพึงได้รับจากทางราชการชดใช้จำนวนเงินที่ยืมไปจนครบถ้วนได้ทันที
                            </td>
                        </tr>
                    </table>
                            <table width="300px" border="0" align="left">
                                <tr>
                                    <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                    <td class="border-0 padding-0 text-center">
                                    <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                        <div class="line-bottom-dashed">&nbsp;</div>
                                    </td>
                                    <td width="1" class="text-nowrap border-0 padding-0">ผู้ยืม</td>
                                </tr>
                                <tr>
                                    <td class="border-0 padding-0" align="right">(</td>
                                    <td align="center" class="border-0 padding-0">
                                    <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                    </td>
                                    <td class="border-0 padding-0" align="left">)</td>
                                </tr>
                            </table>
                            <table width="300px" border="0" align="center">
                                <tr>
                                    <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                    <td class="border-0 padding-0 text-center">
                                    <?php echo $str_date; ?>
                                        <div class="line-bottom-dashed">&nbsp;</div>
                                    </td>
                                </tr>
                            </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td colspan="2" class="text-center"><strong>เสนอ อธิการบดีมหาวิทยาลัยราชภัฏยะลา</strong></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-indent-50">ได้ตรวจสอบแล้ว เห็นควรอนุมัติให้ยืมตามใบยืมฉบับนี้ได้
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $total;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php //echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">หัวหน้างานการคลัง</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $str_date; ?>
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
                            <td colspan="2" align="center"><strong>คำอนุมัติ</strong>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-indent-50">อนุมัติให้ยืมตามเงื่อนไขข้างต้น
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">จำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $total;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0 text-indent-50">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php //echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้อนุมัติ</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $str_date; ?>
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
                            <td colspan="2" align="center"><strong>ใบรับเงิน</strong>
                            </td>
                        </tr>
                        <tr>
                            <td width="150px" height="1px">
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ได้รีบเงินยืมจำนวน</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo $total;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">บาท</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="300px" height="1px">
                                <table width="90%" border="0" align="center">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td class="border-0 padding-0" align="left">)ไปเป็นการถูกต้อง</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td width="200px" height="1px">
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        &nbsp;<?php //echo  convert($x);?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">ผู้รับเงิน</td>
                                    </tr>
                                </table>
                                <table width="100%" border="0" align="center">
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                            <!-- <div class="line-bottom-dashed"></div> -->
                                        </td>
                                        <td class="border-0 padding-0" align="left">)</td>
                                    </tr>
                                </table>
                            </td>
                            <td width="150px" height="1px">
                                <table width="70%" border="0" align="center">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">วันที่</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $str_date; ?>
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

    <?php
            include 'report_lend2.php';
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
