<?php 
include 'koneksi.php';
if (isset($_POST['submit'])) {
    
        $kategori = $_GET['id'];  
		$kode=$_POST['kode'];
		$nama=$_POST['nama'];
		$no=$_POST['no_hp'];
        $email=$_POST['email'];
        $alamat=$_POST['alamat'];
        $qty=$_POST['qty'];
        $totbay=$_POST['totbay'];
        $query="INSERT INTO tb_pesanan VALUES ('$kode','$nama','$alamat','$no','$email')";
        $query2="INSERT INTO detail_pesanan VALUES ('$kode','$kategori','$qty','$totbay')";
        $result = mysqli_query($koneksi,$query);
        $result2 = mysqli_query($koneksi,$query2);
		if ($result ) {
			echo "<script> alert('Berhasil Input Data !') </script>";
			echo "<script type='text/javascript'>location = 'success.php'</script>";
		}else{
			echo "<script> alert('Gagal Input Data !') </script>";
			echo "<script type='text/javascript'>location = 'pembayaran.php'</script>";
		}
}
 ?>