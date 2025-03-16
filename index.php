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
                    <li class="nav-item me-3"><a class="nav-link active" href="#">Pengenalan bootstrap</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="#">Lanjutan PHP</a></li>
                    <li class="nav-item"><a class="nav-link" href="CRUD/crud.php">CRUD PHP</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Container -->
    <div class="container-fluid my-5"  style="padding: 2rem 4rem;"> 
        <div class="row">
            <div class="col-md-5">
                <h2>Nama Lengkap</h2>
                <p>Deskripsi singkat tentang diri Anda.</p>
                <a href="#" class="btn btn-primary">LinkedIn</a>
            </div>
            <div class="col-md-5">
                <img src="foto.jpg" class="img-fluid rounded-circle border" alt="Foto Profil">
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