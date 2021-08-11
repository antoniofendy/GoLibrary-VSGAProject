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
                <form action="book/book-create.php" method="post" enctype="multipart/form-data" onsubmit="return validasiForm()">
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-4 mb-3 mb-lg-0">
                            <label for="cover">Cover Buku* </label>
                            <input type="file" class="form-control-file" accept="image/jpg, image/png, image/jpeg" name="cover" id="cover">
                            <small class="form-text mt-1 mb-0 text-muted">Dimensi minimum 250x250 px.</small>
                            <small id="cover-error" style="color: red;"></small>
                        </div>
                        <div class="col-12 col-lg-6 col-xl-4">
                            <label for="berkas">Berkas Buku* </label>
                            <input type="file" class="form-control-file" accept=".pdf" name="berkas" id="berkas">
                            <small class="form-text mt-1 mb-0 text-muted">Hanya menerima PDF.</small>
                            <small id="berkas-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="isbn">ISBN Buku</label>
                            <input type="text" class="form-control" name="isbn" id="isbn" value="">
                            <small id="isbn-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="judul">Judul Buku</label>
                            <input type="text" class="form-control" name="judul" id="judul" value="">
                            <small id="judul-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="penulis">Penulis Buku</label>
                            <input type="text" class="form-control" name="penulis" id="penulis" value="">
                            <small id="penulis-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="penerbit">Nama Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" id="penerbit" value="">
                            <small id="penerbit-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="tahun">Tahun Terbit</label>
                            <input type="number" class="form-control" name="tahun" id="tahun" value="">
                            <small id="tahun-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="bahasa">Bahasa Terbit</label>
                            <input type="text" class="form-control" name="bahasa" id="bahasa" value="">
                            <small id="tahun-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="kategori">Kategori Buku</label>
                            <input type="text" class="form-control" name="kategori" id="kategori" value="">
                            <small id="kategori-error" style="color: red;"></small>
                        </div>
                    </div>
                    <div class="form-row my-2">
                        <div class="col-12 col-lg-6 col-xl-8">
                            <label for="rating">Rating Buku</label>
                            <input type="number" min="0" max="5" class="form-control" name="rating" id="rating" value="">
                            <small id="number-error" style="color: red;"></small>
                        </div>
                    </div>

                    <p class="m-0">Semua kotak inputan wajib diisi.</p>
                    <p class="mb-3">*Ukuran maksimum cover buku adalah 2 MB.</p>

                    <input type="submit" value="Simpan" class="btn btn-outline-success shadow-sm accent-font-t mr-2" name="submit" id>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    let input_field = [
        cover = {
            id: "cover",
            required : "Cover buku wajib diunggah",
            format: "Cover buku hanya boleh berformat png/jpg/jpeg"
        },
        berkas = {
            id: "berkas",
            required : "Berkas buku wajib diunggah",
            format: "Berkas buku harus dalam format pdf"
        },
        isbn = {
            id: "isbn",
            required : "ISBN buku wajib diisi",
            format: "ISBN buku harus terdiri dari 10 atau 13 digit angka"
        }, 
        judul = {
            id: "judul",
            required : "Judul buku wajib diisi"
        },
        penulis = {
            id: "penulis",
            required: "Penulis buku wajib diisi"
        },
        penerbit = {
            id: "penerbit",
            required: "Penerbit buku wajib diisi"
        },
        tahun = {
            id: "tahun",
            required: "Tahun wajib diisi",
            format: "Tahun wajib ditulis dalam angka 4 digit"
        },
        bahasa = {
            id: "bahasa",
            required: "Bahasa buku wajib diisi"
        },
        kategori = {
            id: "kategori",
            required: "Kategori buku wajib diisi"
        },
        rating = {
            id: "rating",
            required: "rating buku wajib diisi",
            format: "Rating wajib ditulis dalam angka 4 digit"
        }
    ];

    function required(value){   
        return value.trim() !== "";
    }

    function addErrorMessage(id, message){
        let small = document.getElementById(id+"-error");
        small.innerHTML = message + "<br>";
    }

    function clearErrorMessage(){
        let allErrorMessage = document.querySelectorAll("small[style='color: red;']");
        for(let i=0; i < allErrorMessage.length; i++){
            allErrorMessage[i].innerText = "";
        }
    }

    function checkDigit(value){
        if(value === 10 || value === 13){
            return false;
        }
        return true
    }

    function validasiForm() {

        clearErrorMessage();

        // CHECK COVER
        let cover_input = document.getElementById(cover.id);
        if(required(cover_input.value)){
            // Cover error message when format are not png/jpg/jpeg
            if(cover_input.value.match(/jpg|png|jpeg/g) === null){
                addErrorMessage(cover.id, cover.format);
                return false;
            }
        }
        else{
            // Cover error message not filled
            addErrorMessage(cover.id, cover.required);
            return false;
        }

        // CHECK BERKAS
        let berkas_input = document.getElementById(berkas.id);
        if(required(berkas_input.value)){
            // Berkas error message when format are not pdf
            if(berkas_input.value.match(/pdf/g) === null){
                addErrorMessage(berkas.id, berkas.format);
                return false;
            }
        }
        else{
            // Berkas error message not filled
            addErrorMessage(berkas.id, berkas.required);
            return false;
        }

        // CHECK ISBN
        let isbn_input = document.getElementById(isbn.id);
        if(required(isbn_input.value)){
            // ISBN error message when format are not number
            if(isbn_input.value.match(/[0-9]/g) === null || checkDigit(isbn_input.value.length)){
                addErrorMessage(isbn.id, isbn.format);
                return false;
            }
        }
        else{
            // ISBN error message not filled
            addErrorMessage(isbn.id, isbn.required);
            return false;
        }

        // CHECK JUDUL
        let judul_input = document.getElementById(judul.id);
        if(required(judul_input.value) === false){
            // Judul error message not filled
            addErrorMessage(judul.id, judul.required);
            return false;
        }

        // CHECK Penulis
        let penulis_input = document.getElementById(penulis.id);
        if(required(penulis_input.value) === false){
            // Penulis error message not filled
            addErrorMessage(penulis.id, penulis.required);
            return false;
        }

        // CHECK PENERBIT
        let penerbit_input = document.getElementById(penerbit.id);
        if(required(penerbit_input.value) === false){
            // Penerbit error message not filled
            addErrorMessage(penerbit.id, penerbit.required);
            return false;
        }

        return false;
        
    }
</script>