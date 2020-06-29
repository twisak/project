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
        <?php include '../menu/menu_admin.php'; ?>
        <?php include '../../administrator/connect.php'; ?>

        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารสัญญายืม</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารสัญญายืม</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="INSERT_lend.php" name="insertlend" method="post">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><u>สัญญายืม</u></label>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $sql = "Select Max(substr(doc_id,3)+1) as MaxID from tb_lend ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="L001";
                                                }else
                                                {
                                                    $id="L".sprintf("%03d",$testid);
                                                }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รหัสเอกสารสัญญายืม</label>
                                                <input type="text" value="<?=$id?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="doc_id" value="<?=$id?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>เริ่มต้นวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="str_date">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>สิ้นสุดวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="stp_date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <?php
                                            $sql_person = "select * from tb_person";
                                            $query_person = mysqli_query($conn,$sql_person);
                                            ?>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ชื่อบุคลากร</label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>

                                        <?php
                                            $sql_teacher = "select * from tb_teacher";
                                            $query_teacher = mysqli_query($conn,$sql_teacher);
                                            ?>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ชื่ออาจารย์</label>
                                                <select class="form-control" name="teacher_id">
                                                    <option value="">-- เลือกรายชื่ออาจารย์ --</option>
                                                    <?php
                                                        while($result_teacher=mysqli_fetch_array($query_teacher))
                                                        {
                                                        ?>
                                                    <option value='<?php echo $result_teacher['teacher_id'];?>'><?php echo $result_teacher['t_firstname'];?>&nbsp;&nbsp;<?php echo $result_teacher['t_lastname'];?></option>
                                                    <?php
                                                        }
                                                        ?>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>โครงการ</label>
                                                <select name="project_id" id="project" class="form-control">
                                                    <option value="">-- เลือกชื่อโครงการ --</option>
                                                    <?php
                                                    $sql = "SELECT * FROM tb_project";
                                                    $query = mysqli_query($conn, $sql);
                                                    while($result = mysqli_fetch_assoc($query)):
                                                ?>
                                                    <option value="<?=$result['project_id']?>"><?=$result['project_name']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="activity">ชื่อกิจกรรม</label>
                                                <select name="activity_id" id="activity" class="form-control">
                                                    <option value="">ชื่อกิจกรรม</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าเบี้ยเลี้ยง</label>
                                                <input type="text" class="form-control form-control-line" name="allowance">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="allowance_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าที่พัก</label>
                                                <input type="text" class="form-control form-control-line" name="rest">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="rest_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>พาหนะ</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าลงทะเบียน</label>
                                                <input type="text" class="form-control form-control-line" name="regis">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>จำนวน/คน</label>
                                                <input type="text" class="form-control form-control-line" name="regis_num">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>อื่นๆ</label>
                                                <input type="text" class="form-control form-control-line" name="other">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="other_price">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><u>รายการส่งใช้เงินยืม</u></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info" id="createRows" value="Add">เพิ่มหัวข้อย่อย</button>&nbsp;&nbsp;
                                                <button type="button" class="btn btn-warning" id="deleteRows" value="Del">ลบหัวข้อย่อย</button>&nbsp;&nbsp;
                                                <button type="button" class="btn btn-danger" id="clearRows" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>
                                    </div>

                                    <table width="100%" border="0" id="myTable">

                                        <thead>
                                        </thead>

                                        <tbody></tbody>
                                    </table>


                                    <br />
                                    <center>
                                        <br>
                                        <input type="hidden" id="hdnCount" name="hdnCount">
                                    </center>


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
                                                <button type="button" class="btn btn-danger btn-block">ยกเลิก</button>
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
    <script type="text/javascript">
    $(document).ready(function () {

        var rows = 1;
        $("#createRows").click(function () {


            var tr = "<tr>";
            tr = tr + "<td><div class='row'><div class='col-md-2'><div class='form-group'><label>วัน/เดือน/ปี</label></label><input type='date' class='form-control p_input'  name='date_list" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>การชำระ</label><select class='form-control' name='pay_type" + rows + "'><option>เงินสด</option><option>ใบสำคัญ</option></select></div></div><div class='col-md-2'><div class='form-group'><label>ราคา</label></label><input type='text' class='form-control p_input'  name='price_list" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>ยอดคงค้าง</label><input type='text' class='form-control p_input'  name='balance" + rows + "'></div></div></div></td>";
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
                    $(document).ready(function () {
                        $('#project').change(function () {
                            $.ajax({
                                type: 'POST',
                                data: {
                                    project: $(this).val()
                                },
                                url: 'select_activity.php',
                                success: function (data) {
                                    $('#activity').html(data);
                                }
                            });
                            return false;
                        });
                    });
    </script>
    <!-- listbox 2 ชั้น -->
</body>

</html>
