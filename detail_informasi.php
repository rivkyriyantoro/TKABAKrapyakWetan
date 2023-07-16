<?php include 'header.php'; ?>


<section>
    <div class="container pt-4 pb-5">
        <?php
				if (isset($_GET['in'])) {
                    $id = $_GET['in'];
                    // Rest of your code
                    $informasi = mysqli_query($conn, "SELECT * FROM informasi WHERE id_in = $id");
                
                    if (mysqli_num_rows($informasi) == 0) {
                        // Handle the case when no matching record is found
                        // For example, you can redirect the user to another page
                        // echo "<script>window.location='index.php'</script>";
                    }
                
                    $p = mysqli_fetch_object($informasi);
                }
			?>


        <h3 class="fw-bold lh-2 mb-5 text-center"><?= $p->judul_in?></h3>

        <div class="gambar">
            <img src="uploads/informasi/<?= $p->gambar_in?>" width="80%" class="image img-fluid rounded-4 shadow mb-5"
                style="margin-top:5px">
        </div>

        <?= $p->keterangan_in ?>
    </div>
</section>

<div class="section">
    <div class="container">




    </div>
</div>

<?php include 'footer.php'; ?>