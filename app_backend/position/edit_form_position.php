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
                        <h3 class="text-themecolor">แก้ไขข้อมูลตำแหน่ง</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูลตำแหน่ง</li>
                        </ol>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>


                <div class="row">

                    <?php
                          include '../../administrator/connect.php';
                        $id =$_GET['id'];

                         $sql_position = "SELECT * FROM tb_position WHERE id = '".$id."' ";
                         //echo $sql_budget;
                         $query_position = mysqli_query($conn,$sql_position);
                         $row_position =mysqli_fetch_assoc($query_position);
                         $position_id = $row_position['position_id'];
                         $position_name = $row_position['position_name'];
                  ?>
                    <script language="javascript">
                        function IsCharacter(sText, obj) {
                            var ValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ.abcdefghijklmnopqrstuvwxyz.กขฃคฅฆงจฉชซฌญฎฏฐฑฒณดตถทธนบปผฝพฟภมยรลวศษสหฬอฮ. ื.์.่.๋.้.็.า.เ.ๆ.ำ.ะ.ั.ี.๊.ึ.ุ.ู.";
                            var IsCharacter = true;
                            var Char;
                            for (i = 0; i < sText.length && IsCharacter == true; i++) {
                                Char = sText.charAt(i);
                                if (ValidChars.indexOf(Char) == -1) {
                                    IsCharacter = false;
                                }
                            }
                            if (IsCharacter == false) {
                                alert("(ภาษาไทย & อังกฤษ เท่านั้น)");
                                obj.value = sText.substr(0, sText.length - 1);
                            }
                        }
                    </script>
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="edit_position.php" name="form_user" method="post">

                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>แก้ไขข้อมูลตำแหน่ง</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสตำแหน่ง</b></label>
                                                <input type="text" name="position_id" value="<?php echo $position_id; ?>" class="form-control form-control-line" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ตำแหน่ง</b></label>
                                                <input type="text" name="position_name" value="<?php echo $position_name; ?>" class="form-control form-control-line" onKeyUp="IsCharacter(this.value,this)">
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