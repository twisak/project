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

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="../css/google_fonts/fonts_prompt.css" rel="stylesheet" />
    <!-- end googlefonts --->
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
        <?php
                                        include '../../administrator/connect.php';

                                        $id =$_GET['id'];

                                        $sql_salary ="SELECT * FROM tb_salary WHERE id = '".$id."'";
                                        $query_salary = mysqli_query($conn,$sql_salary);
                                        $result_salary = mysqli_fetch_assoc($query_salary);

                                        $doc_id = $result_salary['doc_id'];
                                        $str_date = $result_salary['str_date'];
                                        $stp_date = $result_salary['stp_date'];
                                        $project_id = $result_salary['project_id'];
                                        $activity_id = $result_salary['activity_id'];
                                        $person_id = $result_salary['person_id'];
                                        $period = $result_salary['period'];
                                        $total_amount = $result_salary['total_amount'];
                                        $perform = $result_salary['perform'];
                                        $month = $result_salary['month'];
                                        $teacher_id = $result_salary['teacher_id'];

                                        $day_work = unserialize( $result_salary["day_work"] );
                                        $start_time = unserialize( $result_salary["start_time"] );
                                        $end_time = unserialize( $result_salary["end_time"] );
                                        $Job = unserialize( $result_salary["Job"] );
                                        $part_time = unserialize( $result_salary["part_time"] );

                                        $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
                                        $query_person = mysqli_query($conn,$sql_person);
                                        $result_person = mysqli_fetch_assoc($query_person);

                                        $prefix = $result_person['prefix'];
                                        $firtname = $result_person['firtname'];
                                        $lastname = $result_person['lastname'];

                                        $sql_teacher = "SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
                                        $query_teacher = mysqli_query($conn,$sql_teacher);
                                        $result_teacher = mysqli_fetch_assoc($query_teacher);

                                        $t_firstname = $result_teacher['t_firstname'];
                                        $t_lastname = $result_teacher['t_lastname'];

                                        $sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        $query_project = mysqli_query($conn,$sql_project);
                                        $result_project = mysqli_fetch_assoc($query_project);

                                        $project_name = $result_project['project_name'];

                                        $sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
                                        $query_activity = mysqli_query($conn,$sql_activity);
                                        $result_activity = mysqli_fetch_assoc($query_activity);

                                        $activity = $result_activity['activity'];



                                    ?>
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
                        <a href="report_lend.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label><b><u>รายละเอียดเอกสารเงินเดือน</u></b></label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b><u>รหัสเอกสารเงินเดือน</u></b></label>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $doc_id;?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>เริ่มต้นวันที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $str_date?>
                                        </div>
                                    </div>

                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>สิ้นสุดวันที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $stp_date?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ชื่อบุคลากร</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ชื่ออาจารย์</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>โครงการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project_name?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="activity"><b>ชื่อกิจกรรม</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $activity?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="activity"><b>งวดละ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $period; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="activity"><b>รวมเงินทั้งสิ้น</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $total_amount; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="activity"><b>ปฏิบัติงานดังกล่าวงวดที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $perform; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="activity"><b>เดือนที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $month; ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-md-4">
                                      <label for="activity"><b>บันทึกรับรองที่ปฎิบัติงานของผู้ควมคุมงาน</b></label><br>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="activity"><b>ผู้ควบคุมปฏิบัติงาน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname; ?>&nbsp;<?php echo $t_lastname; ?>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                  <div class="col-md-2">
                                      <div class="form-group">
                                        <?php
                                                        $day_work1 = array($day_work);

                                                          foreach ($day_work1 as $day_work1){
                                                            $j=0;
                                                            echo "<p><b>วัน/เดือน/ปี</b></p>";
                                                            echo "<ul>";
                                                            foreach ($day_work1 as $day_work1[$j]){
                                                                $value_daywork1 = $day_work1[$j];
                                                                //echo "<tr><td>{$value}</td></tr>";
                                                                echo "<li>{$value_daywork1}</li>";
                                                                $j++;
                                                            }
                                                            echo "</ul>";
                                                        }
                                        ?>
                                      </div>
                                  </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                          <?php
                                                          $start_time1 = array($start_time);

                                                            foreach ($start_time1 as $start_time1){
                                                              $j=0;
                                                              echo "<p><b>เวลาเริ่ม</b></p>";
                                                              echo "<ul>";
                                                              foreach ($start_time1 as $start_time1[$j]){
                                                                  $value_start_time1 = $start_time1[$j];
                                                                  //echo "<tr><td>{$value}</td></tr>";
                                                                  echo "<li>{$value_start_time1}</li>";
                                                                  $j++;
                                                              }
                                                              echo "</ul>";
                                                          }
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                          <?php
                                                          $end_time1 = array($end_time);

                                                            foreach ($end_time1 as $end_time1){
                                                              $j=0;
                                                              echo "<p><b>เวลาสิ้นสุด</b></p>";
                                                              echo "<ul>";
                                                              foreach ($end_time1 as $end_time1[$j]){
                                                                  $value_end_time1 = $end_time1[$j];
                                                                  //echo "<tr><td>{$value}</td></tr>";
                                                                  echo "<li>{$value_end_time1}</li>";
                                                                  $j++;
                                                              }
                                                              echo "</ul>";
                                                          }
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                          <?php
                                                          $Job1 = array($Job);

                                                            foreach ($Job1 as $Job1){
                                                              $j=0;
                                                              echo "<p><b>งานในหน้าที่</b></p>";
                                                              echo "<ul>";
                                                              foreach ($Job1 as $Job1[$j]){
                                                                  $value_Job1 = $Job1[$j];
                                                                  //echo "<tr><td>{$value}</td></tr>";
                                                                  echo "<li>{$value_Job1}</li>";
                                                                  $j++;
                                                              }
                                                              echo "</ul>";
                                                          }
                                          ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                          <?php
                                                          $part_time1 = array($part_time);

                                                            foreach ($part_time1 as $part_time1){
                                                              $j=0;
                                                              echo "<p><b>งานพิเศษ</b></p>";
                                                              echo "<ul>";
                                                              foreach ($part_time1 as $part_time1[$j]){
                                                                  $value_part_time1 = $part_time1[$j];
                                                                  //echo "<tr><td>{$value}</td></tr>";
                                                                  echo "<li>{$value_part_time1}</li>";
                                                                  $j++;
                                                              }
                                                              echo "</ul>";
                                                          }
                                          ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="activity"><b>งานในหน้าที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $Job; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="activity"><b>งานพิเศษ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $part_time; ?>
                                        </div>
                                    </div>
                                </div> -->

                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <!-- <button type="submit" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารสัญญายืม</button> -->
                                            <a href="edit_form_doc_salary.php?id=<?php echo $id; ?>" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารสัญญายืม</a>
                                        </div>
                                    </div>
                                </div>
                                </form>
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
            <script src="../js/script.js"></script>
            <script src="http://code.jquery.com/jquery-latest.js"></script>
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td><div class='row'><div class='col-md-4'><div class='form-group'><input type='text' class='form-control p_input' name='foreword" + rows + "'></div></div></td>";
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
                            url: 'select_activity.php',
                            success: function (data) {
                                $('#activity').html(data);
                            }
                        });
                        return false;
                    });
                });
            </script>
</body>

</html>
