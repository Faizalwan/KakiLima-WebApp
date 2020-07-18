<?php
  $id = $_GET['id'];

  include 'koneksi.php';
  $sql = "SELECT gambar FROM tb_menu WHERE kode_menu='$id'";
  $result = mysqli_query($koneksi,$sql);
  $row = mysqli_fetch_assoc($result);

  header("Content-type: image/jpeg");
  echo $row['gambar'];
?>