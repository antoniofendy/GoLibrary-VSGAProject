<?php
    session_start();
    include "./lib/config.php";
    $_SESSION['current_page'] = "index";
?>

<!-- Include Header -->
<?php 
    include "_include/header.php";
?>

<body>

    <!-- Include Navbar -->
    <?php
        include "_include/navbar.php";
    ?>
    
    <div class="jumbotron text-white text-center" style="padding-top:100px">
        <h1 class="display-4">Selamat datang di website GoLibrary</h1>
        <p class="lead">Platform E-Library yang bisa kamu akses kapanpun dan di manapun</p>
        <hr class="my-4">
        <form class="form-inline my-2 my-lg-0 d-flex justify-content-center" autocomplete="off" action="#">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari E-Book" aria-label="Search">
            <button class="btn btn-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i> Cari</button>
        </form>
    </div>
    <div class="container pt-5">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <h1>Koleksi <span style="color: #007bff;">Terpopuler</span></h1>
            </div>
            <?php 
                $rs = mysqli_query($con, "SELECT * FROM buku ORDER BY `isbn` ASC");
                while ($data = mysqli_fetch_array($rs)) {
            ?>
                <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                    <div class="card-deck">
                        <div class="card text-center">
                            <a href="#" style="text-decoration:none;">
                                <img class="card-img-top" src="./admin/storage/book_cover/<?= $data['cover']; ?>" alt="Card image">
                                <div class="card-body">
                                    <p class="card-text text-muted"><?= $data['kategori']; ?></p>
                                    <a style="text-decoration:none;" href="#"><h5 class="card-title"><?= $data['penulis']; ?></h5></a>
                                    <div class="card-footer">
                                        <i class="fas fa-star" style="color: #d4af37;"></i> <?= $data['rating']; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            <?php 
                };
            ?>
        </div>
        <div class="row pt-5">
            <div class="col-12 pl-4">
                <h1 class="text-center">Keuntungan Menggunakan <span style="color: #007bff;">GoLibrary</span></h1>
                <div class="row mt-4 ">
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center flex-column text-center">
                        <img class="img-benefit" src="https://perpustakaan.kemdikbud.go.id/static/images/untung_akses_koleksi.jpg" alt="">
                        <h5>Akses ke berbagai koleksi menarik yang bisa dipinjam</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center flex-column text-center">
                        <img class="img-benefit" src="https://perpustakaan.kemdikbud.go.id/static/images/untung_komunitas.jpg" alt="">
                        <h5>Bergabung dengan ribuan komunitas pengguna aktif</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center flex-column text-center">
                        <img class="img-benefit" src="https://perpustakaan.kemdikbud.go.id/static/images/untung_informassi.jpg" alt="">
                        <h5>Dapatkan berbagai informasi menarik</h5>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3 d-flex justify-content-center flex-column text-center">
                        <img class="img-benefit" src="https://perpustakaan.kemdikbud.go.id/static/images/untung_menang.jpg" alt="">
                        <h5>Ikuti berbagai kegiatan dan acara menarik bersama anggota lain</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Include Footer -->
    <?php 
        include "_include/footer.php"; 
    ?>
    
    <script src="./js/script.js"></script>

</body>
</html>

