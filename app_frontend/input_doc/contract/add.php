<?php
include('../../../config/connect.php');
include('../../../config/constant.php');

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
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo ROOT_PROJECT_FRONTEND; ?>/assets/images/favicon.png">
<?php include '../../include_title.php'; ?>
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
                                <form class="form-horizontal form-material" action="../contract/add_action.php" method="post">
                                    <?php
                                        $sql = "Select Max(substr(doc_id,3)+1) as MaxID from tb_contract ";
                                        $query = mysqli_query($conn,$sql);
                                        $table_id = mysqli_fetch_assoc($query);
                                        $testid = $table_id['MaxID'];
                                                if($testid=='')
                                                {
                                                    $id="C001";
                                                }else
                                                {
                                                    $id="C".sprintf("%03d",$testid);
                                                }
                                    ?>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group text-center">
                                                <label><h4><b><u>แบบฟอร์มเอกสารจ้างเหมาบริการ</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รหัสเอกสารจ้างเหมาบริการ</b></label>
                                                <input type="text" value="<?=$id?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="doc_id" value="<?=$id?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ชื่อบุคลากร</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" value="<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>" readonly class="form-control form-control-line">
                                                <input type="hidden" class="form-control" name="person_id" value="<?php echo $person_id?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>โครงการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="project_id" id="project" class="form-control">
                                                    <option value="">เลือกโครงการ</option>
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

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="activity"><b>ชื่อกิจกรรม</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="activity_id" id="activity" class="form-control">
                                                    <option value="">ชื่อกิจกรรม</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ตัวชี้วัด</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount" name="hdnCount">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เริ่มต้นวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" name="str_date">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>สิ้นสุดวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" name="stp_date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ผู้ควบคุมการปฎิบัติงาน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="teacher_id" class="form-control">
                                                    <option value="">เลือกชื่ออาจารย์</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?>&nbsp;&nbsp;<?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b><u>รายการส่งใช้เงินยืม</u></b></label>
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
                                                <label><b>จำนวนงวด</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="number" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เป็นเงิน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="money" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ปฎิบัติงานงวดที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="work" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันที่ปฎิบัติงาน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" name="date_work">
                                            </div>
                                        </div> -->
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group text-center">
                                                <label><h4><b><u>บันทึกข้อความ</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ส่วนราชการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="government">
                                            </div>
                                        </div>
                                        <?php
                                            $sql = "Select Max(substr(that,7)+1) as MaxID from tb_contract ";
                                            $query = mysqli_query($conn,$sql);
                                            $table_id = mysqli_fetch_assoc($query);
                                            $testid = $table_id['MaxID'];
                                                    if($testid=='')
                                                    {
                                                        $idd="อว.000001";
                                                    }else
                                                    {
                                                        $idd="อว.".sprintf("%06d",$testid);
                                                    }
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ที่</b></label>
                                                <input type="text" value="<?=$idd?>" readonly class="form-control form-control-line">
                                                <input type="hidden" name="that" value="<?=$idd?>" />
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันที่</b></label>
                                                <input type="date" class="form-control form-control-line" name="c_day">
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เรื่อง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="title_id" class="form-control">
                                                    <option value="">เลือกชื่อเรื่อง</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_title";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                            $title_id = $result['title_id'];
                                                            $title = $result['title'];

                                                            $new_title = iconv_substr($title,0,80,'UTF-8'). "...";
                                                    ?>
                                                    <option value="<?php echo $title_id;?>"><?php echo $new_title;?></option>
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
                                                <label><b>จำนวนคน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="people" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ราคากลางที่คำนวณได้</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="mid_price" onKeyUp="IsNumeric(this.value,this)">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ ประธานกรรมการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="chairman" class="form-control">
                                                    <option value="">เลือกชื่ออาจารย์</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?>&nbsp;&nbsp;<?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ กรรมการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="committee" class="form-control">
                                                    <option value="">เลือกชื่ออาจารย์</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?>&nbsp;&nbsp;<?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label><b>ลงชื่อ กรรมการและเลขานุการ</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <select name="secretary" class="form-control">
                                                    <option value="">เลือกชื่ออาจารย์</option>
                                                    <?php
                                                        $sql = "SELECT * FROM tb_teacher";
                                                        $query = mysqli_query($conn, $sql);
                                                        while($result = mysqli_fetch_assoc($query)):
                                                    ?>
                                                    <option value="<?=$result['teacher_id']?>"><?=$result['t_firstname']?>&nbsp;&nbsp;<?=$result['t_lastname']?></option>
                                                    <?php endwhile; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="form-group">
                                                <label><h4><b><u>ขอบเขตงานจ้างเหมาบริการ</u></b></h4></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>รายละเอียดการจ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="details">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ระยะเวลาการจ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>เริ่มต้นวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" name="date_start">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>สิ้นสุดวันที่</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="date" class="form-control form-control-line" name="date_end">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>คุณสมบัติของผู้รับจ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount1" name="hdnCount1">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ขอบเขตของงานที่จ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount2" name="hdnCount1">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ความรับผิดชอบของผู้ว่าจ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
                                                <input type="text" class="form-control form-control-line" name="responsible">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>ค่าปรับและค่าหักเงินค่าจ้าง</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount3" name="hdnCount3">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เงื่อนไขการชำระเงิน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
                                            <input type="hidden" id="hdnCount4" name="hdnCount4">
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label><b>เงื่อนไขหลักประกัน</b></label>&nbsp;<label class="text-danger"><b>*</b></label></label>
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
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                        <br />
                                        <center>
                                            <br>
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
