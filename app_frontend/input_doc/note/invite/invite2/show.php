<?php
include('../../../../../config/connect.php');
include('../../../../../config/constant.php');

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
                        <h3 class="text-themecolor">เอกสารเรียนเชิญเข้าร่วม</h3>
                    </div>

<?php               $doc_id = $_GET['id']; ?>

                    <div class="col-md-7 align-self-center">
                        <a href="../invite2/report.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                            <form class="form-horizontal form-material" action="INSERT_note_invite2.php" method="post">
                            <?php



                                            $sql ="SELECT * FROM tb_note_book2 WHERE doc_id = '".$doc_id."' ";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                               
                                                $doc_id = $row['doc_id'];
                                                $title_id = $row['title_id'];
                                                $at = $row['at'];
                                                $mug = $row['mug'];
                                                $send_with = unserialize( $row["send_with"] );
                                                $number = unserialize( $row["number"] );
                                                $project_id = $row['project_id'];
                                                $activity_id = $row['activity_id'];
                                                $day = $row['day'];
                                                $time_start = $row['time_start'];
                                                $time_end = $row['time_end'];
                                                $location = $row['location'];
                                                $invite_person = $row['invite_person'];
                                                $num = $row['num'];
                                                $date_inside = $row['date_inside'];
                                                $date_current = $row['date_current'];
                                                $person_id = $row['person_id'];
                                            }
                                            // echo $doc_id;
                                            // echo $person_id;

                                            $sql1 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                            $query1 = mysqli_query($conn,$sql1);
                                            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            {
                                                $title = $row1['title'];
                                            }
                                            $sql2 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
                                            $query2 = mysqli_query($conn,$sql2);
                                            while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
                                            {
                                                $prefix = $row2['prefix'];
                                                $firtname = $row2['firtname'];
                                                $lastname = $row2['lastname'];
                                                //$prefix = $row2['prefix'];
                                            }

                                             $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                             $query1 = mysqli_query($conn,$sql1);
                                             while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                             {
                                                 $project_name = $row1['project_name'];
                                                 $project_id = $row1['project_id'];
                                             }

                                             $sql3 ="SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
                                             $query3 = mysqli_query($conn,$sql3);
                                             while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                                             {
                                                 $activity = $row3['activity'];
                                             }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>รายละเอียดเอกสารเรียนเชิญเข้าร่วม</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารเรียนเชิญเข้าร่วม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $doc_id;?>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label><b>เรื่อง</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $title;?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $at;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เรียน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mug;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php
                                                                $send_with1 = array($send_with);

                                                                  foreach ($send_with1 as $send_with1){
                                                                    $j=0;
                                                                    echo "<label><b>สิ่งที่ส่งมอบมาด้วย</b></label>";
                                                                    echo "<ul>";
                                                                    foreach ($send_with1 as $send_with1[$j]){
                                                                        $value = $send_with1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "<li>{$value}</li>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php
                                                                $number1 = array($number);

                                                                  foreach ($number1 as $number1){
                                                                    $j=0;
                                                                    echo "<label><b>จำนวน</b></label>";
                                                                    echo "<ul>";
                                                                    foreach ($number1 as $number1[$j]){
                                                                        $value = $number1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "<li>{$value} ฉบับ</li>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ชื่อโครงการ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project_name;?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ชื่อยุทธศาสตร์</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $activity;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ในวันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $day;?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ตั้งแต่เวลา</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time_start;?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ถึง เวลา</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time_end;?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ณ สถานที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $location;?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>เรียนเชิญบุคลากรที่ปฏิบัติงานสอนรายวิชา</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $invite_person;?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จำนวน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num;?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>เข้าร่วมกิจกรรมภายในวันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_inside;?>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <a href="../invite2/edit.php?id=<?php echo $doc_id;?>" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสาร</a>
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
</body>

</html>
