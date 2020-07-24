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
        <?php include '../mamu/manu_admin.php'; ?>
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
                        <h3 class="text-themecolor">แก้ไขข้อมูลผลผลิต</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">แก้ไขข้อมูลผลผลิต</li>
                        </ol>
                    </div>
                </div>

                <script src="http://code.jquery.com/jquery-latest.js"></script>


                <div class="row">

                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="edit_product.php" name="form_user" method="post">
                                    <?php
                                            include '../../administrator/connect.php';
                                            $product_id =$_GET['product_id'];
                                            $sql_product ="SELECT * FROM tb_product WHERE product_id = '".$product_id."'";
                                            $query_product = mysqli_query($conn,$sql_product);
                                            while($row_product = mysqli_fetch_array($query_product,MYSQLI_ASSOC))
                                            {
                                                $id = $row_product['id'];
                                                $product_id = $row_product['product_id'];
                                                $product = $row_product['product'];
                                                $budget_id = $row_product['budget_id'];
                                                $project_id = $row_product['project_id'];
                                            }
                                           $sql_budget = "SELECT * FROM tb_budget WHERE budget_id = '".$budget_id."' ";
                                           //echo $sql_budget;
                                           $query_budget = mysqli_query($conn,$sql_budget);
                                           $row_budget =mysqli_fetch_assoc($query_budget);
                                           $budget = $row_budget['budget'];
                                           $budget_id = $row_budget['budget_id'];

                                            $sql = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                            $query = mysqli_query($conn,$sql);
                                            $result = mysqli_fetch_array($query);

                                            $project_name = $result['project_name'];
                                            $project_id = $result['project_id'];
                                    ?>
                                    <div class="form-group">    
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>แก้ไขข้อมูลผลผลิต</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                      <?php
                                          $sql_budget = "SELECT * FROM tb_budget";
                                          $query_budget = mysqli_query($conn,$sql_budget);
                                      ?>
                                        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อกิจกรรมโครงการ</b></label><br>
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
                                      <div class="col-md-3">
                                          <div class="form-group">
                                              <label><b>ประเภทงบประมาณ</b></label>
                                              <select class="form-control" name="budget_id">
                                                  <option value="<?php echo $budget_id; ?>"><?php echo $budget; ?></option>
                                                  <?php
                                                      while($result_budget=mysqli_fetch_array($query_budget))
                                                      {
                                                      ?>
                                                  <option value='<?php echo $result_budget['budget_id'];?>'><?php echo $result_budget['budget'];?></option>
                                                  <?php
                                                      }
                                                      ?>
                                              </select>
                                          </div>
                                      </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ผลผลิต</b></label>
                                                <input type="text" name="product" value="<?php echo $product;?>" class="form-control form-control-line">
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