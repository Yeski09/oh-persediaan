<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title><?php echo $judul; ?></title>
  </head>
  <body>

  <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
  <a class="navbar-brand" href="#">CI App</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Barang</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Penjualan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Karyawan</a>
      </li>
    </ul>
  </div>
  </div>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">Dashboard<span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Barang
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Barang Masuk</a></li>
          <li><a class="dropdown-item" href="#">Barang Keluar</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Detail Barang</a></li>
        </ul>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Laporan
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Laporan Arus Barang</a></li>
        </ul>
      <li class="nav-item">
        <a class="nav-link" href="#">Pemasok</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Karyawan</a>
      </li>
      </li>
    </ul>
    </div>
  </div>
</nav>