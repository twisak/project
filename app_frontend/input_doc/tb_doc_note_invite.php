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
        <?php include '../menu/menu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">เอกสารบันทึกข้อความอื่นๆ</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">เอกสารบันทึกข้อความอื่นๆ</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <a href="tb_doc_note_command.php" class="btn btn-warning btn-block">เอกสารคำสั่ง</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <a href="tb_doc_note_record.php" class="btn btn-warning btn-block">เอกสารบันทึกข้อความ</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <a href="tb_doc_note_invite.php" class="btn btn-warning btn-block">เอกสารหนังสือเชิญ/ส่งออก</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <select id="pagelist" class="form-control form-control-line">
                                <option value="">-- กรุณาเลือกเรื่อง --</option>
                                <option value="lecturer">เอกสารเรียนเชิญเป็นวิทยากร</option>
                                <option value="meeting">เอกสารเรียนเชิญเข้าร่วม</option>
                                <option value="book">เอกสารมอบหนังสือ</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row" id="lecturer">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <h4 class="card-title">เอกสารเรียนเชิญเป็นวิทยากร</h4>
                                <div class="text-right">
                                    <a href="input_doc_note_invite1.php">
                                        <button type="button" class="btn btn-primary">กรอกเอกสารเพิ่ม</button>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">รหัสเอกสาร</th>
                                                <th class="text-center">วันที่</th>
                                                <th class="text-center">เรื่อง</th>
                                                <th class="text-center">รายละเอียดเอกสาร</th>
                                                <th class="text-center">ลบ</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../../administrator/connect.php';
                                            // $username= $_SESSION['username'];
                                            // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                            // $query = mysqli_query($conn,$sql);
                                            // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            // {
                                            //     $person_id = $row['person_id'];
                                            // }
                                            $i=1;
                                            $i<="";

                                            $sql ="SELECT * FROM tb_note_book1";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                                $id = $row['id'];
                                                $doc_id = $row['doc_id'];
                                                $title_id = $row['title_id'];
                                                $project_id = $row['project_id'];
                                                $person_id = $row['person_id'];
                                                $date_current = $row['date_current'];

                                            // echo $doc_id;
                                            // echo $person_id;

                                            $sql1 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                            $query1 = mysqli_query($conn,$sql1);
                                            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            {
                                                $title = $row1['title'];
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
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $doc_id;?></td>
                                                <td><?php echo $date_current;?></td>
                                                <td><?php echo $title;?></td>
                                                <td>
                                                    <a href="show_doc_note_invite1.php?id=<?php echo $id;?>"><button type="button" class="btn btn-info">รายละเอียด</button></a>
                                                </td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_contract.php?id=<?php echo $row["id"];?>';}" class="btn btn-danger">ลบ</a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <div class="row" id="meeting" style="display:none">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <h4 class="card-title">เอกสารเรียนเชิญเข้าร่วม</h4>
                                <div class="text-right">
                                    <a href="input_doc_note_invite2.php">
                                        <button type="button" class="btn btn-primary">กรอกเอกสารเพิ่ม</button>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">รหัสเอกสาร</th>
                                                <th class="text-center">วันที่</th>
                                                <th class="text-center">เรื่อง</th>
                                                <th class="text-center">รายละเอียดเอกสาร</th>
                                                <th class="text-center">ลบ</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../../administrator/connect.php';
                                            // $username= $_SESSION['username'];
                                            // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                            // $query = mysqli_query($conn,$sql);
                                            // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            // {
                                            //     $person_id = $row['person_id'];
                                            // }
                                            $i=1;
                                            $i<="";

                                            $sql ="SELECT * FROM tb_note_book2";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                                $id = $row['id'];
                                                $doc_id = $row['doc_id'];
                                                $title_id = $row['title_id'];
                                                $project_id = $row['project_id'];
                                                $person_id = $row['person_id'];
                                                $date_current = $row['date_current'];

                                            // echo $doc_id;
                                            // echo $person_id;

                                            $sql1 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                            $query1 = mysqli_query($conn,$sql1);
                                            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            {
                                                $title = $row1['title'];
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
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $doc_id;?></td>
                                                <td><?php echo $date_current;?></td>
                                                <td><?php echo $title;?></td>
                                                <td>
                                                    <a href="show_doc_note_invite2.php?id=<?php echo $id;?>"><button type="button" class="btn btn-info">รายละเอียด</button></a>
                                                </td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_contract.php?id=<?php echo $row["id"];?>';}" class="btn btn-danger">ลบ</a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                    </div>
                </div>
                <div class="row" id="book" style="display:none">
                    <div class="col-lg-12 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                                <h4 class="card-title">เอกสารมอบหนังสือ</h4>
                                <div class="text-right">
                                    <a href="input_doc_note_invite3.php">
                                        <button type="button" class="btn btn-primary">กรอกเอกสารเพิ่ม</button>
                                    </a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">รหัสเอกสาร</th>
                                                <th class="text-center">ชื่อ-สกุล</th>
                                                <th class="text-center">โครงการ</th>
                                                <th class="text-center">รายละเอียดเอกสาร</th>
                                                <th class="text-center">ลบ</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            include '../../administrator/connect.php';
                                            // $username= $_SESSION['username'];
                                            // $sql ="SELECT * FROM account_login WHERE username = '".$username."' ";
                                            // $query = mysqli_query($conn,$sql);
                                            // while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            // {
                                            //     $person_id = $row['person_id'];
                                            // }
                                            $i=1;
                                            $i<="";

                                            $sql ="SELECT * FROM tb_note_book3";
                                            $query = mysqli_query($conn,$sql);
                                            while($row = mysqli_fetch_array($query,MYSQLI_ASSOC))
                                            {
                                                $id = $row['id'];
                                                $doc_id = $row['doc_id'];
                                                $title_id = $row['title_id'];
                                                $project_id = $row['project_id'];
                                                $person_id = $row['person_id'];
                                                $date_current = $row['date_current'];

                                            // echo $doc_id;
                                            // echo $person_id;

                                            $sql1 ="SELECT * FROM tb_title WHERE title_id = '".$title_id."' ";
                                            $query1 = mysqli_query($conn,$sql1);
                                            while($row1 = mysqli_fetch_array($query1,MYSQLI_ASSOC))
                                            {
                                                $title = $row1['title'];
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
                                        <tbody>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $doc_id;?></td>
                                                <td><?php echo $date_current;?></td>
                                                <td><?php echo $title;?></td>
                                                <td>
                                                    <a href="show_doc_note_invite3.php?id=<?php echo $id;?>"><button type="button" class="btn btn-info">รายละเอียด</button></a>
                                                </td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_contract.php?id=<?php echo $row["id"];?>';}" class="btn btn-danger">ลบ</a></td>
                                            </tr>
                                            <?php
                                            $i++;
                                            }
                                            ?>


                                        </tbody>
                                    </table>
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
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script language="javascript">
            $("#pagelist").change(function () {
                var viewID = $("#pagelist option:selected").val();
                $("#pagelist option").each(function () {
                    var hideID = $(this).val();
                    $("#" + hideID).hide();
                });
                $("#" + viewID).show();
            });
        </script>
</body>

</html>