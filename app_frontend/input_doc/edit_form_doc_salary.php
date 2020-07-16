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
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <?php include '../menu/menu_admin.php';

    $id = $_GET['id'];

    $sql_salary = "SELECT * FROM tb_salary WHERE id = '".$id."' ";
    $query_salary = mysqli_query($conn,$sql_salary);
    $result_salary = mysqli_fetch_assoc($query_salary);

    $doc_id = $result_salary['doc_id'];
    $str_date = $result_salary['str_date'];
    $stp_date = $result_salary['stp_date'];
    // $project_id = $result_salary['project_id'];
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

    $prefix = $result_person['$prefix'];
    $firtname = $result_person['firtname'];
    $lastname = $result_person['lastname'];



    ?>
    <div id="main-wrapper">
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
                        <a href="../input_doc/report_salary.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <form class="form-horizontal form-material" action="edit_salary.php" method="post">
                                  <input type="hidden" name="id" value="<?=$id?>" />
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารเงินเดือน</b></label>
                                                <input type="text" value="<?php echo $doc_id; ?>" readonly class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="doc_id" value="<?php echo $doc_id?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label><b>ชื่อบุคลากร</b></label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label><b>โครงการ</b></label>
                                                <select class="form-control" name="project_id" value="<?php echo $result_salary['project_id']; ?>">

                                  <?php
                                  $sql_check_project = "SELECT * FROM tb_project";
                                  $query_check_project = mysqli_query($conn,$sql_check_project);

                                  $project_id1 = $result_salary['project_id'];
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label><b>ชื่อกิจกรรม</b></label>
                                                <select class="form-control" name="activity_id" value="<?php echo $result_salary['activity_id']; ?>">

                                  <?php
                                  $sql_check_activity = "SELECT * FROM tb_activity";
                                  $query_check_activity = mysqli_query($conn,$sql_check_activity);

                                  $activity_id1 = $result_salary['activity_id'];
                                  while($result_check_activity = mysqli_fetch_array($query_check_activity))
                                  {
                                  if($activity_id1 == $result_check_activity["activity_id"])
                                  {
                                  $selected_check_activity = "selected";

                                  }
                                  else
                                  {
                                  $selected_check_activity = "";
                                  }
                                  ?>
                                  <option value="<?php echo $result_check_activity["activity_id"];?>"<?php echo $selected_check_activity;?>><?php echo $result_check_activity["activity"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                               <label><b>เริ่มต้นวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="str_date" value="<?php echo $str_date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                             <label><b>สิ้นสุดวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="stp_date" value="<?php echo $stp_date; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                         <label><b>งวดล่ะ</b></label>
                                                <input type="text" class="form-control form-control-line" name="period" value="<?php echo $period; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                             <label><b>รวมเป็นเงินทั้งสิ้น</b></label>
                                                <input type="text" class="form-control form-control-line" name="total_amount" value="<?php echo $total_amount; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                           <label><b>ปฎิบัติงานดังกล่าวงวดที่</b></label>
                                                <input type="text" class="form-control form-control-line" name="perform" value="<?php echo $perform; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                             <label><b>เดือนที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="month" value="<?php echo $month; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>บันทึกรับรองที่ปฎิบัติงานของผู้ควมคุมงาน</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                             <label><b>ผู้ควบคุมการปฎิบัติงาน</b></label>
                                                <select class="form-control" name="teacher_id" value="<?php echo $result_salary['teacher_id']; ?>">

                                  <?php
                                  $sql_check_teacher = "SELECT * FROM tb_teacher";
                                  $query_check_teacher = mysqli_query($conn,$sql_check_teacher);

                                  $teacher_id1 = $result_salary['teacher_id'];
                                  while($result_check_teacher = mysqli_fetch_array($query_check_teacher))
                                  {
                                  if($teacher_id1 == $result_check_teacher["teacher_id"])
                                  {
                                  $selected_check_teacher = "selected";

                                  }
                                  else
                                  {
                                  $selected_check_teacher = "";
                                  }
                                  ?>
                                  <option value="<?php echo $result_check_teacher["teacher_id"];?>"<?php echo $selected_check_teacher;?>><?php echo $result_check_teacher["t_firstname"]; ?>&nbsp;<?php echo $result_check_teacher["t_lastname"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                  </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-md-2">
                                    <div class="form-group">
                                    <label><b>รายการงานในหน้าที่</b></label>
                                    </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7"><div class="form-group"><button type="button" class="btn btn-info" id="createRows" value="Add">เพิ่มหัวข้อย่อย</button>&nbsp;&nbsp;<button type="button" class="btn btn-warning" id="deleteRows" value="Del">ลบหัวข้อย่อย</button>&nbsp;&nbsp;<button type="button" class="btn btn-danger" id="clearRows" value="Clear">ลบทั้งหมด</button></div></div>
                                    </div>

                                    <table width="100%" border="0" id="myTable">

                                    <thead>


                                      <div class='row'>
                                      <div class='col-md-4'>
                                              <div class='form-group'>
                                       <?php
                                              $start_time1 = array($start_time);
                                              foreach ($start_time1 as $start_time1){
                                                $j=0;

                                                foreach ($start_time1 as $start_time1[$j]){
                                                    $value_start_time1 = $start_time1[$j];
                                                    $j++;
                                                }

                                            }

                                            $end_time1 = array($end_time);
                                            foreach ($end_time1 as $end_time1){
                                              $j=0;

                                              foreach ($end_time1 as $end_time1[$j]){
                                                  $value_end_time1 = $end_time1[$j];
                                                  $j++;
                                              }
                                          }

                                          $Job1 = array($Job);
                                          foreach ($Job1 as $Job1){
                                            $j=0;

                                            foreach ($Job1 as $Job1[$j]){
                                                $value_Job1 = $Job1[$j];
                                                $j++;
                                            }
                                        }

                                        $part_time1 = array($part_time);
                                        foreach ($part_time1 as $part_time1){
                                          $j=0;

                                          foreach ($part_time1 as $part_time1[$j]){
                                              $value_part_time1 = $part_time1[$j];
                                              $j++;
                                          }
                                      }

                                              $day_work1 = array($day_work);

                                                foreach ($day_work1 as $day_work1){
                                                  $j=0;

                                                  foreach ($day_work1 as $day_work1[$j]){
                                                      $value_day_work1 = $day_work1[$j];
                                                      $value_start_time1 = $start_time1[$j];
                                                      $value_end_time1 = $end_time1[$j];
                                                      $value_Job1 = $Job1[$j];
                                                      $value_part_time1 = $part_time[$j];
                                                      echo "<tr><td><div class='row'><div class='col-md-2'><div class='form-group'><label>วัน/เดือน/ปี</label><input type='date' class='form-control p_input' value='$value_day_work1' name='day_work[]'></div></div><div class='col-md-2'><div class='form-group'><label>เริ่มเวลา</label><input type='time' class='form-control p_input' value='$value_start_time1'  name='start_time[]'></div></div><div class='col-md-2'><div class='form-group'><label>เวลาสิ้นสุด</label><input type='time' class='form-control p_input' value='$value_end_time1'  name='end_time[]'></div></div><div class='col-md-6'><div class='form-group'><label>งานในหน้าที่</label><input type='text' class='form-control p_input' value='$value_Job1'  name='Job[]'></div></div><div class='col-md-6'><div class='form-group'><label>งานพิเศษ</label><input type='text' class='form-control p_input' value='$value_part_time1'  name='part_time[]'></div></div></div></td></tr>";
                                                      //echo "<li>{$value}</li>";
                                                      $j++;
                                                  }


                                              }

                                      ?>
                                      </div>
                                          </div>


                                    </thead>

                                    <tbody></tbody>
                                    </table>


                                    <br/>
                                    <center>
                                    <br>
                                    <input type="hidden" id="hdnCount" name="hdnCount">
                                    </center>


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
$(document).ready(function(){

    var rows = 1;
    $("#createRows").click(function(){


        var tr = "<tr>";
tr = tr + "<td><div class='row'><div class='col-md-2'><div class='form-group'><label>วัน/เดือน/ปี</label><input type='date' class='form-control p_input' name='day_work"+rows+"'></div></div><div class='col-md-2'><div class='form-group'><label>เริ่มเวลา</label><input type='time' class='form-control p_input'  name='start_time"+rows+"'></div></div><div class='col-md-2'><div class='form-group'><label>เวลาสิ้นสุด</label><input type='time' class='form-control p_input'  name='end_time"+rows+"'></div></div><div class='col-md-6'><div class='form-group'><label>งานในหน้าที่</label><input type='text' class='form-control p_input'  name='Job"+rows+"'></div></div><div class='col-md-6'><div class='form-group'><label>งานพิเศษ</label><input type='text' class='form-control p_input'  name='part_time"+rows+"'></div></div>                           </div></td>";
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

    $("#clearRows").click(function(){
        rows = 1;
        $('#hdnCount').val(rows);
        $('#myTable > tbody:last').empty(); // remove all
    });

});
</script>
</body>

</html>
