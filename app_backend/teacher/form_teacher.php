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
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
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
                        <h3 class="text-themecolor">เพิ่มข้อมูลอาจารย์</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เพิ่มข้อมูลอาจารย์</li>
                        </ol>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>


                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="insert_teacher.php" name="form_user" method="post">
                                <?php
                                        include '../../administrator/connect.php';
                                        $sql = "Select Max(substr(teacher_id,3)+1) as MaxID from tb_teacher ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="001";
                                                }else
                                                {
                                                    $id="".sprintf("%03d",$testid);
                                                }

                                ?>
                                    <script language="javascript">
                                        function IsCharacter(sText, obj) {
                                            var ValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ.abcdefghijklmnopqrstuvwxyz.กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮ. ื.์.่.๋.้.็.า.เ.ๆ.ำ.ะ.ั.ี.๊.ึ.ุ.ู.";
                                            var IsCharacter = true;
                                            var Char;
                                            for (i = 0; i < sText.length && IsCharacter == true; i++) {
                                                Char = sText.charAt(i);
                                                if (ValidChars.indexOf(Char) == -1) {
                                                    IsCharacter = false;
                                                }
                                            }
                                            if (IsCharacter == false) {
                                                alert("(ภาษาไทย & อังกฤษ เท่านั้น)");
                                                obj.value = sText.substr(0, sText.length - 1);
                                            }
                                        }
                                    </script>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>กรอกข้อมูลอาจารย์</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label><b>รหัส</b></label>
                                                <input type="text" name="teacher_id" value="<?=$id?>" class="form-control form-control-line" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ชื่อ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ภาษาไทย & อังกฤษ)</label>
                                                <input type="text" name="t_firstname" required class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>นามสกุล</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ภาษาไทย & อังกฤษ)</label>
                                                <input type="text" name="t_lastname" required class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
                                            </div>
                                        </div>

                                      <?php
                                          $sql_position = "SELECT * FROM tb_position";
                                          $query_position = mysqli_query($conn,$sql_position);
                                      ?>

                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label><b>ตำแหน่ง</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                              <select class="form-control" name="position_id" required>
                                                  <option value="">-- เลือกตำแหน่ง --</option>
                                                  <?php
                                                      while($result_position=mysqli_fetch_array($query_position))
                                                      {
                                                      ?>
                                                  <option value='<?php echo $result_position['position_id'];?>'><?php echo $result_position['position_name'];?></option>
                                                  <?php
                                                      }
                                                      ?>
                                              </select>
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
                                                <button type="button" class="btn btn-danger btn-block" onClick="JavaScript:history.back();">ยกเลิก</button>
                                            </div>
                                        </div>

                                    </div>

                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <footer class="footer">
                    © 2018 Adminwrap by wrappixel.com
                </footer>
            </div>
        </div>
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
