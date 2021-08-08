<?php
include '../../lib/config.php';

// Get location image name
$stmt = $con->prepare("SELECT * FROM `buku` WHERE `buku`.`isbn` = ?");
$stmt->bind_param("s", $_GET['delete']);
$stmt->execute();
$rs = $stmt->get_result();
$data = $rs->fetch_assoc();

$img_name = $data['cover'];
$book_name = $data['berkas'];
$img_dir = "../storage/book_cover/";
$book_dir = "../storage/book_file/";

$stmt = $con->prepare("DELETE FROM `buku` WHERE `buku`.`isbn` = ?");

if (false === $stmt) {
    // die('prepare() failed: ' . htmlspecialchars($mysqli->error));
    header("location:../book.php?message=delete-fail");
}

#Bind parameters on prepared statement
$rc = $stmt->bind_param("s", $_GET['delete']);
if (false === $rc) {
    // die('bind_param() failed: ' . htmlspecialchars($stmt->error));
    header("location:../book.php?message=delete-fail");
}

#Execute statement
$rc = $stmt->execute();
// if (false === $rc) {
//     // die('execute() failed: ' . htmlspecialchars($stmt->error));
//     if (strpos(htmlspecialchars($stmt->error), "foreign key") !== false) {
//         header("location:../book.php?message=penerbit-fail");
//         die();
//     }
//     header("location:../book.php?message=delete-fail");
// }

#If successful, close statement & connection
if ($rc) {
    if (file_exists($img_dir . $img_name)) unlink($img_dir . $img_name);
    if (file_exists($book_dir . $book_name)) unlink($book_dir . $book_name);
    $stmt->close();
    $con->close();
    header("location:../book.php?message=deleted");
}
