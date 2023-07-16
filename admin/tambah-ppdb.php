<?php include 'header.php' ?>

<section>
	<div class="container mb-5 mt-5">
		<div class="card border-0 shadow">
			<div class="card-header">
				<h3 class="text-center">Tambah PPDB</h3>
			</div>

			<form class="container mt-5 mb-5 p-4" action="" method="POST" enctype="multipart/form-data">

				<?php

				if (isset($_POST['submit'])) {
					

					// print_r($_FILES['gambar']);

					$nama 	= addslashes(ucwords($_POST['nama']));
					$ket 	= addslashes($_POST['keterangan']);

					$filename 	= $_FILES['berkas']['name'];
					$tmpname 	= $_FILES['berkas']['tmp_name'];
					$filesize 	= $_FILES['berkas']['size'];

					$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
					$rename 	= 'ppdb' . time() . '.' . $formatfile;

					$allowedtype = array('doc', 'docx', 'pdf');

					if (!in_array($formatfile, $allowedtype)) {

						echo '<div class="alert alert-danger">Format file tidak diizinkan.</div>';
					} elseif ($filesize > 10000000) {

						echo '<div class="alert alert-danger">Ukuran file tidak boleh lebih dari 1 MB.</div>';
					} else {

						move_uploaded_file($tmpname, "../uploads/file/" . $rename);

						$simpan = mysqli_query($conn, "INSERT INTO ppdb (nama_pp, keterangan_pp, berkas) VALUES (
							'".$nama."',
							'".$ket."',
							'".$rename."'
						)");

						if ($simpan) {
							echo '<div class="alert alert-success">Simpan Berhasil</div>';
						} else {
							echo 'gagal simpan ' . mysqli_error($conn);
						}
					}
				}

				?>

				<div class="mb-3">
					<label class="form-label">Nama</label>
					<input type="text" name="nama" placeholder="" class="form-control" autocomplete="off" required>
				</div>

				<div class="mb-3">
					<label class="form-label">Keterangan</label>
					<textarea class="form-control" name="keterangan" id="keterangan" rows="3"></textarea>
				</div>

				<div class="mb-3">
					<label class="form-label">File</label>
					<input type="file" name="berkas" class="form-control" Accept="Application/Pdf/doc/docx" required>
				</div>

				<button type="submit" name="submit" class="btn btn-success">Simpan</button>
				<button type="button" class="btn btn-danger" onclick="window.location = 'ppdb-tk.php'">Kembali</button>
			</form>

		</div>
	</div>
</section>

<?php include 'footer.php' ?>