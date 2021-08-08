<?php
    session_start();
    $_SESSION['current_page'] = "katalog";
    include "./lib/config.php";
    include "./ajax/cari.php";
?>

<!-- Include Header -->
<?php 
    include "_include/header.php";
?>

<body>

    <style>

        #konten {
            padding-left: 100px;
            padding-right: 100px;
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            a.btn {
                width: 100%;
            }

            .book-list {
                width: 100%;
            }

            #konten {
                padding-left: 0;
                padding-right: 0;
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
            <input class="form-control" style="width: 50%" type="text" placeholder="Cari E-Book" aria-label="Search" id="keyword">
        </form>
    </div>
    <div class="container pt-5">
        <div class="row d-flex justify-content-center flex-column" id="konten">
            <div class="col-12 mb-4 text-center">
                <h1>Daftar <span style="color: #007bff;">Katalog</span></h1>
                <p>Kumpulan rekomendasi buku untukmu</p>
            </div>
            <div class="list-group ml-2 mr-2">
                <?php 
                    $rs = mysqli_query($con, "SELECT * FROM buku ORDER BY `rating` DESC LIMIT 6");
                    while ($data = mysqli_fetch_array($rs)) {
                ?>
                    <a href="view_book.php?isbn=<?= $data['isbn']; ?>" class="list-group-item list-group-item-action">
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
    </div>
    

    <!-- Include Footer -->
    <?php 
        include "_include/footer.php"; 
    ?>
    
    <script src="./js/script.js"></script>

</body>
</html>

