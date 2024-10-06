<?php
session_start(); // Melanjutkan session

// Cek apakah data tersedia di session
if (!isset($_SESSION['nama']) || !isset($_SESSION['kewarganegaraan']) || !isset($_SESSION['bday'])) {
    // Redirect ke form jika data tidak tersedia
    header("Location: kontak.php");
    exit();
}

// Ambil data dari session
$nama = $_SESSION['nama'];
$kewarganegaraan = $_SESSION['kewarganegaraan'];
$layanan = $_SESSION['layanan'];
$hobby = $_SESSION['hobby'];
$bday = $_SESSION['bday']; // Ambil tanggal lahir dari session

// Menghitung umur
$tanggal_lahir = new DateTime($bday);
$tanggal_sekarang = new DateTime(); // Tanggal sekarang
$umur = $tanggal_lahir->diff($tanggal_sekarang); // Hitung selisih antara tanggal lahir dan tanggal sekarang
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container pt-5 pb-5">
        <h1>Konfirmasi Data Kontak</h1>

        <p><strong>Nama:</strong> <?php echo $nama; ?></p>
        <p><strong>Kewarganegaraan:</strong> <?php echo $kewarganegaraan; ?></p>
        <p><strong>Layanan yang dipilih:</strong> <?php echo $layanan; ?></p>
        <p><strong>Hobby mu adalah:</strong> <?php echo $hobby; ?></p>
        <p><strong>Tanggal Lahir:</strong> <?php echo $bday; ?></p>
        <p><strong>Umur:</strong> 
            Kamu berumur <?php echo $umur->y; ?> tahun, 
            <?php echo $umur->m; ?> bulan, 
            dan <?php echo $umur->d; ?> hari.
        </p> <!-- Tampilkan umur dalam tahun, bulan, dan hari -->

        <a href="kontak.php" class="btn btn-primary">Kembali ke Form</a>
    </div>

    <footer class="bg-dark text-light py-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Link Rekomendasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.google.com" class="text-light text-decoration-none">Google</a></li><br>
                        <li><a href="https://upj.ac.id" class="text-light text-decoration-none">UPJ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
