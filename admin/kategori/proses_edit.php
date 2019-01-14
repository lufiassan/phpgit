<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$nama = $_POST['nama'];
	$id = $_POST['id'];

	$sql = "UPDATE kategori SET nama = '$nama' WHERE id = '$id'";
	mysqli_query($konek, $sql);
	header('location: index.php');
} else {
	header('location: ../../index.php');
}