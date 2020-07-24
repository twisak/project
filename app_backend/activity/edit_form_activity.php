<?php include('../../config/connect.php');
        include('../../config/constant.php');
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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_BACKEND;?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/colors/default.css" id="theme" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_BACKEND;?>/css/google_fonts/fonts_prompt.css" rel="stylesheet" />
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
        <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">แก้ไขข้อมูลกิจกรรม</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูลกิจกรรม</li>
                        </ol>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>


                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <?php
                                        include '../../administrator/connect.php';


                                        $activity_id = $_GET['activity_id'];
                                        // echo $activity_id;
                                        $sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
                                        $query_activity = mysqli_query($conn,$sql_activity);
                                        $result_activity = mysqli_fetch_array($query_activity);

                                        $activity_id = $result_activity['activity_id'];
                                        $activity = $result_activity['activity'];
                                        $project_id = $result_activity['project_id'];

                                        $sql = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        $query = mysqli_query($conn,$sql);
                                        $result = mysqli_fetch_array($query);

                                        $project_name = $result['project_name'];
                                        $project_id = $result['project_id'];


                                ?>
                                <form class="form-horizontal form-material" action="edit_activity.php" name="form_user" method="post">

                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <label>
                                                            <h4><b><u>แก้ไขข้อมูลกิจกรรม</u></b></h4>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสกิจกรรม</b></label>
                                                <input type="text" name="activity_id" value="<?php echo $activity_id; ?>" class="form-control form-control-line" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อโครงการ</b></>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <select class="form-control" required name="project_id">
                                                    <option value="<?php echo $project_id; ?>" ><?php echo $project_name; ?></option>
                                                    <?php
                                                        $sql ="SELECT * FROM tb_project ";
                                                        $query = mysqli_query($conn,$sql);
                                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                                        {
                                                            $project_id = $row['project_id'];
                                                            $project_name = $row['project_name'];

                                                    ?>
                                                    <option value="<?php echo $project_id;?>"><?php echo $project_name;?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อกิจกรรม</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="activity" value="<?php echo $activity; ?>" class="form-control form-control-line">
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
        <script src="<?php echo ROOT_PROJECT_BACKEND;?>/assets/node_modules/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/js/custom.min.js"></script>
    <script src="<?php echo ROOT_PROJECT_BACKEND;?>/js/script.js"></script>

</body>

</html>