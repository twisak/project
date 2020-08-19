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
<?php include '../../../include_title.php'; ?>
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

$sql_note_command = "SELECT * FROM tb_note_command WHERE doc_id = '".$doc_id."' ";
$query_note_command = mysqli_query($conn,$sql_note_command);
$result_note_command = mysqli_fetch_assoc($query_note_command);


$doc_id = $result_note_command['doc_id'];
$date_current = $result_note_command['date_current'];
$str_date = $result_note_command['str_date'];
$stp_date = $result_note_command['stp_date'];
$title_id = $result_note_command['title_id'];
$that = $result_note_command['that'];
$project_id = $result_note_command['project_id'];
$activity_id = $result_note_command['activity_id'];
$person_id = $result_note_command['person_id'];
$travel = $result_note_command['travel'];
$byusing = $result_note_command['byusing'];
$driver = $result_note_command['driver'];
$budget_id = $result_note_command['budget_id'];

$sql_title= "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
$query_title = mysqli_query($conn,$sql_title);
$result_title = mysqli_fetch_assoc($query_title);
$title = $result_title['title'];
$body = $result_title['body'];

$sql_budget= "SELECT * FROM tb_budget WHERE budget_id = '".$budget_id."' ";
$query_budget = mysqli_query($conn,$sql_budget);
$result_budget = mysqli_fetch_assoc($query_budget);
$budget = $result_budget['budget'];

$sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
$query_project = mysqli_query($conn,$sql_project);
$result_project = mysqli_fetch_assoc($query_project);
$project_name = $result_project['project_name'];

$sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
$query_activity = mysqli_query($conn,$sql_activity);
$result_activity = mysqli_fetch_assoc($query_activity);
$activity = $result_activity['activity'];

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

$strDate = explode("-", "$str_date");//วันเริ่ม

                    $str_day = $strDate[2];
                    $str_month = $strDate[1];
                    $str_year = $strDate[0];

                    $year=date("$str_year")+543;

                    $message = "$year";
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                    //$test = str_replace($numthai,$numarabic,$message);
                    $year_thaiS = str_replace($numarabic,$numthai,$message);
                    //echo $year_thai;

                    $message = "$str_day";
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");


                    //$test = str_replace($numthai,$numarabic,$message);
                    $day_thaiS = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

                    if($str_month == "01"){
                    $month_thaiS = "มกราคม";
                    }else if($str_month == "02"){
                    $month_thaiS = "กุมภาพันธ์";
                    }else if($str_month == "03"){
                    $month_thaiS = "มีนาคม";
                    }else if($str_month == "04"){
                    $month_thaiS = "เมษายน";
                    }else if($str_month == "05"){
                    $month_thaiS = "พฤษภาคม";
                    }else if($str_month == "06"){
                    $month_thaiS = "มิถุนายน";
                    }else if($str_month == "07"){
                    $month_thaiS = "กรกฎาคม";
                    }else if($str_month == "08"){
                    $month_thaiS = "สิงหาคม";
                    }else if($str_month == "09"){
                    $month_thaiS = "กันยายน";
                    }else if($str_month == "10"){
                    $month_thaiS = "ตุลาคม";
                    }else if($str_month == "11"){
                    $month_thaiS = "พฤศจิกายน";
                    }else if($str_month == "12"){
                    $month_thaiS = "ธันวาคม";
                    }

                    $strDate = explode("-", "$stp_date");//วันที่จบ

                    $str_day = $strDate[2];
                    $str_month = $strDate[1];
                    $str_year = $strDate[0];

                    $year=date("$str_year")+543;

                    $message = "$year";
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                    //$test = str_replace($numthai,$numarabic,$message);
                    $year_thaiE = str_replace($numarabic,$numthai,$message);
                    //echo $year_thai;

                    $message = "$str_day";
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");


                    //$test = str_replace($numthai,$numarabic,$message);
                    $day_thaiE = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

                    if($str_month == "01"){
                    $month_thaiE = "มกราคม";
                    }else if($str_month == "02"){
                    $month_thaiE = "กุมภาพันธ์";
                    }else if($str_month == "03"){
                    $month_thaiE = "มีนาคม";
                    }else if($str_month == "04"){
                    $month_thaiE = "เมษายน";
                    }else if($str_month == "05"){
                    $month_thaiE = "พฤษภาคม";
                    }else if($str_month == "06"){
                    $month_thaiE = "มิถุนายน";
                    }else if($str_month == "07"){
                    $month_thaiE = "กรกฎาคม";
                    }else if($str_month == "08"){
                    $month_thaiE = "สิงหาคม";
                    }else if($str_month == "09"){
                    $month_thaiE = "กันยายน";
                    }else if($str_month == "10"){
                    $month_thaiE = "ตุลาคม";
                    }else if($str_month == "11"){
                    $month_thaiE = "พฤศจิกายน";
                    }else if($str_month == "12"){
                    $month_thaiE = "ธันวาคม";
                    }

                    $message = "$that";//รวมเป็น
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");
        
                    //$test = str_replace($numthai,$numarabic,$message);
                    $that1 = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

