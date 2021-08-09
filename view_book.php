<!-- judul, penulis, penerbit, tahun, bahasa, isbn, kategori, cover/img, file -->

<?php
    session_start();
    $_SESSION['current_page'] = "form";

    include "./lib/config.php";
    $stmt = $con->prepare("SELECT * FROM `buku` WHERE `buku`.`isbn` = ?");
    $stmt->bind_param("s", $_GET['isbn']);
    $stmt->execute();
    $rs = $stmt->get_result();
    $data = $rs->fetch_assoc();

?>

<!-- Include Header -->
<?php 
    include "_include/header.php";
?>

<body>

    <!-- Style -->
    <style>
        .title {
            border-bottom: 1px solid white;
        }

        .card {
            border-radius: 20px;
        }

        .card:hover {
            transform: scale(0.99);
            transition: 0.2s;
        }

        .card>div {
            display: flex;
            align-items: center;
        }

        .card .fa {
            font-size: 1.5rem;
        }

        .form-control {
            background-color: #ccc;
        }

        .error {
            border-color: red;
            color: red;
            font-size: 0.8rem;
        }

        /* Extra small devices (phones, 600px and down) */
        @media only screen and (max-width: 600px) {
            button[type="submit"] {
                width: 100%;
            }
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (max-width: 768px) {
            button[type="submit"]  {
                width: 100%;
            }
        } 

    </style>

    <!-- Include Navbar -->
    <?php
        include "_include/navbar.php";
    ?>

    <div class="container pt-5 mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-12 mb-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php" style="text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 mb-3">
                <div id="form-title" class="title">
                    <h2 class="accent-font-t mb-1 text-left">Informasi Buku</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <!-- Form -->
                <form id="form-body" action="#" class="needs-validation" novalidate autocomplete="off" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-sm-12 col-md-3 mb-3">
                            <img src="./admin/storage/book_cover/<?= $data['cover'] ?>" alt="" class="img-fluid" style="width: 100%;">
                        </div>
                        <div class="col-sm-12 col-md-9">
                            <h4><?= $data['judul'] ?></h4>
                            <h5 style="color: #007bff;"><?= $data['penulis'] ?></h5>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi id atque temporibus dicta, dolorem voluptate fugiat, impedit animi ad illum doloremque pariatur eos ipsam facilis velit quod, minima modi maxime.
                            </p>
                            <div class="row">
                                <div class="col-12">
                                    <table border="0">
                                        <tr>
                                            <td style="color: #658fc4;" width="30%">ISBN</td>
                                            <td>:</td>
                                            <td> <?= $data['isbn'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #658fc4;" width="30%">Penerbit</td>
                                            <td>:</td>
                                            <td> <?= $data['penerbit'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #658fc4;" width="30%">Bahasa</td>
                                            <td>:</td>
                                            <td> <?= $data['bahasa'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #658fc4;" width="31%">Tahun</td>
                                            <td>:</td>
                                            <td> <?= $data['tahun'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #658fc4;" width="31%">Kategori</td>
                                            <td>:</td>
                                            <td> <?= $data['kategori'] ?></td>
                                        </tr>
                                        <tr>
                                            <td style="color: #658fc4;" width="31%">Rating</td>
                                            <td>:</td>
                                            <td> <i class="fas fa-star" style="color: #d4af37;"></i> <?= $data['rating'] ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a class="btn rounded-0 btn-primary mt-3" href="./vendor/pdfjs/web/viewer.html?file=../../../admin/storage/book_file/<?= $data['berkas']; ?>"  role="button">
                                <i class="fas fa-eye"> </i> Baca Ebook
                            </a>
                        </div>
                    </div>
                    
                </form>
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

<!-- href="./admin/storage/book_file/" -->