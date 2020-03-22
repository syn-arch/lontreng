<?php 

require 'header.php'; 

$result = mysqli_query($con, "SELECT * FROM tb_kategori");

?>

<div class="container mt-5">
	<h3 class="text-center"><i class="fa fa-sitemap"></i> Data Kategori </h3>

	<?php if (isset($_GET['pesan'])): ?>

		<?php if ($_GET['pesan'] == 'tambah'): ?>
			<div class="alert alert-success alert-dismissible mt-4">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h5><i class="icon fa fa-check"></i> Berhasil!</h5>
				<p>Data Berhasil Ditambah</p>
		  	</div>
		<?php elseif($_GET['pesan'] == 'edit'): ?>
			<div class="alert alert-success alert-dismissible mt-4">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h5><i class="icon fa fa-check"></i> Berhasil!</h5>
				<p>Data Berhasil Diubah</p>
		  	</div>
		<?php elseif($_GET['pesan'] == 'hapus'): ?>
			<div class="alert alert-success alert-dismissible mt-4">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h5><i class="icon fa fa-check"></i> Berhasil!</h5>
				<p>Data Berhasil Dihapus</p>
		  	</div>
		<?php endif ?>
		
	<?php endif ?>

	<div class="card mt-4 mb-4">
		<div class="card-header">
			<h4 class="card-title">Tambah Data</h4>
		</div>
		<div class="card-body">
			<form method="post">
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Nama Kategori</label>
					<div class="col-sm-10">
						<input type="Nama Kategori" name="nama" class="form-control" placeholder="Nama Kategori" required="">
					</div>
				</div>
				<div class="form-group row">
					<div class="col">
						<input type="submit" name="submit" class="btn btn-primary btn-block">
					</div>
				</div>
			</form>
		</div>
	</div>

	<table class="table table-hovered table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Nama Kategori</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php $i = 1; while($row = mysqli_fetch_assoc($result)) : ?>

			<tr>
				<td><?= $i++ ?></td>
				<td><?= $row['nm_kategori'] ?></td>
				<td>
					<a href="?aksi=hapus&id=<?= $row['kd_kategori'] ?>" class="btn btn-danger">hapus</a>
				</td>
			</tr>

		<?php endwhile; ?>
			
		</tbody>
		
	</table>
</div>

<?php 

if (isset($_POST['submit'])) {

	$nama = $_POST['nama'];

	$result = mysqli_query($con, "INSERT INTO tb_kategori VALUES('','$nama')");

	if ($result) {
		header("Location: kategori.php?pesan=tambah");
	}
}


if (isset($_GET['aksi'])) {

	if ($_GET['aksi'] == 'hapus') {
		$kd = $_GET['id'];
		$result = mysqli_query($con, "DELETE FROM tb_kategori WHERE kd_kategori = '$kd'");

		if ($result) {
			header("Location: kategori.php?pesan=hapus");
		}
	}
}

 ?>

<?php require 'footer.php'; ?>