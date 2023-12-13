<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from fasilitas where id_fasilitas='$_GET[id_fasilitas]'");
  
  if($sqlb){
    echo "Data Berhasil Dihapus";
    header("Location:index.php?module=tabelfasilitas");
  }else{
    echo "Gagal Menghapus";
    header("Location:index.php?module=tabelfasilitas");
  }
?>