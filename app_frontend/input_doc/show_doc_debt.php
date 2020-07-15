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

                                        $id =$_GET['id'];

                                        $sql_debt = "SELECT * FROM tb_debt WHERE id = '".$id."' ";
                                        $query_debt = mysqli_query($conn,$sql_debt);
                                        $result_debt = mysqli_fetch_assoc($query_debt);

                                        $id = $result_debt['id'];
                                        $doc_id = $result_debt['doc_id'];
                                        $name_train = $result_debt['name_train'];
                                        $project_id = $result_debt['project_id'];
                                        $activity_id = $result_debt['activity_id'];
                                        $person_id = $result_debt['person_id'];
                                        $teacher_id = $result_debt['teacher_id'];
                                        $money_from = $result_debt['money_from'];
                                        $money_from_id = $result_debt['money_from_id'];
                                        $lend_num = $result_debt['lend_num'];
                                        $note_that = $result_debt['note_that'];
                                        $date_note = $result_debt['date_note'];
                                        $under = $result_debt['under'];
                                        $along_with = $result_debt['along_with'];
                                        $go_practice = $result_debt['go_practice'];
                                        $depart_from = $result_debt['depart_from'];
                                        $date_depart = $result_debt['date_depart'];
                                        $time_depart = $result_debt['time_depart'];
                                        $back = $result_debt['back'];
                                        $date_back = $result_debt['date_back'];
                                        $time_back = $result_debt['time_back'];
                                        $open_money	= $result_debt['open_money'];
                                        $allowance = $result_debt['allowance'];
                                        $allowance_day = $result_debt['allowance_day'];
                                        $allowance_price = $result_debt['allowance_price'];
                                        $allowance_sum = $result_debt['allowance_sum'];
                                        $rest = $result_debt['rest'];
                                        $rest_day = $result_debt['rest_day'];
                                        $rest_sum = $result_debt['rest_sum'];
                                        $vehicle = $result_debt['vehicle'];
                                        $vehicle_sum = $result_debt['vehicle_sum'];
                                        $other = $result_debt['other'];
                                        $other_sum = $result_debt['other_sum'];
                                        $document_num = $result_debt['document_num'];

                                        $list = unserialize( $result_debt["list"] );
                                        $money_num = unserialize( $result_debt["money_num"] );

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

                                        $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
                                        $query_person = mysqli_query($conn,$sql_person);
                                        $result_person = mysqli_fetch_assoc($query_person);
                                        $prefix = $result_person['prefix'];
                                        $firtname = $result_person['firtname'];
                                        $lastname = $result_person['lastname'];

                                        $sql_teacher = "SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
                                        $query_teacher = mysqli_query($conn,$sql_teacher);
                                        $result_teacher = mysqli_fetch_assoc($query_teacher);
                                        $t_firstname = $result_teacher['t_firstname'];
                                        $t_lastname = $result_teacher['t_lastname'];





                                    ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-4 align-self-center">
                        <h3 class="text-themecolor">เอกสารล้างหนี้</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารล้างหนี้</li>
                        </ol>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <a href="report_debt4.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
                            <i class="fa-fw fa fa-print"></i>
                            หลักฐานการจ่ายเงิน
                        </a>
                    </div>
                    <div class="col-md-2 align-self-center">
                        <a href="report_debt.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <form class="form-horizontal form-material" action="INSERT_lend.php" name="insertlend" method="post">
                              <div class="row">
                                  <div class="col-md-12 text-center">
                                      <div class="form-group">
                                          <label><b><u>รายละเอียดเอกสารล้างหนี้</u></b></label>
                                      </div>
                                  </div>
                              </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b><u>รหัสเอกสารล้างหนี้</u></b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $doc_id;?>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>ชื่อส่วนราชการผู้จัดฝึกอบรม</label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $name_train;?>
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
                                                <label for="activity"><b>ชื่อบุคลากร</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix; ?><?php echo $firtname; ?>&nbsp;&nbsp;<?php echo $lastname; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity"><b>ชื่ออาจารย์</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname; ?>&nbsp;&nbsp;<?php echo $t_lastname; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity"><b>ได้รับเงินจาก</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $money_from?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <?php
                                                                $list1 = array($list);

                                                                  foreach ($list1 as $list1){
                                                                    $j=0;
                                                                    echo "<p><b>รายการ</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($list1 as $list1[$j]){
                                                                        $value = $list1[$j];
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
                                                                $money_num1 = array($money_num);

                                                                  foreach ($money_num1 as $money_num1){
                                                                    $j=0;
                                                                    echo "<p><b>จำนวนเงิน</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($money_num1 as $money_num1[$j]){
                                                                        $value = $money_num1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "<li>{$value}</li>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>สัญญายืมเลขที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $lend_num; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="activity"><b>ตามคำสั่ง/บันทึกที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $note_that; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ลงวันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_note; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity"><b>สังกัด</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $under; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity"><b>พร้อมด้วย</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $along_with; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity"><b>ไปปฏิบัติราชการ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $go_practice; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="activity"><b>ออกเดือนทาง</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $depart_from; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ตั้งแต่วันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_depart; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>เวลา</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time_depart; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="activity"><b>ถึงวันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $back; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ถึงวันที่</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_back; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>เวลา</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $time_back; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>เบิกค่าใช้จ่ายสำหรับ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $open_money; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ค่าเบี้ยเลี้ยง</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>จำนวน/วัน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_day; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>วันละ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_price; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>รวมเป็น</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_sum; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ค่าที่พัก</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>จำนวน/วัน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest_day; ?>
                                            </div>
                                        </div>


                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>รวมเป็น</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest_sum; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ค่าพาหนะ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>รวมเป็น</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle_sum; ?>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>ค่าใช้จ่ายอื่นๆ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $other; ?>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>รวมเป็น</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $other_sum; ?>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="activity"><b>หบักฐานการจ่าย/ฉบับ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $document_num; ?>
                                            </div>
                                        </div>
                                    </div>

                                <div class="row">
                                    <div class="col-md-4">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <a href="edit_form_doc_debt.php?id=<?php echo $id;?>" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารจ้างเหมาบริการ</a>
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
