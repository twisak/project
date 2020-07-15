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
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
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
    <?php include '../mamu/manu_admin.php'; ?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">ข้อมูลเนื้อเรื่อง</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">ข้อมูลเนื้อเรื่อง</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <!-- column -->
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">ข้อมูลเนื้อเรื่อง</h4>

                                <div class="text-right">
                                    <a href="../tb_title/form_title.php"><button type="button" class="btn btn-primary">เพิ่มหัวข้อเรื่อง</button></a>
                                </div>

                                <br>
                                  <div class="text-right">
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
                                        <div class="col-md-8">
                                        </div>
                                          <div class="col-md-3 col-8">
                                              <input class="form-control" type="text" placeholder="Search..." value="<?php echo $strKeyword;?>" name="txtKeyword" id="txtKeyword">
                                          </div>
                                          <div class="col-md-1 col-2" style="padding-top:4px;">
                                                <button type="submit" class="btn btn-info"  name="btnsearch">ค้นหา</button>
                                          </div>
                                      </div>
                                    </div>
                                    </form>
                                  </div>


                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                                <th class="text-center">ลำดับ</th>
                                                <th class="text-center">เรื่อง</th>
                                                <th class="text-center">เนื้อหา</th>
                                                <th class="text-center">แก้ไข</th>
                                                <th class="text-center">ลบ</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            $i=1;
                                            $i<="";

                                            include '../../administrator/connect.php';
                                            $sql_title ="SELECT * FROM tb_title WHERE (title LIKE '%".$strKeyword."%' or body LIKE '%".$strKeyword."%' )";
                                            $query_title = mysqli_query($conn,$sql_title);
                                            while($row_title = mysqli_fetch_array($query_title,MYSQLI_ASSOC))
                                            {
                                                $id = $row_title['id'];
                                                $title = $row_title['title'];
                                                $body = $row_title['body'];

                                        ?>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><?php echo $i;?></td>
                                                <td><?php echo $title;?></td>
                                                <td><?php echo $body;?></td>
                                                <td><a href="edit_form_title.php?id=<?php echo $row_title['id'];?>" class="btn btn-warning">แก้ไข</a></td>
                                                <td><a href="JavaScript:if(confirm('ยืนยันการลบ ?') == true){window.location='delete_title.php?id=<?php echo $row_title["id"];?>';}" class="btn btn-danger">ลบ</a></td>
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
                    </div>
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
    <!-- jQuery peity -->
    <script src="../assets/node_modules/peity/jquery.peity.min.js"></script>
    <script src="../assets/node_modules/peity/jquery.peity.init.js"></script>
</body>

</html>
