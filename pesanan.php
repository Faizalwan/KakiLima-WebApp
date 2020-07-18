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

    <!-- Animate -->
    <link rel="stylesheet" href="frontend/libraries/animate/animate.css">

    <!-- Title Icon -->
    <link rel="icon" type="image/gif/png" href="frontend/images/logo.ico">

    <title>Kaki Lima</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container">
        <nav class="row navbar navbar-expand-lg navbar-light bg-white  wow fadeInDown dur-1">
            <a href="index.php" class="navbar-brand">
                <img src="frontend/images/logo.png" alt="Logo Kaki Lima" class="ml-3">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="index.php" class="nav-link">Testimoni</a>
                    </li>
                </ul>
                <!-- Mobile Button -->
                <div class="form-inline d-sm-block d-md-none">
                    <a href="pesanan.php" class="btn btn-login my-2 my-sm-0">
                        Pesanan
                    </a>
                </div>
                <!-- Desktop Button -->
                <div class="form-inline my-2 my-lg-0 d-none d-md-block">
                    <a href="pesanan.php" class="btn btn-login btn-navbar-right my-sm-0 px-4"
                        style="padding-top: 20px;">
                        Pesanan
                    </a>
                </div>
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
                                <li class="breadcrumb-item active">
                                    Pesanan
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <table class="table table-hover table-color mt-4 text-center animated zoomIn" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">Kode Pesanan</th>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Pesanan</th>
                                <th scope="col">Qty</th>
                                <th scope="col">Total Bayar</th>
                            </tr>
                        </thead>
                        <?php  
                                    include 'koneksi.php';
                                    $result = mysqli_query($koneksi,"SELECT d.kode_pesanan,p.nama_pemesan,p.alamat,pesanan,qty,total_harga 
                                                                     FROM detail_pesanan d JOIN tb_pesanan p ON (d.kode_pesanan = p.kode_pesanan)");  
                                    while($data=mysqli_fetch_array($result)){
                                    ?>
                        <tbody>
                            <tr>
                                <td><?=$data['kode_pesanan']  ?></td>
                                <td><?=$data['nama_pemesan']  ?></td>
                                <td><?=$data['alamat']  ?></td>
                                <td><?=$data['pesanan']  ?></td>
                                <td><?=$data['qty']  ?></td>
                                <td>Rp. <?=number_format($data['total_harga'])  ?></td>
                            </tr>
                        </tbody>
                                    <?php } ?>
                    </table>
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
    <script src="frontend/libraries/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- xzoom -->
    <script>
        $(document).ready(function () {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>




</body>

</html>

<!-- http://127.0.0.1:5500/index.php -->