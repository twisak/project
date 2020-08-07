<?php
include('../../../../../config/connect.php');
include('../../../../../config/constant.php');

    $username= $_SESSION['username'];

    $doc_id = $_GET['id'];
    $sql_book2 = "SELECT * FROM tb_note_book2 WHERE doc_id = '".$doc_id."' ";
    $query_book2 = mysqli_query($conn,$sql_book2);
    $result_book2 = mysqli_fetch_assoc($query_book2);

    $doc_id = $result_book2['doc_id'];
    $title_id = $result_book2['title_id'];
    $at = $result_book2['at'];
    $mug = $result_book2['mug'];


    $send_with = unserialize( $result_book2["send_with"] );
    $number = unserialize( $result_book2["number"] );


    $project_id = $result_book2['project_id'];
    $activity_id = $result_book2['activity_id'];
    $day = $result_book2['day'];
    $time_start = $result_book2['time_start'];
    $time_end = $result_book2['time_end'];
    $location = $result_book2['location'];
    $invite_person = $result_book2['invite_person'];
    $num = $result_book2['num'];
    $date_inside = $result_book2['date_inside'];
    $date_current = $result_book2['date_current'];
    $person_id = $result_book2['person_id'];

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



    $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
    $query_person = mysqli_query($conn,$sql_person);
    $result_person = mysqli_fetch_assoc($query_person);
    $prefix = $result_person['prefix'];
    $firtname = $result_person['firtname'];
    $lastname = $result_person['lastname'];

    $sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
    $query_activity = mysqli_query($conn,$sql_activity);
    $result_activity = mysqli_fetch_assoc($query_activity);
    $activity_id = $result_activity['activity_id'];
    $activity = $result_activity['activity'];

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
                        <h3 class="text-themecolor">เอกสารเรียนเชิญเข้าร่วม</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <form class="form-horizontal form-material" action="../invite2/edit_action.php" method="post">


                                        <!-- <input type="hidden" name="idd" value="<?php echo $idd; ?>" /> -->
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>แก้ไขเอกสารเรียนเชิญเข้าร่วม</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารเรียนเชิญเข้าร่วม</b></label>
                                                <input type="text" name="doc_id" value="<?php echo $doc_id;?>" readonly class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                              <label><b>เรื่อง</b></label>
                                                <select name="title_id" class="form-control"">
                                                    <option value="<?php echo $title_id; ?>"><?php echo $title; ?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_title";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                            $title_id = $result['title_id'];
                                                            $title = $result['title'];

                                                            $new_title = iconv_substr($title,0,80,'UTF-8'). "...";
                                                    ?>
                                                    <option value="<?php echo $title_id;?>"><?php echo $new_title;?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                             <label><b>ที่</b></label>
                                                <input type="text" value="<?php echo $at;?>" name="at" readonly class="form-control form-control-line">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                               <label><b>เรียน</b></label>
                                                <input type="text" class="form-control form-control-line" name="mug" value="<?php echo $mug;?>">
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
                                                <label><b>โครงการ</b></label>
                                                <select name="project_id" id="project" class="form-control">
                                                    <option value="<?php echo $project_id?>"><?php echo $project_name?></option>
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
                                                <label for="activity"><b>ชื่อกิจกรรม</b></label>
                                                <select name="activity_id" id="activity" class="form-control">
                                                    <option value="<?php echo $activity_id?>"><?php echo $activity?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ในวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="day" value="<?php echo $day; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                               <label><b>ตั้งแต่เวลา</b></label>
                                                <input type="time" class="form-control form-control-line" name="time_start" value="<?php echo $time_start; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                               <label><b>ถึง เวลา</b></label>
                                                <input type="time" class="form-control form-control-line" name="time_end" value="<?php echo $time_end; ?>">
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
                                                <label><b>เรียนเชิญบุคลากรที่ปฏิบัติงานสอนรายวิชา</b></label>
                                                <input type="text" class="form-control form-control-line" name="invite_person" value="<?php echo $invite_person; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                              <label><b>จำนวน</b></label>
                                                <input type="text" class="form-control form-control-line" name="num" value="<?php echo $num; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>เข้าร่วมกิจกรรมภายในวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="date_inside" value="<?php echo $date_inside; ?>">
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-4'><div class='form-group'><label>สิ่งที่ส่งมอบมาด้วย</label><input type='text' class='form-control p_input'  name='send_with[]" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>จำนวนเงิน/ฉบับ</label></label><input type='number' class='form-control p_input'  name='number[]" + rows + "'></div></div></div></td>";
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
</body>

</html>
