<?php include 'header.php' ?>

<section>
    <div class="container mb-5 mt-5">
        <div class="card border-0 shadow">
            <div class="card-header">
                <h3 class="text-center">Tambah Admin</h3>
            </div>

            <form class="container mt-5 mb-5 p-4" action="" method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="user" placeholder="Username..." class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="password" placeholder="Username..." class="form-control" required>
                </div>


                <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-danger"
                    onclick="window.location = './admin.php'">Kembali</button>
              
            </form>

            <?php

				if(isset($_POST['submit'])){

					$user 	= addslashes($_POST['user']);
					
					$pass 	= addslashes($_POST['user']);

					$cek 	= mysqli_query($conn, "SELECT username FROM admin WHERE username = '".$user."' ");
					if(mysqli_num_rows($cek) > 0){
						echo '<div class="alert alert-error">Username sudah digunakan</div>';
					}else{

						$simpan = mysqli_query($conn, "INSERT INTO admin (username, password) VALUES (
                            '".$user."',
                            '" . md5($pass) . "'
                        )");
                        
                        
                        

					if($simpan){
						echo '<div class="alert alert-success">Simpan Berhasil</div>';
					}else{
						echo 'gagal simpan '.mysqli_error($conn);
					}

					}

				}

			?>

        </div>
    </div>
</section>

<?php include 'footer.php' ?>