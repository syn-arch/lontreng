<?php 

require '../config/koneksi.php';

	$kd_kategori = $_POST['kd_kategori'];
	$kd_audio = $_POST['kd_audio'];
	$hari = $_POST['hari'];
	$jam = $_POST['jam'];

	$result = mysqli_query($con, "INSERT INTO tb_jadwal VALUES('','$kd_kategori','$kd_audio','$jam','$hari')");

	$cek = mysqli_affected_rows($con);

	if ($cek > 0) {
		header("Location: ../index.php?pesan=tambah");
	}else{
		echo mysqli_error($con);
		die;
	}

 ?>