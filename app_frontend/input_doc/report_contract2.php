<!-- <?php session_start();
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
?> -->
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
<?php

            include '../../administrator/connect.php';
            $id =$_GET['id'];
            $sql ="SELECT * FROM tb_contract WHERE id = '".$id."'";
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
                  วันที่ 31 กรกฏาคม 2562
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
                <?php $total = $number * $money;?>
            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                <?php echo $body;?> "<?php echo $project_name?>" ตั้งแต่วันที่ <?php echo $str_date?>  ถึง <?php echo $stp_date?>  จำนวน <?php echo $number?> งวด (<?php echo $money?> = <?php echo $total?>บาท) เป็นเงิน <?php echo $money?> บาท รวมเป็นเงินทั้งสิ้น <?php echo $money?> บาท(หนึ่งหมื่นสามพันสามร้อยบาทถ้วน) นั้น
            </td>
            </tr>

            <tr>
              <td colspan="2" class="text-indent-50" align="left">
                บัดนี้ ข้าพเจ้าได้ปฏิบัติงานดังกล่าวงวดที่ <?php echo $work?> (เดือน กรกฏาคม 2562) เสร็จเรียบร้อยแล้ว
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
                ข้าพเจ้า อาจารย์<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?> ตำแหน่ง <?php echo $position_name;?> เป็นบุคคลที่ควบคุมการปฏิบัติงานของผู้รับจ้าง ผู้ปฏิบัติงานจ้างเหมาบริการ เจ้าหน้าที่ประจำโครงการ "<?php echo $project_name?>" มหาวิทยาลุยราชภัฏยะลา ขอรับรองว่า<?php echo $prefix;?><?php echo $firtname;?>&nbsp;&nbsp;<?php echo $lastname;?> ได้ปฏิบัติงานเรียบร้อยแล้วตั้งแต่วันที่ <?php echo $str_date?>  ถึง <?php echo $stp_date?>
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
