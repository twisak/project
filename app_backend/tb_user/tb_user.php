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
        <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ข้อมูลบุคลากร</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ข้อมูลบุคลากร</li>
                        </ol>
                    </div>
                </div>
                <?php
                    ini_set('display_errors', 1);
                    error_reporting(~0);

                    $strKeyword = null;

                    if(isset($_POST["txtKeyword"]))
                    {
                        $strKeyword = $_POST["txtKeyword"];
                    }
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลบุคลากร</h4>


                                <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                            <?php
                                                    $strKeyword = null;
                                                    if(isset($_POST["txtKeyword"])){
                                                        $strKeyword = $_POST["txtKeyword"];
                                                    }
                                                    if(isset($_GET["txtKeyword"])){
                                                        $strKeyword = $_GET["txtKeyword"];
                                                    }
                                                ?>
                                            <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-md-6 col-8">
                                                            <input class="form-control" type="text" placeholder="Search..." value="<?php echo $strKeyword;?>" name="txtKeyword" id="txtKeyword">
                                                        </div>
                                                        <button type="submit" class="btn btn-info" name="btnsearch">ค้นหา</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-2 text-right">

                                        </div>
                                        <div class="col-md-4 text-right">
                                            <div class="text-right">
                                                <a href="form_user.php"><button type="button" class="btn btn-primary">เพิ่มบุคลากร</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

<!--
                                <div class="form-group">
                                    <div class="row col-md-12">
                                        <div class="col-md-6">
                                        <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
                                                Keyword
                                                <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
                                                <input type="submit" value="Search">
                                        </form>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="form_user.php">
                                                <button type="button" class="btn btn-primary">เพิ่มบุคลากร</button>
                                            </a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="table-responsive">
                                    <table class="table text-center table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><b>ลำดับ</b></th>
                                                <th class="text-center"><b>ชื่อ-สกุล</b></th>
                                                <th class="text-center"><b>เลขบัตรประชาชน</b></th>
                                                <th class="text-center"><b>Address</b></th>
                                                <th class="text-center"><b>username</b></th>
                                                <th class="text-center"><b>password</b></th>
                                                <th class="text-center"><b>สถานะ</b></th>
                                                <th class="text-center"><b>แก้ไข</b></th>
                                                <th class="text-center"><b>ลบ</b></th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $i=1;
                                            $i<="";

                                            include '../../administrator/connect.php';


                                            $sql ="SELECT tb_person.id, tb_person.person_id , tb_person.prefix , tb_person.firtname , tb_person.lastname , tb_person.idcard, tb_person.house_num , account_login.username , account_login.password , account_login.status, provinces.name_th as name_th_p ,amphures.name_th as name_th_a , districts.name_th as name_th_d   FROM tb_person
                                            INNER JOIN account_login ON tb_person.person_id = account_login.person_id
                                            INNER JOIN provinces ON tb_person.province_id = provinces.id
                                            INNER JOIN amphures ON tb_person.amphures_id = amphures.id
                                            INNER JOIN districts ON tb_person.districts_id = districts.id
                                            WHERE (tb_person.firtname LIKE '%".$strKeyword."%' or tb_person.lastname LIKE '%".$strKeyword."%' or tb_person.idcard LIKE '%".$strKeyword."%' or account_login.status LIKE '%".$strKeyword."%' ) ";


                                            // $sql ="SELECT * FROM tb_person WHERE firtname LIKE '%".$strKeyword."%'";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                                     //$person_id = $row['person_id'];
                                            //     $prefix = $row['prefix'];
                                            //     $firtname = $row['firtname'];
                                            //     $lastname = $row['lastname'];
                                            //     $idcard = $row['idcard'];
                                            //     $house_num = $row['house_num'];
                                            //     $amphures_id = $row['amphures_id'];
                                            //     $districts_id = $row['districts_id'];
                                            //     $province_id = $row['province_id'];
                                            //     $person_id = $row['person_id'];
                                            //
                                            // //echo $province_id;
                                            // //
                                            //
                                            // $sql1 ="SELECT * FROM account_login WHERE person_id = '".$person_id."' ";
                                            // $query1 = mysqli_query($conn,$sql1);
                                            // while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            // {
                                            //     $person_id = $row1['person_id'];
                                            //     $username = $row1['username'];
                                            //     $password = $row1['password'];
                                            //     $status = $row1['status'];
                                            // }
                                            //
                                            // $sql2 ="SELECT * FROM provinces WHERE id = '".$province_id."' ";
                                            // $query2 = mysqli_query($conn,$sql2);
                                            // while($row2 = mysqli_fetch_array($query2,MYSQLI_ASSOC))
                                            // {
                                            //     $name_th = $row2['name_th'];
                                            // }
                                            // $sql3 ="SELECT * FROM districts WHERE id = '".$districts_id."' ";
                                            // $query3 = mysqli_query($conn,$sql3);
                                            // while($row3 = mysqli_fetch_array($query3,MYSQLI_ASSOC))
                                            // {
                                            //     $name_th1 = $row3['name_th'];
                                            // }
                                            // $sql4 ="SELECT * FROM amphures WHERE id = '".$amphures_id."' ";
                                            // $query4 = mysqli_query($conn,$sql4);
                                            // while($row4 = mysqli_fetch_array($query4,MYSQLI_ASSOC))
                                            // {
                                            //     $name_th2 = $row4['name_th'];
                                            // }
                                                //echo $sql3;
                                                
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $row['prefix'];?><?php echo $row['firtname'];?>&nbsp;&nbsp;<?php echo $row['lastname'];?></td>
                                                <td><?php echo $row['idcard'];?></td>
                                                <td><?php echo $row['house_num'];?>&nbsp;<?php echo $row['name_th_p'];?>&nbsp;<?php echo $row['name_th_a'];?>&nbsp;<?php echo $row['name_th_d'];?></td>
                                                <td><?php echo $row['username'];?></td>
                                                <td><?php echo $row['password'];?></td>
                                                <td><?php echo $row['status'];?></td>
                                                <td>
                                                    <!-- <a href="edit_form_user.php?id=<?php echo $row['person_id'];?>" class="btn btn-warning">แก้ไข</a> -->
                                                    <a href="edit_form_user.php?person_id=<?php echo $row['person_id'];?>" class="btn btn-warning">แก้ไข</a>
                                                </td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_user.php?person_id=<?php echo $row['person_id'];?>';}" class="btn btn-danger">ลบ</a></td>
                                            </tr>
                                            <?php
                                                $i++; }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
