<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$jenis=$_POST['jenis'];
	$stok=$_POST['stok'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE produks SET name='$name',jenis='$jenis',stok='$stok' WHERE id=$id");
	
	// Show message when user edited
	echo "<script>alert('Produk edited successfully.'); window.location.href='index.php';</script>";
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetch user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produks WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$jenis = $user_data['jenis'];
	$stok = $user_data['stok'];
}
?>
<html>
<head>	
	<title>Edit Produk Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
 
<body>

	
<section class="p-4" style="margin: 20px;">
<a type="button" class="btn btn-primary" href="index.php">Home</a>

<br/><br/>
<form name="update_user" method="post" action="edit.php" class="form">
		<div class="mb-3">
			<label for="name" class="form-label">Name</label>
			<input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="mb-3">
			<label for="jenis" class="form-label">Jenis</label>
			<input type="text" class="form-control" id="jenis" name="jenis" value="<?php echo $jenis; ?>">
		</div>
		<div class="mb-3">
			<label for="stok" class="form-label">Stok</label>
			<input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok; ?>">
		</div>
		<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
		<button type="submit" name="update" class="btn btn-primary">Update</button>
</form>
</section>
</body>
</html>
