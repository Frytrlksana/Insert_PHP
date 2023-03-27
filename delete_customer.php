<?php
include('koneksi.php');

$customerNumber = $_POST['customerNumber'];

$query1 = "DELETE FROM orderdetails WHERE orderNumber IN (SELECT orderNumber from orders WHERE customerNumber = '$customerNumber')";
$result1 = mysqli_query($conn, $query1);

$query2 = "DELETE FROM orders WHERE customerNumber = '$customerNumber'";
$result2 = mysqli_query($conn, $query2);

$query3 = "DELETE FROM payments WHERE customerNumber = '$customerNumber'";
$result3 = mysqli_query($conn, $query3);

$query4 = "DELETE FROM customers WHERE customerNumber = '$customerNumber'";
$result4 = mysqli_query($conn, $query4);

// Redirect ke halaman awal setelah selesai menghapus data
header('Location: customer.php');
?>