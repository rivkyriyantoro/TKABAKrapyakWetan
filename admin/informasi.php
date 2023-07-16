<?php include 'header.php' ?>

<section>
<h3 class="fw-bold lh-2 mb-3 text-center">Tabel Informasi</h3>
    <div class="container tambahh mt-5">
        <?php
            if(isset($_GET['success'])){
                echo "<div class='alert alert-success'>".$_GET['success']."</div>";
            }
        ?>
        <a class="btn btn-success mb-3" href="tambah-informasi.php">Tambah</a>
    </div>
    <div class="container table-responsive-md mb-5">
        <table id="example" class="table table-hover table-bordered " style="width:100%">
            <thead class="table-secondary">
                <tr>
                    <th class="col">No</th>
                    <th class="col">Judul</th>
                    <th class="col">Keterangan</th>
                    <th class="col">Gambar</th>
                    <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
					$no = 1;
					$where = " WHERE 1=1 ";
					if(isset($_GET['key'])){
						$where .= " AND judul LIKE '%".addslashes($_GET['key'])."%' ";
					}

					$informasi = mysqli_query($conn, "SELECT * FROM informasi $where ORDER BY id_in DESC");
					if(mysqli_num_rows($informasi) > 0){
						while($p = mysqli_fetch_array($informasi)){
				?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= substr($p['judul_in'],0, 10)?></td>
                    <td><?= substr($p['keterangan_in'], 0, 10) ?></td>
                    <td><img src="../uploads/informasi/<?= $p['gambar_in'] ?>" width="100px"></td>
                    <td>
                        <div class="row">
                        <div class="col-sm-6">
                        <form action="edit-informasi.php" method="GET">
                    <input type="hidden" name="in" value="<?= $p['id_in'] ?>">
                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
                            </div>

                            <div class="col-sm-6">
                                <a href="hapus.php?in=<?= $p['id_in'] ?>"
                                    onclick="return confirm('Yakin ingin hapus ?')" >
                                    <button type="submit" class="btn btn-danger">hapus</button>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php }}else{ ?>
                <tr>
                    <td colspan="5">Data tidak ada</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'footer.php' ?>