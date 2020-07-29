<?php
include('../../config/connect.php');
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
    <?php include '../menu/menu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เพิ่มโครงการ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เพิ่มโครงการ</li>
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

                                        $project_id = $_GET['project_id'];
                                        // echo $project_id;
                                        $sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        $query_project = mysqli_query($conn,$sql_project);
                                        $result_project = mysqli_fetch_array($query_project);
                                        

                            ?>
                                <form class="form-horizontal form-material" action="edit_project.php" name="form_user" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>แก้ไขข้อมูลโครงการ</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสโครงการ</b></label>
                                                <input type="text" name="project_id" value="<?php echo $result_project['project_id'] ?>" readonly class="form-control form-control-line">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อโครงการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="project_name" value="<?php echo $result_project['project_name']; ?>" class="form-control form-control-line">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ปีงบประมาณ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="fiscal_year">
                                                    <?php
                                                        $fiscal_year = $result_project['fiscal_year'];
                                                        echo $fiscal_year;
                                                        $xYear=date('Y'); // เก็บค่าปีปัจจุบันไว้ในตัวแปร
                                                    ?>
                                                    <?php
                                                        for($i=1;$i<=15;$i++){
                                                    ?>

                                                    <option value="<?php echo $fiscal_year+$i; ?>"><?php echo $fiscal_year+$i; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                    <option value="<?php echo $fiscal_year; ?>" selected><?php echo $fiscal_year; ?></option>
                                                    <?php
                                                        for($i=1;$i<=15;$i++){
                                                    ?>
                                                    <option value="<?php echo $fiscal_year-$i; ?>"><?php echo $fiscal_year-$i; ?></option>
                                                    <?php
                                                        }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="row">

                                        <?php
  $sql_budget_type = "select * from tb_budget_type";
  $query_budget_type = mysqli_query($conn,$sql_budget_type);
  ?>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ประเภทงบประมาณ</label>
                                                <select class="form-control" name="budget_id" value="<?php echo $result_project['budget_id']; ?>">

                                                    <?php
$sql_check_budget = "SELECT * FROM tb_budget_type";
$query_check_budget = mysqli_query($conn,$sql_check_budget);

$budget_id = $result_project['budget_id'];
while($result_check_budget = mysqli_fetch_array($query_check_budget))
{
if($budget_id == $result_check_budget["budget_id"])
{
$selected_check_budget = "selected";

}
else
{
$selected_check_budget = "";
}
?>
                                                    <option value="<?php echo $result_check_budget["budget_id"];?>" <?php echo $selected_check_budget;?>><?php echo $result_check_budget["budget_name"]; ?></option>
                                                    <?php
}
?>
                                                </select>
                                            </div>
                                        </div>


                                        <?php
  $sql_product = "select * from tb_product";
  $query_product = mysqli_query($conn,$sql_product);
  ?>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ผลผลิต</label>
                                                <select class="form-control" name="product_id" value="<?php echo $result_project['product_id']; ?>">

                                                    <?php
$sql_check_product = "SELECT * FROM tb_product";
$query_check_product = mysqli_query($conn,$sql_check_product);

$product_id = $result_project['product_id'];
while($result_check_product = mysqli_fetch_array($query_check_product))
{
if($product_id == $result_check_product["product_id"])
{
$selected_check_product = "selected";

}
else
{
$selected_check_product = "";
}
?>
                                                    <option value="<?php echo $result_check_product["product_id"];?>" <?php echo $selected_check_product;?>><?php echo $result_check_product["product_name"]; ?></option>
                                                    <?php
}
?>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
  $sql_mission = "select * from tb_mission";
  $query_mission = mysqli_query($conn,$sql_mission);
  ?>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>พันธกิจ</label>
                                                <select class="form-control" name="mission_id" value="<?php echo $result_project['mission_id']; ?>">

                                                    <?php
$sql_check_mission = "SELECT * FROM tb_mission";
$query_check_mission = mysqli_query($conn,$sql_check_mission);

$mission_id = $result_project['mission_id'];
while($result_check_mission = mysqli_fetch_array($query_check_mission))
{
if($mission_id == $result_check_mission["mission_id"])
{
$selected_check_mission = "selected";

}
else
{
$selected_check_mission = "";
}
?>
                                                    <option value="<?php echo $result_check_mission["mission_id"];?>" <?php echo $selected_check_mission;?>><?php echo $result_check_mission["mission_name"]; ?></option>
                                                    <?php
}
?>
                                                </select>
                                            </div>
                                        </div>

                                        <?php
  $sql_strategic = "select * from tb_strategic";
  $query_strategic = mysqli_query($conn,$sql_strategic);
  ?>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>ยุทธศาสตร์</label>
                                                <select class="form-control" name="strategic_id" value="<?php echo $result_project['strategic_id']; ?>">

                                                    <?php
$sql_check_strategic = "SELECT * FROM tb_strategic";
$query_check_strategic = mysqli_query($conn,$sql_check_strategic);

$strategic_id = $result_project['strategic_id'];
while($result_check_strategic = mysqli_fetch_array($query_check_strategic))
{
if($strategic_id == $result_check_strategic["strategic_id"])
{
$selected_check_strategic = "selected";

}
else
{
$selected_check_strategic = "";
}
?>
                                                    <option value="<?php echo $result_check_strategic["strategic_id"];?>" <?php echo $selected_check_strategic;?>><?php echo $result_check_strategic["strategic_name"]; ?></option>
                                                    <?php
}
?>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>หลักการและเหตุ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="principle" class="form-control form-control-line" value="<?php echo $result_project['principle'] ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>งบประมาณ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="budget" class="form-control form-control-line" value="<?php echo $result_project['budget'] ?>"> 
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
<!-- <script type="text/javascript">
$(document).ready(function(){

    var rows = 1;
    $("#createRows_activity").click(function(){


        var tr = "<tr>";
tr = tr + "<td><div class='row'><div class='col-md-4'><div class='form-group'><label>หัวข้อกิจกรรม</label><input type='text' class='form-control p_input'  name='activity"+rows+"'></div></div></td>";
        tr = tr + "</tr>";
        $('#myTable_activity > tbody:last').append(tr);

        $('#hdnCount_activity').val(rows);
        rows = rows + 1;
    });

    $("#deleteRows_activity").click(function(){
        if ($("#myTable_activity tr").length != 1) {
            $("#myTable_activity tr:last").remove();
        }
    });

    $("#clearRows_activity").click(function(){
        rows = 1;
        $('#hdnCount_activity').val(rows);
        $('#myTable_activity > tbody:last').empty(); // remove all
    });

});
</script> -->