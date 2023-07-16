<?php include 'header.php'; ?>

<div class ="gambar_galeri m-auto pt-5 ">
<img src="uploads\galeri\galeritk.1.png" class="img-fluid rounded" alt="...">
</div>

</section>

<section>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-6">
                <img src="uploads\galeri\foto guru bg.png" class="figure-img img-fluid rounded mb-4"
                    alt="Digital Creative" loading="lazy">
            </div>
            <div class="col-sm-6">
                <h2 class="fw-bold lh-2 mb-3">Sejarah Singkat Lembaga TK ABA Krapyak Wetan </h2>
                <p class="lead mb-5">TK ABA Krapyak Wetan sesuai dengan misi dan visinya, tergugah untuk memberikan kontribusi terhadap pemberdayaan pendidikan dan perkembangan otak anak sejak dini dan 
                    sebagai realisasi UU Pendidikan No. 20 tahun 2003. Maka mulai tahun Ajaran 2006/2007 TK ABA Krapyak Wetan disamping membuka pendaftaran 
                    anak didik kelompok kelas A (anak usia 4 s.d 5 tahun), juga membuka Pendaftaran anak didik untuk kelompok bermain (anak usia 2 s.d 3,8 tahun). 
                
                Dalam melaksanakan kegiatan belajar mengajar, TK ABA Krapyak Wetan menerapkan perpaduan antara pola pendidikan yang didasarkan pada Kurikulum Pendidikan Nasional, Kurikulum Departemen Agama dengan 
                        pola Pengembangan AI Islam TK Aisyiyah Bustanul Athfal serta diperkaya dengan pola pendidikan yang sangat dibutuhkan anak didik saat ini diantaranya: Pengenalan Komputer , CD Interaktif , Rekreasi , Renang, Musik 
                        , Angklung, Bahasa Arab, IQRO', Praktek Ibadah Sholat, Bahasa Inggris, Senam Sehat Ceria, Menari, Drum Band.
                </p>

            </div>
        </div>
    </div>
</section>

<section>
<h3 class="fw-bold lh-2 mb-3 text-center">VISI Dan MISI</h3>

    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-6">
                <img src="uploads\galeri\visi.png" class="figure-img img-fluid rounded mb-4"
                    alt="Digital Creative" loading="lazy">
            </div>
            <div class="col-sm-6">
            <img src="uploads\galeri\misi.png" class="figure-img img-fluid rounded mb-4"
                    alt="Digital Creative" loading="lazy">
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-6">
            <h2 class="fw-bold lh-2 mb-3"> TK ABA KRAPYAK WETAN PLUS </h2>
                <p class="lead mb-5">TK ABA Krapyak Wetan Plus membuka kelas sampai siang dengan materi tambahan
                    keagamaan persiapan memasuki Sekolah Dasar Yang dikemas sesuai  perkembangan anak didik.</p>
                
            </div>
            <div class="col-sm-6">
                
                    <img src="uploads\galeri\krapyak wetan plus.jpeg" class="figure-img img-fluid rounded mb-4"
                    alt="Digital Creative" loading="lazy">

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container pt-5 mt-5">
        <div class="row">
            <div class="col-sm-6">
            <h2 class="fw-bold lh-2 mb-3"> Pengenalan Anak </h2>
                <p class="lead mb-5">Pengenalan Anak terhadap peralatan teknologi terkini dan 
                    pemenuhan kebutuhan penujangnya sangat diperlukan agar anak didik dapat mengikuti
                    perkembangan jalan.
                </p>
                
            </div>
            <div class="col-sm-6">
                
                    <img src="uploads\galeri\pengenalan anak fix.jpeg" class="figure-img img-fluid rounded mb-4"
                    alt="Digital Creative" loading="lazy">

            </div>
        </div>
    </div>
</section>

<section>
<div class="bagian">

<h2 class="fw-bold lh-2 mb-3 text-center">Galeri</h2>
    <div class="wadah col-md-7 order-md-2">

        <?php
        $galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id_gl DESC");
        if (mysqli_num_rows($galeri) > 0) {
            while ($p = mysqli_fetch_array($galeri)) {
        ?>


    <div class="container pt-5 mt-5">
        <div class="row ">
            <div class="col-sm-6 ">
            <div class="thumbail-img card-img-top img-fluid rounded-4" style="background-image: url('uploads/galeri/<?= $p['gambar_gl'] ?>');">
                                    </div>            
         </div>

            <div class="col-sm-6">
                <h3 class="fw-bold lh-1 mb-2"><?= $p['nama_gl'] ?> </h3>
                <p class="mb-1"><?= $p['keterangan_gl'] ?></p>
                <span>  <form action="detail_galeri.php" method="GET">
                    <input type="hidden" name="id" value="<?= $p['id_gl'] ?>">
                            <button type="submit" class="btn btn-success">Selengkapnya</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
            <?php }
        } else { ?>

            Tidak ada data

        <?php } ?>

    </div>
</div>
</section>


<?php include 'footer.php'; ?>