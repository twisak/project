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
<?php

            $doc_id = $_GET['doc_id'];
            //echo $doc_id;

            $sql ="SELECT * FROM tb_lend WHERE doc_id = '".$doc_id."'";
            $query = mysqli_query($conn,$sql);
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $doc_id = $row['doc_id'];
                $str_date = $row['str_date'];
                $project = $row['project'];
                $activity = $row['activity'];
                $person_id = $row['person_id'];
                $teacher_id = $row['teacher_id'];
                $allowance = $row['allowance'];
                $allowance_price = $row['allowance_price'];

                $rest_price = $row['rest_price'];
                $room = $row['room'];
                $num_night = $row['num_night'];
                $vehicle_num = $row['vehicle_num'];
                $vehicle_price = $row['vehicle_price'];
                $regis = $row['regis'];
                $regis_num = $row['regis_num'];
                $fication_day = $row['fication_day'];
                $num_people = $row['num_people'];
                $num_hour = $row['num_hour'];
                $price_hour = $row['price_hour'];
                $students_work = $row['students_work'];
                $work_day = $row['work_day'];
                $work_price = $row['work_price'];
                $hand_food = $row['hand_food'];
                $num_food = $row['num_food'];
                $food_price = $row['food_price'];
                $snack = $row['snack'];
                $num_snack = $row['num_snack'];
                $snack_price = $row['snack_price'];

                $date_list = unserialize( $row["date_list"] );
                $pay_type = unserialize( $row["pay_type"] );
                $price_list = unserialize( $row["price_list"] );
                $balance = unserialize( $row["balance"] );
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

            // $strStartDate = $str_date;
            // $strEndDate = $stp_date;
            // $intTotalDay = ((strtotime($strEndDate) - strtotime($strStartDate))/  ( 60 * 60  )) ;

            //echo "////////$intTotalDay/////////";
