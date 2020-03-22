<?php 

require 'header.php'; 
$kategori = mysqli_query($con, "SELECT * FROM tb_kategori");
$audio = mysqli_query($con, "SELECT * FROM tb_audio");

?>

<div class="container mt-4">
<a href="index.php" class="btn btn-primary mb-4"><i class="fa fa-arrow-left"></i> Kembali</a>
	<div class="card">
		<div class="card-header">
			<h4 class="card-title">
				Tambah Data
			</h4>
		</div>
		<div class="card-body">
			<form method="POST" action="proses/tambahJadwal.php">
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Kategori</label>
					<div class="col-sm-10">
						<select name="kd_kategori" id="" class="form-control">
							<option> -- Silahkan Pilih Kategori --</option>
							<?php while($k = mysqli_fetch_assoc($kategori)) : ?>
								<option value="<?= $k['kd_kategori'] ?>"><?= $k['nm_kategori'] ?></option>
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
								<option value="<?= $k['kd_audio'] ?>"><?= $k['nm_audio'] ?></option>
							<?php endwhile; ?>
							
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Hari</label>
					<div class="col-sm-10">
						<select name="hari" id="" class="form-control">
							<option> -- Silahkan Pilih Hari --</option>
							<option value="Senin">Senin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Kamis">Kamis</option>
							<option value="Jumat">Jumat</option>
							<option value="Sabtu">Sabtu</option>
							<option value="Minggu">Minggu</option>
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Jam</label>
					<div class="col-sm-10">
						<input type="text" name="jam" class="form-control" placeholder="Jam" required>
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