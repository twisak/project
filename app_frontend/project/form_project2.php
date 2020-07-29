<<<<<<< HEAD
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
                        <h3 class="text-themecolor">เพิ่มโครงการ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เพิ่มโครงการ</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){

                    var rows = 1;
                    $("#createRows").click(function(){
                                        var tr = "<tr>";
                                        tr = tr + "<td class='col-md-5'><input type='text' class='form-control form-control-line' name='activity"+rows+"' id='activity"+rows+"' size='5'></td>";
                                        tr = tr + "</tr>";
                                        $('#myTable > tbody:last').append(tr);

                                        $('#hdnCount').val(rows);
                                        rows = rows + 1;
                        });
                        $("#deleteRows").click(function(){
                                if ($("#myTable tr").length != 1) {
                                    $("#myTable tr:last").remove();
                                }
                        });

                    });
                </script>

                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <?php
                                        include '../../administrator/connect.php';
                                        $sql = "Select Max(substr(project_id,3)+1) as MaxID from tb_project ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="P001";
                                                }else
                                                {
                                                    $id="P".sprintf("%03d",$testid);
                                                }

                            ?>
                                <form class="form-horizontal form-material" action="INSERT_project.php" name="form_user" method="post">


<div class="row">
  <div class="col-md-2">
  <div class="form-group">
  <label>รหัสโครงการ</label>
<input type="text" name="project_id" value="<?=$id?>" placeholder="" class="form-control form-control-line">
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group">
  <label>ชื่อโครงการ</label>
  <input type="text" name="project_name" placeholder="" class="form-control form-control-line">
  </div>
  </div>
</div>

<div class="row">
  <div class="col-md-5">
  <div class="form-group">
  <label>เพิ่มหัวข้อกิจกรรม</label>
  <table border="0" id="myTable">
      <!-- head table -->
      <thead>
      <tr>
      <td>
          <button type="button" class="btn btn-success" id="createRows">เพิ่มหัวข้อกิจกรรม</button>
      </td>
      <td>
          <button type="button" class="btn btn-danger" id="deleteRows">ลบหัวข้อกิจกรรม</button>
      </td>
      </tr>
      </thead>
      <!-- body dynamic rows -->
      <tbody></tbody>
      <input type="hidden" id="hdnCount" name="hdnCount">
  </table>
  </div>
  </div>
</div>






                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label class="">รหัสโครงการ</label>
                                            <input type="text" name="project_id" value="<?=$id?>" placeholder="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-5">
                                            <label class="">ชื่อโครงการ</label>
                                            <input type="text" name="project_name" placeholder="" class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="">ชื่อกิจกรรม</label>
                                            <table border="0" id="myTable">
                                                <!-- head table -->
                                                <thead>
                                                <tr>
                                                <td class="col-md-5">
                                               </td>
                                                <td>
                                                    <button type="button" class="btn btn-success btn-block" id="createRows"><i class="fa fa-plus"></i></button>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger btn-block" id="deleteRows"><i class="fa fa-plus"></i></button>
                                                </td>
                                                </tr>
                                                </thead>
                                                <!-- body dynamic rows -->
                                                <tbody></tbody>
                                                <input type="hidden" id="hdnCount" name="hdnCount">
                                            </table>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <!-- <input type="hidden" id="hdnCount" name="hdnCount"> -->
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

</body>

</html>