?>
<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="1" width="100%" class="statement-view text-gray-900">
            <tr>
                <td width="100%" colspan="2">

                    <table width="100%">
                        <tr align="center">
                            <td width="70%"><strong>สัญญาการยืมเงิน</strong></td>
                            <td width="30%" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>เลขที่</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php echo $doc_id;?>
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr align="left">
                            <td><strong>ยื่นต่อ หัวหน้าการคลัง</strong></td>
                            <td width="500px" height="1px">
                                <table width="100%" border="0" align="left">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0"><strong>วันครบกำหนด</strong></td>
                                        <td class="border-0 padding-0 text-center">
                                            <?php //echo $stp_date;?>
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
                                        <td class="border-0 padding-0 ">
                                        &nbsp;<?php echo $project; ?>
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
                                        &nbsp;จ่ายจริง คืนล่ะ <?php echo $rest_price;?>บาท x <?php echo $room;?>ห้อง x <?php echo $num_night;?>คืน
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
                                        &nbsp;ค่ารถรับจ้างคุณวิทยากรผู้ทรงคุณวุฒิ จำนวน <?php echo $vehicle_num;?>คัน คันล่ะ<?php echo $vehicle_price;?>
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
                                        <td class="border-0 padding-0">
                                        &nbsp;ค่าสมนาคุณวิทยากรผู้ทรงคุณวุฒิ <?php echo $fication_day;?> วัน  วันละ <?php echo $num_people;?> คน คนละ <?php echo $num_hour;?> ชม ชมละ <?php echo $price_hour;?> บาท<br>
                                              ค่าตอบแทนนักศึกษาช่วยงาน <?php echo $students_work;?> คน <?php echo $work_day;?> วัน <?php echo $work_price;?> บาท<br>
                                              ค่าอาหารมือหลัก จำนวน <?php echo $hand_food;?> คน คนละ <?php echo $num_food;?> มื่อ มื่อล่ะ <?php echo $food_price;?> บาท<br>
                                              ค่าอาหารว่างและเครื่องดื่ม จำนวน <?php echo $snack;?> คน คนละ <?php echo $num_snack;?> มื่อ มื่อล่ะ <?php echo $snack_price;?> บาท
                                            <div class="line-bottom-dashed"></div>
                                        </td>
                                        
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <?php
                            if( $rest_price && $room && $num_night == "-") {
                                                        
                                //echo "-";
                                $rest_price = "0";
                                $room = "0";
                                $num_night = "0";
                            
                            }elseif($rest_price && $room && $num_night != "-"){
                            
                                $rest_price;
                                $room;
                                $num_night;
                                $sum_room = $rest_price * $room * $num_night;
                            }

                            if( $vehicle_num && $vehicle_price == "-") {
                                                        
                                //echo "-";
                                $vehicle_num = "0";
                                $vehicle_price = "0";
                            
                            }elseif($vehicle_num && $vehicle_price != "-"){
                            
                                $vehicle_num;
                                $vehicle_price;
                            }
                            $sum_vehicle = $vehicle_num * $vehicle_price;

                            if( $regis && $regis_num == "-") {
                                                        
                                //echo "-";
                                $regis = "0";
                                $regis_num = "0";
                            
                            }elseif($regis && $regis_num != "-"){
                            
                                $regis;
                                $regis_num;
                            }
                            $sum_regis = $regis * $regis_num;
                            
                            if( $fication_day && $num_people && $num_hour && $price_hour == "-") {
                                                                                                        
                                //echo "-";
                                $fication_day = "0";
                                $num_people = "0";
                                $num_hour = "0";
                                $price_hour = "0";

                            }elseif($fication_day && $num_people && $num_hour && $price_hour != "-"){

                                $fication_day;
                                $num_people;
                                $num_hour;
                                $price_hour;
                            }
                            $sum_fication = $fication_day * $num_people * $num_hour * $price_hour;

                            if( $students_work && $work_day && $work_price == "-") {
                                                        
                                //echo "-";
                                $students_work = "0";
                                $work_day = "0";
                                $work_price = "0";
                            
                            }elseif($students_work && $work_day && $work_price != "-"){
                            
                                $students_work;
                                $work_day;
                                $work_price;
                            }
                            $sum_students = $students_work * $work_day * $work_price;

                            if( $hand_food && $num_food && $food_price == "-") {
                                                        
                                //echo "-";
                                $hand_food = "0";
                                $num_food = "0";
                                $food_price = "0";
                            
                            }elseif($hand_food && $num_food && $food_price != "-"){
                            
                                $hand_food;
                                $num_food;
                                $food_price;
                            }
                            $sum_food = $hand_food * $num_food * $food_price;

                            if( $snack && $num_snack && $snack_price == "-") {
                                                                
                                //echo "-";
                                $snack = "0";
                                $num_snack = "0";
                                $snack_price = "0";
                            
                            }elseif($snack && $num_snack && $snack_price != "-"){
                            
                                 $snack;
                                 $num_snack;
                                 $snack_price;
                            }
                            $sum_snack = $snack * $num_snack * $snack_price;
                            
                            $sum = $sum_fication + $sum_students + $sum_food + $sum_snack;
                      
                            $total = $allowance_price + $sum_room + $sum_vehicle + $sum_regis + $sum;

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
                            <?php $sum_room = $rest_price * $room * $num_night;?>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $sum_room; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                            <?php $sum_vehicle = $vehicle_num * $vehicle_price;?>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $sum_vehicle; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <tr>
                            <?php $sum_regis = $regis * $regis_num;?>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center">
                                    &nbsp;<?php echo $sum_regis; ?>
                                        <div class="line-bottom-dashed"></div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                      </tr>
                      <?php 
                            $sum_fication = $fication_day * $num_people * $num_hour * $price_hour;
                            $sum_students = $students_work * $work_day * $work_price;
                            $sum_food = $hand_food * $num_food * $food_price;
                            $sum_snack = $snack * $num_snack * $snack_price;

                            $sum = $sum_fication + $sum_students + $sum_food + $sum_snack;
                      
                            $total = $allowance_price + $sum_room + $sum_vehicle + $sum_regis + $sum;
                      ?>
                      <tr>
                          <td width="20%" height="1px">
                            <table width="100%" border="0" align="left">
                                <tr>
                                    <td class="border-0 padding-0 text-center"><br><br><br>
                                    &nbsp;<?php echo $sum; ?>
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
                            <td colspan="2" class="text-indent-50">ข้าพเจ้าจะสัญญาว่าจะปฏิบัติตามระเบียบของทางราชกรทุกประการและจำนำใบสำคัญคู่จ่ายที่ถูกต้องพร้อมทั้งเงินเหลือจ่าย(ถ้ามี) ส่งใช้ภายในกำนหดไว้ในระเบียบการเบิกจ่ายเงินจากคลัง คือภายใน <?php //echo $intTotalDay;?> วัน นับแต่วันที่ได้รับเงินยืมนี้ ถ้าข้าพเจ้าไม่ส่งตามกำหนดข้าำเจ้ายินยอมให้หักเงินเดือน ค่าจ้าง เบี้ยหวัด บำเหน็จ บำนาญ หรือเงินอื่นใดที่ข้าพเจ้าจะพึงได้รับจากทางราชการชดใช้จำนวนเงินที่ยืมไปจนครบถ้วนได้ทันที
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
                                        &nbsp;<?php echo  convert($x);?>
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
                                        &nbsp;<?php echo  convert($x);?>
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
                                        &nbsp;<?php echo convert($x);?>
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
            include '../lend/report2.php';
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
            <a href="http://localhost/project_student/app_backend/input_doc/lend/show.php?doc_id=<?=$doc_id?>" onClick="JavaScript:history.back();">
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
