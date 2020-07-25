<?php
    include('../../../config/connect.php');
    include('../../../config/constant.php');

    $doc_id = $_GET['id'];
    $sql_contract = "SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."' ";
    $query_contract = mysqli_query($conn,$sql_contract);
    $result_contract = mysqli_fetch_assoc($query_contract);

    $doc_id = $result_contract['doc_id'];
    $foreword	= $result_contract['foreword'];
    $str_date = $result_contract['str_date'];
    $stp_date = $result_contract['stp_date'];
    $project_id = $result_contract['project_id'];
    $activity_id = $result_contract['activity_id'];
    $person_id = $result_contract['person_id'];
    $teacher_id = $result_contract['teacher_id'];
    $number = $result_contract['number'];
    $money = $result_contract['money'];
    $work = $result_contract['work'];
    $date_work = $result_contract['date_work'];
    $government = $result_contract['government'];
    $that = $result_contract['that'];
    $c_day = $result_contract['c_day'];
    $title_id = $result_contract['title_id'];
    $people = $result_contract['people'];
    $mid_price = $result_contract['mid_price'];
    $details = $result_contract['details'];
    $date_start = $result_contract['date_start'];
    $date_end = $result_contract['date_end'];
    $property = $result_contract['property'];
    $scope = $result_contract['scope'];
    $responsible = $result_contract['responsible'];
    $fine = $result_contract['fine'];
    $payment = $result_contract['payment'];
    $insurance = $result_contract['insurance'];

    $sql_person = "SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
    $query_person = mysqli_query($conn,$sql_person);
    $result_person = mysqli_fetch_assoc($query_person);
    $prefix = $result_person['prefix'];
    $firtname = $result_person['firtname'];
    $lastname = $result_person['lastname'];

    $sql = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    $project_name = $result['project_name'];
    $project_id = $result['project_id'];

    $sql = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    $activity_id = $result['activity_id'];
    $activity = $result['activity'];

    $sql = "SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    $teacher_id = $result['teacher_id'];
    $t_firstname = $result['t_firstname'];
    $t_lastname = $result['t_lastname'];
    $position_id = $result['position_id'];

    $sql = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_assoc($query);

    $title_id = $result['title_id'];
    $title = $result['title'];
    $body = $result['body'];





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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/colors/default.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
    <link href="<?php echo ROOT_PROJECT_FRONTEND; ?>/css/google_fonts/fonts_prompt.css" rel="stylesheet" />
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
    <?php include '../../menu/menu_admin.php'; ?>
    <div id="main-wrapper">
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
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="../contract/edit_action.php" method="post">
                                <!-- <input type="hidden" name="id" value="<?php echo $idd; ?>"> -->
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารจ้างเหมาบริการ</b></label>
                                                <input type="text" value="<?php echo $doc_id;?>"  name="doc_id" readonly class="form-control form-control-line">
                                                <!-- <input type="hidden" name="doc_id" value="<?=$id?>" /> -->
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อบุคลากร</b></label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" readonly class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>โครงการ</b></label>
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
                                                <label for="activity"><b>ชื่อกิจกรรม</b></label>
                                                <select name="activity_id" id="activity" class="form-control">
                                                    <option value="<?php echo $activity_id?>"><?php echo $activity?></option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                        $doc_id =$_GET['id'];
                                        $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."'";
                                        $query = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($query);
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {

                                            $doc_id = $row['doc_id'];
                                            $foreword = unserialize($row['foreword']);
                                            $property = unserialize($row['property']);
                                            $scope = unserialize($row["scope"]);
                                            $responsible = $row['responsible'];
                                            $fine = unserialize($row["fine"]);
                                            $payment = unserialize( $row["payment"] );
                                            $insurance = unserialize( $row["insurance"] );
                                        }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ตัวชี้วัด</b></label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                             $foreword1 = array($foreword);

                                                             foreach ($foreword1 as $foreword1){
                                                                 $j=0;

                                                                 foreach ($foreword1 as $foreword1[$j]){
                                                                     $value = $foreword1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' value='$value' name='foreword[]'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }

                                                             }
                                                        ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount" name="hdnCount">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เริ่มต้นวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="str_date" value="<?php echo $str_date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>สิ้นสุดวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="stp_date" value="<?php echo $stp_date; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ผู้ควบคุมการปฎิบัติงาน</b></label>
                                                <select name="teacher_id" class="form-control">
                                                    <option value="<?php echo $teacher_id;?>"><?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?><?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><u><b>รายการส่งใช้เงินยืม</b></u></label>
                                            </div>
                                        </div>
                                    </div>
                                    <script language="javascript">
                                        function IsNumeric(sText, obj) {
                                            var ValidChars = "0123456789/";
                                            var IsNumber = true;
                                            var Char;
                                            for (i = 0; i < sText.length && IsNumber == true; i++) {
                                                Char = sText.charAt(i);
                                                if (ValidChars.indexOf(Char) == -1) {
                                                    IsNumber = false;
                                                }
                                            }
                                            if (IsNumber == false) {
                                                alert("(ตัวเลข เท่านั้น)");
                                                obj.value = sText.substr(0, sText.length - 1);
                                            }
                                        }
                                    </script>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จำนวนงวด</b></label>
                                                <input type="text" class="form-control form-control-line" name="number" value="<?php echo $number; ?>" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เป็นเงิน</b></label>
                                                <input type="text" class="form-control form-control-line" name="money" value="<?php echo $money; ?>" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ปฎิบัติงานงวดที่</b></label>
                                                <input type="text" class="form-control form-control-line" name="work" value="<?php echo $work; ?>" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันที่ปฎิบัติงาน</b></label>
                                                <input type="date" class="form-control form-control-line" name="date_work" value="<?php echo $date_work; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><u><b>บันทึกข้อความ</b></u></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ส่วนราชการ</b></label>
                                                <input type="text" class="form-control form-control-line" name="government" value="<?php echo $government; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ที่</b></label>
                                                <input type="text" class="form-control form-control-line" name="that" readonly value="<?php echo $that; ?>">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label>วันที่</label>
                                                <input type="date" class="form-control form-control-line" name="c_day" value="<?php echo $c_day; ?>">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เรื่อง</b></label>
                                                <select name="title_id" class="form-control">
                                                    <option value="<?php echo $title_id;?>"><?php echo $title;?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_title";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['title_id']?>"><?=$result['title']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label>ลงวันที่</label>
                                                <input type="date" class="form-control form-control-line" name="str_date">
                                            </div>
                                        </div> -->
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จำนวนคน</b></label>
                                                <input type="text" class="form-control form-control-line" name="people" value="<?php echo $people; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ราคากลางที่คำนวณได้</b></label>
                                                <input type="text" class="form-control form-control-line" name="mid_price" value="<?php echo $mid_price; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ ประธานกรรมการ</b></label>
                                                <select name="teacher_id" class="form-control">
                                                    <option value="<?php echo $teacher_id;?>"><?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?><?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ กรรมการ</b></label>
                                                <select name="teacher_id" class="form-control">
                                                    <option value="<?php echo $teacher_id;?>"><?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?><?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ กรรมการและเลขานุการ</b></label>
                                                <select name="teacher_id" class="form-control">
                                                    <option value="<?php echo $teacher_id;?>"><?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname?></option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?><?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><u><b>ขอบเขตงานจ้างเหมาบริการ</b></u></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>รายละเอียดการจ้าง</b></label>
                                                <input type="text" class="form-control form-control-line" name="details" value="<?php echo $details; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><u><b>ระยะเวลาการจ้าง</b></u></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เริ่มต้นวันที</b>่</label>
                                                <input type="date" class="form-control form-control-line" name="date_start" value="<?php echo $date_start; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>สิ้นสุดวันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="date_end" value="<?php echo $date_end; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>คุณสมบัติของผู้รับจ้าง</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows1" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows1" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows1" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable1">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                        <?php
                                                             $property1 = array($property);

                                                             foreach ($property1 as $property1){
                                                                 $j=0;

                                                                 foreach ($property1 as $property1[$j]){
                                                                     $value = $property1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' value='$value' name='property[]'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }
                                                             }
                                                        ?>
                                            </tbody>
                                        </table>
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount1" name="hdnCount1">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ขอบเขตของงานที่จ้าง</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows2" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows2" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows2" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable2">
                                            <thead>
                                                        <?php
                                                             $scope1 = array($scope);

                                                             foreach ($scope1 as $scope1){
                                                                 $j=0;

                                                                 foreach ($scope1 as $scope1[$j]){
                                                                     $value = $scope1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control form-control-line p_input' name='scope[]' value='$value'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }

                                                             }
                                                        ?>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <center>
                                            <input type="hidden" id="hdnCount2" name="hdnCount1">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ความรับผิดชอบของผู้ว่าจ้าง</b></label>
                                                <input type="text" class="form-control form-control-line" name="responsible" value="<?php echo $responsible; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ค่าปรับและค่าหักเงินค่าจ้าง</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows3" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows3" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows3" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable3">
                                            <thead>
                                                        <?php
                                                             $fine1 = array($fine);

                                                             foreach ($fine1 as $fine1){
                                                                 $j=0;

                                                                 foreach ($fine1 as $fine1[$j]){
                                                                     $value = $fine1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' value='$value' name='fine[]'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }
                                                             }
                                                            ?>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <center>
                                            <input type="hidden" id="hdnCount3" name="hdnCount3">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เงื่อนไขการชำระเงิน</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows4" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows4" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows4" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable4">
                                            <thead>
                                                        <?php
                                                             $payment1 = array($payment);

                                                             foreach ($payment1 as $payment1){
                                                                 $j=0;

                                                                 foreach ($payment1 as $payment1[$j]){
                                                                     $value = $payment1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' value='$value' name='payment[]'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }
                                                             }
                                                            ?>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <center>
                                            <input type="hidden" id="hdnCount4" name="hdnCount4">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เงื่อนไขหลักประกัน</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-info btn-sm" id="createRows5" value="Add">เพิ่ม</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-warning btn-sm" id="deleteRows5" value="Del">ลบ</button>
                                                &nbsp;&nbsp;<button type="button" class="btn btn-danger btn-sm" id="clearRows5" value="Clear">ลบทั้งหมด</button>
                                            </div>
                                        </div>

                                        <table width="100%" border="0" id="myTable5">
                                            <thead>
                                                        <?php
                                                             $insurance1 = array($insurance);

                                                             foreach ($insurance1 as $insurance1){
                                                                 $j=0;

                                                                 foreach ($insurance1 as $insurance1[$j]){
                                                                     $value = $insurance1[$j];
                                                                     echo "<tr><td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' value='$value' name='insurance[]'></div></div></td></tr>";
                                                                     //echo "<li>{$value}</li>";
                                                                     $j++;
                                                                 }
                                                             }
                                                            ?>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <center>
                                            <input type="hidden" id="hdnCount5" name="hdnCount5">
                                        </center>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="submit" name="submit" value="บันทึก" class="btn btn-primary btn-block" />
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <button type="button" class="btn btn-danger btn-block" onClick="JavaScript:history.back();">ยกเลิก</button>
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
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/jquery/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/js/popper.min.js"></script>
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/perfect-scrollbar.jquery.min.js"></script>
            <!--Wave Effects -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/waves.js"></script>
            <!--Menu sidebar -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/sidebarmenu.js"></script>
            <!--Custom JavaScript -->
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/custom.min.js"></script>
            <script src="<?php echo ROOT_PROJECT_FRONTEND; ?>/js/script.js"></script>
            <script src="http://code.jquery.com/jquery-latest.js"></script>

            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='foreword[]" + rows + "'></div></div></td>";
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
                            url: '../select_activity.php',
                            success: function (data) {
                                $('#activity').html(data);
                            }
                        });
                        return false;
                    });
                });
            </script>
            <!-- listbox 2 ชั้น -->
            <!-- คุณสมบัติของผู้รับจ้าง -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows1").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='property[]" + rows + "'></div></div></td>";
                        tr = tr + "</tr>";
                        $('#myTable1 > tbody:last').append(tr);

                        $('#hdnCount1').val(rows);
                        rows = rows + 1;
                    });

                    $("#deleteRows1").click(function () {
                        if ($("#myTable1 tr").length != 1) {
                            $("#myTable1 tr:last").remove();
                        }
                    });

                    $("#clearRows1").click(function () {
                        rows = 1;
                        $('#hdnCount1').val(rows);
                        $('#myTable1 > tbody:last').empty(); // remove all
                    });

                });
            </script>
            <?php ?>
            <!-- คุณสมบัติของผู้รับจ้าง -->
            <!-- ขอบเขตของงานที่จ้าง -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows2").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='scope[]" + rows + "'></div></div></td>";
                        tr = tr + "</tr>";
                        $('#myTable2 > tbody:last').append(tr);

                        $('#hdnCount2').val(rows);
                        rows = rows + 1;
                    });

                    $("#deleteRows2").click(function () {
                        if ($("#myTable2 tr").length != 1) {
                            $("#myTable2 tr:last").remove();
                        }
                    });

                    $("#clearRows2").click(function () {
                        rows = 1;
                        $('#hdnCount2').val(rows);
                        $('#myTable2 > tbody:last').empty(); // remove all
                    });

                });
            </script>
            <!-- ขอบเขตของงานที่จ้าง -->
            <!-- ค่าปรับและค่าหักเงินค่าจ้าง -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows3").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='fine[]" + rows + "'></div></div></td>";
                        tr = tr + "</tr>";
                        $('#myTable3 > tbody:last').append(tr);

                        $('#hdnCount3').val(rows);
                        rows = rows + 1;
                    });

                    $("#deleteRows3").click(function () {
                        if ($("#myTable3 tr").length != 1) {
                            $("#myTable3 tr:last").remove();
                        }
                    });

                    $("#clearRows3").click(function () {
                        rows = 1;
                        $('#hdnCount3').val(rows);
                        $('#myTable3 > tbody:last').empty(); // remove all
                    });

                });
            </script>
            <!-- ค่าปรับและค่าหักเงินค่าจ้าง -->
            <!-- เงื่อนไขการชำระเงิน -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows4").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='payment[]" + rows + "'></div></div></td>";
                        tr = tr + "</tr>";
                        $('#myTable4 > tbody:last').append(tr);

                        $('#hdnCount4').val(rows);
                        rows = rows + 1;
                    });

                    $("#deleteRows4").click(function () {
                        if ($("#myTable4 tr").length != 1) {
                            $("#myTable4 tr:last").remove();
                        }
                    });

                    $("#clearRows4").click(function () {
                        rows = 1;
                        $('#hdnCount4').val(rows);
                        $('#myTable4 > tbody:last').empty(); // remove all
                    });

                });
            </script>
            <!-- เงื่อนไขการชำระเงิน -->
            <!-- เงื่อนไขหลักประกัน -->
            <script type="text/javascript">
                $(document).ready(function () {

                    var rows = 1;
                    $("#createRows5").click(function () {


                        var tr = "<tr>";
                        tr = tr + "<td class='col-md-8'><div class='row'><div class='col-md-8'><div class='form-group'><input type='text' class='form-control p_input' name='insurance[]" + rows + "'></div></div></td>";
                        tr = tr + "</tr>";
                        $('#myTable5 > tbody:last').append(tr);

                        $('#hdnCount5').val(rows);
                        rows = rows + 1;
                    });

                    $("#deleteRows5").click(function () {
                        if ($("#myTable5 tr").length != 1) {
                            $("#myTable5 tr:last").remove();
                        }
                    });

                    $("#clearRows5").click(function () {
                        rows = 1;
                        $('#hdnCount5').val(rows);
                        $('#myTable5 > tbody:last').empty(); // remove all
                    });

                });
            </script>
            <!-- เงื่อนไขหลักประกัน -->

</body>

</html>
