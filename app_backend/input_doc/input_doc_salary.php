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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_BACKEND;?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/colors/default.css" id="theme" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/google_fonts/fonts_prompt.css" rel="stylesheet" />
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
    <?php include '../mamu/manu_admin.php'; ?>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารเงินเดือน</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารเงินเดือน</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="../input_doc/report_salary.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <form class="form-horizontal form-material" action="insert_doc_salary.php" name="insert" method="post">

<div class="row">
<div class="col-md-2">
<div class="form-group">
<label>รหัสเอกสารเงินเดือน</label>
<input type="text" class="form-control form-control-line" name="doc_id">
</div>
</div>

<?php
$sql_person = "select * from tb_person";
$query_person = mysqli_query($conn,$sql_person);
?>

<div class="col-md-4">
<div class="form-group">
<label>ชื่อบุคลากร</label>
<select class="form-control" name="person_id">
            <option value="">-- เลือกรายชื่อ --</option>
    <?php
    while($result_person=mysqli_fetch_array($query_person))
    {
    ?>
         <option value='<?php echo $result_person['person_id'];?>'><?php echo $result_person['prefix'];?><?php echo $result_person['firtname'];?>&nbsp;&nbsp;<?php echo $result_person['lastname'];?></option>
    <?php
    }
     ?>
            </select>
    </div>
</div>

<?php
$sql_project = "select * from tb_project";
$query_project = mysqli_query($conn,$sql_project);
?>

<div class="col-md-4">
<div class="form-group">
<label>ชื่อโครงการ</label>
            <select class="form-control" name="project_id">
            <option value="">-- เลือกชื่อโครงการ --</option>
    <?php
    while($result_project=mysqli_fetch_array($query_project))
    {
    ?>
      <option value='<?php echo $result_project['project_id'];?>'><?php echo $result_project['project_name'];?></option>
    <?php
    }
     ?>
            </select>
    </div>
</div>
</div>



<div class="row">

<div class="col-md-2">
<div class="form-group">
<label>เริ่มต้นวันที่</label>
<input type="date" class="form-control form-control-line" name="str_date">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>สิ้นสุดวันที่</label>
<input type="date"  class="form-control form-control-line" name="stp_date">
    </div>
</div>

</div>



<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-3">
<div class="form-group">
<button type="submit" class="btn btn-primary btn-block">บันทึก</button>
    </div>
</div>

<div class="col-md-3">
<div class="form-group">
<button type="button" class="btn btn-danger btn-block">ยกเลิก</button>
    </div>
</div>

</div>

<!--
                                    <div class="form-group">
                                        <label class="col-md-2">Full Name</label>
                                        <div class="col-md-2">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-2">Email</label>
                                        <div class="col-md-2">
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Message</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Country</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line">
                                                <option>London</option>
                                                <option>India</option>
                                                <option>Usa</option>
                                                <option>Canada</option>
                                                <option>Thailand</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update Profile</button>
                                        </div>
                                    </div> -->
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
</body>

</html>
