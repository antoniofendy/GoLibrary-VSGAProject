<?php
session_start();
$current_page = 'book';
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
                    <h1 class="h3 mb-0 text-gray-800 accent-font col-6"><b>Book</b></h1>
                </div>

                <?php
                  if (isset($_GET['view'])) {
                      include 'book/book-view.php';
                  } else if (isset($_GET['action']) && $_GET['action'] == "new") {
                      include 'book/book-new.php';
                  } else {
                      include 'book/book-list.php';
                  }
                ?>
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

    <!-- Logout Modal-->
    <?php include "_include-admin/modal.php"; ?>

    <!-- Bootstrap core JavaScript-->
    <?php include "_include-admin/javascript.php"; ?>
</body>

</html>

<link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<script src="../vendor/datatables/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
<script src="../js/admin/demo/datatables-demo.js"></script>

<script>
  $(document).ready(function() {
    $('#locationTable').DataTable({
      "order": [0, 'asc'],
      "columns": [{
          "width": "20px"
        },
        null,
        {
          "width": "60px",
          "orderable": false
        },
        {
          "searchable": false,
          "width": "100px",
          "orderable": false
        },
      ],
      language: {
        emptyTable: "No location data"
      },
      "dom": "<'row'<'col-12 col-md-2 p-0 mb-2 mb-md-0 text-md-left text-center'<'#newBtn.btn btn-sm btn-primary shadow-sm p-0'>><'col-12 col-md-10 text-right d-inline-block'f>>t<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>"
    });

    $('<a href="locations.php?action=new" class="btn btn-sm btn-primary shadow-sm accent-font-t"><i id="newBtnText" class="fas fa-plus fa-sm text-white-50"></i> New</a>').appendTo('#newBtn');
  });

  function deleteConfirm(url) {
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>