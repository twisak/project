<?php include('../../config/connect.php');
        include('../../config/constant.php');
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
<?php include '../include_title.php'; ?>
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
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
    <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ข้อมูลตำแหน่ง</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ข้อมูลตำแหน่ง</li>
                        </ol>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลตำแหน่ง</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->
<!--
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-1 offset-md-10">ssss</div>
                                </div>
                                </div> -->


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
                                                <a href="../position/form_position.php"><button type="button" class="btn btn-primary">เพิ่มตำแหน่ง</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="table-responsive">
                                    <table class="table text-center table-bordered">
                                        <thead>
                                        <tr>
                                                <th class="text-center"><b>ลำดับ</b></th>
                                                <th class="text-center"><b>ตำแหน่ง</b></th>
                                                <th class="text-center"><b>แก้ไข</b></th>
                                                <th class="text-center"><b>ลบ</b></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $i=1;
                                            $i<="";

                                            include '../../administrator/connect.php';
                                            $sql_position ="SELECT * FROM tb_position WHERE (position_name LIKE '%".$strKeyword."%'   ) ";
                                            $query_position = mysqli_query($conn,$sql_position);
                                            while($row_position = mysqli_fetch_array($query_position,MYSQLI_ASSOC))
                                            {
                                                //$id = $row_position['id'];
                                                $position_id = $row_position['position_id'];
                                                $position_name = $row_position['position_name'];
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $position_name;?></td>
                                                <td><a href="edit_form_position.php?position_id=<?php echo $position_id;?>" class="btn btn-warning">แก้ไข</a></td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_position.php?position_id=<?php echo $position_id;?>';}" class="btn btn-danger">ลบ</a></td>
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
