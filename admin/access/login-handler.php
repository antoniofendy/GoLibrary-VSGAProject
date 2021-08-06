<?php
include '../../lib/config.php';

if (!isset($_SESSION)) {
    session_start();
}

$required = array('username', 'password');

$error = "";

foreach ($required as $field) {
    if (empty($_POST[$field])) $error = true;
}

if ($error) {
    header("location: ../login.php?message=empty");
    die();
}

$username = $_POST['username'];
$password = $_POST['password'];
$remember = isset($_POST['remember']) ? $_POST['remember'] : '';

$hashed_pw = md5($password);

$stmt = $con->prepare("SELECT * FROM users WHERE username = ? and password = ?");
$stmt->bind_param("ss", $username, $hashed_pw);
$stmt->execute();
$rs = $stmt->get_result();
$data = $rs->fetch_assoc();

if ($data) {
    $_SESSION['userid'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['start'] = time();

    if ($remember) {
        setcookie('cUsername', $username, time() + 7200, '/', NULL);
        setcookie('cPassword', $password, time() + 7200, "/", NULL);
        setcookie('cRemember', $password, time() + 7200, "/", NULL);
    } else {
        setcookie('cUsername', null, -1, "/", null);
        setcookie('cPassword', null, -1, "/", null);
        setcookie('cRemember', null, -1, "/", null);
    }

    header('location:../dashboard.php');
} else {
    header('location:../login.php?message=invalid');
}
