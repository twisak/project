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
                                        $sql ="SELECT * FROM tb_lend WHERE doc_id = '".$doc_id."'";
                                        $query = mysqli_query($conn,$sql);
                                        while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                        {
                                            $doc_id = $row['doc_id'];
                                            $str_date = $row['str_date'];
                                            //$stp_date = $row['stp_date'];
                                            $project = $row['project'];
                                            $activity = $result['activity'];
                                            $person_id = $row['person_id'];
                                            $teacher_id = $row['teacher_id'];
                                            $allowance = $row['allowance'];
                                            $allowance_day = $row['allowance_day'];
                                            $allowance_price = $row['allowance_price'];
                                            $rest = $row['rest'];
                                            $rest_price = $row['rest_price'];
                                            $room = $row['room'];
                                            $num_night = $row['num_night'];
                                            $vehicle_num = $row['vehicle_num'];
                                            $vehicle_price = $row['vehicle_price'];
                                            $regis = $row['regis'];
                                            $regis_num = $row['regis_num'];

                                            $fication_day = $row['fication_day'];
                                            $num_people = $row['num_people'];
                                            $num_hour = $row['num_hour'];
                                            $price_hour = $row['price_hour'];
                                            $students_work = $row['students_work'];
                                            $work_day = $row['work_day'];
                                            $work_price = $row['work_price'];
                                            $hand_food = $row['hand_food'];
                                            $num_food = $row['num_food'];
                                            $food_price = $row['food_price'];
                                            $snack = $row['snack'];
                                            $num_snack = $row['num_snack'];
                                            $snack_price = $row['snack_price'];

                                            $date_list = unserialize( $row["date_list"] );
                                            $pay_type = unserialize( $row["pay_type"] );
                                            $price_list = unserialize( $row["price_list"] );
                                            $balance = unserialize( $row["balance"] );
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

                                        $sql_teacher ="SELECT * FROM tb_teacher WHERE teacher_id = '".$teacher_id."' ";
                                        $query_teacher = mysqli_query($conn,$sql_teacher);
                                        while($row_teacher = mysqli_fetch_array($query_teacher,MYSQLI_ASSOC))
                                        {
                                            $t_firstname = $row_teacher['t_firstname'];
                                            $t_lastname = $row_teacher['t_lastname'];
                                            //$prefix = $row2['prefix'];
                                        }
                                    ?>
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
                        <a href="../lend/report1.php?id=<?php echo $doc_id;?>" class="btn waves-effect waves-light btn btn-info pull-right hidden-sm-down">
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
                                <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="form-group">
                                                    <label>
                                                        <h5><b><u>รายละเอียดเอกสารสัญญายืม</u></b></h5>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>รหัสเอกสารสัญญายืม</b></label>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ชื่อบุคลากร</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $prefix?><?php echo $firtname?>&nbsp;&nbsp;<?php echo $lastname?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label><b>ชื่ออาจารย์</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $t_firstname;?>&nbsp;&nbsp;<?php echo $t_lastname;?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label><b>โครงการ</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $project?>
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
                                            <label><b>ค่าเบี้ยเลี้ยง</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>ราคา</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_price; ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label><b>กี่วัน</b></label><br>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $allowance_day; ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ค่าที่พัก</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ค่าเช่าที่พักประเภท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>จ่ายจริง คืนล่ะ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $rest_price; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่ห้อง</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $room; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่คืน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num_night; ?>
                                            </div>
                                        </div>
                                        <?php 
                                                if( $rest_price && $room && $num_night == "-") {
                                                        
                                                    //echo "-";
                                                    $rest_price = "0";
                                                    $room = "0";
                                                    $num_night = "0";
                                                
                                                }elseif($rest_price && $room && $num_night != "-"){
                                                
                                                    $rest_price;
                                                    $room;
                                                    $num_night;
                                                }
                                                $sum_room = $rest_price * $room * $num_night;
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_room; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ค่าพาหนะ</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่ารถรับจ้างคุณวิทยากรผู้ทรงคุณวุฒิ/กี่คัน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle_num; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>คันล่ะ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vehicle_price; ?>
                                            </div>
                                        </div>
                                        <?php 
                                                if( $vehicle_num && $vehicle_price == "-") {
                                                        
                                                    //echo "-";
                                                    $vehicle_num = "0";
                                                    $vehicle_price = "0";
                                                
                                                }elseif($vehicle_num && $vehicle_price != "-"){
                                                
                                                    $vehicle_num;
                                                    $vehicle_price;
                                                }
                                                $sum_vehicle = $vehicle_num * $vehicle_price;
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_vehicle; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ค่าลงทะเบียน</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่าลงทะเบียนอบรม/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>จำนวน/คน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $regis_num; ?>
                                            </div>
                                        </div>
                                        <?php 
                                                if( $regis && $regis_num == "-") {
                                                        
                                                    //echo "-";
                                                    $regis = "0";
                                                    $regis_num = "0";
                                                
                                                }elseif($regis && $regis_num != "-"){
                                                
                                                    $regis;
                                                    $regis_num;
                                                }
                                                $sum_regis = $regis * $regis_num;
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_regis; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ค่าอื่นๆ</b></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่าสมนาคุณวิทยากรผู้ทรงคุณวุฒิ/วัน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $fication_day; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่คน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num_people; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่ชั่วโมง</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num_hour; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>ชั่วโมง/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $price_hour; ?>
                                            </div>
                                        </div>
                                        <?php 

                                                if( $fication_day && $num_people && $num_hour && $price_hour == "-") {
                                                                                                        
                                                    //echo "-";
                                                    $fication_day = "0";
                                                    $num_people = "0";
                                                    $num_hour = "0";
                                                    $price_hour = "0";

                                                }elseif($fication_day && $num_people && $num_hour && $price_hour != "-"){

                                                    $fication_day;
                                                    $num_people;
                                                    $num_hour;
                                                    $price_hour;
                                                }

                                            $sum_fication = $fication_day * $num_people * $num_hour * $price_hour;
                                            
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_fication; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่าตอบแทนนักศึกษาช่วยงาน/กี่คน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $students_work; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่วัน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $work_day; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>วันล่ะ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $work_price; ?>
                                            </div>
                                        </div>
                                        <?php 

                                            if( $students_work && $work_day && $work_price == "-") {
                                                        
                                                //echo "-";
                                                $students_work = "0";
                                                $work_day = "0";
                                                $work_price = "0";
                                            
                                            }elseif($students_work && $work_day && $work_price != "-"){
                                            
                                                $students_work;
                                                $work_day;
                                                $work_price;
                                            }
                                            $sum_students = $students_work * $work_day * $work_price;
                                            
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_students; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่าอาหารมือหลัก/จำนวนกี่คน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $hand_food; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่มื่อ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num_food; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>มื่อล่ะ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $food_price; ?>
                                            </div>
                                        </div>
                                        <?php 
                                            
                                            if( $hand_food && $num_food && $food_price == "-") {
                                                        
                                                //echo "-";
                                                $hand_food = "0";
                                                $num_food = "0";
                                                $food_price = "0";
                                            
                                            }elseif($hand_food && $num_food && $food_price != "-"){
                                            
                                                $hand_food;
                                                $num_food;
                                                $food_price;
                                            }
                                            $sum_food = $hand_food * $num_food * $food_price;
                                            
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_food; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="">
                                            <div class="form-group">
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label><b>ค่าอาหารว่างและเครื่องดื่ม/จำนวนกี่คน</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $snack; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>กี่มื่อ</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $num_snack; ?>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>มื่อล่ะ/บาท</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $snack_price ; ?>
                                            </div>
                                        </div>
                                        <?php 
                                                    if( $snack && $num_snack && $snack_price == "-") {
                                                                
                                                        //echo "-";
                                                        $snack = "0";
                                                        $num_snack = "0";
                                                        $snack_price = "0";
                                                    
                                                    }elseif($snack && $num_snack && $snack_price != "-"){
                                                    
                                                         $snack;
                                                         $num_snack;
                                                         $snack_price;
                                                    }
                                                    $sum_snack = $snack * $num_snack * $snack_price;
                                        ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label><b>รวมทั้งหมด/บาม</b></label><br>
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $sum_snack; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        <?php
                                                    //  $i=1;
                                                    //  $i<="";
                                        ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <!-- <label><b>วัน/เดือน/ปี</b></label><br> -->
                                            <!-- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php //echo $i;?>.&nbsp;<?php //echo $date_list?><br> -->

                                            <?php
                                                                $date_list1 = array($date_list);

                                                                  foreach ($date_list1 as $date_list1){
                                                                    $j=0;
                                                                    echo "<p><label class='col-md-8'><b>รายการ</b></label></p>";
                                                                    echo "<ul>";
                                                                    foreach ($date_list1 as $date_list1[$j]){
                                                                        $value = $date_list1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "<li>{$value}</li>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <?php
                                                                $pay_type1 = array($pay_type);

                                                                  foreach ($pay_type1 as $pay_type1){
                                                                    $j=0;
                                                                    echo "<p><label><b>การชำระ</b></label></p>";
                                                                    echo "<ul>";
                                                                    foreach ($pay_type1 as $pay_type1[$j]){
                                                                        $value = $pay_type1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "{$value}<br>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <?php
                                                                $price_list1 = array($price_list);

                                                                  foreach ($price_list1 as $price_list1){
                                                                    $j=0;
                                                                    echo "<p><label><b>ราคา</b></label></p>";
                                                                    echo "<ul>";
                                                                    foreach ($price_list1 as $price_list1[$j]){
                                                                        $value = $price_list1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "{$value}<br>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>

                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <?php
                                                                $balance1 = array($balance);

                                                                  foreach ($balance1 as $balance1){
                                                                    $j=0;
                                                                    echo "<p><label><b>ยอดคงค้าง</b></label></p>";
                                                                    echo "<ul>";
                                                                    foreach ($balance1 as $balance1[$j]){
                                                                        $value = $balance1[$j];
                                                                        //echo "<tr><td>{$value}</td></tr>";
                                                                        echo "{$value}<br>";
                                                                        $j++;
                                                                    }
                                                                    echo "</ul>";
                                                                }
                                                ?>
                                        </div>
                                    </div>
                                </div>
                                                    <?php //$i++; //}?>
                                <div class="row">
                                    <div class="col-md-3">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <!-- <button type="submit" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารสัญญายืม</button> -->
                                            <a href="../lend/edit.php?id=<?php echo $doc_id; ?>" class="btn btn-warning btn-block">แก้ไขข้อมูลเอกสารสัญญายืม</a>
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
