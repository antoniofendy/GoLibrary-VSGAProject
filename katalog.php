<?php
    session_start();
    $_SESSION['current_page'] = "katalog";
    include "./lib/config.php";
?>

<!-- Include Header -->
<?php 
    include "_include/header.php";
?>

<body>

    <style>
        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            a.btn {
                width: 100%;
            }

            .book-list {
                width: 100%;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            a.btn {
                width: 100%;
            }

            .book-list {
                width: 700px;
            }
        } 

        /* Large devices (laptops/desktops, 992px and up) */
        @media only screen and (min-width: 992px) {
            .book-list { 
                width: 900px;
            }
        }
        
    </style>

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
        <div class="row d-flex justify-content-center">
            <div class="col-12 mb-4 text-center">
                <h1>Daftar <span style="color: #007bff;">Katalog</span></h1>
                <p>Kumpulan rekomendasi buku untukmu</p>
            </div>
            <div class="list-group ml-2 mr-2">
                <?php 
                    $rs = mysqli_query($con, "SELECT * FROM buku ORDER BY `isbn` ASC");
                    while ($data = mysqli_fetch_array($rs)) {
                ?>
                    <a href="edit.php" class="list-group-item list-group-item-action">
                        <div class="row book-list">
                            <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                                <img class="img-katalog" src="./admin/storage/book_cover/<?= $data['cover']; ?>" alt="" srcset="">
                            </div>
                            <div class="col-sm-12 col-md-10" style="width: 100%;">
                                <h4><?= $data['judul']; ?></h4>
                                <p style="color:#9788a7;"><?= $data['penerbit']; ?></p>
                                <h6><?= $data['penulis'] ?></h6>
                                <div class="addition text-right d-flex flex-row justify-content-end">
                                    <div class="year mr-3">
                                        <p><span style="color:#9788a7;">Tahun:</span> <?= $data['tahun']; ?></p>
                                    </div>
                                    <div class="language mr-3">
                                        <p><span style="color:#9788a7;">Bahasa:</span> <?= $data['bahasa']; ?></p>
                                    </div>
                                    <div class="rating">
                                        <i class="fas fa-star" style="color: #d4af37;"></i>: <?= $data['rating']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php 
                    };
                ?>
            </div>
        </div>
        <nav aria-label="Page navigation" class="d-flex justify-content-center mt-5">
            <ul class="pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
                </li>
            </ul>
        </nav>
    </div>
    

    <!-- Include Footer -->
    <?php 
        include "_include/footer.php"; 
    ?>
    
    <script src="./js/script.js"></script>

</body>
</html>

