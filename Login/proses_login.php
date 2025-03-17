<?php 
session_start();

$user = "admin"; 
$pass = "123"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == $user && $_POST['password'] == $pass) { 
        $_SESSION['username'] = $user; 
        header("Location: ../index.php"); 
        exit();
    } else { 
        echo "<script>alert('Login Gagal! Username atau password salah.'); window.location='login.php';</script>";
    }
}
?>
