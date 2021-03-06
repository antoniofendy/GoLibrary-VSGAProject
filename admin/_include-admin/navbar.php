<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none mr-3 text-dark">
    <i class="fa fa-bars"></i>
  </button>

  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">

      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php
        $id = $_SESSION['userid'];
        $stmt = $con->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_assoc();

        // echo '<img src="../img/user/' . $data['foto'] . '" alt="" class="img-profile rounded-circle">'; 
        ?>
        <span class="mr-3 d-none d-lg-inline text-dark small accent-font-t"><?= $data['username'] ?></span>
        <img src="img/defaultuser.jpg" class="img-profile rounded-circle" alt="" style="object-fit: cover;">
      </a>
      <!-- Dropdown - User Information -->
      <div class="rounded-0 dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Logout
        </a>
      </div>
    </li>

  </ul>

</nav>