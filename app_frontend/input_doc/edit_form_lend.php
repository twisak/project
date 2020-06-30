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
                    <div class="col-md-7 align-self-center">
                        <a href="../input_doc/report_lend.php" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
                            <i class="fa-fw fa fa-print"></i>
                            ส่งออกแบบฟอร์ม
                        </a>
                    </div>
                </div>

                <?php
                    $id =$_GET['id'];
                    $sql ="SELECT * FROM tb_lend WHERE id = '".$id."'";
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                    {
                        $doc_id = $row['doc_id'];
                        $str_date = $row['str_date'];
                        $stp_date = $row['stp_date'];
                        $project_id = $row['project_id'];
                        $activity_id = $row['activity_id'];
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

                        $date_list = unserialize( $row["date_list"] );
                        $pay_type = unserialize( $row["pay_type"] );
                        $price_list = unserialize( $row["price_list"] );
                        $balance = unserialize( $row["balance"] );
                    }

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
                        $activity_id = $row3['activity_id'];
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

                <div class="row">
                    <!-- Column -->

                    <!-- <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../assets/images/users/5.jpg" class="img-circle" width="150" />
                                    <h4 class="card-title m-t-10">Hanna Gover</h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-people"></i> <font class="font-medium">254</font></a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="icon-picture"></i> <font class="font-medium">54</font></a></div>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div> -->

                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="edit_lend.php" name="insertlend" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>รหัสเอกสารสัญญายืม</label>
                                                <input type="text" class="form-control form-control-line" name="doc_id" value="<?php echo $doc_id; ?>" readonly>
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>เริ่มต้นวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="str_date" value="<?php echo $str_date; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>สิ้นสุดวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="stp_date" value="<?php echo $stp_date; ?>">
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

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>ชื่ออาจารย์</label>
                                                <select class="form-control" name="teacher_id" value="<?php echo $row['teacher_id']; ?>">

                                                    <?php
                                                        $sql_check_teacher = "SELECT * FROM tb_teacher";
                                                        $query_check_teacher = mysqli_query($conn,$sql_check_teacher);

                                                        $teacher_id1 = $row['teacher_id'];
                                                        while($result_check_teacher = mysqli_fetch_array($query_check_teacher))
                                                        {
                                                        if($teacher_id1 == $result_check_teacher["teacher_id"])
                                                        {
                                                        $selected_check_teacher = "selected";

                                                        }
                                                        else
                                                        {
                                                        $selected_check_teacher = "";
                                                        }
                                                        ?>
                                                    <option value="<?php echo $result_check_teacher["teacher_id"];?>" <?php echo $selected_check_teacher;?>><?php echo $result_check_teacher["t_firstname"]; ?>&nbsp;&nbsp;<?php echo $result_check_teacher["t_lastname"]; ?></option>
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
                                                    <option value="<?php echo $project_id?>"><?php echo $project_name?></option>
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
                                                    <option value="<?php echo $activity_id?>"><?php echo $activity?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าเบี้ยเลี้ยง</label>
                                                <input type="text" class="form-control form-control-line" name="allowance" value="<?php echo $allowance; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="allowance_price" value="<?php echo $allowance_price; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าที่พัก</label>
                                                <input type="text" class="form-control form-control-line" name="rest" value="<?php echo $rest; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="rest_price" value="<?php echo $rest_price; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>พาหนะ</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle" value="<?php echo $vehicle; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="vehicle_price" value="<?php echo $vehicle_price; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>ค่าลงทะเบียน</label>
                                                <input type="text" class="form-control form-control-line" name="regis" value="<?php echo $regis; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>จำนวน/คน</label>
                                                <input type="text" class="form-control form-control-line" name="regis_num" value="<?php echo $regis_num; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label>อื่นๆ</label>
                                                <input type="text" class="form-control form-control-line" name="other" value="<?php echo $other; ?>">
                                            </div>
                                        </div>

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ราคา</label>
                                                <input type="text" class="form-control form-control-line" name="other_price" value="<?php echo $other_price; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable">
                                            <thead>
                                                <div class='row'>
                                                    <div class='col-md-4'>
                                                        <div class='form-group'>
                                                            <?php
                                                                    $pay_type1 = array($pay_type);
                                                                    foreach ($pay_type1 as $pay_type1){
                                                                    $j=0;
                                                                    foreach ($pay_type1 as $pay_type1[$j]){
                                                                        $value1 = $pay_type1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        $j++;
                                                                        }   
                                                                    }
                                                                    $price_list1 = array($price_list);
                                                                    foreach ($price_list1 as $price_list1){
                                                                    $j=0;
                                                                    foreach ($price_list1 as $price_list1[$j]){
                                                                        $value2 = $price_list1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        $j++;
                                                                        }   
                                                                    }
                                                                    $balance1 = array($balance);
                                                                    foreach ($balance1 as $balance1){
                                                                    $j=0;
                                                                    foreach ($balance1 as $balance1[$j]){
                                                                        $value3 = $balance1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        $j++;
                                                                        }   
                                                                    }

                                                                    $date_list1 = array($date_list);

                                                                    foreach ($date_list1 as $date_list1){
                                                                        $j=0;
                                                                        
                                                                        foreach ($date_list1 as $date_list1[$j]){
                                                                            $value = $date_list1[$j];
                                                                            $value1 = $pay_type1[$j];
                                                                            $value2 = $price_list1[$j];
                                                                            $value3 = $balance1[$j];
                                                                            
                                                                            echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-2'><div class='form-group'><label>วัน/เดือน/ปี</label><input type='date' class='form-control p_input' value='$value' name='date_list[]'></div></div><div class='col-md-2'><div class='form-group'><label>การชำระ</label><select class='form-control' name='pay_type[]'><option>$value1</option><option>เงินสด</option><option>ใบสำคัญ</option></select></div></div><div class='col-md-2'><div class='form-group'><label>ราคา</label></label><input type='text' class='form-control p_input' value='$value2' name='price_list[]'></div></div><div class='col-md-2'><div class='form-group'><label>ยอดคงค้าง</label><input type='text' class='form-control p_input' value='$value3' name='balance[]'></div></div></div></td></tr>";
                                                                            //echo "<li>{$value}</li>";
                                                                            $j++;
                                                                        }
                                                                    }
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount" name="hdnCount">
                                        </center>
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
                            tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-2'><div class='form-group'><label>วัน/เดือน/ปี</label></label><input type='date' class='form-control p_input'  name='date_list[]" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>การชำระ</label><select class='form-control' name='pay_type[]" + rows + "'><option>เงินสด</option><option>ใบสำคัญ</option></select></div></div><div class='col-md-2'><div class='form-group'><label>ราคา</label></label><input type='text' class='form-control p_input'  name='price_list[]" + rows + "'></div></div><div class='col-md-2'><div class='form-group'><label>ยอดคงค้าง</label><input type='text' class='form-control p_input'  name='balance[]" + rows + "'></div></div></div></td>";
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
