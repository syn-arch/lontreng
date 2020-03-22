<?php 

require '../config/koneksi.php';

$kd_jadwal = $_POST['kd_jadwal'];
$kd_kategori = $_POST['kd_kategori'];
$kd_audio = $_POST['kd_audio'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

$query = "UPDATE tb_jadwal SET 
			kd_kategori = '$kd_kategori',
			kd_audio = '$kd_audio',
			hari = '$hari',
			jam = '$jam'
		WHERE kd_jadwal = '$kd_jadwal'
";

$result = mysqli_query($con, $query);

if ($result) {
	header("Location: ../index.php?pesan=edit");
}