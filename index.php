<?php 

require 'header.php';

?>

<div class="container mt-5">
	<h3 class="text-center"><i class="fa fa-calendar"></i> Data Jadwal </h3>

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


	

	<a href="tambah_jadwal.php" class="btn btn-primary mt-2 mb-4"><i class="fa fa-plus"></i> Tambah Data</a>

	<ul class="nav nav-tabs" id="myTab" role="tablist">
	  <li class="nav-item">
	    <a class="nav-link active" id="senin-tab" data-toggle="tab" href="#senin" role="tab" aria-controls="senin" aria-selected="true">Senin</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="selasa-tab" data-toggle="tab" href="#selasa" role="tab" aria-controls="selasa" aria-selected="true">Selasa</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="rabu-tab" data-toggle="tab" href="#rabu" role="tab" aria-controls="rabu" aria-selected="true">Rabu</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="kamis-tab" data-toggle="tab" href="#kamis" role="tab" aria-controls="kamis" aria-selected="true">Kamis</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="jumat-tab" data-toggle="tab" href="#jumat" role="tab" aria-controls="jumat" aria-selected="true">Jum'at</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="sabtu-tab" data-toggle="tab" href="#sabtu" role="tab" aria-controls="sabtu" aria-selected="true">Sabtu</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" id="minggu-tab" data-toggle="tab" href="#minggu" role="tab" aria-controls="minggu" aria-selected="true">Minggu</a>
	  </li>
	</ul>
	<div class="tab-content" id="myTabContent">
	  <div class="tab-pane fade show active" id="senin" role="tabpanel" aria-labelledby="senin-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($s = mysqli_fetch_assoc($senin)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $s['nm_kategori'] ?></td>
	  					<td><?= $s['nm_audio'] ?></td>
	  					<td><?= $s['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $s['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $s['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="selasa" role="tabpanel" aria-labelledby="selasa-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($ss = mysqli_fetch_assoc($selasa)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $ss['nm_kategori'] ?></td>
	  					<td><?= $ss['nm_audio'] ?></td>
	  					<td><?= $ss['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $ss['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $ss['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="rabu" role="tabpanel" aria-labelledby="rabu-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($r = mysqli_fetch_assoc($rabu)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $r['nm_kategori'] ?></td>
	  					<td><?= $r['nm_audio'] ?></td>
	  					<td><?= $r['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $r['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $r['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="kamis" role="tabpanel" aria-labelledby="kamis-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($k = mysqli_fetch_assoc($kamis)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $k['nm_kategori'] ?></td>
	  					<td><?= $k['nm_audio'] ?></td>
	  					<td><?= $k['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $k['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $k['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="jumat" role="tabpanel" aria-labelledby="jumat-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($j = mysqli_fetch_assoc($jumat)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $j['nm_kategori'] ?></td>
	  					<td><?= $j['nm_audio'] ?></td>
	  					<td><?= $j['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $j['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $j['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="sabtu" role="tabpanel" aria-labelledby="sabtu-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($sb = mysqli_fetch_assoc($sabtu)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $sb['nm_kategori'] ?></td>
	  					<td><?= $sb['nm_audio'] ?></td>
	  					<td><?= $sb['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $sb['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $sb['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	  <div class="tab-pane fade show" id="minggu" role="tabpanel" aria-labelledby="minggu-tab">
	  	<div class="table-responsive mt-4">
	  		<table class="table table-bordered">
	  			<thead>
	  				<tr>
	  					<th>#</th>
	  					<th>Kategori</th>
	  					<th>Audio</th>
	  					<th>Jam</th>
	  					<th>Aksi</th>
	  				</tr>
	  			</thead>
	  			<tbody>

	  				<?php $i = 1; while($m = mysqli_fetch_assoc($minggu)) : ?>

	  				<tr>
	  					<td><?= $i++ ?></td>
	  					<td><?= $m['nm_kategori'] ?></td>
	  					<td><?= $m['nm_audio'] ?></td>
	  					<td><?= $m['jam'] ?></td>
	  					<td>
	  						<a href="edit_jadwal.php?id=<?= $m['kd_jadwal'] ?>" class="btn btn-warning"> <i class="fa fa-edit"></i> Edit</a>
	  						<a href="?aksi=hapus&id=<?= $m['kd_jadwal'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
	  					</td>
	  				</tr>

	  			<?php endwhile; ?>

	  			</tbody>
	  		</table>
	  	</div>
	  </div>
	</div>

</div>

<?php 

if (isset($_GET['aksi'])) {

	if ($_GET['aksi'] == 'hapus') {
		$kd = $_GET['id'];
		$result = mysqli_query($con, "DELETE FROM tb_jadwal WHERE kd_jadwal = '$kd'");

		if ($result) {
			echo "<script>document.location.href = 'jadwal.php?pesan=hapus' </script>";
		}
	}
}

 ?>

<?php require 'footer.php'; ?>