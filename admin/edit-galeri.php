<?php include 'header.php' ?>

<?php
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				// Rest of your code
				$galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE id_gl = $id");
			
				if (mysqli_num_rows($galeri) == 0) {
					// Handle the case when no matching record is found
					// For example, you can redirect the user to another page
					// echo "<script>window.location='index.php'</script>";
				}
			
				$p = mysqli_fetch_object($galeri);
			}
		?>

<section>
    <div class="container mb-5 mt-5">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h3 class="text-center">Edit Data Galeri</h3>
            </div>

            <form class="container mt-5 mb-5 p-4" action="" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" placeholder="Judul Informasi..." class="form-control"
                        value="<?= $p->nama_gl ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" name="keterangan" placeholder="Keterangan..." id="keterangan"
                        rows="3"><?= $p->keterangan_gl ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gambar</label>
                    <img src="../uploads/galeri/<?= $p->gambar_gl ?>" width="200px" class="image card mb-3">
                    <input type="hidden" name="gambar" class="form-control" value="<?= $p->gambar_gl ?>">
                    <input type="file" name="gambar" class="form-control">
                </div>

               
                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
				<button type="button" class="btn btn-danger"
                    onclick="window.location = 'galeri.php'">Kembali</button>
            </form>

            <?php

				if(isset($_POST['submit'])){

					$nama 	= addslashes(ucwords($_POST['nama']));
					$ket 	= addslashes($_POST['keterangan']);
					

					if($_FILES['gambar']['name'] != ''){

						// echo 'user ganti gambar';

						$filename 	= $_FILES['gambar']['name'];
						$tmpname 	= $_FILES['gambar']['tmp_name'];
						$filesize 	= $_FILES['gambar']['size'];

						$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
						$rename 	= 'galeri'.time().'.'.$formatfile;

						$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

						if(!in_array($formatfile, $allowedtype)){

							echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

							return false;

						}elseif($filesize > 1000000){

							echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

							return false;

						}else{

							if(file_exists("../uploads/galeri/".$_POST['gambar'])){

								unlink("../uploads/galeri/".$_POST['gambar']);

							}

							move_uploaded_file($tmpname, "../uploads/galeri/".$rename);

						}

					}else{

						// echo 'user tidak ganti gambar';

						$rename 	= $_POST['gambar'];

					}

					
					


					$update = mysqli_query($conn, "UPDATE galeri SET
    nama_gl = '".$nama."',
    keterangan_gl = '".$ket."',
    gambar_gl = '".$rename."'
    WHERE id_gl = '".$_GET['id']."'
");



					if($update){
						echo "<script>window.location='galeri.php?success=Edit Data Berhasil'</script>";
					}else{
						echo 'gagal edit '.mysqli_error($conn);
					}

				}

			?>

        </div>
    </div>
</section>

<?php include 'footer.php' ?>