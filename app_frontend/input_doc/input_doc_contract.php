<?php session_start();
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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="../css/colors/default.css" id="theme" rel="stylesheet">
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
    <?php include '../menu/menu_admin.php'; ?>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารจ้างเหมาบริการ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารจ้างเหมาบริการ</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="../input_doc/report_contract.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
                            <i class="fa-fw fa fa-print"></i>
                            ส่งออกแบบฟอร์ม
                        </a>
                    </div>
                </div>
                <div class="row">
                    <!-- Column -->

                    <!-- <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div> -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="INSERT_contract.php" method="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รหัสเอกสารจ้างเหมาบริการ</label>
                                                <input type="text" class="form-control form-control-line" name="doc_id">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>รหัสบุคลากร</label>
                                                <input type="text" class="form-control form-control-line" name="person_id">
                                            </div>
                                        </div>

                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รหัสตำแหน่ง</label>
                                                <input type="text" class="form-control form-control-line" name="prosition_id">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label>โครงการ</label>
                                            <select name="project_id" id="project" class="form-control">
                                                <option value="">เลือกโครงการ</option>
                                                <?php
                                                    $sql = "SELECT * FROM tb_project";
                                                    $query = mysqli_query($conn, $sql);
                                                    while($result = mysqli_fetch_assoc($query)):
                                                ?>
                                                    <option value="<?=$result['project_id']?>"><?=$result['project_name']?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity">ชื่อกิจกรรม</label>
                                                    <select name="activity" id="activity" class="form-control">
                                                        <option value="">ชื่อกิจกรรม</option>
                                                    </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <div class="col-md-7">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-info" id="createRows" value="Add">เพิ่มกิจกรรม</button>
                                                        &nbsp;&nbsp;<button type="button" class="btn btn-warning" id="deleteRows" value="Del">ลบกิจกรรม</button>
                                                        &nbsp;&nbsp;<button type="button" class="btn btn-danger" id="clearRows" value="Clear">ลบทั้งหมด</button>
                                                    </div>
                                                </div>

                                            </div>
                                            <table width="100%" border="0" id="myTable">
                                                <thead>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                            <br />
                                            <center>
                                                <br>
                                                <input type="hidden" id="hdnCount" name="hdnCount">
                                            </center>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>เริ่มต้นวันที่</label>
                                                        <input type="date" class="form-control form-control-line" name="str-date">
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label>สิ้นสุดวันที่</label>
                                                        <input type="date" class="form-control form-control-line" name="stp-date">
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-md-3">
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <input type="submit" name="submit" value="บันทึก" class="btn btn-primary btn-block"/>
                                                    </div>
                                                </div>

                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-danger btn-block">ยกเลิก</button>
                                                    </div>
                                                </div>
                                            </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
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
    <script src="../js/script.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var rows = 1;
            $("#createRows").click(function () {


                var tr = "<tr>";
                tr = tr + "<td><div class='row'><div class='col-md-4'><div class='form-group'><label>หัวข้อกิจกรรม</label><input type='text' class='form-control p_input' name='foreword" + rows + "'></div></div></td>";
                tr = tr + "</tr>";
                $('#myTable > tbody:last').append(tr);

                $('#hdnCount').val(rows);
                rows = rows + 1;
            });

            $("#deleteRows").click(function () {
                if ($("#myTable tr").length != 1) {
                    $("#myTable tr:last").remove();
                }
            });

            $("#clearRows").click(function () {
                rows = 1;
                $('#hdnCount').val(rows);
                $('#myTable > tbody:last').empty(); // remove all
            });

        });
    </script>
</body>

</html>