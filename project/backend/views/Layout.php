<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <!-- core:css -->
    <link rel="stylesheet" href="../assets/backend/vendors/core/core.css">
    <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- end plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/backend/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../assets/backend/vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- endinject -->
  <!-- Layout styles -->  
    <link rel="stylesheet" href="../assets/backend/css/demo_1/style.css">
  <!-- End layout styles -->
  <link rel="shortcut icon" href="../assets/backend/images/favicon.png" />
  <script type="text/javascript" src="../assets/backend/ckeditor/ckeditor.js"></script>
</head>
<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar">
      <div class="sidebar-header">
        <a href="index.php?controller=home" class="sidebar-brand">
          TAKI<span>SALON</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a href="index.php?controller=home" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          <li class="nav-item">
            <a href="pages/apps/chat.html" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Tin Nhắn</span>
            </a>
          </li>
          <!-- manage -->
          <li class="nav-item nav-category">Làm đẹp</li>
          <li class="nav-item">
            <a href="index.php?controller=schedule" class="nav-link">
              <i class="link-icon" data-feather="clipboard"></i>
              <span class="link-title">Lịch đặt trước</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=sevicescategories" class="nav-link">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Danh mục dịch vụ</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=sevices" class="nav-link">
              <i class="link-icon" data-feather="scissors"></i>
              <span class="link-title">Danh sách dịch vụ</span>
            </a>
          </li>
          <li class="nav-item nav-category">Bán hàng</li>
          <li class="nav-item">
            <a href="index.php?controller=orders" class="nav-link">
              <i class="link-icon" data-feather="calendar"></i>
              <span class="link-title">Danh sách orders</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=categories" class="nav-link">
              <i class="link-icon" data-feather="list"></i>
              <span class="link-title">Danh mục sản phẩm</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?controller=products" class="nav-link">
              <i class="link-icon" data-feather="shopping-bag"></i>
              <span class="link-title">Danh sách sản phẩm</span>
            </a>
          </li>
          <!-- /manage -->
          <!-- News -->
          <li class="nav-item nav-category">Tin tức</li>
          <li class="nav-item">
            <a href="index.php?controller=news" class="nav-link">
              <i class="link-icon" data-feather="tv"></i>
              <span class="link-title">Danh sách tin tức</span>
            </a>
          </li>
          <!-- /News -->
          <li class="nav-item nav-category">Pages</li>
          <li class="nav-item">
            <a href="index.php?controller=users" class="nav-link no-active" >
              <i class="link-icon" data-feather="users"></i>
              <span class="link-title">Quản lí users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#errorPages" role="button" aria-expanded="false" aria-controls="errorPages">
              <i class="link-icon" data-feather="grid"></i>
              <span class="link-title">Thông tin web</span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="errorPages">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="index.php?controller=utilities" class="nav-link">Tiện ích</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=productbenefits" class="nav-link">Quyền lợi khách hàng</a>
                </li>
                <li class="nav-item">
                  <a href="index.php?controller=contact" class="nav-link">Liên hệ</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </nav>
        <!-- partial -->
    
        <div class="page-wrapper">      
            <!-- partial:partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i data-feather="search"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-apps">
                            <a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="grid"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="appsDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">Web Apps</p>
                                    <a href="javascript:;" class="text-muted">Edit</a>
                                </div>
                                <div class="dropdown-body">
                                    <div class="d-flex align-items-center apps">
                                        <a href="pages/apps/chat.html"><i data-feather="message-square" class="icon-lg"></i><p>Chat</p></a>
                                        <a href="pages/apps/calendar.html"><i data-feather="calendar" class="icon-lg"></i><p>Calendar</p></a>
                                        <a href="pages/email/inbox.html"><i data-feather="mail" class="icon-lg"></i><p>Email</p></a>
                                        <a href="pages/general/profile.html"><i data-feather="instagram" class="icon-lg"></i><p>Profile</p></a>
                                    </div>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-messages">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="mail"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="messageDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">9 New Messages</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Leonardo Payne</p>
                                                <p class="sub-text text-muted">2 min ago</p>
                                            </div>  
                                            <p class="sub-text text-muted">Project status</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Carl Henson</p>
                                                <p class="sub-text text-muted">30 min ago</p>
                                            </div>  
                                            <p class="sub-text text-muted">Client meeting</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Jensen Combs</p>                                             
                                                <p class="sub-text text-muted">1 hrs ago</p>
                                            </div>  
                                            <p class="sub-text text-muted">Project updates</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Amiah Burton</p>
                                                <p class="sub-text text-muted">2 hrs ago</p>
                                            </div>
                                            <p class="sub-text text-muted">Project deadline</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="figure">
                                            <img src="https://via.placeholder.com/30x30" alt="userr">
                                        </div>
                                        <div class="content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p>Yaretzi Mayo</p>
                                                <p class="sub-text text-muted">5 hr ago</p>
                                            </div>
                                            <p class="sub-text text-muted">New record</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-notifications">
                            <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="bell"></i>
                                <div class="indicator">
                                    <div class="circle"></div>
                                </div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="notificationDropdown">
                                <div class="dropdown-header d-flex align-items-center justify-content-between">
                                    <p class="mb-0 font-weight-medium">6 New Notifications</p>
                                    <a href="javascript:;" class="text-muted">Clear all</a>
                                </div>
                                <div class="dropdown-body">
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="user-plus"></i>
                                        </div>
                                        <div class="content">
                                            <p>New customer registered</p>
                                            <p class="sub-text text-muted">2 sec ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="gift"></i>
                                        </div>
                                        <div class="content">
                                            <p>New Order Recieved</p>
                                            <p class="sub-text text-muted">30 min ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="alert-circle"></i>
                                        </div>
                                        <div class="content">
                                            <p>Server Limit Reached!</p>
                                            <p class="sub-text text-muted">1 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="layers"></i>
                                        </div>
                                        <div class="content">
                                            <p>Apps are ready for update</p>
                                            <p class="sub-text text-muted">5 hrs ago</p>
                                        </div>
                                    </a>
                                    <a href="javascript:;" class="dropdown-item">
                                        <div class="icon">
                                            <i data-feather="download"></i>
                                        </div>
                                        <div class="content">
                                            <p>Download completed</p>
                                            <p class="sub-text text-muted">6 hrs ago</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="dropdown-footer d-flex align-items-center justify-content-center">
                                    <a href="javascript:;">View all</a>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="https://via.placeholder.com/30x30" alt="profile">
                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="figure mb-3">
                                        <img src="https://via.placeholder.com/80x80" alt="">
                                    </div>
                                    <div class="info text-center">
                                        <p class="name font-weight-bold mb-0"><?php  ?></p>
                                        <p class="email text-muted mb-3"><?php  ?></p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="pages/general/profile.html" class="nav-link">
                                                <i data-feather="user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="edit"></i>
                                                <span>Edit Profile</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">
                                                <i data-feather="repeat"></i>
                                                <span>Switch User</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.php?controller=login&action=logout" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="page-content">
                <?php echo $this->view; ?>
            </div>
            <!-- partial:partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2020 <a href="https://facebook.com/hoangybi" target="_blank">Hoangdz</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">From Hải Phòng With <i class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->
        
        </div>
    </div>

    <!-- core:js -->
    <script src="../assets/backend/vendors/core/core.js"></script>
    <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="../assets/backend/vendors/chartjs/Chart.min.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.js"></script>
  <script src="../assets/backend/vendors/jquery.flot/jquery.flot.resize.js"></script>
  <script src="../assets/backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <script src="../assets/backend/vendors/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/backend/vendors/progressbar.js/progressbar.min.js"></script>
    <!-- end plugin js for this page -->
    <!-- inject:js -->
    <script src="../assets/backend/vendors/feather-icons/feather.min.js"></script>
    <script src="../assets/backend/js/template.js"></script>
    <!-- endinject -->
  <!-- custom js for this page -->
  <script src="../assets/backend/js/dashboard.js"></script>
  <script src="../assets/backend/js/datepicker.js"></script>
    <!-- end custom js for this page -->
</body>
</html>    