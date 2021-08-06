<?php
$current_page = 'dashboard';
include 'access/session-handler.php';
include '../lib/config.php';

include "_include-admin/head.php";
?>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include "_include-admin/sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include "_include-admin/navbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4 row">
            <h1 class="h3 mb-0 text-gray-800 accent-font col-6"><b>Dashboard</b></h1>
          </div>

          <!-- Content Row -->
          <div class="row">
            <div class="col-lg-10 col-12">
              <div class="card shadow mb-4">
                <div class="card-body col-12 col-md-10 col-xl-8">
                  <h3 class="h5 accent-font-t font-weight-bold">Welcome to Dashboard</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include "_include-admin/footer.php"; ?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top" style="z-index:999;">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <?php include "_include-admin/javascript.php"; ?>

  <!-- Logout Modal-->
  <?php include "_include-admin/modal.php"; ?>
</body>

</html>