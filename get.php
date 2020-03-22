<?php 

require 'config/koneksi.php';

$time = $_POST['jam'];

$skrg = hari_ini();

if (empty($jadwal)) {
	echo "<h1>Jadwal Kosong</h1>";
	die;
}

if (in_array_r($skrg, $jadwal) && in_array_r($time, $jadwal)) {

	$query = "SELECT audio FROM tb_jadwal JOIN tb_audio USING(kd_audio) WHERE hari = '$skrg' AND jam = '$time' ";
	$audio = mysqli_fetch_assoc(mysqli_query($con, $query));

	$location = "assets/audio/" . $audio['audio'];
	echo '<audio src = ' . $location .' autoplay controls></audio>';

}