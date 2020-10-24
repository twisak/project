<?php
include('../../../config/connect.php');
include('../../../config/constant.php');

    $username= $_SESSION['username'];

    $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
    $query = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
    {
        $person_id = $row['person_id'];
    }

    $sql1 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
    $query1 = mysqli_query($conn,$sql1);
    while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
    {
        $prefix = $row1['prefix'];
        $firtname = $row1['firtname'];
        $lastname = $row1['lastname'];
        $person_id = $row1['person_id'];
        // $prefix = $row1['prefix'];
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/images/favicon.png">
<?php include '../../include_title.php'; ?>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/google_fonts/fonts_prompt.css" rel="stylesheet" />
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
    <?php include '../../menu/menu_admin.php'; ?>
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารล้างหนี้</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารล้างหนี้</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="../debt/add_action.php" name="insert_debt" method="post">

                                    <?php
                                        $sql = "Select Max(substr(doc_id,3)+1) as MaxID from tb_debt ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="D001";
                                                }else
                                                {
                                                    $id="D".sprintf("%03d",$testid);
                                                }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>แบบฟอร์มเอกสารล้างหนี้</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารล้างหนี้</b></label>
                                                <input type="text" value="<?=$id?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="doc_id" value="<?=$id?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ชื่อส่วนราชการผู้จัดฝึกอบรม</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="name_train">
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
                                                <label><b>ชื่อบุคลากร</b></label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" readonly class="form-control form-control-line">
                                                <input type="hidden" class="form-control" required name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>


                                        <?php
                                            $sql_teacher = "select * from tb_teacher";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่ออาจารย์</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="teacher_id" required>
                                                    <option value="">-- เลือกรายชื่อ --</option>
                                                    <?php
                                                        while($result_teacher=mysqli_fetch_array($query_teacher))
                                                        {
                                                        ?>
                                                    <option value='<?php echo $result_teacher['teacher_id'];?>'><?php echo $result_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $result_teacher['t_lastname'];?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>โครงการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="project_id" id="project" required class="form-control">
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="activity"><b>ชื่อกิจกรรม</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="activity_id" id="activity" required class="form-control">
                                                    <option value="">ชื่อกิจกรรม</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ได้รับเงินจาก</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="money_from">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>รายการได้รับเงิน</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows" required value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows" value="Clear">ลบทั้งหมด</button>
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
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <!-- <div class="form-group">
                                                <label><b>สัญญาเงินยืมเลขที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="lend_num">
                                            </div> -->
                                            <div class="form-group">
                                                <label><b>สัญญาเงินยืมเลขที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="lend_num" class="form-control" required>
                                                    <option value="">เลือก</option>
                                                    <?php
                                                    $sql = "SELECT * FROM tb_lend WHERE person_id = '".$person_id."' ";
                                                    $query = mysqli_query($conn, $sql);
                                                    while($result = mysqli_fetch_assoc($query)):
                                                ?>
                                                    <option value="<?=$result['doc_id']?>"><?=$result['doc_id']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ตามคำสั่ง/บันทึกที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="note_that">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ลงวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" required name="date_note">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>สังกัด</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="under">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><b>พร้อมด้วย</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="along_with">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label><b>ไปปฏิบัติราชการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="go_practice">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ออกเดินทางจาก</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="depart_from" >
                                                    <option value="">-- เลือก --</option>
                                                    <option>บ้านพัก</option>
                                                    <option>สำนักงาน</option>
                                                    <option>ประเทศไทย</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ตั้งแต่วันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line"  name="date_depart">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label><b>เวลา</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="time" class="form-control form-control-line"  name="time_depart">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กลับถึง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="back" >
                                                    <option value="">-- เลือก --</option>
                                                    <option>บ้านพัก</option>
                                                    <option>สำนักงาน</option>
                                                    <option>ประเทศไทย</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ถึงวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line"  name="date_back">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label><b>เวลา</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="time" class="form-control form-control-line"  name="time_back">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เบิกค่าใช้จ่ายสำหรับ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="open_money" >
                                                    <option value="">-- เลือก --</option>
                                                    <option>ข้าพเจ้า</option>
                                                    <option>คณะเดินทาง</option>
                                                </select>
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
                                        <!-- <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ค่าเบี้ยเลี้ยง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="allowance">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จำนวน/วัน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="allowance_day" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันละ/บาท</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="allowance_price" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมเป็น</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="allowance_sum"onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div> -->
                                    </div>

                                    <!-- <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ค่าที่พัก</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="rest">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จำนวน/วัน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="rest_day" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมเป็น</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="rest_sum" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ค่าพาหนะ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="vehicle">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมเป็น</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="vehicle_sum" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div> -->

                                    <!-- <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ค่าใช้จ่ายอื่นๆ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="other">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมเป็น</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="other_sum" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>หลักฐานการจ่าย/ฉบับ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" required name="document_num">
                                            </div>
                                        </div>

                                    </div>



                                    <div class="row">

                                      <?php
                                          $sql_teacher = "select * from tb_teacher";
                                          $query_teacher = mysqli_query($conn,$sql_teacher);
                                          ?>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label><b>ผู้อนุมัติให้จ่าย</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                              <select class="form-control" name="approve" required>
                                                  <option value="">-- เลือกรายชื่อ --</option>
                                                  <?php
                                                      while($result_teacher=mysqli_fetch_array($query_teacher))
                                                      {
                                                      ?>
                                                  <option value='<?php echo $result_teacher['teacher_id'];?>'><?php echo $result_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $result_teacher['t_lastname'];?></option>
                                                  <?php
                                                      }
                                                      ?>
                                              </select>
                                            </div>
                                        </div>

                                        <?php
                                            $sql_teacher = "select * from tb_teacher";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            ?>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label><b>ผู้ให้เบิกจ่าย</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                              <select class="form-control" name="disburse" required>
                                                  <option value="">-- เลือกรายชื่อ --</option>
                                                  <?php
                                                      while($result_teacher=mysqli_fetch_array($query_teacher))
                                                      {
                                                      ?>
                                                  <option value='<?php echo $result_teacher['teacher_id'];?>'><?php echo $result_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $result_teacher['t_lastname'];?></option>
                                                  <?php
                                                      }
                                                      ?>
                                              </select>
                                            </div>
                                        </div>

                                        <?php
                                            $sql_teacher = "select * from tb_teacher";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            ?>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                              <label><b>ผู้จ่ายเงิน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                              <select class="form-control" name="payer" required>
                                                  <option value="">-- เลือกรายชื่อ --</option>
                                                  <?php
                                                      while($result_teacher=mysqli_fetch_array($query_teacher))
                                                      {
                                                      ?>
                                                  <option value='<?php echo $result_teacher['teacher_id'];?>'><?php echo $result_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $result_teacher['t_lastname'];?></option>
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
    <!-- ============================================================== -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/jquery/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/js/popper.min.js"></script>
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/perfect-scrollbar.jquery.min.js"></script>
            <!--Wave Effects -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/custom.min.js"></script>
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/script.js"></script>
     <!-- listbox 2 ชั้น -->
     <script src="jquery-1.11.1.min.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#project').change(function () {
                        $.ajax({
                            type: 'POST',
                            data: {
                                project: $(this).val()
                            },
                            url: 'select_activity.php',
                            success: function (data) {
                                $('#activity').html(data);
                            }
                        });
                        return false;
                    });
                });
            </script>
            <!-- listbox 2 ชั้น -->
            <script type="text/javascript">
                    $(document).ready(function () {

                        var rows = 1;
                        $("#createRows").click(function () {


                            var tr = "<tr>";
                            tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-4'><div class='form-group'><label>รายการ</label><input type='text' class='form-control p_input' required name='list[]" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>จำนวนเงิน</label></label><input type='text' class='form-control p_input'  name='money_num[]" + rows + "'></div></div></div></td>";
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
            <!-- listbox 2 ชั้น -->
            <script src="jquery-1.11.1.min.js" type="text/javascript"></script>
                        <script type="text/javascript">
                            $(document).ready(function () {
                                $('#project').change(function () {
                                    $.ajax({
                                        type: 'POST',
                                        data: {
                                            project: $(this).val()
                                        },
                                        url: '../select_activity.php',
                                        success: function (data) {
                                            $('#activity').html(data);
                                        }
                                    });
                                    return false;
                                });
                            });
            </script>
            <!-- listbox 2 ชั้น -->
</body>
</html>
