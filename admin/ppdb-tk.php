<?php include 'header.php' ?>

<section>
<h3 class="fw-bold lh-2 mb-3 text-center">Tabel PPDB</h3>
    <div class="container tambahh mt-5">
        <?php
        if (isset($_GET['success'])) {
            echo "<div class='alert alert-success'>" . $_GET['success'] . "</div>";
        }
        ?>
        <a class="btn btn-success mb-3" href="tambah-ppdb.php">Tambah</a>
    </div>
    <div class="container table-responsive-md mb-5">
        <table id="example" class="table table-hover table-bordered" style="width:100%">
            <thead class="table-secondary">
                <tr>
                    <th class="col">No</th>
                    <th class="col">Nama</th>
                    <th class="col">Keterangan</th>
                    <th class="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;

                $where = " WHERE 1=1 ";
                if (isset($_GET['key'])) {
                    $where .= " AND nama LIKE '%" . addslashes($_GET['key']) . "%' ";
                }

                $ppdb = mysqli_query($conn, "SELECT * FROM ppdb $where ORDER BY id_pp DESC");
                if (mysqli_num_rows($ppdb) > 0) {
                    while ($p = mysqli_fetch_array($ppdb)) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= substr($p['nama_pp'], 0, 10) ?></td>
                    <td><?= substr($p['keterangan_pp'], 0, 10) ?></td>
                    <td>
                        <div class="row">
                            <div class="col-sm-4">
                                <a href="edit-ppdb.php?id_pp=<?= $p['id_pp'] ?>" title="Edit Data"
                                    class="btn btn-success btn-sm text-white mb-3">Edit</a>
                            </div>
                            <div class="col-sm-4">
                            <a href="hapus.php?id_pp=<?= $p['id_pp'] ?>" onclick="return confirm('Yakin ingin hapus ?')" title="Hapus Data"
                             class="btn btn-danger btn-sm text-white mb-3">Hapus</a>

                            </div>

                            <div class="col-sm-4">
                                <a href="DownloadFile.php?file=<?php echo $p['berkas'] ?>" title="Download Data"
                                    class="btn btn-primary btn-sm">Download</a>
                            </div>

                        </div>

                    </td>
                </tr>
                <?php }
                } else { ?>
                <tr>
                    <td colspan="5">Data tidak ada</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include 'footer.php' ?>