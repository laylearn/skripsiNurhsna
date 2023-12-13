<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from staff where id_staff='$_GET[id_staff]'");
  
  if($sqlb){
    echo "Data Berhasil Dihapus";
    header("Location:index.php?module=tabelstaf");
  }else{
    echo "Gagal Menghapus";
    header("Location:index.php?module=tabelstaf");
  }
?>