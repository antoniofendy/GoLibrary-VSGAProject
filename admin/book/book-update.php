<?php
include '../../lib/config.php';

$required = array('isbn', 'judul', 'penulis', 'penerbit', 'tahun','bahasa', 'kategori', 'rating');

$error = "";

foreach ($required as $field) {
    if (empty($_POST[$field])) $error = true;
}

if ($error) {
    header("location: ../book.php?action=view&message=empty");
    die();
}

$cover_uploaded = is_uploaded_file($_FILES['cover']['tmp_name']);
$cover_new = "";
$cover_temp = "";
$berkas_uploaded = is_uploaded_file($_FILES['berkas']['tmp_name']);
$berkas_new = "";
$berkas_temp = "";

$message = "";

// Image validation
$image_error = false;
$img_dir = "../storage/book_cover/";
$acceptable = array(
    "png",
    "jpg",
    "jpeg"
);
$maxsize = 2097000;
$cover_min_dimension = array(250, 250);

// Check Book cover
if ($cover_uploaded) {
    // Get Image Dimension
    $cover_info = @getimagesize($_FILES["cover"]["tmp_name"]);
    $cover_width = $cover_info[0];
    $cover_height = $cover_info[1];
    $cover_ext = pathinfo($_FILES["cover"]["name"], PATHINFO_EXTENSION);

    // Check cover exists
    if (!file_exists($_FILES["cover"]["tmp_name"])) {
        $message = "no_image";
        $image_error = true;
    }
    // Check cover extension
    else if (!in_array($cover_ext, $acceptable)) {
        $message = "false_type";
        $image_error = true;
    }
    // Check cover size
    else if (($_FILES["cover"]["size"] > $maxsize)) {
        $message = "max_size";
        $image_error = true;
    }
    // Check cover dimension
    else if ($cover_width < $cover_min_dimension[0] || $cover_height < $cover_min_dimension[1]) {
        $message = "min_dim";
        $image_error = true;
    } else {
        $cover_new = $_POST['isbn'] . "_cover." . $cover_ext;
        $cover_temp = $_POST['isbn'] . "_cover_temp." . $cover_ext;
        if (!move_uploaded_file($_FILES["cover"]["tmp_name"], $img_dir . $cover_temp)) {
            $message = "image-fail";
            $image_error = true;
        }
    }
}

// Book file Validation
$book_error = false;
$book_dir = "../storage/book_file/";
$acceptable_file = array(
    "pdf",
    "epub"
);

//Check book file
if($berkas_uploaded){
    // Get book file ext
    $berkas_ext = pathinfo($_FILES["berkas"]["name"], PATHINFO_EXTENSION);

    if (!in_array($berkas_ext, $acceptable_file)) {
        $message = "book_false_type";
        $book_error = true;
    }
    else {
        $berkas_new = $_POST['isbn'] . "_berkas." . $berkas_ext;
        $berkas_temp = $_POST['isbn'] . "_berkas_temp." . $berkas_ext;
        if (!move_uploaded_file($_FILES["berkas"]["tmp_name"], $book_dir . $berkas_temp)) {
            $message = "book-fail";
            $book_error = true;
        }
    }
}

if (!$image_error && !$book_error) {
    #Create prepared statement according to whether image uploaded or not
    $stmt = $con->prepare("UPDATE `buku` SET  `judul` = ?, `penulis` = ?, `penerbit` = ?, `bahasa` = ?, `isbn` = ?, `tahun` = ?, `kategori` = ?, `rating` = ?, `cover` = ?, `berkas` = ? WHERE `buku`.`isbn` = ?");
    if (false === $stmt) {
        if (file_exists($img_dir . $cover_temp)) unlink($img_dir . $cover_temp);
        if (file_exists($book_dir . $berkas_temp)) unlink($book_dir . $berkas_temp);
        // die('prepare() failed: ' . htmlspecialchars($con->error));
        $message = "update-fail";
    }

    #Dynamically bind_param according to whether image and files uploaded or not
    $params = array(&$_POST['judul'], &$_POST['penulis'], &$_POST['penerbit'], &$_POST['bahasa'], &$_POST['isbn'], &$_POST['tahun'], &$_POST['kategori'], &$_POST['rating']);
    $cover_uploaded ? $params[] = &$cover_new : $params[] = $_POST['current_cover'];
    $berkas_uploaded ? $params[] = &$berkas_new : $params[] = $_POST['current_berkas'];
    $params[] = $_POST['old_isbn'];

    #Bind parameters on prepared statement
    $rc = $stmt->bind_param("sssssisdsss", ...$params);
    if (false === $rc) {
        if (file_exists($img_dir . $cover_temp)) unlink($img_dir . $cover_temp);
        if (file_exists($book_dir . $berkas_temp)) unlink($book_dir . $berkas_temp);
        // die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        $message = "update-fail";
    }

    #Execute statement
    $rc = $stmt->execute();
    
    if (false === $rc) {
        if (file_exists($img_dir . $cover_temp)) unlink($img_dir . $cover_temp);
        if (file_exists($book_dir . $berkas_temp)) unlink($book_dir . $berkas_temp);
        // die('bind_param() failed: ' . htmlspecialchars($stmt->error));
        $message = "update-fail";
    }

    #If successful, close statement & connection
    if ($rc) {
        if ($cover_uploaded && file_exists($img_dir . $_POST['current_cover'])) {
            unlink($img_dir . $_POST['current_cover']);
            rename($img_dir . $cover_temp, $img_dir . $cover_new);
        }
        if ($berkas_uploaded && file_exists($book_dir . $_POST['current_berkas'])) {
            unlink($book_dir . $_POST['current_berkas']);
            rename($book_dir . $berkas_temp, $book_dir . $berkas_new);
        }

        $stmt->close();
        $con->close();
        $message = "updated";
    }

    header("location: ../book.php?message=$message");
} else {
    if (file_exists($img_dir . $cover_temp)) unlink($img_dir . $cover_temp);
    header("location: ../book.php?view=" . $_POST['isbn'] . "&message=$message");
}
