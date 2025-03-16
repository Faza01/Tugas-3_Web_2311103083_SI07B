<html>
<head>
	<title>Add Produks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 
<body>
	<section class="p-4" style="margin: 20px;">
		<a type="button" class="btn btn-primary" href="crud.php">Go to Home</a>
		<br/><br/>
		<form action="add.php" method="post" name="form1" class="form">
			<div class="mb-3">
				<label for="name" class="form-label">Nama Produk</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="mb-3">
				<label for="jenis" class="form-label">Jenis</label>
				<input type="text" class="form-control" id="jenis" name="jenis">
			</div>
			<div class="mb-3">
				<label for="stok" class="form-label">Stok</label>
				<input type="number" class="form-control" id="stok" name="stok">
			</div>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
		</form>
	</section>
	
	<?php
 
	// Check If form submitted, insert form data into produks table.
	if(isset($_POST['Submit'])) {
		$name = $_POST['name'];
		$jenis = $_POST['jenis'];
		$stok = $_POST['stok'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO produks(name,jenis,stok) VALUES('$name','$jenis','$stok')");
		
		// Show message when user added
		echo "<script>alert('Produk added successfully.'); window.location.href='crud.php';</script>";

	}
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
