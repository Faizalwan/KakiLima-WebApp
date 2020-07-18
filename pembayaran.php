<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,700,700i,900,900i&display=swap"
        rel="stylesheet">

    <!-- Sass -->
    <link rel="stylesheet" href="frontend/styles/main.css">

    <!-- Xzoom -->
    <link rel="stylesheet" href="frontend/libraries/xzoom/xzoom.css">

    <!-- gijgo -->
    <link rel="stylesheet" href="frontend/libraries/gijgo/css/gijgo.min.css">

    <!-- Animate -->
    <link rel="stylesheet" href="frontend/libraries/animate/animate.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="frontend/libraries/fontawesome/all.css">

    <!-- Title Icon -->
    <link rel="icon" type="image/gif/png" href="frontend/images/logo.ico">

    <title>Kaki Lima</title>
</head>
<?php 
$id = $_GET['id'];
?> 
<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white wow fadeInDown">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto wow fadeIn ">
                <a href="index.php" class="navbar-brand">
                    <img src="frontend/images/logo.png">
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Makanan Kaki Lima Harga Bintang Lima
                    </span>
                </li>
            </ul>
        </nav>
    </div>

    <main>
        <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb wow fadeIn dur-1">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Beranda</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="menu.php?id=<?php echo $id ?>">Detail Menu</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Pembayaran
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details wow fadeInUp">
                            <h1>Pesananku</h1>
                            <p>Yuk isi pesananmu disini</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nama Makanan</th>
                                            <th>Kategori</th>
                                            <th>Harga (pcs)</th>
                                            <th>Jumlah Pesanan</th>
                                        </tr>
                                    </thead>
                                    <?php  
                                    include 'koneksi.php';
                                    
                                    $i=0;
                                    $h=10;
                                    $result = mysqli_query($koneksi,"SELECT * from tb_menu WHERE kategori='$id'");  
                                    while($data=mysqli_fetch_array($result)){
                                    $i++;
                                    $h++;
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img src="getImage.php?id=<?php echo $data['kode_menu'];?>" height="60">
                                            </td>
                                            <td class="align-middle">
                                                <?=$data['nama_menu']  ?>
                                            </td>
                                            <td class="align-middle">
                                                <?=$data['kategori']  ?>
                                            </td>
                                            <td class="align-middle " id="<?php echo $h; ?>">
                                                <?=$data['harga'] ?>
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn btn-sm minus btn-minus" onclick="minus(<?php echo $i; ?>,<?php echo $h; ?>)">
                                                    <i class="fas fa-minus-circle"></i>
                                                </button>   
                                                <input type="number"
                                                    class="count bg-transparent border-0 text-center ml-3 qty"
                                                    style="width: 40px;" id="<?php echo $i; ?>" value="0">
                                                <button type="button" class="btn btn-sm btn-plus plus"  onclick="plus(<?php echo $i; ?>,<?php echo $h; ?>)">
                                                    <i class="fas fa-plus-circle"></i>
                                                </button>
                                            </td>
                                        </tr>
                                <?php } ?> 
                                </table>
                            </div>
                            <?php 
	                        include 'koneksi.php';
                            
					        $query = "SELECT kode_pesanan FROM tb_pesanan ORDER BY kode_pesanan DESC limit 1";
					        $hasil = mysqli_query($koneksi,$query);
					        $data = mysqli_fetch_array($hasil);
					        $kode = $data['kode_pesanan'];
					        $noUrut = (int) substr($kode, 1, 2);
                            $noUrut++;
                            
					        $char = "P";
					        $kode = $char . sprintf("%02s", $noUrut);
                            ?>
                            <div class="member mt-3">
                                <h2>Data Pembeli</h2>
                                <form action="insert.php?id=<?php echo $id ?>" method='post'>
                                    <div class="form-row ">
                                        <div class="form-group col-md-5">
                                            <label for="nama">Nama Pembeli</label> <br>
                                            <input type="hidden" class="form-control" name="kode"  value="<?=$kode; ?>" required>
                                            <input type="text" class="form-control" name="nama" name="nama" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="no_hp">No Hp</label> <br>
                                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="email">Email</label> <br>
                                            <input type="text" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="alamat">Alamat</label> <br>
                                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                                        </div>
                                    </div>
                                
                                <h3 class="mt-2 mb-0">Catatan</h3>
                                <p class="disclaimer mb-0">
                                    Pesanan tidak dapat ditukar atau dikembalikan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right wow fadeInDown">
                            <h2>Pembayaran</h2>
                            <table class="informasi-harga">
                                <tr>
                                    <td width="50%">Total Harga</td>
                                    <td width="50%" class="text-right" >
                                    <input type="text" class="form-control count bg-transparent border-0 text-right" id="tothar" value="0" disabled>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">Jumlah Pesanan</td>
                                    <td width="50%" class="text-right">
                                    <input type="text" class="form-control count bg-transparent border-0 text-right" id="qty" name="qty" value="0" >
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50%">Ongkos Kirim</td>
                                    <td width="50%" class="text-right">
                                    <input type="text" class="form-control count bg-transparent border-0 text-right"  value="Rp. 10.000" >
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%" class="text-bold">Total Bayar</th>
                                    <th width="50%" class="text-right text-bold" >
                                    <input type="text" class="form-control count bg-transparent border-0 text-right" id="totbay" name="totbay" value="0" >
                                    </th>
                                </tr>
                            </table>
                            <hr>
                            <h2>Metode Pembayaran</h2>
                            <p class="metode-pembayaran">
                                Pilih metode pembayaran yang kamu inginkan,
                                dan jangan lupa konfirmasi
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="frontend/images/gopay.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>Kaki Lima</h3>
                                        <p>0853 3446 2735
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="frontend/images/ovo.png" alt="" class="bank-image">
                                    <div class="description">
                                        <h3>Kaki Lima</h3>
                                        <p>0853 3446 2735
                                        </p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="join-container">
                            <button type="submit" name="submit" class="btn btn-block btn-join-now mt-3 py-2"> Bayar Pesanan</button>
                        </div>
                        <div class="text-center mt-3">
                            <a href="index.php" class="text-muted">Ga Jadi Deh</a>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="section-footer mt-5 mb-4 border-top">
        <div class="container-fluid">
            <div class="row border-top justify-content-center align-items-center pt-4">
                <div class="col-auto text-gray-500 font-weight-light">
                    2020 Copyright <b>KakiLima</b> • All rights reserved • Made for <b>Pemrograman Web Final Exam</b>
                </div>
            </div>
        </div>
    </footer>

    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/xzoom/xzoom.min.js"></script>
    <script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
    <script src="frontend/libraries/wow/wow.min.js"></script>
    <script src="frontend/libraries/fontawesome/all.js"></script>
    <script src="frontend/libraries/popper/popper.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });

            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                    rightIcon: '<img src="frontend/images/ic_date.svg" />'
                }
            });
        });
    </script>

    <script>
     var count = document.getElementById(position).value; 
     function plus(position,pos){
        var total = document.getElementById("tothar").value;
        var qty = document.getElementById("qty").value;
        var count = document.getElementById(position).value; 
        var harga = document.getElementById(pos).innerHTML;
        count++;
        qty++;
        var sub = parseInt(total)+parseInt(harga);
        var countEl = document.getElementById(position);
        document.getElementById('tothar').value=sub;
        document.getElementById('qty').value=qty;
        document.getElementById('totbay').value=sub+10000;
        countEl.value = count;
     }
     function minus(position,pos){
     var count = document.getElementById(position).value; 
      if (count >=1) {
        var total = document.getElementById("tothar").value;
        var qty = document.getElementById("qty").value;
        var count = document.getElementById(position).value; 
        var harga = document.getElementById(pos).innerHTML;
        count--;
        qty--;
        var sub = parseInt(total)-parseInt(harga);
        var countEl = document.getElementById(position);
        document.getElementById('tothar').value=sub;
        document.getElementById('qty').value=qty;
        document.getElementById('totbay').value=sub+10000;
        countEl.value = count;
      }  
     }
</script>
    
</body>
</html>

<!-- http://127.0.0.1:5500/index.php -->