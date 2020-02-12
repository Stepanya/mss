<?php 
include "../menu/include/header.php";
include "../menu/include/sidebar.php";
?>
<div class="content-wrapper" style="min-height: 1211.06px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">500 Error Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="error-page">
        <h2 class="headline text-danger"> 500</h2>

        <div class="error-content">
          <h3><i class="fa fa-exclamation-triangle text-danger"></i> Oops! Something went wrong.</h3>

          <p>
           We will work on fixing that right away.
            Meanwhile, you may <a href="../menu/dashboard.php">return to dashboard</a>
          </p>
        </div>
        <!-- /.error-content -->
      </div>
      <!-- /.error-page -->
    </section>
    <!-- /.content -->
  </div>

<?php include "../menu/include/footer.php"; ?>