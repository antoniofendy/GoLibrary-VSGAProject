<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = 'db_golibrary';

$con = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()) {
    echo 'Koneksi gagal:';
}
