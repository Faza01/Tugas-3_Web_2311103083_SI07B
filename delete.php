<?php
// include database connection file
include_once("config.php");
 
// Get id from URL to delete that produk
$id = $_GET['id'];
 
// Delete produk row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM produks WHERE id=$id");
 
// Show message when user deleted
echo "<script>alert('Product deleted.'); window.location.href='index.php';</script>";
?>