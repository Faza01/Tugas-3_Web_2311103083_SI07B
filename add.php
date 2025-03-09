<html>
<head>
	<title>Add Produks</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Nama Produk</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr> 
				<td>Jenis</td>
				<td><input type="text" name="jenis"></td>
			</tr>
			<tr> 
				<td>Stok</td>
				<td><input type="number" name="stok"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
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
		echo "Produk added successfully. <a href='index.php'>View Produk</a>";
	}
	?>
</body>
</html>