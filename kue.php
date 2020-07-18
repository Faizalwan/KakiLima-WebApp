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
            <a href="index.html" class="navbar-brand">
                <img src="frontend/images/logo.png" alt="Logo Kaki Lima" class="ml-3">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav ml-auto mr-3">
                    <li class="nav-item mx-md-2">
                        <a href="index.html" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="index.html" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="index.html" class="nav-link">Testimoni</a>
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
                                    <a href="index.html">Beranda</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    Detail Menu
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details wow fadeInUp">
                            <h1>Kue Pasar</h1>
                            <p>Appetizer</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="frontend/images/kue.jpg" class="xzoom" id="xzoom-default"
                                        xoriginal="frontend/images/kue.jpg">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="frontend/images/kue2prev.jpg">
                                        <img src="frontend/images/kue2.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/kue2prev.jpg">
                                    </a>
                                    <a href="frontend/images/kue3prev.jpg">
                                        <img src="frontend/images/kue3.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/kue3prev.jpg">
                                    </a>
                                    <a href="frontend/images/kue4prev.jpg">
                                        <img src="frontend/images/kue4.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/kue4prev.jpg">
                                    </a>
                                    <a href="frontend/images/kue5prev.jpg">
                                        <img src="frontend/images/kue5.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/kue5prev.jpg">
                                    </a>
                                    <a href="frontend/images/kue6prev.jpg">
                                        <img src="frontend/images/kue6.jpg" class="xzoom-gallery" width="128"
                                            xpreview="frontend/images/kue6prev.jpg">
                                    </a>
                                </div>
                            </div>
                            <h2 class=" wow fadInDown">Deskripsi</h2>
                            <p class="wow fadeInDown">
                                Jajanan tradisional atau lebih dikenal dengan nama jajanan pasar merupakan salah satu
                                jajanan yang tergolong menyehatkan. Dibuat oleh industri rumahan, sebagian besar jajanan
                                pasar dibuat menggunakan bahan-bahan alami.
                            </p>
                            <p class="wow fadeInDown">
                                Bahan dan cara tradisional yang digunakan saat pengolahannya membuat jajanan pasar bebas
                                dari penggunaan bahan kimia. Hal ini membuatnya relatif aman dikonsumsi, sehat, dan juga
                                bergizi.
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right wow fadeInDown">
                            <h2>Daftar Harga</h2>
                            <table class="informasi-harga">
                                <tr>
                                    <td width="50%">Dadar Gulung</td>
                                    <td width="50%" class="text-right">Rp 1.500,00</td>
                                </tr>
                                <tr>
                                    <td width="50%">Klepon</td>
                                    <td width="50%" class="text-right">Rp 3.000,00</td>
                                </tr>
                                <tr>
                                    <td width="50%">Nagasari</td>
                                    <td width="50%" class="text-right">Rp 1.000,00</td>
                                </tr>
                                <tr>
                                    <td width="50%">Onde-Onde</td>
                                    <td width="50%" class="text-right">Rp 500,00</td>
                                </tr>
                                <tr>
                                    <td width="50%">Lemper</td>
                                    <td width="50%" class="text-right">Rp 1.500,00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container wow fadeInDown">
                            <a href="pembayaran.php" class="btn btn-block btn-join-now mt-3 py-2">Beli Sekarang</a>
                        </div>
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

<!-- http://127.0.0.1:5500/index.html -->