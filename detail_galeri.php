<?php include 'header.php'; ?>

<section>
    <div class="container pt-4 pb-5">
        <?php
				if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    // Rest of your code
                    $galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE id_gl = $id");
                
                    if (mysqli_num_rows($galeri) == 0) {
                       
                    }
                
                    $p = mysqli_fetch_object($galeri);
                }
			?>


        <h3 class="fw-bold lh-2 mb-5 text-center"><?= $p->nama_gl?></h3>

        <div class="gambar">
            <img src="uploads/galeri/<?= $p->gambar_gl?>" width="80%" class="image img-fluid rounded-4 shadow mb-5"
                style="margin-top:5px">
        </div>

        <?= $p->keterangan_gl ?>
    </div>
</section>

<div class="section">
    <div class="container">

    </div>
</div>

<?php include 'footer.php'; ?>