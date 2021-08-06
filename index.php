<?php
    session_start();
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
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/92/f2/b9/92f2b9c15bf98c5128ceae1ad78fc650.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Computers - Programming</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Fu Cheng</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/2f/25/24/2f25249c71ab98c720b019fed27de501.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Computers - Programming</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Robert Johansson</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 4.5
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/c0/c1/dd/c0c1ddedd6a0f1337baac04a6fcf0978.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Computers - Programming</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Magnus Lie Hetland</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/22/7f/03/227f03b36ad6b1b4c6c1af4ca444c27d.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Computers - Programming</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Frank Zammetti</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/df/bf/03/dfbf03cb54fd9a66c88965b235206d0d.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Fiction</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Agatha Christie</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4 d-flex align-items-center flex-column text-center">
                <div class="card-deck">
                    <div class="card text-center">
                        <a href="#" style="text-decoration:none;">
                            <img class="card-img-top" src="https://covers.zlibcdn2.com/covers299/books/b6/64/9e/b6649e537794b130262f1d3df7e20489.jpg" alt="Card image">
                            <div class="card-body">
                                <p class="card-text text-muted">Fiction</p>
                                <a style="text-decoration:none;" href="#"><h5 class="card-title">Agatha Christie</h5></a>
                                <div class="card-footer">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
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

