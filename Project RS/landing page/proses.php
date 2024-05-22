<?php
// Dummy data - Anda dapat mengganti ini dengan validasi sesuai kebutuhan aplikasi Anda
$valid_username = "admin@gmail.com";
$valid_password_hash = password_hash("admin", PASSWORD_DEFAULT);

// Ambil data dari form login
if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validasi username dan password
    if ($username == $valid_username && password_verify($password, $valid_password_hash)) {
        // Jika valid, arahkan ke halaman utama atau halaman selanjutnya
        header("Location: ../project01/index.php");
        exit();
    } else {
        // Jika tidak valid, kembalikan ke halaman login dengan pesan error
        $error = "Username atau password salah.";
    }
}
?>