?>


<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" width="100%" class="statement-view text-gray-900">
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>คำสั่งมหาวิทยาลัยราชภัฏยะลา</strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>ที่ <?php echo $that1; ?></strong>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    <strong>เรื่อง <?php echo $title; ?></strong>
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
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ด้วยมหาวิทยาลัคำสั่งมหาวิทยาลัยราชภัฏยะลา ได้ดำเนินโครงการ "<?php echo $project_name; ?>" ได้จัดกิจกรรม <?php echo $activity; ?> ระหว่างวันที่ <?php echo $day_thaiS;?>&nbsp;<?php echo $month_thaiS;?>&nbsp;<?php echo $year_thaiS;?>  ถึง <?php echo $day_thaiE;?>&nbsp;<?php echo $month_thaiE;?>&nbsp;<?php echo $year_thaiE;?> <?php echo $travel; ?>  </td>
                        </tr>

                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ในการนี้ เพื่อให้การดำเนินการดังกล่าวเป็นไปได้ด้วยความเรียบร้อย มีประสิทธิภาพ อาศัยอำนาจตามความในมาตรา ๒๗ แห่งพระราชบัญญัติมหาวิทยาลัยราชภัฏ พ.ศ.๒๕๔๗ มหาวิทยาลัยราชภัฏยะลา จึงสั่งให้<td>
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
                            <td>อาจารย์ ดังรายนามต่อไปนี้</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                                $i=1;
                                $i<="";

                                 $sql_teacher ="SELECT * FROM tb_teacher ";
                                 $query_teacher = mysqli_query($conn,$sql_teacher);
                                 while($row_teacher = mysqli_fetch_array($query_teacher,MYSQLI_ASSOC))
                                 {

                                     $t_firstname = $row_teacher['t_firstname'];
                                     $t_lastname = $row_teacher['t_lastname'];
                                     $position_id = $row_teacher['position_id'];

                                $sql_position = "SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
                                $query_position = mysqli_query($conn,$sql_position);
                                $row_position =mysqli_fetch_assoc($query_position);
                                $position_name = $row_position['position_name'];
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $i; ?>.<?php echo $position_name; ?><?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                                 <?php $i++; }?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>และเจ้าหน้าที่ ดังรายนามต่อไปนี้</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php
                                $i=1;
                                $i<="";

                                $sql ="SELECT * FROM tb_person";
                                $query = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                {
                                    $prefix = $row['prefix'];
                                    $firtname = $row['firtname'];
                                    $lastname = $row['lastname'];
                        ?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><?php echo $i; ?>.<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php $i++; }?>
                    </table>
                </td>
            </tr>
            <tr align="left">
                <td colspan="2">
                    <table width="100%" border="0" align="left">
                        <tr>
                            <td  colspan="2">เดินทางไปราชการ ณ <?php echo $travel; ?> ตามวัน  และสถานที่ดังกล่าว โดยใช้<?php echo $byusing; ?> มี<?php echo $driver; ?>เป็นพนักงานขับรถใช้งบประมาณของ<?php echo $budget; ?></td>
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
                            <td>ทั้งนี้ ตั้งแต่วันที่ <?php echo $day_thaiS;?>&nbsp;<?php echo $month_thaiS;?>&nbsp;<?php echo $year_thaiS;?>  ถึง <?php echo $day_thaiE;?>&nbsp;<?php echo $month_thaiE;?>&nbsp;<?php echo $year_thaiE;?></td>
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
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>สั่ง ณ วันที่ <?php echo str_replace($numarabic,$numthai,$subday_date_current);?>&nbsp;<?php echo $month_thai;?>&nbsp;<?php echo str_replace($numarabic,$numthai,$subyear_date_current+543);?></td>
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
                            <td>( ผู้ช่ผู้ช่วยศาสตราจารย์ ดร.สมบัติ โยธาทิพย์ )</td>
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
                            <td>อธิการมหาวิทยาลัยราชภัฏยะลา</td>
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
            <a href="http://localhost/project_student/app_backend/input_doc/note/command/show.php?doc_id=<?=$doc_id?>" onClick="JavaScript:back();">
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
