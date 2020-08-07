<?php
include('../../../../../config/connect.php');
include('../../../../../config/constant.php');

$doc_id = $_GET['doc_id'];
$sql_record1 = "SELECT * FROM tb_note_record1 WHERE doc_id = '".$doc_id."' ";
$query_record1 = mysqli_query($conn,$sql_record1);
$result_record1 = mysqli_fetch_assoc($query_record1);


$doc_id = $result_record1['doc_id'];
$person_id = $result_record1['person_id'];
$project_id = $result_record1['project_id'];
$activity_id = $result_record1['activity_id'];
$government = $result_record1['government'];
$at = $result_record1['at'];
$date_current = $result_record1['date_current'];
$title_id = $result_record1['title_id'];
$budget_id = $result_record1['budget_id'];
$budget_year = $result_record1['budget_year'];
$num_person = $result_record1['num_person'];
$num_period = $result_record1['num_period'];
$price_period = $result_record1['price_period'];
$supplies_id = $result_record1['supplies_id'];
$control_id = $result_record1['control_id'];


$sql_title = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
$query_title = mysqli_query($conn,$sql_title);
$result_title = mysqli_fetch_assoc($query_title);

$title_id = $result_title['title_id'];
$title = $result_title['title'];
$body = $result_title['body'];


$sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
$query_person = mysqli_query($conn,$sql_person);
$result_person = mysqli_fetch_assoc($query_person);
$prefix = $result_person['prefix'];
$firtname = $result_person['firtname'];
$lastname = $result_person['lastname'];

$sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
$query_project = mysqli_query($conn,$sql_project);
$result_project = mysqli_fetch_assoc($query_project);

$project_name = $result_project['project_name'];
$project_id = $result_project['project_id'];

$sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
$query_activity = mysqli_query($conn,$sql_activity);
$result_activity = mysqli_fetch_assoc($query_activity);

$activity_id = $result_activity['activity_id'];
$activity = $result_activity['activity'];

$sql_budget = "SELECT * FROM tb_budget WHERE budget_id = '".$budget_id."' ";
$query_budget = mysqli_query($conn,$sql_budget);
$result_budget = mysqli_fetch_assoc($query_budget);

$budget_id = $result_budget['budget_id'];
$budget = $result_budget['budget'];


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
<?php include '../../../../include_title.php'; ?>
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
    <div id="main-wrapper">
       <?php include '../../../../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
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
                                <form class="form-horizontal form-material" action="../record1/edit_action.php" method="post">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>แก้ไขเอกสารอนุมัติดำเนินการจ้างเหมา</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสาร</b></label>
                                                <input type="text" name="doc_id" value="<?php echo $doc_id; ?>" readonly class="form-control form-control-line">

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อบุคลากร</b></label>
                                                <select name="person_id" class="form-control">
                                                    <option value="<?php echo $person_id?>"><?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_person";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['person_id']?>"><?=$result['prefix']?><?=$result['firtname']?>&nbsp;&nbsp;<?=$result['lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อโครงการ</b></label>
                                                <select class="form-control" name="project_id" value="<?php echo $result_record1['project_id']; ?>">

                                  <?php
                                  $sql_check_project = "SELECT * FROM tb_project";
                                  $query_check_project = mysqli_query($conn,$sql_check_project);

                                  $project_id1 = $result_record1['project_id'];
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

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อกิจกรรม</b></label>
                                                <select class="form-control" name="activity_id" value="<?php echo $result_record1['activity_id']; ?>">

                                  <?php
                                  $sql_check_activity = "SELECT * FROM tb_activity";
                                  $query_check_activity = mysqli_query($conn,$sql_check_activity);

                                  $activity_id1 = $result_record1['activity_id'];
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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ส่วนราชการ</b></label>
                                                <input type="text" class="form-control form-control-line" name="government" value="<?php echo $government; ?>" >
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ที่</b></label>
                                                <input type="text" name="at" value="<?php echo $at; ?>" readonly class="form-control form-control-line">
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
                                                <label><b>เรื่อง</b></label>
                                                <select class="form-control" name="title_id" value="<?php echo $result_title['title_id']; ?>">

                                  <?php
                                  $sql_check_title = "SELECT * FROM tb_title";
                                  $query_check_title = mysqli_query($conn,$sql_check_title);

                                  $title_id1 = $result_title['title_id'];
                                  while($result_check_title = mysqli_fetch_array($query_check_title))
                                  {
                                  if($title_id1 == $result_check_title["title_id"])
                                  {
                                  $selected_check_title = "selected";

                                  }
                                  else
                                  {
                                  $selected_check_title = "";
                                  }
                                  ?>
                                  <option value="<?php echo $result_check_title["title_id"];?>"<?php echo $selected_check_title;?>><?php echo $result_check_title["title"]; ?></option>
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
                                                <label><b>ใช้งบประมาณ</b></label>
                                                <select class="form-control" name="budget_id" value="<?php echo $result_budget['budget_id']; ?>">

                                  <?php
                                  $sql_check_budget = "SELECT * FROM tb_budget";
                                  $query_check_budget = mysqli_query($conn,$sql_check_budget);

                                  $budget_id1 = $result_budget['budget_id'];
                                  while($result_check_budget = mysqli_fetch_array($query_check_budget))
                                  {
                                  if($budget_id1 == $result_check_budget["budget_id"])
                                  {
                                  $selected_check_budget = "selected";

                                  }
                                  else
                                  {
                                  $selected_check_budget = "";
                                  }
                                  ?>
                                  <option value="<?php echo $result_check_budget["budget_id"];?>"<?php echo $selected_check_budget;?>><?php echo $result_check_budget["budget"]; ?></option>
                                  <?php
                                  }
                                  ?>
                                  </select>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ปีงบประมาณ</b></label>
                                                <select class="form-control" name="budget_year" id="budget_year" >
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
                                                <label><b>จำวนน/คน</b></label>
                                                <input type="text" class="form-control form-control-line" name="num_person" value="<?php echo $num_person; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ระยะเวลาปฏิบัติงานกี่งวด</b></label>
                                                <input type="text" class="form-control form-control-line" name="num_period" value="<?php echo $num_period; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>งวดล่ะกี่บาท</b></label>
                                                <input type="text" class="form-control form-control-line" name="price_period" value="<?php echo $price_period; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ผู้ตรวจรับพัสดุ</b></label>

                                                <select class="form-control" name="supplies_id" value="<?php echo $result_record1['supplies_id']; ?>">

                                  <?php
                                  $sql_check_teacher = "SELECT * FROM tb_teacher";
                                  $query_check_teacher = mysqli_query($conn,$sql_check_teacher);

                                  $teacher_id1 = $result_record1['supplies_id'];
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ผู้ควบคุมการปฏิบัติงาน</b></label>

                                                <select class="form-control" name="control_id" value="<?php echo $result_record1['control_id']; ?>">

                                  <?php
                                  $sql_check_teacher = "SELECT * FROM tb_teacher";
                                  $query_check_teacher = mysqli_query($conn,$sql_check_teacher);

                                  $teacher_id1 = $result_record1['control_id'];
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
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <footer class="footer">
                © 2018 Adminwrap by wrappixel.com
            </footer>
        </div>
    </div>
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
                url: '../../../select_activity.php',
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
                url: '../../../select_budget.php',
                success: function (data) {
                    $('#budget').html(data);
                }
            });
            return false;
        });
    });
</script>
