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

include '../../administrator/connect.php';
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
    }
    //echo $sql1;
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

    <!-- google fonts -->
<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
<link href="../css/google_fonts/fonts_prompt.css" rel="stylesheet" />
<!-- end googlefonts --->
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
    <?php include '../menu/menu_admin.php'; ?>
    <div id="main-wrapper">
                                    <?php
                                        include '../../administrator/connect.php';
                                        // $username= $_SESSION['username'];
                                        // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                        // $query = mysqli_query($conn,$sql);
                                        // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        // {
                                        //     $person_id = $row['person_id'];
                                        // }

                                        $doc_id =$_GET['id'];
                                        $sql ="SELECT * FROM tb_lend WHERE doc_id = '".$doc_id."'";
                                        $query = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {
                                            $doc_id = $row['doc_id'];
                                            $str_date = $row['str_date'];
                                            $stp_date = $row['stp_date'];
                                            $project_id = $row['project_id'];
                                            $person_id = $row['person_id'];
                                            $allowance = $row['allowance'];
                                            $allowance_price = $row['allowance_price'];
                                            $rest = $row['rest'];
                                            $rest_price = $row['rest_price'];
                                            $vehicle = $row['vehicle'];
                                            $vehicle_price = $row['vehicle_price'];
                                            $regis = $row['regis'];
                                            $regis_num = $row['regis_num'];
                                            $other = $row['other'];
                                            $other_price = $row['other_price'];
                                        }

                                        $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        $query1 = mysqli_query($conn,$sql1);
                                        while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                        {
                                            $project_name = $row1['project_name'];
                                            $project_id = $row1['project_id'];
                                        }

                                        $sql3 ="SELECT * FROM tb_activity WHERE project_id = '".$project_id."' ";
                                        $query3 = mysqli_query($conn,$sql3);
                                        while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                                        {
                                            $activity = $row3['activity'];
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
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารจ้างเหมาบริการ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารจ้างเหมาบริการ</li>
                        </ol>
                    </div>
                    <div class="col-md-7 align-self-center">
                        <a href="report_contract.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                              <div class="row">
                                  <div class="col-md-12 text-center">
                                      <div class="form-group">
                                          <label><b><u>รายละเอียดเอกสารจ้างเหมาบริการ</u></b></label>
                                      </div>
                                  </div>
                              </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b><u>รหัสเอกสารจ้างเหมาบริการ</u></b></label>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $doc_id;?>
                                            </div>
                                        </div>
                                    </div>

                                            <div class="row">
                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label><b>เริ่มต้นวันที่</b></label><br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $str_date?>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group">
                                                        <label><b>สิ้นสุดวันที่</b></label><br>
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $stp_date?>
                                                    </div>
                                                </div>
                                            </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อบุคลากร</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <label><b>โครงการ</b></label><br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project_name?>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="activity"><b>ชื่อกิจกรรม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $activity?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="activity"><b>ค่าเบี้ยเลี้ยง</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="activity"><b>ราคา</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_price; ?>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="activity"><b>ค่าที่พัก</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="activity"><b>ราคา</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest_price; ?>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="activity"><b>ค่าพาหนะ</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="activity"><b>ราคา</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle_price; ?>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="activity"><b>ค่าลงทะเบียน</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="activity"><b>จำนวน/คน</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_num; ?>
                                          </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="activity"><b>อื่นๆ</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $other; ?>
                                          </div>
                                      </div>
                                      <div class="col-md-2">
                                          <div class="form-group">
                                              <label for="activity"><b>จำนวน/คน</b></label><br>
                                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $other_price; ?>
                                          </div>
                                      </div>
                                    </div>
                          </form>
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
    <script src="../js/script.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {

            var rows = 1;
            $("#createRows").click(function () {


                var tr = "<tr>";
                tr = tr + "<td><div class='row'><div class='col-md-4'><div class='form-group'><input type='text' class='form-control p_input' name='foreword" + rows + "'></div></div></td>";
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
    <!-- listbox 2 ชั้น -->
    <script src="jquery-1.11.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">
            $(document).ready(function() {
                $('#project').change(function() {
                    $.ajax({
                        type: 'POST',
                        data: {project: $(this).val()},
                        url: 'select_activity.php',
                        success: function(data) {
                            $('#activity').html(data);
                        }
                    });
                    return false;
                });
            });
        </script>
</body>

</html>
