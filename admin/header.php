<?php
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
	

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@latest/font/bootstrap-icons.css">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">



    <title>Panel Admin - TK ABA KRAPYAK WETAN</title>

    <link rel="stylesheet" href="../assets/css/style.css">

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" integrity="sha512-..." crossorigin="anonymous"></script>


    <script>
    tinymce.init({
        selector: '#keterangan'
    });
    </script>

    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>

</head>


<body>
<nav class="navbar py-3 bg-nav fixed-top shadow-sm ">
<div class="container-fluid">
  <div class="row align-items-center">
    <div class="col-auto">
      <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    <div class="col">
      <a class="navbar-brand fw-bold text-light" href="index.php">
        <img class="navbar-brand" src="https://i.pinimg.com/originals/b1/d3/72/b1d372edd174948e233d15890e45ad98.png" width="40" class="d-inline-block align-left">
        TK ABA KRAPYAK WETAN
      </a>
    </div>
  </div>
</div>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                     <a class="nav-link active"
                            aria-expanded="false">  <i class="bi bi-person-fill text-success"></i> Hallo
                            <?= $_SESSION['uname'] ?> 
                     </a>      
           </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          
        

          <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="./index.php">
              <i class="bi bi-house-fill text-success"></i> Home
              <hr>
              </a>
            </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./galeri.php">
              <i class="bi bi-image-fill text-success"></i> Galeri
              <hr>
              </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./informasi.php">
              <i class="bi bi-info-square-fill text-success"></i> informasi
              <hr>
              </a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./ppdb-tk.php">
              <i class="bi bi-clipboard-fill text-success"></i> PPDB
              <hr>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./admin.php">
              <i class="bi bi-people-fill text-success"></i> Admin </a>
              <hr>
          </li>


          <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./logout.php">
              <i class="bi bi-door-open-fill text-success"></i> Keluar </a>
          </li>
      
        </ul>
      </div>
    </div>
  </div>
</nav>
  </body>
      