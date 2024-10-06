<?php
session_start(); // Memulai session

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);
    $layanan = isset($_POST['layanan']) ? implode(", ", $_POST['layanan']) : "Tidak memilih layanan";
    
    // Memproses hobi
    if (isset($_POST['hobby'])) {
        $hobbies = $_POST['hobby'];
        if (count($hobbies) > 1) {
            // Pisahkan elemen terakhir dan tambahkan "dan" sebelum elemen terakhir
            $lastHobby = array_pop($hobbies);
            $hobby = implode(", ", $hobbies) . " dan " . $lastHobby;
        } else {
            $hobby = $hobbies[0];
        }
    } else {
        $hobby = "Tidak punya hobby";
    }

    // Ambil tanggal lahir dari form
    $bday = htmlspecialchars($_POST['bday']);

    // Simpan data ke dalam session
    $_SESSION['nama'] = $nama;
    $_SESSION['kewarganegaraan'] = $kewarganegaraan;
    $_SESSION['layanan'] = $layanan;
    $_SESSION['hobby'] = $hobby;
    $_SESSION['bday'] = $bday;

    // Redirect ke halaman konfirmasi
    header("Location: konfirmasi_kontak.php");
    exit();
}
?>
