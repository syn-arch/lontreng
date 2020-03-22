<?php 

$con = mysqli_connect("localhost","root","","db_bel");

$query_jadwal = mysqli_query($con, "SELECT jam,audio,hari FROM tb_jadwal 
												JOIN tb_audio USING(kd_audio) 
												JOIN tb_kategori USING(kd_kategori)");

while ( $row = mysqli_fetch_assoc($query_jadwal) ) {
	$jadwal[] = $row;
}


function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
        if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
}

// senin
$senin_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Senin'
			";

$senin = mysqli_query($con, $senin_q);

// selasa
$selasa_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Selasa'
			";

$selasa = mysqli_query($con, $selasa_q);

// rabu
$rabu_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Rabu'
			";

$rabu = mysqli_query($con, $rabu_q);

// kamis
$kamis_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Kamis'
			";

$kamis = mysqli_query($con, $kamis_q);

// jumat
$jumat_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Jumat'
			";

$jumat = mysqli_query($con, $jumat_q);

// sabtu
$sabtu_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Sabtu'
			";

$sabtu = mysqli_query($con, $sabtu_q);

// minggu
$minggu_q = "SELECT * FROM tb_jadwal
			JOIN tb_kategori USING(kd_kategori)
			JOIN tb_audio USING(kd_audio)
			WHERE hari = 'Minggu'
			";

$minggu = mysqli_query($con, $minggu_q);



	function hari_ini(){
		$hari = date("D");
	 
		switch($hari){
			case 'Sun':
				$hari_ini = "Minggu";
			break;
	 
			case 'Mon':			
				$hari_ini = "Senin";
			break;
	 
			case 'Tue':
				$hari_ini = "Selasa";
			break;
	 
			case 'Wed':
				$hari_ini = "Rabu";
			break;
	 
			case 'Thu':
				$hari_ini = "Kamis";
			break;
	 
			case 'Fri':
				$hari_ini = "Jumat";
			break;
	 
			case 'Sat':
				$hari_ini = "Sabtu";
			break;
			
			default:
				$hari_ini = "Tidak di ketahui";		
			break;
		}

		return $hari_ini;
	 
	}

?>