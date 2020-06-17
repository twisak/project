<nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
<?php
include '../../conn_db.php';
$session_images = $_SESSION['username'];
$sql_session_images = "select * from tbl_emp inner join tbl_level on tbl_emp.id_level = tbl_level.id where tbl_emp.username = '".$session_images."' ";
$query_session_images = mysqli_query($conn,$sql_session_images);
$result_session_images = mysqli_fetch_array($query_session_images);
?>
  <div class="user-info">
    <!-- <img src="images/face.jpg" alt=""> -->
    <?php
    if($result_session_images['images_yourself']==null){
    ?>
      <img src="../../images/no_image.gif" width="90" hight="90" class="img-responsive">
      <?php
    }else{
      ?>
    <img src="../../images/images_profile/<?php echo $result_session_images['images_yourself'];?>" width="90" hight="90" class="img-responsive">
    <?php
    }
    ?>
    <p class="name"><?php echo $result_session_images['name']; ?>&nbsp;<?php echo $result_session_images['surname']; ?></p>
    <p class="designation"><?php echo $result_session_images['level_name']; ?></p>
    <span class="online"></span>
  </div>
  <ul class="nav">
    <li class="nav-item ">
      <a class="nav-link" href="../../dashboard-ceo.php">
        <img src="images/icons/1.png" alt="">
        <span class="menu-title">แดซบอร์ด</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sample-pages1" aria-expanded="false" aria-controls="sample-pages1">
        <img src="images/icons/004-coding.png" alt="">
        <span class="menu-title">ตั้งค่าข้อมูลส่วนตัว<i class="fa fa-sort-down"></i></span>
      </a>
      <div class="collapse" id="sample-pages1">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="../data_person/index.php">
            ตั้งค่าข้อมูลส่วนตัว
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../data_password/index.php">
            ตั้งค่ารหัสผ่าน
            </a>
          </li>
        </ul>
      </div>
    </li>

    <li class="nav-item ">
      <a class="nav-link" href="../tbl_all/tbl-inbox-ceo/tbl-inbox-ceo.php">
        <img src="images/icons/014-chat.png" alt="">
        <span class="menu-title">กล่องข้อความ</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="../tbl_all/tbl-activity/tbl-activity.php">
        <img src="images/icons/005-calendar.png" alt="">
        <span class="menu-title">ตรวจสอบตารางประชุม</span>
      </a>
    </li>


    <!-- <li class="nav-item">
      <a class="nav-link" href="pages/ui-elements/buttons.html">
        <img src="images/icons/4.png" alt="">
        <span class="menu-title">เช็คตารางการประชุม</span>
      </a>
    </li> -->
    <!-- <li class="nav-item">
      <a class="nav-link" href="pages/tables/index.html">
        <img src="images/icons/5.png" alt="">
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/index.html">
        <img src="images/icons/6.png" alt="">
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/index.html">
        <img src="images/icons/7.png" alt="">
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-elements/typography.html">
        <img src="images/icons/8.png" alt="">
        <span class="menu-title">Typography</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
        <img src="images/icons/9.png" alt="">
        <span class="menu-title">Sample Pages<i class="fa fa-sort-down"></i></span>
      </a>
      <div class="collapse" id="sample-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank_page.html">
              Blank Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html">
              Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/404.html">
              404
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/500.html">
              500
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <img src="images/icons/10.png" alt="">
        <span class="menu-title">Settings</span>
      </a>
    </li> -->
  </ul>
</nav>

<!-- <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
  <div class="user-info">
    <img src="images/face.jpg" alt="">
    <p class="name">Richard V.Welsh</p>
    <p class="designation">Manager</p>
    <span class="online"></span>
  </div>
  <ul class="nav">
    <li class="nav-item active">
      <a class="nav-link" href="index.html">
        <img src="images/icons/1.png" alt="">
        <span class="menu-title">หน้าแรก</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/widgets.html">
        <img src="images/icons/2.png" alt="">
        <span class="menu-title">Widgets</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/forms/index.html">
        <img src="images/icons/005-forms.png" alt="">
        <span class="menu-title">Forms</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-elements/buttons.html">
        <img src="images/icons/4.png" alt="">
        <span class="menu-title">Buttons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/tables/index.html">
        <img src="images/icons/5.png" alt="">
        <span class="menu-title">Tables</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/charts/index.html">
        <img src="images/icons/6.png" alt="">
        <span class="menu-title">Charts</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/icons/index.html">
        <img src="images/icons/7.png" alt="">
        <span class="menu-title">Icons</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="pages/ui-elements/typography.html">
        <img src="images/icons/8.png" alt="">
        <span class="menu-title">Typography</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#sample-pages" aria-expanded="false" aria-controls="sample-pages">
        <img src="images/icons/9.png" alt="">
        <span class="menu-title">Sample Pages<i class="fa fa-sort-down"></i></span>
      </a>
      <div class="collapse" id="sample-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/blank_page.html">
              Blank Page
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/login.html">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/register.html">
              Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/404.html">
              404
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/samples/500.html">
              500
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <img src="images/icons/10.png" alt="">
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav> -->
