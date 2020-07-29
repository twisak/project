<?php
include('../../config/connect.php');
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND;?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND;?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND;?>/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND;?>/css/colors/default.css" id="theme" rel="stylesheet">
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
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">แก้ไขข้อมูลส่วนตัว</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูลส่วนตัว</li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <?php
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
                                           
                                            $person_id = $row1['person_id'];
                                            $prefix = $row1['prefix'];
                                            $firtname = $row1['firtname'];
                                            $lastname = $row1['lastname'];
                                            $person_id = $row1['person_id'];
                                            $idcard = $row1['idcard'];
                                            $position_id = $row1['position_id'];
                                            $house_num = $row1['house_num'];
                                            $province_id = $row1['province_id'];
                                            $districts_id = $row1['districts_id'];
                                            $amphures_id= $row1['amphures_id'];
                                        }

                                        $sql_provinces = "SELECT * FROM provinces WHERE id = '".$province_id."' ";
                                        $query_provinces = mysqli_query($conn,$sql_provinces);
                                        $result_provinces = mysqli_fetch_assoc($query_provinces);
                                        $name_th_p = $result_provinces['name_th'];

                                        $sql_amphures = "SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
                                        $query_amphures = mysqli_query($conn,$sql_amphures);
                                        $result_amphures = mysqli_fetch_assoc($query_amphures);
                                        $name_th_a = $result_amphures['name_th'];

                                        $sql_districts = "SELECT * FROM districts WHERE id = '".$districts_id."' ";
                                        $query_districts = mysqli_query($conn,$sql_districts);
                                        $result_districts = mysqli_fetch_assoc($query_districts);
                                        $name_th_d = $result_districts['name_th'];

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
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>แก้ไขข้อมูลบุคลากร</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <div class="col-md-4">
                                                <label class=""><b>รหัสบุคลากร</b></label>
                                                <input type="text" name="person_id" readonly value="<?php echo $person_id?>" class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-4">
                                                <label class=""><b>ตำแหน่ง</b></label>
                                                <select name="position_id" class="form-control">
                                                    <option value="<?php echo $position_id?>"><?php echo $position_name?></option>
                                                    <?php
                                                    $sql = "SELECT * FROM tb_position";
                                                    $query = mysqli_query($conn, $sql);
                                                    while($row=mysqli_fetch_array($query))
                                                        {
                                                            $position_id = $row['position_id'];
                                                            $position_name = $row['position_name'];
                                                ?>
                                                    <option value='<?php echo $position_id;?>'><?php echo $position_name;?></option>
                                                    <?php
                                                        }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <div class="col-md-2">
                                                <label class=""><b>คำนำหน้า</b></label>
                                                <select name="prefix" class="form-control">
                                                    <option value="<?php echo $prefix?>"><?php echo $prefix?></option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class=""><b>ชื่อ</b></label>
                                                <input type="text" name="firtname" value="<?php echo $firtname?>" class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
                                            </div>
                                            <div class="col-md-5">
                                                <label class=""><b>นานสกุล</b></label>
                                                <input type="text" name="lastname" value="<?php echo $lastname?>" class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <script language="javascript">
                                        function IsNumeric(sText, obj) {
                                            var ValidChars = "0123456789/";
                                            var IsNumber = true;
                                            var Char;
                                            for (i = 0; i < sText.length && IsNumber == true; i++) {
                                                Char = sText.charAt(i);
                                                if (ValidChars.indexOf(Char) == -1) {
                                                    IsNumber = false;
                                                }
                                            }
                                            if (IsNumber == false) {
                                                alert("(ตัวเลข เท่านั้น)");
                                                obj.value = sText.substr(0, sText.length - 1);
                                            }
                                        }
                                    </script>
                                    <div class="row col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class=""><b>เลขบัตรประชาชน</b></label>
                                                <input type="text" name="idcard" value="<?php echo $idcard?>" class="form-control form-control-line" maxlength="13" minlength="13" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <label class=""><b>ที่อยู่</b></label>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="row col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                            <label class=""><b>บ้านเลชที่</b></label>
                                                <input type="text" name="house_num" value="<?php echo $house_num?>" class="form-control form-control-line" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <div class="col-md-4">
                                            <label for="province"><b>จังหวัด</b></label>
                                                <select name="province_id" id="province" class="form-control">
                                                    <option value="<?php echo $province_id?>"><?php echo $name_th_p?></option>
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
                                            <label for="amphure"><b>อำเภอ/เขต</b></label>
                                                <select name="amphures_id" id="amphure" class="form-control">
                                                    <option value="<?php echo $amphures_id?>"><?php echo $name_th_a?></option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                            <label for="district"><b>ตำบล/แขวง</b></label>
                                                <select name="districts_id" id="district" class="form-control">
                                                    <option value="<?php echo $districts_id?>"><?php echo $name_th_d?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <div class="col-md-4">
                                            <label class=""><b>Username</b></label>
                                                <input type="text" name="username" value="<?php echo $username?>" class="form-control form-control-line">
                                            </div>

                                            <div class="col-md-4">
                                            <label class=""><b>Psaaword</b></label>&nbsp;<label>(ตัวเลข 4-8 ตัวเท่านั้น)</label>
                                                <input type="text" name="password" value="<?php echo $password?>" maxlength="8" minlength="4" class="form-control form-control-line" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                            <div class="col-md-4">
                                                    <label class=""><b>Confirm password</b></label>&nbsp;<label>(ตัวเลข 4-8 ตัวเท่านั้น)</label>
                                                    <input type="text" name="con_password" value="<?php echo $password?>" maxlength="8" minlength="4" class="form-control form-control-line" onKeyUp="IsNumeric(this.value,this)">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class=""><b>สถานะ</b></label>
                                                    <input type="text" name="status" readonly value="<?php echo $status?>" class="form-control form-control-line">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="บันทึก" class="btn btn-primary btn-block" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger btn-block" onClick="JavaScript:history.back();">ยกเลิก</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
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
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/js/custom.min.js"></script>
    <script src="<?php echo ROOT_PROJECT_FRONTEND;?>/js/script.js"></script>
</body>

</html>
