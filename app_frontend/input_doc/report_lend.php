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
        <table border="1" width="100%" class="statement-view text-gray-900">
            <tr>
                <td width="70%">

                    <table width="100%">
                        <tr align="center">
                            <td>สัญญาการยืมเงิน</td>
                        </tr>
                        <tr align="left">
                            <td>ยื่นต่อ หัวหน้าการคลัง</td>
                        </tr>
                    </table>

                </td>
                <td width="30%">
                    <table width="100%">
                        <tr align="left">
                            <td>เลขที่</td>
                        </tr>
                        <tr align="left">
                            <td>วันครบกำหนด</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td>ข้าพเจ้า</td>
                        </tr>
                        <tr>
                            <td>สังกัด มหาวิทยาลัยราชภัฏยะลา จังหวัดยะลา มีความประสงค์ขอยืมเงินจาก มหาวิทยาลัยราชภัฏยะลา</td>
                        </tr>
                        <tr>
                            <td>เพื่อเป็นค่าใช้จ่าย</td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td>
                    <table>
                        <tr>
                            <td>ค่าเบี้ยเลี้ยง</td>
                        </tr>
                        <tr>
                            <td>ค่าที่พัก</td>
                        </tr>
                        <tr>
                            <td>ค่าพาหนะ ค่าเครื่องบิน</td>
                        </tr>
                        <tr>
                            <td>ค่ารถทัวร์</td>
                        </tr>
                        <tr>
                            <td>ค่ารถรับจ้าง</td>
                        </tr>
                        <tr>
                            <td>ค่าน้ำมันเชื้อเพลิง</td>
                        </tr>
                        <tr>
                            <td>ค่าลงทะเบียนอบรม</td>
                        </tr>
                        <tr>
                            <td>อื่นๆ</td>
                        </tr>
                    </table>
                </td>
                <td>55</td>
            </tr>

            <tr>
                <td>
                    (ตัวอักษร)
                </td>
                <td></td>
            </tr>

            <tr>
                <td colspan="2">
                    <table>
                        <tr>
                            <td colspan="2">ข้าพเจ้าจะสัญญาว่าจะปฏิบัติตามระเบียบของทางราชกรทุกประการและจำนำใบสำคัญคู่จ่ายที่ถูกต้องพร้อมทั้งเงินเหลือจ่าย(ถ้ามี) ส่งใช้ภายในกำนหดไว้ในระเบียบการเบิกจ่ายเงินจากคลัง คือายใน...วัน นับแต่วันที่ได้รับเงินยืมนี้ ถ้าข้าพเจ้าไม่ส่งตามกำหนดข้าำเจ้ายินยอมให้หักเงินเดือน ค่าจ้าง เบี้ยหวัด บำเหน็จ บำนาญ หรือเงินอื่นใดที่ข้าพเจ้าจะพึงได้รับจากทางราชการชดใช้จำนวนเงินที่ยืมไปจนครบถ้วนได้ทันที
                            </td>
                        </tr>
                        <tr>
                            <td>ลงชื่อ
                            </td>
                            <td>วันที่
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td colspan="2">เสนอ อธิการบดีมหาวิทยาลัยราชภัฏยะลา
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">ได้ตรวจสอบแล้ว เห็นควรอนุมัติให้ยืมตามใบยืมฉบับนี้ได้
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">จำนวน..............
                            </td>
                        </tr>
                        <tr>
                            <td>ลงชื่อ
                            </td>
                            <td>วันที่
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td colspan="2" align="center">คำอนุมัติ
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">อนุมัติให้ยืมตามเงื่อนไขข้างต้น
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">จำนวน..............
                            </td>
                        </tr>
                        <tr>
                            <td>ลงชื่อ
                            </td>
                            <td>วันที่
                            </td>
                        </tr>
                    </table>

                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <table width="100%">
                        <tr>
                            <td colspan="2" align="center">ใบรับเงิน
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">ได้รับเงินจำนวน
                            </td>
                        </tr>
                        <tr>
                            <td>ลงชื่อ
                            </td>
                            <td>วันที่
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