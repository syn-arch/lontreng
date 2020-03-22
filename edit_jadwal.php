<?php 

require 'header.php'; 
$kategori = mysqli_query($con, "SELECT * FROM tb_kategori");
$audio = mysqli_query($con, "SELECT * FROM tb_audio");

$kd = $_GET['id'];
$query = "SELECT * FROM tb_jadwal JOIN tb_kategori USING(kd_kategori) JOIN tb_audio USING(kd_audio) WHERE kd_jadwal = '$kd'";
$jadwal = mysqli_fetch_assoc(mysqli_query($con, $query));
?>

<div class="container mt-4">
<a href="index.php" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> Kembali</a>
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">
				Edit Data
			</h4>
		</div>
		<div class="card-body">
			<form method="POST" action="proses/editJadwal.php">
				<input type="hidden" name="kd_jadwal" value="<?= $jadwal['kd_jadwal'] ?>">
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Kategori</label>
					<div class="col-sm-10">
						<select name="kd_kategori" id="" class="form-control">
							<option> -- Silahkan Pilih Kategori --</option>
							<?php while($k = mysqli_fetch_assoc($kategori)) : ?>
								<option value="<?= $k['kd_kategori'] ?>" <?= $jadwal['kd_kategori'] == $k['kd_kategori'] ? 'selected' : '' ?>><?= $k['nm_kategori'] ?></option>
							<?php endwhile; ?>
							
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Audio</label>
					<div class="col-sm-10">
						<select name="kd_audio" class="form-control">
							<option> -- Silahkan Pilih audio --</option>
							<?php while($k = mysqli_fetch_assoc($audio)) : ?>
								<option value="<?= $k['kd_audio'] ?>" <?= $jadwal['kd_audio'] == $k['kd_audio'] ? 'selected' : '' ?>><?= $k['nm_audio'] ?></option>
							<?php endwhile; ?>
							
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Hari</label>
					<div class="col-sm-10">
						<select name="hari" class="form-control">
							<option> -- Silahkan Pilih Hari --</option>
							<option value="Senin" <?= "Senin" == $jadwal['hari'] ? 'selected' : '' ?>>Senin</option>
							<option value="Selasa" <?= "Selasa" == $jadwal['hari'] ? 'selected' : '' ?>>Selasa</option>
							<option value="Rabu" <?= "Rabu" == $jadwal['hari'] ? 'selected' : '' ?>>Rabu</option>
							<option value="Kamis" <?= "Kamis" == $jadwal['hari'] ? 'selected' : '' ?>>Kamis</option>
							<option value="Jumat" <?= "Jumat" == $jadwal['hari'] ? 'selected' : '' ?>>Jumat</option>
							<option value="Sabtu" <?= "Sabtu" == $jadwal['hari'] ? 'selected' : '' ?>>Sabtu</option>
							<option value="Minggu" <?= "Minggu" == $jadwal['hari'] ? 'selected' : '' ?>>Minggu</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Jam</label>
					<div class="col-sm-10">
						<input type="text" name="jam" class="form-control" placeholder="Jam" required="" value="<?= $jadwal['jam'] ?>">
					</div>
				</div>
				<div class="form-group row">
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>


<?php require 'footer.php'; ?>