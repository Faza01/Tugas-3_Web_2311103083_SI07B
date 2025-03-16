<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produks ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>CRUD page</title>
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
                    <li class="nav-item me-3"><a class="nav-link" href="../index.php">Pengenalan bootstrap</a></li>
                    <li class="nav-item me-3"><a class="nav-link" href="#">Lanjutan PHP</a></li>
                    <li class="nav-item"><a class="nav-link active" href="crud.php">CRUD PHP</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section -->
    <section class="container-fluid my-5" style="padding: 2rem 4rem;">
        <a type="button" class="btn btn-primary" href="add.php">Add New Produk</a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th> <th>Jenis</th> <th>Stok</th> <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php while($user_data = mysqli_fetch_array($result)) { ?>         
                    <tr>
                        <td><?= $user_data['name']; ?></td>
                        <td><?= $user_data['jenis']; ?></td>
                        <td><?= $user_data['stok']; ?></td>    
                        <td>
                            <a href='edit.php?id=<?= $user_data["id"] ?>'>Edit</a> | 
                            <a href='delete.php?id=<?= $user_data["id"] ?>'>Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <figure class="text-end">
            <blockquote class="blockquote">
                <p>Tugas 3 Latihan CRUD PHP</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                Dibuat oleh <cite title="Author">Faza Bilwildi Emyu_2311103083_SI07B</cite>
            </figcaption>
        </figure>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
