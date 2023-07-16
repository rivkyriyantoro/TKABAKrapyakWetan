<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   

    <title> TK ABA KRAPYAK WETAN</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 bg-nav fixed-top shadow-sm  ">
        <div class="container">
            <!-- Brand -->
            <img class="navbar-brand" src="https://i.pinimg.com/originals/b1/d3/72/b1d372edd174948e233d15890e45ad98.png" width="40">
            <a class="navbar-brand fw-bold  text-light " href="index.php">TK ABA KRAPYAK WETAN</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse py-3 py-lg-1" id="navbarSupportedContent">
                <!-- Menu -->
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="informasi.php">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-3" href="ppdb.php">PPDB</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>