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
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
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
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis" value=<?php echo $jenis;?>></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="number" name="stok" value=<?php echo $stok;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>