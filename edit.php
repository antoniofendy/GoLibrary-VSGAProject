<!-- judul, penulis, penerbit, tahun, bahasa, isbn, kategori, cover/img, file -->

<?php
    session_start();
    include "lib/data.php";
    $_SESSION['current_page'] = "edit";
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
                <div id="form-title" class="title">
                    <h2 class="accent-font-t mb-1 text-left">Input Data <span style="color: #007bff;">Buku</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8">
                <!-- Form -->
                <form id="form-body" action="index.php" class="needs-validation" novalidate autocomplete="off" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="book">Book Cover*</label>
                        <input type="file" class="form-control-file" accept="image/jpg, image/png, image/jpeg" name="book" id="book" required>
                        <small class="form-text mt-1 mb-0 text-muted">Minimum dimensi 250x250 px.</small>
                    </div>
                    <div class="form-group">
                        <label for="berkas">Berkas Buku*</label>
                        <input type="file" class="form-control-file" accept=".pdf" name="berkas" id="berkas" required>
                        <small class="form-text mt-1 mb-0 text-muted">Hanya PDF.</small>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input name="judul" type="text" class="form-control rounded-0" id="judul" required>
                        <div class="invalid-feedback">
                            Judul buku wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input name="penulis" type="text" class="form-control rounded-0" id="penulis" required>
                        <div class="invalid-feedback">
                            Penulis buku wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input name="penerbit" type="text" class="form-control rounded-0" id="penerbit" required>
                        <div class="invalid-feedback">
                            Penerbit buku wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Terbit</label>
                        <input name="tahun" type="text" class="form-control rounded-0" id="tahun" required>
                        <div class="invalid-feedback">
                            Tahun tebit wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bahasa">Bahasa</label>
                        <input name="bahasa" type="text" class="form-control rounded-0" id="bahasa" required>
                        <div class="invalid-feedback">
                            Bahasa buku wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isbn">ISBN</label>
                        <input name="isbn" type="text" class="form-control rounded-0" id="isbn" required>
                        <div class="invalid-feedback">
                            ISBN buku wajib diisi
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="" disabled selected>Pilih Kategori</option>
                            <option value="1">Computer - Programming</option>
                            <option value="0">Fiction</option>
                        </select>
                        <div class="invalid-feedback">
                            kategori buku wajib diisi
                        </div>
                    </div>
                    <button class="btn float-right rounded-0 btn-primary" type="submit" id="btn-submit">
                        Submit Form
                    </button>
                </form>
            </div>
        </div>
    </div>
    

    <!-- Include Footer -->
    <?php 
        include "_include/footer.php"; 
    ?>
    
    <script src="./js/script.js"></script>

    <!-- JQuery for Validation -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js"></script>
    
    <!-- Script for Validator -->
    <script>
        $(document).ready(function() {
            $("#form-body").validate({
            errorElement: "span",
            rules: {
                nama: "required",
                mail: {
                    required: true,
                    email: true
                },
                gender: "required",
                tempat_lahir: "required",
                tanggal_lahir: "required",
                kejuruan: "required",
                beasiswa: "required"
            },
            messages: {
                nama: {
                    required: "Wajib mengisi nama siswa"
                },
                mail: {
                    required: "Wajib mengisi email siswa",
                    email: "Wajib diisi dalam format email"
                },
                gender: {
                    required: "Wajib mengisi gender siswa"
                },
                tempat_lahir: {
                    required: "Wajib mengisi tempat lahir siswa"
                },
                tanggal_lahir: {
                    required: "Wajib mengisi tanggal lahir siswa"
                },
                kejuruan: {
                    required: "Wajib mengisi kejuruan siswa"
                },
                beasiswa: {
                    required: "Wajib mengisi status beasiswa dari siswa"
                }
            },
            onfocusout: false,
            invalidHandler: function(form, validator) {
                let errors = validator.numberOfInvalids();
                if (errors) {
                validator.errorList[0].element.focus();
                }
            }
            });
        });
    </script>

</body>
</html>

