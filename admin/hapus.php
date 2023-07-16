<?php
include '../koneksi.php';

if (isset($_GET['idadmin'])) {
    $delete = mysqli_query($conn, "DELETE FROM admin WHERE id = '".$_GET['idadmin']."' ");
    echo "<script>window.location = 'admin.php'</script>";
}

if (isset($_GET['id_pp'])) {
    $ppdbId = $_GET['id_pp'];
    
    $ppdb = mysqli_query($conn, "SELECT * FROM ppdb WHERE id_pp = '".$ppdbId."' ");
    
    if (mysqli_num_rows($ppdb) == 0) {
        // Handle the case when no matching record is found
        // For example, you can redirect the user to another page
        // echo "<script>window.location='ppdb-tk.php'</script>";
    } else {
        $p = mysqli_fetch_object($ppdb);
        
        if (file_exists("../uploads/file/".$p->berkas)) {
            unlink("../uploads/file/".$p->berkas);
        }
        
        $delete = mysqli_query($conn, "DELETE FROM ppdb WHERE id_pp = '".$ppdbId."' ");
        echo "<script>window.location = 'ppdb-tk.php'</script>";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $galeri = mysqli_query($conn, "SELECT * FROM galeri WHERE id_gl = $id");

    if (mysqli_num_rows($galeri) == 0) {
        // Handle the case when no matching record is found
        // For example, you can redirect the user to another page
        // echo "<script>window.location='index.php'</script>";
    } else {
        $p = mysqli_fetch_object($galeri);

        if (file_exists("../uploads/galeri/".$p->gambar_gl)) {
            unlink("../uploads/galeri/".$p->gambar_gl);
        }

        $delete = mysqli_query($conn, "DELETE FROM galeri WHERE id_gl = '".$id."' ");
        echo "<script>window.location = 'galeri.php'</script>";
    }
}

if (isset($_GET['in'])) {
    $id = $_GET['in'];
    $informasi = mysqli_query($conn, "SELECT * FROM informasi WHERE id_in = $id");

    if (mysqli_num_rows($informasi) == 0) {
        // echo "<script>window.location='index.php'</script>";
        exit;
    } else {
        $p = mysqli_fetch_object($informasi);

        if (file_exists("../uploads/informasi/".$p->gambar_in)) {
            unlink("../uploads/informasi/".$p->gambar_in);
        }

        $delete = mysqli_query($conn, "DELETE FROM informasi WHERE id_in = '".$id."' ");

        header("Location: informasi.php");
        exit();
    }
}
?>
