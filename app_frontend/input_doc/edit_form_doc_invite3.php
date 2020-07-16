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

    $idd = $_GET['id'];
    $sql_book3 = "SELECT * FROM tb_note_book3 WHERE id = '".$idd."' ";
    $query_book3 = mysqli_query($conn,$sql_book3);
    $result_book3 = mysqli_fetch_assoc($query_book3);

    $doc_id = $result_book3['doc_id'];
    $title_id = $result_book3['title_id'];
    $at = $result_book3['at'];
    $mug = $result_book3['mug'];

    // $send_with = $result_book1['send_with'];
    // $number = $result_book1['number'];
    $send_with = unserialize( $result_book3["send_with"] );
    $number = unserialize( $result_book3["number"] );

    $project_id = $result_book3['project_id'];
    $date_current = $result_book3['date_current'];
    $person_id = $result_book3['person_id'];

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

    $sql_title = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
    $query_title = mysqli_query($conn,$sql_title);
    $result_title = mysqli_fetch_assoc($query_title);

    $title_id = $result_title['title_id'];
    $title = $result_title['title'];
    $body = $result_title['body'];

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
                        <h3 class="text-themecolor">เอกสารมอบหนังสือ</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="edit_invite3.php" method="post">
<input type="hidden" name="idd" value="<?php echo $idd; ?>" />
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารมอบหนังสือ</b></label>
                                                <input type="text" name="doc_id" value="<?php echo $doc_id; ?>" readonly class="form-control form-control-line">

                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
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
                                            <label><b>สิ่งที่ส่งแนบมาด้วย</b></label>
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
                                                <select class="form-control" name="project_id" value="<?php echo $result_book3['project_id']; ?>">

                                  <?php
                                  $sql_check_project = "SELECT * FROM tb_project";
                                  $query_check_project = mysqli_query($conn,$sql_check_project);

                                  $project_id1 = $result_book3['project_id'];
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-4'><div class='form-group'><label>สิ่งที่ส่งแนบมาด้วย</label><input type='text' class='form-control p_input'  name='send_with[]" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>จำนวนเงิน/เล่ม</label></label><input type='number' class='form-control p_input'  name='number[]" + rows + "'></div></div></div></td>";
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
</body>

</html>
