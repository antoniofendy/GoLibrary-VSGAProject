<?php
    session_start();
    $_SESSION['current_page'] = "katalog";
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
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (max-width: 768px) {
            a.btn {
                width: 100%;
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
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/92/f2/b9/92f2b9c15bf98c5128ceae1ad78fc650.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>Flutter Recipes: Mobile Development Solutions for iOS and Android</h4>
                            <p style="color:#9788a7;">Apress</p>
                            <h6>Fu Cheng</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 2019</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/2f/25/24/2f25249c71ab98c720b019fed27de501.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>Numerical Python: Scientific Computing and Data Science Applications with Numpy, SciPy and Matplotlib</h4>
                            <p style="color:#9788a7;">Apress</p>
                            <h6>Robert Johansson</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 2019</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 4.5
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/c0/c1/dd/c0c1ddedd6a0f1337baac04a6fcf0978.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>Python Algorithms: Mastering Basic Algorithms in the Python Language</h4>
                            <p style="color:#9788a7;">Apress</p>
                            <h6>Magnus Lie Hetland</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 2010</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/22/7f/03/227f03b36ad6b1b4c6c1af4ca444c27d.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>Practical Flutter: Improve your Mobile Development with Google’s Latest Open-Source SDK</h4>
                            <p style="color:#9788a7;">Apress</p>
                            <h6>Frank Zammetti</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 2019</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/df/bf/03/dfbf03cb54fd9a66c88965b235206d0d.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>The ABC Murders</h4>
                            <p style="color:#9788a7;">Black Dog & Leventhal Publishers</p>
                            <h6>Agatha Christie</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 1936</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="edit.php" class="list-group-item list-group-item-action">
                    <div class="row">
                        <div class="col-sm-0 col-md-2 d-flex justify-content-center">
                            <img class="img-katalog" src="https://covers.zlibcdn2.com/covers299/books/95/5e/00/955e00aba327e270364c6c543878cac3.jpg" alt="" srcset="">
                        </div>
                        <div class="col-sm-12 col-md-10">
                            <h4>Death on the Nile</h4>
                            <p style="color:#9788a7;">HarperCollins</p>
                            <h6>Agatha Christie</h6>
                            <div class="addition text-right d-flex flex-row justify-content-end">
                                <div class="year mr-3">
                                    <p><span style="color:#9788a7;">Tahun:</span> 1937</p>
                                </div>
                                <div class="language mr-3">
                                    <p><span style="color:#9788a7;">Bahasa:</span> Inggris</p>
                                </div>
                                <div class="rating">
                                    <i class="fas fa-star" style="color: #d4af37;"></i> 5.0
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
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

