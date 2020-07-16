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

include '../../administrator/connect.php';
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
                        <h3 class="text-themecolor">เอกสารบันทึกข้อความ/อนุมัติดำเนินการจ้างเหมา</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="INSERT_note_record1.php" method="post">
                                    <?php
                                            $sql = "Select Max(substr(doc_id,3)+1) as MaxID from tb_note_record1 ";
                                            $query = mysqli_query($conn,$sql);
                                            $table_id = mysqli_fetch_assoc($query);
                                            $testid = $table_id['MaxID'];
                                                    if($testid=='')
                                                    {
                                                        $id="NR1001";
                                                    }else
                                                    {
                                                        $id="NR".sprintf("%03d",$testid);
                                                    }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสาร</b></label>
                                                <input type="text" value="<?=$id?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="doc_id" value="<?=$id?>" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label><b>ชื่อบุคลากร</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label><b>ชื่อโครงการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                              <label><b>ชื่อกิจกรรม</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="activity_id" id="activity" class="form-control">
                                                    <option value="">ชื่อกิจกรรม</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label><b>ส่วนราชการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="government">
                                            </div>
                                        </div>
                                        <?php
                                            $sql = "Select Max(substr(at,7)+1) as MaxID from tb_note_record1 ";
                                            $query = mysqli_query($conn,$sql);
                                            $table_id = mysqli_fetch_assoc($query);
                                            $testid = $table_id['MaxID'];
                                                    if($testid=='')
                                                    {
                                                        $idd="อว.000001";
                                                    }else
                                                    {
                                                        $idd="อว.".sprintf("%06d",$testid);
                                                    }
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                               <label><b>ที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" value="<?=$idd?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="at" value="<?=$idd?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="date_current">
                                            </div>
                                        </div> -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                              <label><b>เรื่อง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="title_id" class="form-control">
                                                    <option value="">เลือกชื่อเรื่อง</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_title";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['title_id']?>"><?=$result['title']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ใช้งบประมาณ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="budget_id" id="budget" class="form-control">
                                                    <option value="">เลือกงบประมาณ</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                               <label><b>ปีงบประมาณ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="budget_year" id="budget_year">
                                                    <?php
                                                        $xYear=date('Y'); // เก็บค่าปีปัจจุบันไว้ในตัวแปร
                                                                echo '<option value="'.$xYear.'">'.$xYear.'</option>'; // ปีปัจจุบัน
                                                        for($i=1;$i<=30;$i++){
                                                        echo '<option value="'.($xYear-$i).'">'.($xYear-$i).'</option>';
                                                            }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                              <label><b>จำวนน/คน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="num_person">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label><b>ระยะเวลาปฏิบัติงานกี่งวด</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="num_period">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                               <label><b>งวดล่ะกี่บาท</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="price_period">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label><b>ผู้ตรวจรับพัสดุ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="supplies_id">
                                                    <option value="">-- เลือกรายชื่อ --</option>
                                                    <?php
                                                        $sql_teacher = "select * from tb_teacher";
                                                        $query_teacher = mysqli_query($conn,$sql_teacher);
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                             <label><b>ผู้ควบคุมการปฏิบัติงาน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select class="form-control" name="control_id">
                                                    <option value="">-- เลือกรายชื่อ --</option>
                                                    <?php
                                                        $sql_teacher = "select * from tb_teacher";
                                                        $query_teacher = mysqli_query($conn,$sql_teacher);
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
                                                <input type="submit" name="submit" value="บันทึก" class="btn btn-primary btn-block" />
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
<script type="text/javascript">
    $(document).ready(function () {
        $('#project').change(function () {
            $.ajax({
                type: 'POST',
                data: {
                    project: $(this).val()
                },
                url: 'select_budget.php',
                success: function (data) {
                    $('#budget').html(data);
                }
            });
            return false;
        });
    });
</script>
