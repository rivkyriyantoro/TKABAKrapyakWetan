<?php include 'header.php'; ?>

<div class ="gambar_galeri m-auto pt-5 ">
<img src="uploads\informasi\informasitk.1.png" class="img-fluid rounded" alt="...">
</div> 


<section>
<div class="bagian">

    <div class="wadah col-md-7 order-md-2">
            <!-- HTML code for displaying informasi -->
            <h2 class="fw-bold lh-2 mb-3 text-center">INFORMASI</h2>

        <?php
            $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id_in DESC");
            if (mysqli_num_rows($informasi) > 0) {
                while ($p = mysqli_fetch_array($informasi)) {
        ?>

        <div class="container pt-5 mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <div class="thumbail-img card-img-top img-fluid rounded-4"
                        style="background-image: url('uploads/informasi/<?= $p['gambar_in'] ?>');">
                    </div>
                </div>

                <div class="col-sm-6">
                    <h3 class="fw-bold lh-1 mb-2"><?= $p['judul_in'] ?> </h3>
                    <p class="mb-1"><?= $p['keterangan_in'] ?></p>
                    <span>
                        <form action="detail_informasi.php" method="GET">
                            <input type="hidden" name="in" value="<?= $p['id_in'] ?>">
                            <button type="submit" class="btn btn-success">Selengkapnya</button>
                        </form>
                    </span>
                </div>
            </div>      
        </div>
    </div>
</div>

<?php
    }
} else {
?>
    <p>Tidak ada data</p>
<?php
}
?>

</section>


<?php include 'footer.php'; ?>