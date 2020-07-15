<?php session_start();
if($_SESSION['status'] == 'Admin')
{
}
elseif($_SESSION['status'] == 'Personal')
{
}
else
{
    echo "<script>";
    echo "alert(\"คุณไม่มีสิทธิ์เข้าสู่ระบบ\");";
    echo "</script>";
    echo "<meta http-equiv='refresh' content='0;url=../../administrator/logout.php'>";
}
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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="../css/google_fonts/fonts_prompt.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <div id="main-wrapper">
    <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ข้อมูลอาจารย์</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ข้อมูลอาจารย์</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลอาจารย์</h4>


                                <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <?php
                                                    $strKeyword = null;
                                                    if(isset($_POST["txtKeyword"])){
                                                        $strKeyword = $_POST["txtKeyword"];
                                                    }
                                                    if(isset($_GET["txtKeyword"])){
                                                        $strKeyword = $_GET["txtKeyword"];
                                                    }
                                                ?>
                                            <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 col-8">
                                                            <input class="form-control" type="text" placeholder="Search..." value="<?php echo $strKeyword;?>" name="txtKeyword" id="txtKeyword">
                                                        </div>
                                                        <button type="submit" class="btn btn-info" name="btnsearch">ค้นหา</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-2 text-right">

                                        </div>
                                        <div class="col-md-4 text-right">
                                            <div class="text-right">
                                                <a href="../teacher/form_teacher.php"><button type="button" class="btn btn-primary">เพิ่มอาจารย์</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table text-center table-bordered">
                                        <thead>
                                        <tr>
                                                <th class="text-center"><b>ลำดับ</b></th>
                                                <th class="text-center"><b>ชื่อ - สกุล</b></th>
                                                <th class="text-center"><b>ตำแหน่ง</b></th>
                                                <th class="text-center"><b>แก้ไข</b></th>
                                                <th class="text-center"><b>ลบ</b></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $i=1;
                                            $i<="";

                                            include '../../administrator/connect.php';

                                            $sql_teacher ="SELECT tb_teacher.id, tb_teacher.t_firstname , tb_teacher.t_lastname , tb_position.position_name  FROM tb_teacher
                                            INNER JOIN tb_position ON tb_teacher.position_id = tb_position.position_id
                                            WHERE (tb_teacher.t_firstname LIKE '%".$strKeyword."%' or tb_teacher.t_lastname LIKE '%".$strKeyword."%' or tb_position.position_name LIKE '%".$strKeyword."%'  ) ";

                                            // $sql_teacher ="SELECT * FROM tb_teacher ";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            while($row_teacher = mysqli_fetch_array($query_teacher,MYSQLI_ASSOC))
                                            {

                                           //      $t_firstname = $row_teacher['t_firstname'];
                                           //      $t_lastname = $row_teacher['t_lastname'];
                                           //      $position_id = $row_teacher['position_id'];
                                           //
                                           // $sql_position = "SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
                                           // $query_position = mysqli_query($conn,$sql_position);
                                           // $row_position =mysqli_fetch_assoc($query_position);
                                           // $position_name = $row_position['position_name'];


                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $row_teacher['t_lastname'];?></td>
                                                <td><?php echo $row_teacher['position_name'];?></td>
                                                <td><a href="edit_form_teacher.php?id=<?php echo $row_teacher['id'];?>" class="btn btn-warning">แก้ไข</a></td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_teacher.php?id=<?php echo $row_teacher["id"];?>';}" class="btn btn-danger">ลบ</a></td>
                                            </tr>
                                            <?php
                                                $i++;
                                        }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="../js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../js/custom.min.js"></script>
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>
