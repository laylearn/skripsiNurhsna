<?php 
session_start();
include 'koneksi.php';
if(empty($_SESSION['username'])){
echo("<script>alert('Anda Belum Login')</script>");
header("location:login.php");
}else{
  $user = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RESEVASI HOTEL CLEAN AND COMFORT</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    

  </head>
  <body>
<div class="container">

      <!-- Static navbar -->
      <div class="navbar navbar-inverse" role="navigation">
        <div class="container-fluid">
            <!--header saat mobile version-->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand sm-3" href="#">HOTEL CLEAN AND COMFORT</a>
          </div><!--end header saat mobile version-->

          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class=""><a href="index.php?module=home">Beranda Admin</a></li>
              <li><a href="index.php?module=tabelstaf">Data Staf</a></li>
              <li><a href="index.php?module=tabelkamar">Data Kamar</a></li>
              <li><a href="index.php?module=tabelfasilitas">Data Fasilitas</a></li>
              <li><a href="index.php?module=tabeltamu">Data Tamu</a></li>
              <li><a href="index.php?module=konfirmasi">Konfirmasi</a></li>
              <li><a href="index.php?module=tabeltransaksi">Data Transaksi</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Laporan <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="index.php?module=laporanperhari">Laporan Perhari</a></li>
                  <li><a href="index.php?module=laporanperbulan">Laporan Perbulan</a></li>
                  <li><a href="index.php?module=laporanpertahun">Laporan Pertahun</a></li>
                </ul>
              </li>
              <li><a href="index.php?module=logout">LOGOUT</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
<?php
include "content.php";
?>


    </div> <!-- /container -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>