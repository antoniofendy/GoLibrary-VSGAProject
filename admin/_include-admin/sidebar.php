<style>
  .sidebar {
    background-color: #1e3799;
  }
</style>

<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
      <i class="fas fa-cogs"></i>
    </div>
    <div class="sidebar-brand-text mx-2 accent-font" style="text-transform:none;">Administrator Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?php echo $current_page == 'dashboard' ? 'active' : '' ?>">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading accent-font">
    Master Data
  </div>

    <!-- Nav Item - Users -->
    <li class="nav-item <?php echo $current_page == 'users' ? 'active' : '' ?>">
      <a href="users.php" class="nav-link">
        <i class="fas fa-user-friends"></i>
        <span>Users</span>
      </a>
    </li>


  <!-- Nav Item - Messages -->
  <li class="nav-item <?php echo $current_page == 'messages' ? 'active' : '' ?>">
    <a href="messages.php" class="nav-link">
      <i class="fas fa-envelope"></i>
      <span>Messages</span>
    </a>
  </li>

  <!-- Nav Item - Articles -->
  <li class="nav-item <?php echo $current_page == 'articles' ? 'active' : '' ?>">
    <a href="articles.php" class="nav-link">
      <i class="fas fa-align-center"></i>
      <span>Articles</span>
    </a>
  </li>

  <!-- Nav Item - Locations -->
  <li class="nav-item <?php echo $current_page == 'locations' ? 'active' : '' ?>">
    <a href="locations.php" class="nav-link">
      <i class="fas fa-map-marked-alt"></i>
      <span>Locations</span>
    </a>
  </li>

  <!-- Nav Item - Hotels -->
  <li class="nav-item <?php echo $current_page == 'hotels' ? 'active' : '' ?>">
    <a href="hotels.php" class="nav-link">
      <i class="fas fa-hotel"></i>
      <span>Hotels</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>