<?php
        include('../../../../../config/connect.php');
        include('../../../../../config/constant.php');
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

<?php

$id = $_GET['id'];
//echo $doc_id;

$sql_note_book2 = "SELECT * FROM tb_note_book2 WHERE id = '".$id."' ";
$query_note_book2 = mysqli_query($conn,$sql_note_book2);
$result_note_book2 = mysqli_fetch_assoc($query_note_book2);

$doc_id = $result_note_book2['doc_id'];
$title_id = $result_note_book2['title_id'];
$at = $result_note_book2['at'];
$mug = $result_note_book2['mug'];

// $send_with = $result_note_book1['send_with'];
  $send_with = unserialize($result_note_book2['send_with']);
// $number = $result_note_book1['number'];
  $number = unserialize($result_note_book2['number']);

$project_id = $result_note_book2['project_id'];
$strategic_id = $result_note_book2['strategic_id'];
$day = $result_note_book2['day'];
$time_start = $result_note_book2['time_start'];
$time_end = $result_note_book2['time_end'];
$location = $result_note_book2['location'];
$invite_person = $result_note_book2['invite_person'];
$num = $result_note_book2['num'];
$date_inside = $result_note_book2['date_inside'];
$date_current = $result_note_book2['date_current'];
$person_id = $result_note_book2['person_id'];


$sql_title = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
$query_title = mysqli_query($conn,$sql_title);
$result_title = mysqli_fetch_assoc($query_title);
$title = $result_title['title'];
$body = $result_title['body'];

$sql_strategic = "SELECT * FROM tb_strategic WHERE strategic_id = '".$strategic_id."' ";
$query_strategic = mysqli_query($conn,$sql_strategic);
$result_strategic = mysqli_fetch_assoc($query_strategic);
$strategic = $result_strategic['strategic'];



$sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
$query_project = mysqli_query($conn,$sql_project);
$result_project = mysqli_fetch_assoc($query_project);
$project_name = $result_project['project_name'];


$sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
$query_person = mysqli_query($conn,$sql_person);
$result_person = mysqli_fetch_assoc($query_person);
$prefix  = $result_person['prefix'];
$firtname = $result_person['firtname'];
$lastname = $result_person['lastname'];
$idcard = $result_person['idcard'];
$position_id = $result_person['position_id'];
$house_num = $result_person['house_num'];
$road = $result_person['road'];
$village = $result_person['village'];
$alley = $result_person['alley'];
$province_id = $result_person['province_id'];
$districts_id = $result_person['districts_id'];
$amphures_id = $result_person['amphures_id'];

$sql_position = "SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
$query_position = mysqli_query($conn,$sql_position);
$result_position = mysqli_fetch_assoc($query_position);
$position_name = $result_position['position_name'];

$sql_provinces = "SELECT * FROM provinces WHERE id = '".$province_id."' ";
$query_provinces = mysqli_query($conn,$sql_provinces);
$result_provinces = mysqli_fetch_assoc($query_provinces);
$name_th_p = $result_provinces['name_th'];

$sql_amphures = "SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
$query_amphures = mysqli_query($conn,$sql_amphures);
$result_amphures = mysqli_fetch_assoc($query_amphures);
$name_th_a = $result_amphures['name_th'];

$sql_districts = "SELECT * FROM districts WHERE id = '".$districts_id."' ";
$query_districts = mysqli_query($conn,$sql_districts);
$result_districts = mysqli_fetch_assoc($query_districts);
$name_th_d = $result_districts['name_th'];



?>

