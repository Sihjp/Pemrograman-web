<?php
session_start(); // Memulai session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);
    $layanan = isset($_POST['layanan']) ? implode(", ", $_POST['layanan']) : "Tidak memilih layanan";

    // Simpan data ke dalam session
    $_SESSION['nama'] = $nama;
    $_SESSION['kewarganegaraan'] = $kewarganegaraan;
    $_SESSION['layanan'] = $layanan;

    // Redirect ke halaman konfirmasi
    header("Location: konfirmasi_kontak.php");
    exit();
}
?>
