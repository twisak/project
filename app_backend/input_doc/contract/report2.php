
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
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/bootstrap_plugin.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/report.css" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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

            $doc_id =$_GET['doc_id'];
            $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."'";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
            {
                $id = $row['id'];
                $doc_id = $row['doc_id'];
                $foreword = unserialize($row['foreword']);
                $str_date = $row['str_date'];
                $stp_date = $row['stp_date'];
                $project_id = $row['project_id'];
                $activity_id = $row['activity_id'];
                $person_id = $row['person_id'];
                $teacher_id = $row['teacher_id'];
                $number = $row['number'];
                $money = $row['money'];
                $work = $row['work'];
                $date_work = $row['date_work'];
                $government = $row['government'];
                $that = $row['that'];
                $c_day = $row['c_day'];
                $title_id = $row['title_id'];
                $people = $row['people'];
                $mid_price = $row['mid_price'];
                $details = $row['details'];
                $date_start  = $row['date_start'];
                $date_end = $row['date_end'];
                $property = unserialize($row['property']);
                $scope = unserialize($row["scope"]);
                $responsible = $row['responsible'];
                $fine = unserialize($row["fine"]);
                $payment = unserialize( $row["payment"] );
                $insurance = unserialize( $row["insurance"] );
                $date_current = $row['date_current'];
            }

            $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
            $query1 = mysqli_query($conn,$sql1);
            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
            {
                $project_name = $row1['project_name'];
                $project_id = $row1['project_id'];
            }

            $sql3 ="SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
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
            $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
            $query4 = mysqli_query($conn,$sql4);
            while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
            {
                $t_firstname = $row4['t_firstname'];
                $t_lastname = $row4['t_lastname'];
                $position_id = $row4['position_id'];
            }
            $sql6 ="SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
            $query6 = mysqli_query($conn,$sql6);
            while($row6 = mysqli_fetch_array($query6,MYSQLI_ASSOC))
            {
                $position_name = $row6['position_name'];
            }
                    //echo $position_id;
            $sql5 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
            $query5 = mysqli_query($conn,$sql5);
            while($row5 = mysqli_fetch_array($query5,MYSQLI_ASSOC))
            {
                $title = $row5['title'];
                $body = $row5['body'];
            }
                                        $strDate = explode("-", "$date_current");

                                        // echo "year= ".$strDate[0];
                                        // echo "month= ".$strDate[1];
                                        // echo "date= ".$strDate[2];
                                        
                                        $str_day = $strDate[2];
                                        $str_month = $strDate[1];
                                        $str_year = $strDate[0];

                                        $year=date("$str_year")+543;
                                        
                                        //echo $year;

                                        $message = "$year";
                                        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                        $numarabic = array("1","2","3","4","5","6","7","8","9","0");


                                        //$test = str_replace($numthai,$numarabic,$message);
                                        $year_thai = str_replace($numarabic,$numthai,$message);
                                        //echo $year_thai;

                                        $message = "$str_day";
                                        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                                        $numarabic = array("1","2","3","4","5","6","7","8","9","0");


                                        //$test = str_replace($numthai,$numarabic,$message);
                                        $day_thai = str_replace($numarabic,$numthai,$message);
                                        //echo $day_thai;

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

                                        //echo $day_thai;
                                        //echo $month_thai;

                                        
