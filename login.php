<?php
include 'koneksi.php';
include 'Auth.php';
session_start();

$auth = new Auth($koneksi);

if ($auth->isLoggedIn()) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($auth->login($username, $password)) {
        header("Location: dashboard.php");
        exit();
    } else {
        $error_message = "Autentikasi gagal. Silakan coba lagi.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>
<body>
    <!-- Konten login.php -->
</body>
</html>
