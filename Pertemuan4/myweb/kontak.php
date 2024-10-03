<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolaNews - Kontak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container pt-5 pb-5">
        <h1>Formulir Kontak</h1>
        <!-- Form yang akan mengirimkan data ke proses_kontak.php -->
        <form method="POST" action="proses_kontak.php">
            <div class="mb-3">
                <label for="fname" class="form-label">Nama :</label>
                <input type="text" id="fname" name="nama" class="form-control" required>
            </div>
            
            <p>Kewarganegaraan</p>
            <div class="form-check">
                <input type="radio" id="region1" name="kewarganegaraan" value="WNI" class="form-check-input" required>
                <label for="region1" class="form-check-label"> WNI</label><br>
                <input type="radio" id="region2" name="kewarganegaraan" value="WNA" class="form-check-input" required>
                <label for="region2" class="form-check-label"> WNA</label>
            </div>

            <p>Layanan</p>
            <div class="form-check">
                <input type="checkbox" id="layanan1" name="layanan[]" value="Website" class="form-check-input">
                <label for="layanan1" class="form-check-label">Website</label><br>
                <input type="checkbox" id="layanan2" name="layanan[]" value="Hosting" class="form-check-input">
                <label for="layanan2" class="form-check-label">Hosting</label><br>
                <input type="checkbox" id="layanan3" name="layanan[]" value="Domain" class="form-check-input">
                <label for="layanan3" class="form-check-label">Domain</label>
            </div><br>

            <div class="mb-3">
                <input type="submit" value="Submit" class="btn btn-primary">
                <input type="reset" value="Hapus" class="btn btn-secondary">
            </div>
        </form>
    </div>

    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Link Rekomendasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="https://www.google.com" class="text-light text-decoration-none">Google</a></li>
                        <li><a href="https://upj.ac.id" class="text-light text-decoration-none">UPJ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <style>
        ul {
            list-style-type : none;
            margin : 0;
            padding : 0;
        }
        li {
            display: inline;
        }
    </style>
</body>
</html>
