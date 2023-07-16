<?php include 'header.php' ?>

<?php
	if (isset($_GET['id_pp'])) 
		$ppdbId = $_GET['id_pp'];
	
		$ppdb = mysqli_query($conn, "SELECT * FROM ppdb WHERE id_pp = '".$ppdbId."' ");
	
		if (mysqli_num_rows($ppdb) == 0) {
			// Handle the case when no matching record is found
			// For example, you can redirect the user to another page
			// echo "<script>window.location='ppdb-tk.php'</script>";
		}
	
		$p = mysqli_fetch_object($ppdb);

?>


<section>
    <div class="container mb-5 mt-5">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h3 class="text-center">Edit PPDB</h3>
            </div>

            <form class="container mt-5 mb-5 p-4" action="" method="POST" enctype="multipart/form-data">

                <?php
					if(isset($_GET['success'])){
						echo "<div class='alert alert-success'>".$_GET['success']."</div>";
					}
				?>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" placeholder="Nama" class="form-control" value="<?= $p->nama_pp ?>"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Keterangan</label>
                    <textarea class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan"
                        rows="10"><?= $p->keterangan_pp ?></textarea>
                </div>

            
                <div class="mb-3">
					<label class="form-label">berkas</label>
					<!--  -->
						<div><?= $p->berkas ?></div>
						<input type="hidden" name="berkas_lama" class="form-control" value="<?= $p->berkas ?>">
				
						<input type="file" name="berkas_lama" class="form-control" value="<?= $p->berkas ?>">


					
				</div>


				<button type="submit" name="submit" value="Simpan Perubahan" class="btn btn-success">Simpan
                   </button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location = 'ppdb-tk.php'">Kembali</button>

             
            </form>
            <?php

				if(isset($_POST['submit'])){

					$nama 	= addslashes(ucwords($_POST['nama']));
					$ket	= addslashes($_POST['keterangan']);
				

					// menampung dan validasi data berkas
					if($_FILES['berkas_baru']['name'] != ''){

						$filename_berkas 	= $_FILES['berkas_baru']['name'];
						$tmpname_berkas 	= $_FILES['berkas_baru']['tmp_name'];
						$filesize_berkas	= $_FILES['berkas_baru']['size'];

						$formatfile_berkas = pathinfo($filename_berkas, PATHINFO_EXTENSION);
						$rename_berkas	   = 'ppdb'.time().'.'.$formatfile_berkas;

						$allowedtype_berkas = array('doc', 'docx', 'pdf');

						if(!in_array($formatfile_berkas, $allowedtype_berkas)){

							echo '<div class="alert alert-danger">Format file logo TK tidak diizinkan.</div>';

							return false;

								}elseif($filesize_berkas > 1000000){

									echo '<div class="alert alert-danger">Ukuran file logo TK tidak boleh lebih dari 1 MB.</div>';

									return false;

								}else{

									if(file_exists("../uploads/file/".$_POST['berkas_lama'])){

										unlink("../uploads/file/".$_POST['berkas_lama']);

									}

									move_uploaded_file($tmpname_berkas, "../uploads/file/".$rename_berkas);

									}

								}else{

									$rename_berkas = $_POST['berkas_lama'];

								}

								$update = mysqli_query($conn, "UPDATE ppdb SET
									nama_pp = '".$nama."',
									keterangan_pp = '".$ket."',
									berkas = '".$rename_berkas."'
									WHERE id_pp = '".$_GET['id_pp']."'
								");



								if($update){
									echo "<script>window.location='ppdb-tk.php?success=Edit Data Berhasil'</script>";
								}else{
									echo 'gagal edit '.mysqli_error($conn);
								}
							}
						?>
        </div>
    </div>
</section>

<?php include 'footer.php' ?>