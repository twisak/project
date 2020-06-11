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
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/report.css" rel="stylesheet">
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
    //  $sql ="SELECT * FROM tb_person";
    //  $query = mysqli_query($conn,$sql);
    //  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
    //     {
    //         $prefix = $row['prefix'];
    //         $firtname = $row['firtname'];
    //         $lastname = $row['lastname'];
    //         $idcard = $row['idcard'];
    //         $address = $row['address'];
    //         $position_id = $row['position_id'];
    //     }

    //     $sql1 ="SELECT * FROM account_login WHERE position_id = '".$position_id."' ";
    //     $query1 = mysqli_query($conn,$sql1);
    //     while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
    //     {
    //         $position_id = $row1['position_id'];
    //         $username = $row1['username'];
    //         $password = $row1['password'];
    //         $position = $row1['position'];
    //     }
?>
<body id="<?php //echo $body['name'];?>">
    <div class="page">
        <table border="0" align="center" width="100%" class="statement-view text-gray-900">
            <tr>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    มหาวิทยาลัยราชภัฏยะลา <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    โครงการส่งเสริมและเผยแพร่ความจริงที่ถูกต้องเพื่อสนับสนุนการแก้ไขปัญหา <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    กิจกรรม พัฒนาหน่วยให้บริการและให้คำปรึกษาด้านการศึกษาเฉพาะทางสำหรับครูผู้ปกครองและ ประชาชนในพื้นที่ชายแดนใต้ ด้านสื่อสารและนวัตกรรมเพื่อการเรียนรู้ของเด็กและเยาวชน หน่วยวิจัย พัฒนาและให้บริการสื่อและนวัตกรรมทางการศึกษา <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ชื่อ นายอาฟฟาน สาและ <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ตำแหน่ง เจ้าหน้าที่ประจำโครงการฯ <br>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="statement-header" align="center">
                    ประจำเดือน พฤศจิกายน ๒๕๖๒ <br>
                </td>
            </tr>

<tr>
  <td>
    <br>
    <table border="1" align="center" width="100%" class="statement-view text-gray-900">
    <tr>
        <td colspan="3"  align="left">
            &nbsp;&nbsp;๑. ประจำเดือน พฤศจิกายน ๒๕๖๒ <br>
        </td>
    </tr>
    <tr>
        <td colspan="3"  align="left">
            &nbsp;&nbsp;๒. ประจำเดือน พฤศจิกายน ๒๕๖๒ <br>
        </td>
    </tr>
    <tr>
        <td colspan="3"  align="left">
            &nbsp;&nbsp;๓. ประจำเดือน พฤศจิกายน ๒๕๖๒ <br>
        </td>
    </tr>
    </table><br>
  </td>
</tr>



            <!-- <tr>
                <td colspan="3" class="text-indent-50" align="left">
                    เพื่ออำนวยความสะดวกแก่บุคลากร คณะวิทยาการอิสลาม ในการปฏิบัติงานต่างๆ และมีความต้องการใช้พัสดุก่อน สามารถยืมพัสดุของคณะวิทยาการอิสลาม โดยกรอกแบบฟอร์มการขอยืมพัสดุข้างท้ายนี้ ส่งที่งานพัสดุ สำนักงานเลขานุการ คณะวิทยาการอิสลาม ก่อนวันที่ประสงค์จะใช้งานไม่น้อยกว่า 5 วันทำการ
                </td>
            </tr>
            <tr>
                <td colspan="3" class="border-0">
                    &nbsp;
                </td>
            </tr> -->




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
                                    <tr>
                                        <td colspan="3" class="border-0 padding-0" align="center">ผู้ควบคุมการปฏิบัติงาน</td>
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
