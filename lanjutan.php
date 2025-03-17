<?php 
session_start();
setcookie("username", "Faza", time() + 3600); // Berlaku 1 jam
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanjutan PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" style="padding: 2rem 4rem;"> 
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item me-3"><a class="nav-link active" href="index.php">Pengenalan bootstrap</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="lanjutan.php">Lanjutan PHP</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="CRUD/crud.php">CRUD PHP</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login/logout.php" style="color: red;">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <h2 class="mb-4">Belajar PHP - Lanjutan</h2>

        <!-- Variabel -->
        <div class="card p-3 mb-3">
            <h5>1. Variabel</h5>
            <?php 
            $nama = "Faza"; 
            $umur = 18; 
            echo "Halo, nama saya <strong>$nama</strong> dan saya berumur <strong>$umur</strong> tahun.";
            ?>
        </div>

        <!-- Operasi Aritmatika -->
        <div class="card p-3 mb-3">
            <h5>2. Operasi Aritmatika</h5>
            <?php 
            $a = 10; 
            $b = 5; 
            echo "Penjumlahan: " . ($a + $b) . "<br>";
            echo "Pengurangan: " . ($a - $b) . "<br>";
            echo "Perkalian: " . ($a * $b) . "<br>";
            echo "Pembagian: " . ($a / $b) . "<br>";
            echo "Modulus: " . ($a % $b) . "<br>";
            ?>
        </div>

        <!-- If-Else -->
        <div class="card p-3 mb-3">
            <h5>3. Struktur Kendali (If-Else)</h5>
            <?php 
            $nilai = 80;
            echo "Nilai Anda: $nilai <br>";
            echo ($nilai >= 75) ? "<span class='text-success'>Lulus</span>" : "<span class='text-danger'>Tidak Lulus</span>";
            ?>
        </div>

        <!-- Switch Case -->
        <div class="card p-3 mb-3">
            <h5>4. Switch Case</h5>
            <?php
            $hari = "Senin";
            switch ($hari) {
                case "Senin": echo "Hari ini <strong>Senin</strong>"; break;
                case "Selasa": echo "Hari ini <strong>Selasa</strong>"; break;
                default: echo "Hari tidak diketahui";
            }
            ?>
        </div>

        <!-- Looping -->
        <div class="card p-3 mb-3">
            <h5>5. Looping</h5>
            <strong>For Loop:</strong> <br>
            <?php for ($i = 1; $i <= 5; $i++) { echo "Angka ke-$i <br>"; } ?>

            <strong>While Loop:</strong> <br>
            <?php
            $x = 1;
            while ($x <= 5) {
                echo "Angka $x <br>";
                $x++;
            }
            ?>

            <strong>Foreach:</strong> <br>
            <?php
            $buah = ["Apel", "Jeruk", "Mangga"];
            foreach ($buah as $b) {
                echo "Buah: $b <br>";
            }
            ?>
        </div>

        <!-- Form GET -->
        <div class="card p-3 mb-3">
            <h5>6. Formulir (GET & POST)</h5>
            <form method="GET">
                <label>Nama (GET):</label>
                <input type="text" name="nama" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            <?php if (isset($_GET['nama'])) echo "<p>Nama yang dikirim: <strong>" . $_GET['nama'] . "</strong></p>"; ?>
        </div>

        <div class="card p-3 mb-3">
            <form method="POST">
                <label>Nama (POST):</label>
                <input type="text" name="nama" class="form-control mb-2">
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
            <?php if (isset($_POST['nama'])) echo "<p>Nama yang dikirim: <strong>" . $_POST['nama'] . "</strong></p>"; ?>
        </div>

        <!-- Session -->
        <div class="card p-3 mb-3">
            <h5>7. Session</h5>
            <?php $_SESSION['user'] = "Admin"; ?>
            <p>Session username: <strong><?php echo $_SESSION['user']; ?></strong></p>
        </div>

        <!-- Cookies -->
        <div class="card p-3 mb-3">
            <h5>8. Cookies</h5>
            <p>Cookie username: <strong><?php echo $_COOKIE['username']; ?></strong></p>
        </div>

        <!-- Form Dewasa -->
        <div class="card p-3 mb-3">
            <h5>9. Form Cek Dewasa</h5>
            <form method="POST">
                <label>Nama:</label>
                <input type="text" name="nama_umur" class="form-control mb-2">
                <label>Umur:</label>
                <input type="number" name="umur" class="form-control mb-2">
                <button type="submit" class="btn btn-success">Cek</button>
            </form>
            <?php
            if (isset($_POST['umur'])) {
                $umur = $_POST['umur'];
                echo "<p>Hasil: " . ($umur >= 18 ? "<span class='text-success'>Dewasa</span>" : "<span class='text-danger'>Belum Dewasa</span>") . "</p>";
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
