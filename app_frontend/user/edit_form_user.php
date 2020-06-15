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
    <?php include '../menu/menu_admin.php'; ?>
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
                        <h3 class="text-themecolor">แก้ไขข้อมูลส่วนตัว</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <?php
                                        include '../../administrator/connect.php';
                                        $person_id =$_GET['id'];

                                        $sql ="SELECT * FROM account_login WHERE person_id = '".$person_id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {
                                            $person_id = $row['person_id'];
                                            $username = $row['username'];
                                            $password= $row['password'];
                                            $status = $row['status'];
                                        }

                                        $sql1 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
                                        $query1 = mysqli_query($conn,$sql1);
                                        while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                        {
                                            $id = $row1['id'];
                                            $person_id = $row1['person_id'];
                                            $prefix = $row1['prefix'];
                                            $firtname = $row1['firtname'];
                                            $lastname = $row1['lastname'];
                                            $person_id = $row1['person_id'];
                                            $idcard = $row1['idcard'];
                                            $position_id = $row1['position_id'];
                                            $house_num = $row1['house_num'];
                                            $provincen_id = $row1['provincen_id'];
                                            $districts_id = $row1['districts_id'];
                                            $amphures_id= $row1['amphures_id'];
                                        }

                                        $sql2 ="SELECT * FROM provinces WHERE id = '".$provincen_id."' ";
                                        $query2 = mysqli_query($conn,$sql2);
                                        while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
                                        {
                                            $id3 = $row2['id'];
                                            $name_th = $row2['name_th'];
                                        }
                                        $sql3 ="SELECT * FROM districts WHERE id = '".$districts_id."' ";
                                        $query3 = mysqli_query($conn,$sql3);
                                        while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                                        {
                                            $id1 = $row2['id1'];
                                            $name_th1 = $row3['name_th'];
                                        }
                                        $sql4 ="SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $id2 = $row2['id2'];
                                            $name_th2 = $row4['name_th'];
                                        }

                                        $sql5 ="SELECT * FROM tb_position WHERE position_id = '".$position_id."' ";
                                        $query5 = mysqli_query($conn,$sql5);
                                        while($row5 = mysqli_fetch_array($query5,MYSQLI_ASSOC))
                                        {
                                            $position_name = $row5['position_name'];
                                        }

                            ?>
                                <form class="form-horizontal form-material" action="edit_person.php" name="form_user" method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label class="">รหัสเจ้าหน้าที่</label>
                                            <input type="text" name="person_id" readonly value="<?php echo $person_id?>" class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="">ตำแหน่ง</label>
                                            <input type="text" name="position_id" readonly value="<?php echo $position_id?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-2">
                                            <label class="">คำนำหน้า</label>
                                            <input type="text" name="prefix" value="<?php echo $prefix?>" class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="">ชื่อ</label>
                                            <input type="text" name="firtname" value="<?php echo $firtname?>" class="form-control form-control-line">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="">นานสกุล</label>
                                            <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                <div class="row col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="">เลขบัตรประชาชน</label>
                                            <input type="text" name="idcard" value="<?php echo $idcard?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                <div class="row">
                                <div class="row col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class=""><b>ที่อยู่</b></label>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row col-md-12">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="">บ้านเลชที่</label>
                                            <input type="text" name="house_num" value="<?php echo $house_num?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-4">
                                            <label for="province">จังหวัด</label>
                                            <select name="province_id" id="province" class="form-control">
                                                <option value="<?php echo $id3?>"><?php echo $name_th?></option>
                                                <?php
                                                    $sql = "SELECT * FROM provinces";
                                                    $query = mysqli_query($conn, $sql);
                                                    while($result = mysqli_fetch_assoc($query)):
                                                ?>
                                                    <option value="<?=$result['id']?>"><?=$result['name_th']?></option>
                                                <?php endwhile; ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="amphure">อำเภอ/เขต</label>
                                            <select name="amphures_id" id="amphure" class="form-control">
                                                <option value="<?php echo $id1?>"><?php echo $name_th1?></option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="district">ตำบล/แขวง</label>
                                            <select name="districts_id" id="district" class="form-control">
                                                <option value="<?php echo $id2?>"><?php echo $name_th2?></option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <label class="">Username</label>
                                            <input type="text" name="username" value="<?php echo $username?>" class="form-control form-control-line">
                                        </div>

                                        <div class="col-md-6">
                                            <label class="">Psaaword</label>
                                            <input type="text" name="password" value="<?php echo $password?>" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">สถานะ</label>
                                        <div class="col-md-6">
                                            <input type="text" name="status" readonly value="<?php echo $status?>" class="form-control form-control-line">
                                            
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
</body>

</html>
