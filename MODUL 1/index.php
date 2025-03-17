<?php
// Create database connection using config file
include_once("config.php");

// Inisialisasi variabel untuk menyimpan nilai input dan error
$nama = $email = $nomor = $mobil = $alamat = "";
$namaErr = $emailErr = $nomorErr = $alamatErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi Nama
    $nama = $_POST["nama"];
    if (empty($nama)) {
        $namaErr = "Nama wajib diisi";
    }

    // Validasi Email
    $email = $_POST["email"];
    if (empty($email)) {
        $emailErr = "Email wajib diisi";
    } 

    // Validasi Nomor Telepon
    $nomor = $_POST["nomor"];
    if (empty($nomor)) {
        $nomorErr = "Nomor Telepon wajib diisi";
    } 
    
    // Validasi Alamat
    $alamat = $_POST["alamat"];
    if (empty($alamat)) {
        $alamatErr = "Alamat wajib diisi";
    }

    // Menyimpan pilihan mobil tanpa validasi khusus
    $mobil = $_POST["mobil"];

    // Jika tidak ada error, masukkan data ke database
    if (!$namaErr && !$emailErr && !$nomorErr && !$alamatErr) {
        $result = mysqli_query($mysqli, "INSERT INTO pembelians(nama,email,tlp,alamat,mobil) VALUES('$nama','$email','$nomor','$alamat','$mobil')");
        
        if ($result) {
            echo "<script>alert('Pembelian berhasil!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Terjadi kesalahan!');</script>";
        }
    }
}

$result = mysqli_query($mysqli, "SELECT * FROM pembelians ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pembelian Mobil</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container">
        <h2>Form Pembelian Mobil</h2>
        <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" value="<?php echo $nama; ?>">
                <span class="error"><?php echo $namaErr ? "* $namaErr" : ""; ?></span>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <span class="error"><?php echo $emailErr ? "* $emailErr" : ""; ?></span>
            </div>

            <div class="form-group">
                <label for="nomor">Nomor Telepon:</label>
                <input type="text" id="nomor" name="nomor" value="<?php echo $nomor; ?>">
                <span class="error"><?php echo $nomorErr ? "* $nomorErr" : ""; ?></span>
            </div>

            <div class="form-group">
                <label for="mobil">Pilih Mobil:</label>
                <select id="mobil" name="mobil">
                    <option value="Sedan" <?php echo ($mobil == "Sedan") ? "selected" : ""; ?>>Sedan</option>
                    <option value="SUV" <?php echo ($mobil == "SUV") ? "selected" : ""; ?>>SUV</option>
                    <option value="Hatchback" <?php echo ($mobil == "Hatchback") ? "selected" : ""; ?>>Hatchback
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Pengiriman:</label>
                <textarea id="alamat" name="alamat"><?php echo $alamat; ?></textarea>
                <span class="error"><?php echo $alamatErr ? "* $alamatErr" : ""; ?></span>
            </div>

            <div class="button-container">
                <button type="submit">Beli Mobil</button>
            </div>
        </form>
    </div>

    <div class="container">
        <h3>Data Pembelian:</h3>
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th width="20%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="15%">Nomor Telepon</th>
                        <th width="15%">Mobil</th>
                        <th width="30%">Alamat Pengiriman</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php while($user_data = mysqli_fetch_array($result)) { ?>         
                        <tr>
                            <td><?= $user_data['nama']; ?></td>
                            <td><?= $user_data['email']; ?></td>
                            <td><?= $user_data['tlp']; ?></td>    
                            <td><?= $user_data['mobil']; ?></td>    
                            <td><?= $user_data['alamat']; ?></td>    
                            <!-- <td>
                                <a href='edit.php?id=<?= $user_data["id"] ?>'>Edit</a> | 
                                <a href='delete.php?id=<?= $user_data["id"] ?>'>Delete</a>
                            </td> -->
                        </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div>

     <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>