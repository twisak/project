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
    <?php include '../menu/menu_admin.php'; ?>
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
                    <div class="col-md-7 align-self-center">
                        <a href="../input_doc/report_cleansing.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
                            <i class="fa-fw fa fa-print"></i>
                            ส่งออกแบบฟอร์ม
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="insert_debt.php" name="insert_debt" method="post">

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รหัสเอกสารล้างหนี้</label>
                                                <input type="text" class="form-control form-control-line" name="doc_id">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ชื่อส่วนราชการผู้จัดฝึกอบรม</label>
                                                <input type="text" class="form-control form-control-line" name="name_train">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

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
                                            $sql_teacher = "select * from tb_teacher";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            ?>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ชื่ออาจารย์</label>
                                                <select class="form-control" name="teacher_id">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ได้รับเงินจาก</label>
                                                <input type="text" class="form-control form-control-line" name="money_from">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <!--
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label>รายการ</label>
                                            <input type="text" class="form-control form-control-line" name="list">
                                                </div>
                                            </div>

                                            <div class="col-md-2">
                                            <div class="form-group">
                                            <label>จำนวนเงิน</label>
                                            <input type="text" class="form-control form-control-line" name="money_num">
                                                </div>
                                            </div> -->
                                        <div class="col-md-7">
                                            <div class="form-group"><button type="button" class="btn btn-info" id="createRows_activity" value="Add">เพิ่มหัวข้อย่อย</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning" id="deleteRows_activity" value="Del">ลบหัวข้อย่อย</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger" id="clearRows_activity" value="Clear">ลบทั้งหมด</button></div>
                                        </div>
                                    </div>
                                    <table width="100%" border="0" id="myTable_activity">

                                        <thead>
                                        </thead>

                                        <tbody></tbody>
                                    </table>


                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>สัญญาเงินยืมเลขที่</label>
                                                <input type="text" class="form-control form-control-line" name="lend_num">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ตามคำสั่ง/บันทึกที่</label>
                                                <input type="text" class="form-control form-control-line" name="note_that">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ลงวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="date_note">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>สังกัด</label>
                                                <input type="text" class="form-control form-control-line" name="under">
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>พร้อมด้วย</label>
                                                <input type="text" class="form-control form-control-line" name="along_with">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>ไปปฏิบัติราชการ </label>
                                                <input type="text" class="form-control form-control-line" name="go_practice">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ออกเดินทางจาก</label>
                                                <select class="form-control" name="depart_from">
                                                    <option value="">-- เลือก --</option>
                                                    <option>บ้านพัก</option>
                                                    <option>สำนักงาน</option>
                                                    <option>ประเทศไทย</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ตั้งแต่วันที่</label>
                                                <input type="date" class="form-control form-control-line" name="date_depart">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>เวลา</label>
                                                <input type="time" class="form-control form-control-line" name="time_depart">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>กลับถึง</label>
                                                <select class="form-control" name="back">
                                                    <option value="">-- เลือก --</option>
                                                    <option>บ้านพัก</option>
                                                    <option>สำนักงาน</option>
                                                    <option>ประเทศไทย</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ถึงวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="date_back">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>เวลา</label>
                                                <input type="time" class="form-control form-control-line" name="time_back">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>เบิกค่าใช้จ่ายสำหรับ</label>
                                                <select class="form-control" name="open_money">
                                                    <option value="">-- เลือก --</option>
                                                    <option>ข้าพเจ้า</option>
                                                    <option>คณะเดินทาง</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ค่าเบี้ยเลี้ยง</label>
                                                <input type="text" class="form-control form-control-line" name="allowance">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>จำนวน/วัน</label>
                                                <input type="text" class="form-control form-control-line" name="allowance_day">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>วันละ/บาท</label>
                                                <input type="text" class="form-control form-control-line" name="allowance_price">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รวมเป็น</label>
                                                <input type="text" class="form-control form-control-line" name="allowance_sum">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ค่าที่พัก</label>
                                                <input type="text" class="form-control form-control-line" name="rest">
                                            </div>
                                        </div>

                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label>จำนวน/วัน</label>
                                                <input type="text" class="form-control form-control-line" name="rest_day">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รวมเป็น</label>
                                                <input type="text" class="form-control form-control-line" name="rest_sum">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ค่าพาหนะ</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รวมเป็น</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle_sum">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ค่าใช้จ่ายอื่นๆ</label>
                                                <input type="text" class="form-control form-control-line" name="other">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รวมเป็น</label>
                                                <input type="text" class="form-control form-control-line" name="other_sum">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>หลักฐานการจ่าย/ฉบับ</label>
                                                <input type="text" class="form-control form-control-line" name="document_num">
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
<script type="text/javascript">
    $(document).ready(function () {

        var rows = 1;
        $("#createRows_activity").click(function () {


            var tr = "<tr>";
            tr = tr + "<td><div class='row'><div class='col-md-4'><div class='form-group'><label>รายการ</label><input type='text' class='form-control p_input'  name='list" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>จำนวนเงิน</label></label><input type='text' class='form-control p_input'  name='money_num" + rows + "'></div></div></div></td>";
            tr = tr + "</tr>";
            $('#myTable_activity > tbody:last').append(tr);

            $('#hdnCount_activity').val(rows);
            rows = rows + 1;
        });

        $("#deleteRows_activity").click(function () {
            if ($("#myTable_activity tr").length != 1) {
                $("#myTable_activity tr:last").remove();
            }
        });

        $("#clearRows_activity").click(function () {
            rows = 1;
            $('#hdnCount_activity').val(rows);
            $('#myTable_activity > tbody:last').empty(); // remove all
        });

    });
</script>