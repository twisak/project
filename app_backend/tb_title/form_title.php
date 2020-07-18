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
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" integrity="sha512-KbfxGgOkkFXdpDCVkrlTYYNXbF2TwlCecJjq1gK5B+BYwVk7DGbpYi4d4+Vulz9h+1wgzJMWqnyHQ+RDAlp8Dw==" crossorigin="anonymous" />
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
                        <h3 class="text-themecolor">เพิ่มข้อมูลเนื้อเรื่อง</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เพิ่มข้อมูลเนื้อเรื่อง</li>
                        </ol>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>


                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="insert_title.php" name="form_user" method="post">
                                    <?php
                                        include '../../administrator/connect.php';
                                        $sql = "Select Max(substr(title_id,3)+1) as MaxID from tb_title ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="001";
                                                }else
                                                {
                                                    $id="".sprintf("%03d",$testid);
                                                }

                                ?>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <div class="form-group">
                                                        <label>
                                                            <h4><b><u>เพิ่มข้อมูลเนื้อเรื่อง</u></b></h4>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">
                                                <label><b>รหัส</b></label>
                                                <input type="text" name="title_id" value="<?=$id?>" class="form-control form-control-line" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>หัวข้อเรื่อง</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="title" required class="form-control form-control-line">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label><b>เนื้อหา</b></label>
                                                <textarea class="form-control summernote" name="body" rows="5"></textarea>
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
        <!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js) -->

        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
        <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.js" integrity="sha512-kZv5Zq4Cj/9aTpjyYFrt7CmyTUlvBday8NGjD9MxJyOY/f2UfRYluKsFzek26XWQaiAp7SZ0ekE7ooL9IYMM2A==" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function () {
                $('.summernote').summernote({
                    height: 150
                });
            });
        </script>

</body>

</html>