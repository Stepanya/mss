<?php 
session_start();

if (!isset($_SESSION['user_id'])) {
  header("location: ../login.php?kick");
  exit();
}
include "../connection.php";
include "../notifications/loadnotifs.php";

$id = $_SESSION['user_id'];
$sales = loadsales($con);
$notifs = loadnotifs($con);
$count = count($notifs);
$sale_count = $sales->num_rows;
$position = $_SESSION['position'];
$hiredate = formatdate2($_SESSION['hire_date']);

function formatdate2($date) {
  return date_format(date_create($date), "M j, Y");
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>AXA Philippines | Life Insurance &amp; Investments</title>

  <link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../AdminLTE/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../AdminLTE/plugins/font-awesome/css/font-awesome-animation.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../AdminLTE/plugins/datatables/dataTables.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../AdminLTE/plugins/sweetalert2/sweetalert2.min.css">
  <!-- Pace JS -->
  <link rel="stylesheet" href="../AdminLTE/plugins/pace/pace.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../AdminLTE/plugins/select2/css/select2.min.css">
  <!-- Ion Slider -->
  <link rel="stylesheet" href="../AdminLTE/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- Styles -->
  <link rel="stylesheet" href="../assets/css/styles.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
  <script src="../AdminLTE/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="../AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../AdminLTE/plugins/datatables/dataTables.bootstrap4.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="../AdminLTE/plugins/sweetalert2/sweetalert2.min.js"></script>
</head>
<body class="hold-transition sidebar-mini font-14 layout-navbar-fixed layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-navy navbar-dark border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link faa-parent animated-hover" data-widget="pushmenu" href="#">
          <i class="fa fa-bars faa-horizontal"></i>
        </a>
      </li>
    </ul>


    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link faa-parent animated-hover" data-toggle="dropdown" href="#">
          <i class="fa fa-bell faa-ring"></i>
          <span class="badge badge-warning navbar-badge"><?=$sale_count?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right notif">
          <span class="dropdown-header"><?=$sale_count?> Notifications</span>
          <div class="dropdown-divider"></div>
          <?php while ($sale = $sales->fetch_assoc()) {?>
            <a href="sales_tracker.php" class="dropdown-item">
              <small>
                <i class="fa fa-clock-o"></i>
                <?=formatdatenotif($sale['post_date'])?>
              </small>
              <br>
              <i class="fa fa-shopping-cart mr-2"></i> <?=$sale['message']?>
            </a>
            <div class="dropdown-divider"></div>
          <?php }?> 
        </div>
      </li>
      <!-- Announcements Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link faa-parent animated-hover" data-toggle="dropdown" href="#">
          <i class="fa fa-bullhorn faa-wrench"></i>
          <span class="badge badge-danger navbar-badge"><?=$count?></span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right notif">
          <span class="dropdown-header"><?=$count?> Announcements</span>
          <div class="dropdown-divider"></div>
          <?php foreach($notifs as $notif) {?>
            <a href="announcements.php?notif=<?=$notif['id']?>" class="dropdown-item" title="Click to view more">
              <!-- Message Start -->
              <div class="media">
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    <b><?=$notif['subject']?></b>
                  </h3>
                  <p class="text-sm">
                    By: <?=$notif['posted_by']?> 
                    (<?=$notif['position']?>)
                  </p>
                  <p class="text-sm text-muted">
                    <i class="fa fa-clock-o mr-1"></i>
                    <?=$notif['date']?>
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
          <?php }?>
          <div class="dropdown-divider"></div>
        </div>
      </li>
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <img src="../AdminLTE/dist/img/avatar5.png" class="user-image img-circle elevation-2" alt="User Image">
          <span class="d-none d-md-inline"><?=$_SESSION['full_name']?></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right user-profile">
          <!-- User image -->
          <li class="user-header bg-dark">
            <img src="../AdminLTE/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            <p>
              <?=$_SESSION['full_name']?>
              <br>
              <small><?=$position?></small>
              <small>Member since <?=$hiredate?></small>
            </p>
          </li>
          <li class="user-footer">
            <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
            <a href="../logout.php" class="btn btn-default btn-flat float-right">Sign out</a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  
  <!-- /.navbar -->
