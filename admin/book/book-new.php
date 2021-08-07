<?php
include '../lib/config.php';

$message_text = "";
$message_color = "";

if (isset($_GET['message'])) {
    if ($_GET['message'] == "no_image" || $_GET['message'] == "image-fail" || "book-fail") {
        $message_color = "alert-danger";
        $message_text = "Terdapat permasalahan ketika mengunggah gambar atau berkas buku.";
    } else if ($_GET['message'] == "max_size") {
        $message_color = "alert-danger";
        $message_text = "Gambar yang diunggah melebihi 2 MB.";
    } else if ($_GET['message'] == "min_dim") {
        $message_color = "alert-danger";
        $message_text = "Dimensi gambar yang diunggah terlalu kecil.";
    } else if ($_GET['message'] == "false_type") {
        $message_color = "alert-danger";
        $message_text = "Format gambar yang diunggah tidak sesuai.";
    } else if ($_GET['message'] == "empty") {
        $message_color = "alert-info";
        $message_text = "Tolong isi seluruh kotak input yang ada.";
    } else if ($_GET['message'] == "book_false_type"){
        $message_color = "alert-danger";
        $message_text = "Format berkas buku yang diunggah tidak sesuai.";
    }


    echo
    "<div class='alert $message_color alert-dismissible fade show col-12 col-lg-10' role='alert'>
        <h5 class='mb-0 alert-heading'>
            $message_text
        </h5>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
        </button>
    </div>";
}
?>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-10 col-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <a href="book.php" class="btn btn-sm btn-outline-primary shadow-sm accent-font-t mr-2">
                    <span class="fa fa-arrow-left"></span> Kembali
                </a>
                <h3 class="accent-font-t d-inline h5 align-middle"><b>Buku Baru</b></h3>
                <hr>
                <form action="book/book-create.php" method="post" enctype="multipart/form-data">
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-4 mb-3 mb-lg-0">
                            <label for="cover">Cover Buku* </label>
                            <input type="file" class="form-control-file" accept="image/jpg, image/png, image/jpeg" name="cover" id="card" required>
                            <small class="form-text mt-1 mb-0 text-muted">Dimensi minimum 250x250 px.</small>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-4">
                            <label for="berkas">Berkas Buku* </label>
                            <input type="file" class="form-control-file" accept=".pdf, .epub" name="berkas" id="berkas" required>
                            <small class="form-text mt-1 mb-0 text-muted">Hanya menerima PDF atau EPUB.</small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="isbn">ISBN Buku</label>
                            <input type="text" class="form-control" name="isbn" id="isbn" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="penulis">Penulis Buku</label>
                            <input type="text" class="form-control" name="penulis" id="penulis" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="tahun">Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="bahasa">Bahasa Terbit</label>
                            <input type="text" class="form-control" name="bahasa" id="bahasa" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="kategori">Kategori Buku</label>
                            <input type="text" class="form-control" name="kategori" id="kategori" value="" required>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="rating">Rating Buku</label>
                            <input type="number" min="0" max="5" class="form-control" name="rating" id="rating" value="" required>
                        </div>
                    </div>

                    <p class="m-0">Semua kotak inputan wajib diisi.</p>
                    <p class="mb-3">*Ukuran maksimum cover buku adalah 2 MB.</p>

                    <input type="submit" value="Simpan" class="btn btn-outline-success shadow-sm accent-font-t mr-2" name="submit">
                </form>
            </div>
        </div>
    </div>
</div>