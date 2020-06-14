<?php 

    include '../../administrator/connect.php';
    $id = $_SESSION['username'];
    //echo $id;
// $sql ="SELECT * FROM tb_personnel WHERE username = '".$id."' ";
// $query = mysqli_query($conn,$sql);
// while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
    
//     $id = $row['id'];
//     $name = $row['name'];
//     $lasname = $row['lasname'];
//     $address = $row['address'];
//     $mail = $row['mail'];
//     $tel = $row['tel'];
//     $username = $row['username'];
//     $password = $row['password'];
//     $status = $row['status'];
//}
?>
<header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <!-- <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class="" /> <span class="hidden-md-down">Mark Sanders &nbsp;</span> </a>
                        </li> -->
                        <li class="dropdown no-arrow">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="hidden-md-down">
                                <?php echo $id; ?>&nbsp;
                            </span>
                            <i class="fa fa-user-circle-o"></i> 
                        </a>
                            
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="logout.php">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-900"></i>
                            ออกจากระบบ
                            </a>
                        </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="../dashboard/index.php" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="../user/form_user.php" aria-expanded="false"><i class="fa fa-globe"></i><span class="hide-menu">ข้อมูลส่วนตัว</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark collapsed" href="#" data-toggle="collapse" data-target="#collapseB" aria-expanded="false" aria-controls="collapseB">
                                <i class="fa fa-sun-o"></i>
                                <span>ข้อมูลเอกสาร</span>
                            </a>
                            <div id="collapseB" class="collapse" aria-labelledby="headingB" data-parent="#accordionSidebar">
                                <div class="bg-white py-2 collapse-inner rounded col-lg-12">
                                    <a class="waves-effect waves-dark" href="../input_doc/input_doc_lend.php"><i class="fa fa-caret-right"></i> เอกสารสัญญาณยืม</a>
                                    <a class="waves-effect waves-dark" href="../input_doc/input_doc_salary.php"><i class="fa fa-caret-right"></i> เอกสารเงินเดือน</a>
                                    <a class="waves-effect waves-dark" href="../input_doc/input_doc_cleansing.php"><i class="fa fa-caret-right"></i> เอกสารล้างหนี้</a>
                                    <a class="waves-effect waves-dark" href="../input_doc/tb_doc_contract.php"><i class="fa fa-caret-right"></i> เอกสารจ้างเหมาบริการ</a>
                                    <a class="waves-effect waves-dark" href="../input_doc/input_doc_note.php"><i class="fa fa-caret-right"></i>    เอกสารบันทึกข้อความอื่นๆ</a>
                                </div>
                            </div>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="../../administrator/logout.php" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Logout</span></a>
                        </li>
                        <!-- <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i class="fa fa-bookmark-o"></i><span class="hide-menu">Blank</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="pages-error-404.html" aria-expanded="false"><i class="fa fa-question-circle"></i><span class="hide-menu">404</span></a>
                        </li> -->
                    </ul>
                    <!-- <div class="text-center m-t-30">
                        <a href="https://wrappixel.com/templates/adminwrap/" class="btn waves-effect waves-light btn-info hidden-md-down"> Upgrade to Pro</a>
                    </div> -->
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        