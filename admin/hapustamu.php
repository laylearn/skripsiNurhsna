<?php
  include "koneksi.php";
  $sqlb = mysqli_query($con, "delete from tamu where id_pelanggan='$_GET[id_pelanggan]'");
  
  if($sqlb){
  	echo "Data Berhasil Dihapus";
	window.location.href='index.php?module=tabeltamu';
  }else{
  	echo "Gagal Menghapus";
	window.location.href='index.php?module=tabeltamu';
  }
?>