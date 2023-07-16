<?php include 'header.php'; ?>

<div class ="gambar_galeri m-auto pt-5 ">
<img src="uploads\ppdb\ppdbtk.1.png" class="img-fluid rounded" alt="...">
</div> 

<div class="bagian">
    <div class="wadah container pt-4 pb-5">
        <h3 class="fw-bold lh-2 mb-3 text-center">PPDB</h3>
        <img src="uploads\ppdb\alur.png" class="img-fluid rounded" alt="...">

<section>

        <?php
            $ppdb = mysqli_query($conn, "SELECT * FROM ppdb ORDER BY id_pp DESC LIMIT 1");
            if(mysqli_num_rows($ppdb) > 0){
                while($p = mysqli_fetch_array($ppdb)){
        ?>


        <p><?php echo $p['keterangan_pp'] ?></p>

        <div class="row">
            <div class="col-sm-12 mt-3">
                <a href="DownloadFile.php?file=<?php echo $p['berkas'] ?>" title="Download Data"
                    class="btn btn-primary">
                    <i class="bi bi-cloud-arrow-down"> </i>Download Formulir PPDB</a>
            </div>
        </div>


        <?php }}else{ ?>

        Tidak ada data

        <?php } ?>

    </div>
</div>



<!-- Kontak -->
<section id="kontak">
    <div class="container text-center pt-4 pb-5">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h3 class="fw-bold lh-2 mb-3">KONTAK KAMI</h3>
            </div>
        </div>

        <div class="row align-items-start text-start g-4 pt-4 pb-5">
            <div class="col-lg-7">
                
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.6464282780817!2d110.36480987485825!3d-7.827195177745086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a57affee23e75%3A0x43338444516126ee!2zVEsgQWlzeWl5YWggQnVzdGFudWwgQXRoZmFsIEtyYXB5YWsgV2V0YW4o6qeL6qag6qeA6qaP6qeA6qaN6qax6qa-6qa26qaq6qaD6qan6qa46qax6qeA6qag6qak6qa46qat6qeA6qaE6qab6qeA6qal6qaz6qat6qeA6qaP6qa_6qal6qa-6qaP6qeA6qau6qa86qag6qak6qeAKQ!5e0!3m2!1sid!2sid!4v1685462429515!5m2!1sid!2sid" 
                class="rounded-4 shadow" width="100%" height="360"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>

            <div class="col-lg-5">
                <div class="card h-100 border-0 rounded-4 shadow">
                    <div class="card-body p-4 pb-0">
                        <div class="d-flex py-2">
                            <div class="flex-shrink-0">
                                <i class="bi bi-geo-alt text-success fs-3"></i>
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Alamat</h5>
                                <p> 59F8+4X6, Jl. Mawar, Krapyak Wetan, Panggungharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55143</p>
                            </div>
                        </div>

                        <hr class="hr-dotted mt-0">

                        <div class="d-flex py-2">

                            <div class="flex-shrink-0">
                                <i class="bi bi-whatsapp text-success fs-4"></i>
                            </div>

                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Nomor WhatsApp</h5>
                                <p>08283728732</p>
                            </div>
                        </div>

                        <hr class="hr-dotted mt-0">

                        <div class="d-flex py-2">

                            <div class="flex-shrink-0">
                                <i class="bi bi-envelope text-success fs-4"></i>
                            </div>
                            
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-1">Email</h5>
                                <p>TKABAKRAPYAKWETAN@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Akhir Kontak -->

<?php include 'footer.php'; ?>