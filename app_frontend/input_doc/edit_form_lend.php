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
    <?php include '../menu/menu_admin.php'; ?>
    <?php include '../../administrator/connect.php'; ?>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารสัญญายืม</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารสัญญายืม</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="../input_doc/report_lend.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
                        <i class="fa-fw fa fa-print"></i>
                            ส่งออกแบบฟอร์ม
                        </a>
                    </div>
                </div>

<?php
$id =$_GET['id'];
$sql ="SELECT * FROM tb_lend WHERE id = '".$id."'";
$query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
{
    $doc_id = $row['doc_id'];
    $str_date = $row['str_date'];
    $stp_date = $row['stp_date'];
    $project_id = $row['project_id'];
    $person_id = $row['person_id'];
    $allowance = $row['allowance'];
    $allowance_price = $row['allowance_price'];
    $rest = $row['rest'];
    $rest_price = $row['rest_price'];
    $vehicle = $row['vehicle'];
    $vehicle_price = $row['vehicle_price'];
    $regis = $row['regis'];
    $regis_num = $row['regis_num'];
    $other = $row['other'];
    $other_price = $row['other_price'];
}

$sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
$query1 = mysqli_query($conn,$sql1);
while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
    $project_name = $row1['project_name'];
    $project_id = $row1['project_id'];
}

$sql3 ="SELECT * FROM tb_activity WHERE project_id = '".$project_id."' ";
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
    //$prefix = $row2['prefix'];
}
 ?>

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
                                <form class="form-horizontal form-material" action="edit_lend.php" name="insertlend" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<div class="row">
<div class="col-md-2">
<div class="form-group">
<label>รหัสเอกสารสัญญายืม</label>
<input type="text" class="form-control form-control-line" name="doc_id" value="<?php echo $doc_id; ?>" readonly>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>เริ่มต้นวันที่</label>
<input type="date"  class="form-control form-control-line" name="str_date" value="<?php echo $str_date; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>สิ้นสุดวันที่</label>
<input type="date"  class="form-control form-control-line" name="stp_date" value="<?php echo $stp_date; ?>">
    </div>
</div>
</div>

<div class="row">
  <?php
  $sql_person = "select * from tb_person";
  $query_person = mysqli_query($conn,$sql_person);
  ?>

  <div class="col-md-4">
  <div class="form-group">
  <label>ชื่อบุคลากร</label>
  <select class="form-control" name="person_id" value="<?php echo $row['person_id']; ?>">

<?php
$sql_check_person = "SELECT * FROM tb_person";
$query_check_person = mysqli_query($conn,$sql_check_person);

$person_id1 = $row['person_id'];
while($result_check_person = mysqli_fetch_array($query_check_person))
{
if($person_id1 == $result_check_person["person_id"])
{
$selected_check_person = "selected";

}
else
{
$selected_check_person = "";
}
?>
<option value="<?php echo $result_check_person["person_id"];?>"<?php echo $selected_check_person;?>><?php echo $result_check_person["prefix"]; ?><?php echo $result_check_person["firtname"]; ?>&nbsp;&nbsp;<?php echo $result_check_person["lastname"]; ?></option>
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
<select class="form-control" name="project_id" value="<?php echo $row['project_id']; ?>">

<?php
$sql_check_project = "SELECT * FROM tb_project";
$query_check_project = mysqli_query($conn,$sql_check_project);

$project_id1 = $row['project_id'];
while($result_check_project = mysqli_fetch_array($query_check_project))
{
if($project_id1 == $result_check_project["project_id"])
{
$selected_check_project = "selected";

}
else
{
$selected_check_project = "";
}
?>
<option value="<?php echo $result_check_project["project_id"];?>"<?php echo $selected_check_project;?>><?php echo $result_check_project["project_name"]; ?></option>
<?php
}
?>
</select>
    </div>
</div>

</div>

<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>ค่าเบี้ยเลี้ยง</label>
<input type="text"  class="form-control form-control-line" name="allowance" value="<?php echo $allowance; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>ราคา</label>
<input type="text"  class="form-control form-control-line" name="allowance_price" value="<?php echo $allowance_price; ?>">
    </div>
</div>
</div>

<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>ค่าที่พัก</label>
<input type="text"  class="form-control form-control-line" name="rest" value="<?php echo $rest; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>ราคา</label>
<input type="text"  class="form-control form-control-line" name="rest_price" value="<?php echo $rest_price; ?>">
    </div>
</div>
</div>

<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>พาหนะ</label>
<input type="text"  class="form-control form-control-line" name="vehicle" value="<?php echo $vehicle; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>ราคา</label>
<input type="text"  class="form-control form-control-line" name="vehicle_price" value="<?php echo $vehicle_price; ?>">
    </div>
</div>
</div>

<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>ค่าลงทะเบียน</label>
<input type="text"  class="form-control form-control-line" name="regis" value="<?php echo $regis; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>จำนวน/คน</label>
<input type="text"  class="form-control form-control-line" name="regis_num" value="<?php echo $regis_num; ?>">
    </div>
</div>
</div>

<div class="row">
<div class="col-md-5">
<div class="form-group">
<label>อื่นๆ</label>
<input type="text"  class="form-control form-control-line" name="other" value="<?php echo $other; ?>">
    </div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>ราคา</label>
<input type="text"  class="form-control form-control-line" name="other_price" value="<?php echo $other_price; ?>">
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
