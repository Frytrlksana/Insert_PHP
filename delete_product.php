<?php
include('koneksi.php');

$productCode = $_POST['productCode'];

// Query untuk menghapus data berdasarkan ID
$query1 = "DELETE FROM orderdetails WHERE productCode = '$productCode'";
$result1 = mysqli_query($conn, $query1);

// Hapus produk dari tabel products
$query2 = "DELETE FROM products WHERE productCode = '$productCode'";
$result2 = mysqli_query($conn, $query2);

// Redirect ke halaman awal setelah selesai menghapus data
header('Location: product.php');
?>