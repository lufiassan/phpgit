<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama'];

	$sql = "INSERT INTO kategori (nama) VALUES ('$nama')";
	mysqli_query($konek, $sql);
	header('location: index.php');
} else {
	header('location: ../../index.php');
}