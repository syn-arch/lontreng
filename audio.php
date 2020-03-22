<?php 

require 'header.php'; 

$result = mysqli_query($con, "SELECT * FROM tb_audio");

?>

<div class="container mt-5">
	<h3 class="text-center"> <i class="fa fa-music"></i> Data Audio </h3>
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
			<form method="post" enctype="multipart/form-data">
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">Nama Audio</label>
					<div class="col-sm-10">
						<input type="text" name="nama" class="form-control" placeholder="Nama audio" required>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-sm-2 form-control-label">File Audio</label>
					<div class="col-sm-10">
						<input type="file" name="audio" class="form-control" required accept=".ogg,.flac,.mp3">
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
				<th>Nama Audio</th>
				<th>Audio</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>

			<?php $i = 1; while($row = mysqli_fetch_assoc($result)) : ?>

			<tr>
				<td><?= $i++ ?></td>
				<td><?= $row['nm_audio'] ?></td>
				<td><audio controls src="assets/audio/<?= $row['audio'] ?>"></audio></td>
				<td>
					<a href="?aksi=hapus&id=<?= $row['kd_audio'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
				</td>
			</tr>

		<?php endwhile; ?>
			
		</tbody>
		
	</table>
</div>

<?php 

if (isset($_POST['submit'])) {

	$inipath = php_ini_loaded_file();

	$nama = $_POST['nama'];
	$audio = $_FILES['audio']['name'];

	$path = "assets/audio/"; //file to place within the server
	$valid_formats1 = array("mp3", "ogg", "flac", "wav"); //list of file extention to be accepted

    $file1 = $_FILES['audio']['name']; //input file name in this code is file1
    $size = $_FILES['audio']['size'];

    if(strlen($file1))
    {

        list($txt, $ext) = explode(".", $file1);
        if(in_array($ext,$valid_formats1))
        {
            $actual_image_name = $txt.".".$ext;
            $tmp = $_FILES['audio']['tmp_name'];
            if(move_uploaded_file($tmp, $path.$actual_image_name))
            {
                    $result = mysqli_query($con, "INSERT INTO tb_audio VALUES('','$nama','$audio')");

					if ($result) {
						header("Location: audio.php?pesan=tambah");
					}

            }
            else{
                echo "failed";              
            }
        }
    }
	
}


if (isset($_GET['aksi'])) {

	if ($_GET['aksi'] == 'hapus') {
		$kd = $_GET['id'];

		$result = mysqli_query($con, "DELETE FROM tb_audio WHERE kd_audio = '$kd'");

		$file = mysqli_fetch_assoc(mysqli_query($con, "SELECT * FROM tb_audio WHERE kd_audio = '$kd'"))['audio'];

		unlink($_SERVER['DOCUMENT_ROOT'] . '/bel_sekolah/assets/audio/' . $file);

		if ($result) {
			header("Location: audio.php?pesan=hapus");
		}
	}
}

 ?>

<?php require 'footer.php'; ?>