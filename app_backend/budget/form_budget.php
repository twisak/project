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
                        <h3 class="text-themecolor">เพิ่มประเภทงบประมาณ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เพิ่มประเภทงบประมาณ</li>
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
                                        $sql = "Select Max(substr(budget_id,3)+1) as MaxID from tb_budget ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="B001";
                                                }else
                                                {
                                                    $id="B".sprintf("%03d",$testid);
                                                }

                            ?>
                                <form class="form-horizontal form-material" action="insert_budget.php" name="form_user" method="post">

                                     <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h4><b><u>เพิ่มประเภทงบประมาณ</u></b></h4>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสประเภทงบประมาณ</b></label>
                                                <input type="text" name="budget_id" value="<?=$id?>" readonly class="form-control form-control-line">
                                            </div>
                                            <!-- <input type="hidden" class="form-control" name="budget_id" /> -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>โครงการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <select class="form-control col-md-12" required name="project_id">
                                                    <option>เลือกโครงการ</option>
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
                                                <label><b>ประเภทงบประมาณ</b></label>&nbsp;<label class="text-danger"><b>*</b></label>
                                                <input type="text" name="budget" placeholder="" class="form-control form-control-line" required>
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
