<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <a class="navbar-brand" href="index.php">GoLibrary</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item <?php echo $_SESSION['current_page'] == 'index' ? 'active' : '' ?>">
            <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item <?php echo $_SESSION['current_page'] == 'katalog' ? 'active' : '' ?>">
            <a class="nav-link" href="katalog.php">Katalog</a>
        </li>
        <li class="nav-item <?php echo $_SESSION['current_page'] == 'akun' ? 'active' : '' ?>">
            <a class="nav-link" href="#">Akun</a>
        </li>
    </div>
</nav>