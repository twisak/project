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
    <div id="main-wrapper">
        <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ข้อมูลบุคลากร</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ข้อมูลบุคลากร</li>
                        </ol>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <?php
                                        include '../../administrator/connect.php';
                                        $sql = "Select Max(substr(person_id,3)+1) as MaxID from tb_person";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $person_id="PS001";
                                                }else
                                                {
                                                    $person_id="PS".sprintf("%03d",$testid);
                                                }

                            ?>
                                <form class="form-horizontal form-material" action="INSERT_Person.php" name="form_user" method="post">
                                    <script language="javascript">
                                        function IsCharacter(sText, obj) {
                                            var ValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ.abcdefghijklmnopqrstuvwxyz.กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮ. ื.์.่.๋.้.็.า.เ.ๆ.ำ.ะ.ั.ี.๊.ึ.ุ.ู.ิ";
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
                                                        <h4><b><u>กรอกข้อมูลบุคลากร</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row col-md-12">
                                            <div class="col-md-4">
                                                <label class=""><b>รหัสบุคลากร</b></label>
                                                <input type="text" name="person_id" value="<?=$person_id?>" readonly class="form-control form-control-line">
                                            </div>
                                            <div class="col-md-4">
                                                <label class=""><b>ตำแหน่ง</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <select name="position_id" class="form-control">
                                                    <option value="">เลือกตำแหน่ง</option>
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
                                                <label class=""><b>คำนำหน้า</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <select name="prefix" class="form-control" required>
                                                    <option value="">-----</option>
                                                    <option value="นาย">นาย</option>
                                                    <option value="นาง">นาง</option>
                                                    <option value="นางสาว">นางสาว</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class=""><b>ชื่อ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ภาษาไทย & อังกฤษ)</label>
                                                <input type="text" name="firtname" placeholder="" required id="firtname" class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
                                            </div>
                                            <div class="col-md-5">
                                                <label class=""><b>นานสกุล</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ภาษาไทย & อังกฤษ)</label>
                                                <input type="text" name="lastname" placeholder="" required id="lastname" class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
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
                                                <label class=""><b>เลขบัตรประชาชน</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="idcard" required class="form-control form-control-line" maxlength="13" minlength="13" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class=""><b><u>ที่อยู่</u></b></label>
                                            </div>
                                        </div>
                                        <div class="row col-md-12">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class=""><b>บ้านเลชที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <input type="text" name="house_num" required class="form-control form-control-line" onKeyUp="IsNumeric(this.value,this)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row col-md-12">
                                                <div class="col-md-4">
                                                    <label for="province"><b>จังหวัด</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <select name="province_id" id="province" class="form-control" required>
                                                        <option value="">เลือกจังหวัด</option>
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
                                                    <label for="amphure"><b>อำเภอ/เขต</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <select name="amphures_id" id="amphure" class="form-control" required>
                                                        <option value="">เลือกอำเภอ</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="district"><b>ตำบล/แขวง</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <select name="districts_id" id="district" class="form-control" required>
                                                        <option value="">เลือกตำบล</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row col-md-12">
                                                <div class="col-md-4">
                                                    <label class=""><b>Username</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <input type="text" name="username" placeholder="" class="form-control form-control-line" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class=""><b>Psaaword</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ตัวเลข 4-8 ตัวเท่านั้น)</label>
                                                    <input type="text" name="password" class="form-control form-control-line" maxlength="8" minlength="4" onKeyUp="if(this.value*1!=this.value) this.value='' ;" required>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class=""><b>Confirm password</b></label>&nbsp;<label class="text-danger"><b>*</b></label>&nbsp;<label>(ตัวเลข 4-8 ตัวเท่านั้น)</label>
                                                    <input type="text" name="con_password" class="form-control form-control-line" maxlength="8" minlength="4" onKeyUp="if(this.value*1!=this.value) this.value='' ;" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="col-md-6">
                                                    <label class=""><b>สถานะ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                    <select name="status" class="form-control" required>
                                                        <option value="">-----</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="Personal">Personal</option>
                                                    </select>

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


                                </form>
                            </div>
                        </div>
                    </div>
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
    <script src="../js/script.js"></script>
</body>

</html>
