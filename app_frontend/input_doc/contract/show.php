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
        <?php
                                        // $username= $_SESSION['username'];
                                        // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                        // $query = mysqli_query($conn,$sql);
                                        // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        // {
                                        //     $person_id = $row['person_id'];
                                        // }

                                        $doc_id =$_GET['id'];
                                        //echo $id;
                                        $sql ="SELECT * FROM tb_contract WHERE doc_id = '".$doc_id."'";
                                        $query = mysqli_query($conn,$sql);
                                        $num_rows = mysqli_num_rows($query);
                                        $row = mysqli_fetch_assoc($query);
                                        // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        // {
                                            $idd = $row['id'];
                                            $doc_id = $row['doc_id'];
                                            $foreword = unserialize($row['foreword']);
                                            $str_date = $row['str_date'];
                                            $stp_date = $row['stp_date'];
                                            $project_id = $row['project_id'];
                                            $activity_id = $row['activity_id'];
                                            $person_id = $row['person_id'];
                                            $teacher_id = $row['teacher_id'];
                                            $number = $row['number'];
                                            $money = $row['money'];
                                            $work = $row['work'];
                                            $date_work = $row['date_work'];
                                            $government = $row['government'];
                                            $that = $row['that'];
                                            // $c_day = $row['c_day'];
                                            $title_id = $row['title_id'];
                                            $people = $row['people'];
                                            $mid_price = $row['mid_price'];
                                            $chairman = $row['chairman'];
                                            $committee = $row['committee'];
                                            $secretary = $row['secretary'];
                                            $details = $row['details'];
                                            $date_start  = $row['date_start'];
                                            $date_end = $row['date_end'];
                                            $property = unserialize($row['property']);
                                            $scope = unserialize($row["scope"]);
                                            $responsible = $row['responsible'];
                                            $fine = unserialize($row["fine"]);
                                            $payment = unserialize( $row["payment"] );
                                            $insurance = unserialize( $row["insurance"] );
                                        // }


                                        $sql_project = "SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        $query_project = mysqli_query($conn,$sql_project);
                                        $result_project = mysqli_fetch_assoc($query_project);

                                        $project_name = $result_project['project_name'];
                                        $project_id = $result_project['project_id'];

                                        $sql_activity = "SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
                                        $query_activity = mysqli_query($conn,$sql_activity);
                                        $result_activity = mysqli_fetch_assoc($query_activity);

                                        $activity = $result_activity['activity'];

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

                                        $sql_title = "SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                        $query_title = mysqli_query($conn, $sql_title);
                                        $result_title = mysqli_fetch_assoc($query_title);

                                          $title = $result_title['title'];



                                        // $sql1 ="SELECT * FROM tb_project WHERE project_id = '".$project_id."' ";
                                        // $query1 = mysqli_query($conn,$sql1);
                                        // while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                        // {
                                        //     $project_name = $row1['project_name'];
                                        //     $project_id = $row1['project_id'];
                                        // }

                                        // $sql3 ="SELECT * FROM tb_activity WHERE activity_id = '".$activity_id."' ";
                                        // $query3 = mysqli_query($conn,$sql3);
                                        // while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                                        // {
                                        //     $activity = $row3['activity'];
                                        // }

                                        // $sql2 ="SELECT * FROM tb_person WHERE person_id = '".$person_id."' ";
                                        // $query2 = mysqli_query($conn,$sql2);
                                        // while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
                                        // {
                                        //     $prefix = $row2['prefix'];
                                        //     $firtname = $row2['firtname'];
                                        //     $lastname = $row2['lastname'];
                                        //     //$prefix = $row2['prefix'];
                                        // }
                                        // $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
                                        // $query4 = mysqli_query($conn,$sql4);
                                        // while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        // {
                                        //     $t_firstname = $row4['t_firstname'];
                                        //     $t_lastname = $row4['t_lastname'];
                                        //     $position_id = $row4['position_id'];
                                        // }
                                                //echo $position_id;
                                        // $sql5 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                        // $query5 = mysqli_query($conn,$sql5);
                                        // while($row5 = mysqli_fetch_array($query5,MYSQLI_ASSOC))
                                        // {
                                        //     $title = $row5['title'];
                                        // }

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
                        <a href="../contract/report1.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <form class="form-horizontal form-material">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="form-group">
                                            <label><h5><b><u>รายละเอียดเอกสารจ้างเหมาบริการ</u></b></h5></label>
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
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <?php
                                                        $foreword1 = array($foreword);

                                                        foreach ($foreword1 as $foreword1){
                                                          $j=0;
                                                          echo "<p><label><b>ตัวชี้วัด</b></label></p>";
                                                          echo "<ul>";
                                                          foreach ($foreword1 as $foreword1[$j]){
                                                              $value = $foreword1[$j];
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
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>เริ่มต้นวันที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $str_date?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>สิ้นสุดวันที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $stp_date?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ผู้ควบคุมการปฎิบัติงาน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์<?php echo $t_firstname?>&nbsp;&nbsp;<?php echo $t_lastname?>
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
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>จำนวนงวด</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $number?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>เป็นเงิน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $money?>
                                        </div>
                                    </div>
                                    <?php
                                                  $amount=$number * $money;
                                                ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>รวมเป็นเงินทั้งสิ้น</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $amount?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>ปฎิบัติงานงวดที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $work?>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>วันที่ปฎิบัติงาน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $date_work?>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><u>บันทึกข้อความ</u></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>ส่วนราชการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $government?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>ที่</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $that?>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-2">
                                        <div class="form-group">
                                            <label>วันที่</label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $c_day?>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>เรื่อง</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $title?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>จำนวนคน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $people?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>ราคากลางที่คำนวณได้<b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $mid_price?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <?php
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$chairman."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname1 = $row4['t_firstname'];
                                            $t_lastname1 = $row4['t_lastname'];
                                        }
                                    ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ลงชื่อ ประธานกรรมการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์<?php echo $t_firstname1?>&nbsp;&nbsp;<?php echo $t_lastname1?>
                                        </div>
                                    </div>
                                    <?php
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$committee."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname2 = $row4['t_firstname'];
                                            $t_lastname2 = $row4['t_lastname'];
                                        }
                                    ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ลงชื่อ กรรมการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์<?php echo $t_firstname2?>&nbsp;&nbsp;<?php echo $t_lastname2?>
                                        </div>
                                    </div>
                                    <?php
                                        $sql4 ="SELECT * FROM tb_teacher WHERE teacher_id = '".$secretary."' ";
                                        $query4 = mysqli_query($conn,$sql4);
                                        while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                        {
                                            $t_firstname3 = $row4['t_firstname'];
                                            $t_lastname3 = $row4['t_lastname'];
                                        }
                                    ?>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ลงชื่อ กรรมการและเลขานุการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;อาจารย์<?php echo $t_firstname3?>&nbsp;&nbsp;<?php echo $t_lastname3?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><u>ขอบเขตงานจ้างเหมาบริการ</u></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>รายละเอียดการจ้าง</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $details?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><u>ระยะเวลาการจ้าง</u></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>เริ่มต้นวันที</b>่</label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_start?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>สิ้นสุดวันที</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date_end?>
                                        </div>
                                    </div>
                                </div>
                                <!-- คุณสมบัติของผู้รับจ้าง -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><br>
                                            <?php
                                                                $property1 = array($property);

                                                                  foreach ($property1 as $property1){
                                                                    $j=0;
                                                                    echo "<p><b>คุณสมบัติของผู้รับจ้าง</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($property1 as $property1[$j]){
                                                                        $value = $property1[$j];
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
                                <!-- คุณสมบัติของผู้รับจ้าง -->
                                <!-- ขอบเขตของงานที่จ้าง -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><br>
                                            <?php
                                                                $scope1 = array($scope);

                                                                  foreach ($scope1 as $scope1){
                                                                    $j=0;
                                                                    echo "<p><b>ขอบเขตของงานที่จ้าง</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($scope1 as $scope1[$j]){
                                                                        $value = $scope1[$j];
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
                                <!-- ขอบเขตของงานที่จ้าง -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label><b>ความรับผิดชอบของผู้ว่าจ้าง</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $responsible?>
                                        </div>
                                    </div>
                                </div>
                                <!-- ค่าปรับและค่าหักเงินค่าจ้าง -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><br>
                                            <?php
                                                                $fine1 = array($fine);

                                                                  foreach ($fine1 as $fine1){
                                                                    $j=0;
                                                                    echo "<p><b>ค่าปรับและค่าหักเงินค่าจ้าง</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($fine1 as $fine1[$j]){
                                                                        $value = $fine1[$j];
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
                                <!-- ค่าปรับและค่าหักเงินค่าจ้าง -->
                                <!-- เงื่อนไขการชำระเงิน -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><br>
                                            <?php
                                                                $payment1 = array($payment);

                                                                  foreach ($payment1 as $payment1){
                                                                    $j=0;
                                                                    echo "<p><b>เงื่อนไขการชำระเงิน</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($payment1 as $payment1[$j]){
                                                                        $value = $payment1[$j];
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
                                <!-- เงื่อนไขการชำระเงิน -->
                                <!-- เงื่อนไขหลักประกัน -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"><br>
                                            <?php
                                                                $insurance1 = array($insurance);

                                                                  foreach ($insurance1 as $insurance1){
                                                                    $j=0;
                                                                    echo "<p><b>เงื่อนไขหลักประกัน</b></p>";
                                                                    echo "<ul>";
                                                                    foreach ($insurance1 as $insurance1[$j]){
                                                                        $value = $insurance1[$j];
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
                                <!-- เงื่อนไขหลักประกัน -->


                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <a href="../contract/edit.php?id=<?php echo $doc_id;?>" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารจ้างเหมาบริการ</a>
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
</body>

</html>
