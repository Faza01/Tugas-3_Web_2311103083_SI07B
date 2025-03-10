<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM produks ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 
<body>
    <section class="p-4" style="margin: 20px;">
    <a type="button" class="btn btn-primary" href="add.php">Add New Produks</a>
    <br/><br/>
    
        <table width='80%' border=1 class="table table-bordered">
    
        <tr>
            <th>Name</th> <th>Jenis</th> <th>Stok</th> <th>Update</th>
        </tr>
        <?php  
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['jenis']."</td>";
            echo "<td>".$user_data['stok']."</td>";    
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
        }
        ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>