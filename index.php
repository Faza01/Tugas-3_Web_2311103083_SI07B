<?php 
session_start();
if (!isset($_SESSION['username'])) { 
    header("Location: Login/login.php"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

    <!-- Container -->
    <div class="container-fluid my-5" style="padding: 2rem 4rem;">
    <div class="row align-items-center">
       
        <div class="col-md-6">
        <h1>Faza Bilwildi Emyu</h1>
        <p>Mahasiswa Telkom University jurusan S1 Sistem Informasi. Nim 2311103083 - SI07B</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error nesciunt expedita saepe, laboriosam accusamus ipsum, repellat necessitatibus rerum incidunt atque quod, possimus eaque voluptas vitae maxime dicta facilis ratione tempora!</p>
        <a href="#" class="btn btn-primary">LinkedIn</a>
        
       
        <div class="row mt-4">
            <div class="col-auto">
            <h4>Lulusan</h4>
            <p>SMK Telkom Purwokerto</p>
            </div>
            <div class="col-auto">
            <h4>Lulusan</h4>
            <p>SMK Telkom Purwokerto</p>
            </div>
            <div class="col-auto">
            <h4>Lulusan</h4>
            <p>SMK Telkom Purwokerto</p>
            </div>
        </div>
        </div>
        
        
        <div class="col-md-3 text-end">
        <img src="Assets/Profile.jpg" alt="profile-img" class="img-fluid">
        </div>
    </div>
    </div>




    <!-- card -->
    <div class="container" style="padding: 2rem 4rem;">
  <div class="row">
    <div class="col-md-4">
        <div class="card" style="width: 18rem;"> <img src="image.jpg" class="card-img-top" alt="Gambar">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu</h5>
                    <p class="card-text">Deskripsi kartu.</p> <a href="#" class="btn btn-primary">Tombol</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;"> <img src="image.jpg" class="card-img-top" alt="Gambar">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu</h5>
                    <p class="card-text">Deskripsi kartu.</p> <a href="#" class="btn btn-primary">Tombol</a>
                </div>
            </div>
    </div>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;"> <img src="image.jpg" class="card-img-top" alt="Gambar">
                <div class="card-body">
                    <h5 class="card-title">Judul Kartu</h5>
                    <p class="card-text">Deskripsi kartu.</p> <a href="#" class="btn btn-primary">Tombol</a>
                </div>
            </div>
    </div>
  </div>
</div>
    
            

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>