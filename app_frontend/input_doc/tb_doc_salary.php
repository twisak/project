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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
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
                        <h3 class="text-themecolor">ตารางเอกสารเงินเดือน</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ตารางเอกสารเงินเดือน</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down"> Upgrade to Pro</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ตารางเอกสารเงินเดือน</h4>
                                <!-- <h6 class="card-subtitle">Add class <code>.table</code></h6> -->


<!--
                                <div class="container">
                                <div class="row">
                                    <div class="col-md-1 offset-md-10">ssss</div>
                                </div>
                                </div> -->



                                <div class="text-right">
                                <a href="input_doc_salary.php">
                                    <button type="button" class="btn btn-primary">กรอกเอกสารเพิ่ม</button>
                                </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead >
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">รหัสเอกสาร</th>
                                                <th class="text-center">ชื่อ-สกุล</th>
                                                <th class="text-center">โครงการ</th>
                                                <th class="text-center">รายละเอียดเอกสาร</th>
                                                <th class="text-center">ลบ</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../../administrator/connect.php';
                                            // $username= $_SESSION['username'];
                                            // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                            // $query = mysqli_query($conn,$sql);
                                            // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            // {
                                            //     $person_id = $row['person_id'];
                                            // }
                                            $i=1;
                                            $i<="";

                                            $sql ="SELECT * FROM tb_salary GROUP BY doc_id";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                                $id = $row['id'];
                                                $doc_id = $row['doc_id'];
                                                $str_date = $row['str_date'];
                                                $stp_date = $row['stp_date'];
                                                $project_id = $row['project_id'];
                                                $person_id = $row['person_id'];

                                            //echo $project_id;
                                            //echo $person_id;

                                            $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                            $query1 = mysqli_query($conn,$sql1);
                                            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            {
                                                $project_name = $row1['project_name'];
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
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $doc_id;?></td>
                                                <td><?php echo $prefix;?><?php echo $firtname;?><?php echo $lastname;?></td>
                                                <td><?php echo $project_name;?></td>
                                                <td>
                                                <a href="show_doc_salary.php?id=<?php echo $id;?>"><button type="button" class="btn btn-info">รายละเอียด</button></a>
                                                </td>
                                                <td><button type="button" class="btn btn-danger">ลบ</button></td>
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
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
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>
