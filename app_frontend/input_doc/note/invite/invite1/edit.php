<?php 

include('../../../../../config/connect.php');
include('../../../../../config/constant.php');

    $username= $_SESSION['username'];

    $idd = $_GET['id'];
    $sql_book1 = "SELECT * FROM tb_note_book1 WHERE id = '".$idd."' ";
    $query_book1 = mysqli_query($conn,$sql_book1);
    $result_book1 = mysqli_fetch_assoc($query_book1);

    $doc_id = $result_book1['doc_id'];
    $title_id = $result_book1['title_id'];
    $at = $result_book1['at'];
    $mug = $result_book1['mug'];


    // $send_with = $result_book1['send_with'];
    // $number = $result_book1['number'];
    $send_with = unserialize( $result_book1["send_with"] );
    $number = unserialize( $result_book1["number"] );


    $project_id = $result_book1['project_id'];
    $activity_id = $result_book1['activity_id'];
    $no = $result_book1['no'];
    $heading = $result_book1['heading'];
    $str_date = $result_book1['str_date'];
    $stp_date = $result_book1['stp_date'];
    $location = $result_book1['location'];
    $invite = $result_book1['invite'];
    $teacher_under = $result_book1['teacher_under'];
    $date_current = $result_book1['date_current'];
    $person_id = $result_book1['person_id'];

    $sql_title = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
    $query_title = mysqli_query($conn,$sql_title);
    $result_title = mysqli_fetch_assoc($query_title);

    $title_id = $result_title['title_id'];
    $title = $result_title['title'];
    $body = $result_title['body'];


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

    $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
    $query_person = mysqli_query($conn,$sql_person);
    $result_person = mysqli_fetch_assoc($query_person);
    $prefix = $result_person['prefix'];
    $firtname = $result_person['firtname'];
    $lastname = $result_person['lastname'];


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
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
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
    <?php include '../../../../menu/menu_admin.php'; ?>
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
                        <h3 class="text-themecolor">เอกสารเรียนเชิญเป็นวิทยากร</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="edit_action.php" method="post">

                                    <input type="hidden" name="idd" value="<?php echo $idd; ?>" />
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>แก้ไขเอกสารเรียนเชิญเป็นวิทยากร</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารเรียนเชิญเป็นวิทยากร</b></label>
                                                <input type="text" name="doc_id" value="<?php echo $doc_id; ?>" readonly class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id; ?>">
                                    <div class="row">
                                        <div class="col-md-5">
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

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ที่</b></label>
                                                <input type="text" name="at" value="<?php echo $at; ?>" readonly class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เรียน</b></label>
                                                <input type="text" class="form-control form-control-line" name="mug" value="<?php echo $mug; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label><b>สิ่งที่ส่งมอบมาด้วย</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable">
                                            <thead>


<?php

$send_with1 = array($send_with);
foreach ($send_with1 as $send_with1){
  $j=0;

  foreach ($send_with1 as $send_with1[$j]){
      $value_send_with1 = $send_with1[$j];
      $j++;
  }

}

$number1 = array($number);

  foreach ($number1 as $number1){
    $j=0;

    foreach ($number1 as $number1[$j]){
        $value_number = $number1[$j];
        $value_send_with1 = $send_with1[$j];

        echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-4'><div class='form-group'><label>สิ่งที่ส่งมอบมาด้วย</label><input type='text' class='form-control p_input' value='$value_send_with1'  name='send_with[]'></div></div><div class='col-md-2'><div class='form-group'><label>จำนวนเงิน/ฉบับ</label></label><input type='number' class='form-control p_input' value='$value_number'  name='number[]'></div></div></div></td></tr>";
        //echo "<li>{$value}</li>";
        $j++;
    }

  }

?>




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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ชื่อโครงการ</b></label>
                                                <select class="form-control" name="project_id" value="<?php echo $result_book1['project_id']; ?>">

                                  <?php
                                  $sql_check_project = "SELECT * FROM tb_project";
                                  $query_check_project = mysqli_query($conn,$sql_check_project);

                                  $project_id1 = $result_book1['project_id'];
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
                                                <select class="form-control" name="activity_id" value="<?php echo $result_book1['activity_id']; ?>">

                                  <?php
                                  $sql_check_activity = "SELECT * FROM tb_activity";
                                  $query_check_activity = mysqli_query($conn,$sql_check_activity);

                                  $activity_id1 = $result_book1['activity_id'];
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
                                                <label><b>ครั้งที่</b></label>
                                                <input type="text" class="form-control form-control-line" name="no" value="<?php echo $no; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>หัวเรื่อง</b></label>
                                                <input type="text" class="form-control form-control-line" name="heading" value="<?php echo $heading; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ระหว่างวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="str_date" value="<?php echo $str_date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ถึง วันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="stp_date" value="<?php echo $stp_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ณ สถานที่</b></label>
                                                <input type="text" class="form-control form-control-line" name="location" value="<?php echo $location; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>เรียนเชิญบุคลากร</b></label>
                                                <input type="text" class="form-control form-control-line" name="invite" value="<?php echo $invite; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ครูในสังกัด</b></label>
                                                <input type="text" class="form-control form-control-line" name="teacher_under" value="<?php echo $teacher_under; ?>">
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
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstr<?php echo ROOT_PROJECT_FRONTEND; ?>/js/popper.min.js"></script>
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstr<?php echo ROOT_PROJECT_FRONTEND; ?>/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/custom.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>

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
                url: '../../select_activity.php',
                success: function (data) {
                    $('#activity').html(data);
                }
            });
            return false;
        });
    });
</script>
