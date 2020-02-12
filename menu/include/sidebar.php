<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="#" class="brand-link">
      <img src="../assets/img/axa.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AXA Philippines</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            $_SESSION['full_name']
          </a>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php

          if ($_SESSION['position'] == "Branch Head" || $_SESSION['position'] == "Zone Head") {
            require "Head.php";
          } else if ($_SESSION['position'] == "Unit Manager") {
            require "UnitMan.php";
          } else if ($_SESSION['position'] == "Financial Adviser") {
            require "FinAd.php";
          }
          ?>          
        </ul>
      </nav>
    </div>
  </aside>