?>
<body id="<?php //echo $body['name'];?>">
<div class="page">
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td width="50%"  class="statement-header" align="center">

                    <br>
                </td>
                <td width="50%"  class="statement-header" align="left">
                    <table border="0" width="100%" class="statement-view text-gray-900">
                      <tr width="100%">
                        <td width=""></td>
                        <td width="1" class="text-nowrap border-0 padding-0">สถาบันพัฒนาครูและบุคลากร <br>ทางการศึกษาชายแดนใต้ <br>มหาวิทยาลัมหาวิทยาลัยราชภัฏยะลา</td>
                      </tr>
                    </table>
                    <br>
                </td>
            </tr>

            <tr>
              <td colspan="2">
              <table border="0" width="100%" class="statement-view text-gray-900">
                <td width="50%"  class="statement-header" align="center">

                    <br>
                </td>
                <td width="50%"  class="statement-header" align="left">
                  วันที่ <?php echo $day_thai;?>&nbsp;<?php echo $month_thai;?>&nbsp;<?php echo $year_thai;?>
                    <br>
                </td>
              </table>
            </td>
            </tr>

            <tr>
              <td colspan="2">
                เรื่อง <?php echo $title;?>
            </td>
            </tr>

            <tr>
              <td colspan="2">
                เรียน อธิการบดีมหาวิทยาลัมหาวิทยาลัยราชภัฏยะลา
            </td>
            </tr>
                <?php 
                    $total = $number * $money;

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

                    $total = $number * $money;

                    $message = "$number";//จำนวนงวด
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                    //$test = str_replace($numthai,$numarabic,$message);
                    $number1 = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

                    $message = "$money";//งวดล่ะ
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                    //$test = str_replace($numthai,$numarabic,$message);
                    $money1 = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

                    $message = "$total";//รวมเป็น
                    $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
                    $numarabic = array("1","2","3","4","5","6","7","8","9","0");

                    //$test = str_replace($numthai,$numarabic,$message);
                    $total1 = str_replace($numarabic,$numthai,$message);
                    //echo $day_thai;

                        function convert($money){
                        $txtnum1 = array('ศูนย์','หนึ่ง','สอง','สาม','สี่','ห้า','หก','เจ็ด','แปด','เก้า','สิบ');
                        $txtnum2 = array('','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน','สิบ','ร้อย','พัน','หมื่น','แสน','ล้าน');
                        $money = str_replace(",","",$money);
                        $money = str_replace(" ","",$money);
                        $money = str_replace("บาท","",$money);
                        $money = explode(".",$money);
                        if(sizeof($money)>2){
                            return 'ทศนิยมหลายตัวนะจ๊ะ';
                            exit;
                        }
                        $strlen = strlen($money[0]);
                        $convert = '';
                        for($i=0;$i<$strlen;$i++){
                            $n = substr($money[0], $i,1);
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
                        $x = $money;                    
                
                ?>
                
            <tr>
               <td colspan="2" class="text-indent-50" align="left">
                 <?php //echo $body;?>ตามที่ สถาบันพัฒนาครูและบุคลากรทางการศึกษาชายแดนใต้ มหาวิทยาลัยราชภัฏยะลา ได้จ้างให้ข้าพเจ้าเป็นเจ้าหน้าที่ประจำโครงการ "<?php echo $project_name?>" ตั้งแต่วันที่ <?php echo $day_thaiS;?>&nbsp;<?php echo $month_thaiS;?>&nbsp;<?php echo $year_thaiS;?>  ถึง <?php echo $day_thaiE;?>&nbsp;<?php echo $month_thaiE;?>&nbsp;<?php echo $year_thaiE;?>  จำนวน <?php echo $number1?> งวด (<?php echo $money1?> = <?php echo $total1?> บาท) เป็นเงิน <?php echo $money1?> บาท รวมเป็นเงินทั้งสิ้น <?php echo $money1?> บาท(<?php echo  convert($x);?>) นั้น
              </td>
            </tr>
<?php 
        $strDate = explode("-", "$date_work");

        // echo "year= ".$strDate[0];
        // echo "month= ".$strDate[1];
        // echo "date= ".$strDate[2];
        
        $str_day = $strDate[2];
        $str_month = $strDate[1];
        $str_year = $strDate[0];

        $year=date("$str_year")+543;
        
        //echo $year;

        $message = "$year";
        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
        $numarabic = array("1","2","3","4","5","6","7","8","9","0");


        //$test = str_replace($numthai,$numarabic,$message);
        $year_thai1 = str_replace($numarabic,$numthai,$message);
        //echo $year_thai1;

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

        $message = "$work";//รวมเป็น
        $numthai = array("๑","๒","๓","๔","๕","๖","๗","๘","๙","๐");
        $numarabic = array("1","2","3","4","5","6","7","8","9","0");

        //$test = str_replace($numthai,$numarabic,$message);
        $work1 = str_replace($numarabic,$numthai,$message);
        //echo $day_thai;
?>
            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                บัดนี้ ข้าพเจ้าได้ปฏิบัติงานดังกล่าวงวดที่ <?php echo $work1?> (เดือน <?php echo $month_thai?> <?php echo $year_thai1?>) เสร็จเรียบร้อยแล้ว
             </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                จึงเรียนมาเพื่อโปรดให้คณะกรรมการตรวจรับงานจ้างดังกล่าว ทำการตรวจรับงานจ้างและขอเบิก-จ่ายต่าจ้าง ให้กับจ้าพเจ้าต่อไปด้วย
            </td>
            </tr>

            <tr>
                <td colspan="3" class="border-0 padding-0">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="center">
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ขอแสดงความนับถือ</td>
                                    </tr>
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $prefix;?><?php echo $firtname;?>&nbsp;&nbsp;<?php echo $lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0">รับจ้าง</td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                        <?php echo $firtname;?>&nbsp;&nbsp;<?php echo $lastname;?>
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
              <td colspan="2">
                บันทึกรับองที่ปฏิบัติงานของผู้ควบคุมงาน
            </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                ข้าพเจ้า อาจารย์<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?> ตำแหน่ง <?php echo $position_name;?> เป็นบุคคลที่ควบคุมการปฏิบัติงานของผู้รับจ้าง ผู้ปฏิบัติงานจ้างเหมาบริการ เจ้าหน้าที่ประจำโครงการ "<?php echo $project_name?>" มหาวิทยาลุยราชภัฏยะลา ขอรับรองว่า<?php echo $prefix;?><?php echo $firtname;?>&nbsp;&nbsp;<?php echo $lastname;?> ได้ปฏิบัติงานเรียบร้อยแล้วตั้งแต่วันที่ <?php echo $day_thaiS;?>&nbsp;<?php echo $month_thaiS;?>&nbsp;<?php echo $year_thaiS;?>  ถึง <?php echo $day_thaiE;?>&nbsp;<?php echo $month_thaiE;?>&nbsp;<?php echo $year_thaiE;?>
            </td>
            </tr>
                
            <tr>
                <td colspan="3" class="border-0 padding-0" align="right">
                    <table width="100%" border="0">
                        <tr>
                            <td width="100%" class="border-0">
                                <table width="300px" border="0" align="right">
                                    <tr>
                                        <td width="1" class="text-nowrap border-0 padding-0">ลงชื่อ</td>
                                        <td class="border-0 padding-0 text-center">
                                        <?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?>
                                            <div class="line-bottom-dashed">&nbsp;</div>
                                        </td>
                                        <td width="1" class="text-nowrap border-0 padding-0"></td>
                                    </tr>
                                    <tr>
                                        <td class="border-0 padding-0" align="right">(</td>
                                        <td align="center" class="border-0 padding-0">
                                        อาจารย์<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?>
                                        </td>
                                        <td class="border-0 padding-0" align="right">)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ผู้ควบคุมการปฏิบัติงาน</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>
