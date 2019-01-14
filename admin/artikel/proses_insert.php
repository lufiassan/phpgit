<?php
session_start();
if (isset($_SESSION['email'])) {
	include '../../config/koneksi.php';
	$judul = $_POST['judul'];
	$isi = $_POST['isi'];
	$user = $_SESSION['id'];
	$nama_gambar = $_FILES['gambar']['name'];
	$tmp_name = $_FILES['gambar']['tmp_name'];

	$status = $_POST['status'];
	$kategori = $_POST['kategori'];
	$rilis = date('Y-m-d');
// print_r($files);
// exit();
	move_uploaded_file($tmp_name, "../../gambar/".$nama_gambar);

	$sql = "INSERT INTO article 
	(judul, isi, user_id, gambar, status, kategori_id, rilis) 
	VALUES ('$judul', '$isi', '$user', '$nama_gambar', '$status', '$kategori', '$rilis')";

	mysqli_query($konek, $sql);
	header('location: index.php');
} else {
	header('location: ../../index.php');
}