<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
          <tr align="left">
              <td colspan="2">
                  <table width="100%" border="0" align="left">
                      <tr>
                          <td >ที่ <?php echo $at; ?></td>
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
                          <td></td>
                          <td>มหาวิทยาลัยราชภัฏยะลา</td>
                      </tr>
                  </table>
              </td>
          </tr>
          <tr align="left">
              <td colspan="2">
                  <table width="100%" border="0" align="left">
                      <tr >
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
                          <td>อำเภอเมืองยะลา จังหวัดยะลา ๙๕๐๐๐</td>
                      </tr>
                  </table>
              </td>
          </tr>

          <?php

          $subday_date_current = substr($date_current,8);
          $submonth_date_current = substr($date_current,5,-3);
          $subyear_date_current = substr($date_current,0,-6);


          $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
          $numarabic = array("1","2","3","4","5","6","7","8","9","0");
           $test = str_replace($numarabic,$numthai,$subday_date_current);

           $str_month = $submonth_date_current;
           if($str_month == "01"){
             $month_thai = "มกราคม";
           }else if($str_month == "02"){
             $month_thai = "กุมภาพันธ์";
           }else if($str_month == "03"){
             $month_thai = "มีนาคม";
           }else if($str_month == "04"){
             $month_thai = "เมษายน";
           }else if($str_month == "05"){
             $month_thai = "พฤษภาคม";
           }else if($str_month == "06"){
             $month_thai = "มิถุนายน";
           }else if($str_month == "07"){
             $month_thai = "กรกฎาคม";
           }else if($str_month == "08"){
             $month_thai = "สิงหาคม";
           }else if($str_month == "09"){
             $month_thai = "กันยายน";
           }else if($str_month == "10"){
             $month_thai = "ตุลาคม";
           }else if($str_month == "11"){
             $month_thai = "พฤศจิกายน";
           }else if($str_month == "12"){
             $month_thai = "ธันวาคม";
           }

          ?>

          <tr align="left">
              <td colspan="2">
                  <table width="100%" border="0" align="left">
                      <tr >
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
                        <td><?php echo $month_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?></td>
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
                            <td width="1" >เรื่อง</td>
                            <td >
                              <?php echo $title; ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td width="1" class="text-nowrap border-0 padding-0">เรียน</td>
                            <td width="1" class="text-nowrap border-0 padding-0">&nbsp;ผู้อำนวยการโรงเรียน</td>
                            <td class="border-0 padding-0">
                                &nbsp;&nbsp;<?php echo $mug; ?>
                                <div class="line-bottom-dashed"></div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">

                      <?php
                              $i=1;
                              $i<="";

                              $number1 = array($number);

                               foreach ($number1 as $number1){
                                $j=0;
                                //echo "<p><b>ตัวชี้วัด</b></p>";
                                //echo "<ul>";
                                   foreach ($number1 as $number1[$j]){
                                        $value_number1 = $number1[$j];
                                        //echo "<tr><td>{$value}</td></tr>";
                                       //echo "<li>{$value}</li>";
                                       $j++;
                                     }
                                   }

                             $send_with1 = array($send_with);

                              foreach ($send_with1 as $send_with1){
                               $j=0;
                               //echo "<p><b>ตัวชี้วัด</b></p>";
                               //echo "<ul>";
                                  foreach ($send_with1 as $send_with1[$j]){
                                       $value_send_with1 = $send_with1[$j];
                                       $value_number1 = $number1[$j];
                                       //echo "<tr><td>{$value}</td></tr>";
                                      //echo "<li>{$value}</li>";
                                      $j++;

                             // echo "</ul>";


                          ?>

                        <tr>
                            <td width="16%"  rowspan="<?php echo $j; ?>" >สิ่งที่ส่งมาด้วย</td>
                            <td >
                               <?php echo $value_send_with1; ?>
                            </td>
                            <td >
                              จำนวน <?php echo $value_number1; ?> ฉบับ
                            </td>
                        </tr>
                        <!-- <tr>
                            <td width="16%" ></td>
                            <td >
                              ๒. แบบตอบรับเข้าร่วมอบรม
                            </td>
                            <td >
                              จำนวน ๑ ฉบับ
                            </td>
                        </tr> -->
                            <?php $i++; }}?>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยมหาวิทยาลัคำสั่งมหาวิทยาลัยราชภัฏยะลา ได้ดำเนินกิจกรรมพัฒนาศักยภาพครูและสถานศึกษา ต้นแบบพหุภาษาศึกษาในการจัดการเรียนรู้แบบพหุภาษาศึกษา (ระดับการศึกษาปฐมวัย) ภายใต้โครงการ "<?php echo $project_name; ?>" กำหนดจัดอบรมปฏิบัติการเพื่อพัฒนาศักยภาพครูในพื้นที่ชายแดนใต้ ตามแนวทางการจัดการเรียนการสอนแบบทวิ-พหุภาษาศึกษา ครั้งที่ 4 หัวข้อ เรื่อง กลวิธีการสอน เพื่อพัฒนาภาษา และสติปัญญา ระหว่างวันที่ 6-8 เมษายน 2562 ณ ห้องประชุม เวิ่ง ช่าย ชั้น 3 อาคาร เฉลืมพระเกียรติ 500 พรรษา มหาวชิราลงกรณ มหาวิทยาลัยราชภัฏยะลา </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้ มหาวิทยาลัยราชภัฏยะลา จึงขอเรียนเชิญบุคลากรในหน่วยงานของท่าน คือ นางสางซารีซาล หะยีลอดิง ครูในสังกัดโรงเรียนบ้านประจัน เป็นวิทยากรการอบรมปฏิบัติการฯ ตามวันเวลา และสถานที่ดังกล่าว </td>
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
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                            <td  colspan="2">จังเรียนมาเพื่อโปรดพิจารณาและขอขอบคุณมา ณ โอกาสนี้</td>
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
                          <td></td>
                          <td></td>
                          <td></td>
                            <td  colspan="2">ขอแสดงความนับถือ</td>
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
                            <td>( ผู้ช่วยศาสตราจารย์ ดร.เกสรี ลัดเลีย )</td>
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
                            <td></td>
                            <td></td>
                            <td>รองอธิการบดี ปฏิบัติราชการแทน</td>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>อธิการบดีมหาวิทยาลัยราชภัฏยะลา</td>
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
                            <td  >สถาบันพัฒนาครูและบุคลากรทงการศึกษาชายแดนใต้</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  >โทรศัพท์ ๐ ๙๓๒๙ ๙๖๔๑</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  >โทรสาร ๐ ๗๓๒๙ ๙๖๓๙</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td><u>ผู้ประสานงาน</u></td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td>นางสาวรุสน๊ะ มะดิเยาะ(ซูยอ) โทรศัพท์เคลื่อนที่ ๐ ๙๓ ๕๘๖ ๗๕๖๙</td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td>E-mail : soyor23@gmail.com</td>
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
