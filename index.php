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
                        <a href="#beranda" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#kategori" class="nav-link">Kategori</a>
                    </li>
                    <li class="nav-item mx-md-2">
                        <a href="#testimoni" class="nav-link">Testimoni</a>
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

    <!-- Header -->
    <header class="text-center" id="beranda">
        <h1 class="wow fadeInUp dur-1">Makanan Kaki Lima <br> Harga Bintang Lima
        </h1>
        <p class="mt-3 wow fadeIn dur-2">Karena makanan yang ga nikmat <br> mesti harus mahal</p>
        <a href="#kategori" class="btn btn-lg btn-get-started px-4 mt-4 wow fadeIn dur-3">
            Pesan Kuy
        </a>
    </header>

    <main>
        <div class="container">
            <section class="section-stats row justify-content-center wow fadeInUp dur-1" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>15</h2>
                    <p>Appetizer</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>14</h2>
                    <p>Main Course</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>11</h2>
                    <p>Dessert</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>23</h2>
                    <p>Drinks</p>
                </div>
            </section>
        </div>

        <section class="section-kategori " id="kategori">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-kategori-heading">
                        <h2 class="wow fadeIn">Menu Terlaris</h2>
                        <p class="wow fadeInDown">rasakan sensasi rasa yang<br>
                            berbeda di setiap menunya
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-kategori-content container">
            <div class="row section-kategori-menu justify-content-center">
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-menu text-center d-flex flex-column wow fadeInUp dur-1"
                        style="background-image: url('frontend/images/picture-1.png');">
                        <div class="kategori-makanan">APPETIZER</div>
                        <div class="nama-makanan">PEMBUKA</div>
                        <div class="makanan-button mt-auto">
                            <a href="menu.php?id=Appetizer" class="btn btn-makanan-details px-4">
                                Pesan
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-menu text-center d-flex flex-column wow fadeInUp dur-2"
                        style="background-image: url('frontend/images/picture-2.png');">
                        <div class="kategori-makanan">MAIN COURSE</div>
                        <div class="nama-makanan">UTAMA</div>
                        <div class="makanan-button mt-auto">
                            <a href="menu.php?id=Main Course" class="btn btn-makanan-details px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-menu text-center d-flex flex-column wow fadeInUp dur-3"
                        style="background-image: url('frontend/images/picture-3.png');">
                        <div class="kategori-makanan">DESSERT</div>
                        <div class="nama-makanan">PENUTUP</div>
                        <div class="makanan-button mt-auto">
                            <a href="menu.php?id=Dessert" class="btn btn-makanan-details px-4">Pesan</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card-menu text-center d-flex flex-column wow fadeInUp dur-4"
                        style="background-image: url('frontend/images/picture-4.png');">
                        <div class="kategori-makanan">DRINKS</div>
                        <div class="nama-makanan">MINUMAN</div>
                        <div class="makanan-button mt-auto">
                            <a href="menu.php?id=Drink" class="btn btn-makanan-details px-4">Pesan</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-pelayanan">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="wow slideInLeft">Pelayanan Kami</h2>
                        <p class="wow fadeInDown">kami siap memudahkan segalanya
                            <br>untuk anda, dengan dukungan <br>beberapa partner kami.
                        </p>
                    </div>
                    <div class="col-md-8 text-center wow fadeIn dur-1">
                        <img src="frontend/images/logos_partner.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-heading" id="testimoni">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2 class="wow fadeInDown dur-1">Testimoni</h2>
                        <p class="wow fadeIn dur-2">Jadilah bagian dari mereka yang sudah merasakan
                            <br>nikmatnya makanan kaki lima harga bintang lima
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content">
            <div class="container-fluid">
                <div class="section-kategori-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center wow fadeInUp dur-1">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi-1.png" alt="User" class="mb-4 rounded-circle">
                                <h3>Rivan Agustiwan</h3>
                                <h5 class="mb-3">10517001</h5>
                                <p class="testimonial">
                                    “ Enak banget satenya jadi
                                    pengen order lagi, udah gitu
                                    pesenannya bisa dianter
                                    sampe kerumah, d'best lah “</p>
                                </p>
                            </div>
                            <hr>
                            <p class="pekerjaan mt-2">
                                Backend Developer
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center wow fadeInUp dur-2">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi-2.png" alt="User" class="mb-4 rounded-circle">
                                <h3>Faizal Alwan</h3>
                                <h5 class="mb-3">10517041</h5>
                                <p class="testimonial">
                                    “ Worth it banget pokoknya,
                                    ga nyesel order makanan
                                    disini, udah gitu fast
                                    respon banget “</p>
                                </p>
                            </div>
                            <hr>
                            <p class="pekerjaan mt-2">
                                UI / UX Designer
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center wow fadeInUp dur-3">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi-3.png" alt="User" class="mb-4 rounded-circle">
                                <h3>Aditya Zaini</h3>
                                <h5 class="mb-3">10517039</h5>
                                <p class="testimonial">
                                    “ Udah hampir nyicipin
                                    semua menunya, dan semuanya
                                    sama enak banget, harganya
                                    juga murah “</p>
                                </p>
                            </div>
                            <hr>
                            <p class="pekerjaan mt-2">
                                Frontend Developer
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="card card-testimonial text-center wow fadeInUp dur-3">
                            <div class="testimonial-content">
                                <img src="frontend/images/testi-4.png" alt="User" class="mb-4 rounded-circle">
                                <h3>Beryl Chalif A</h3>
                                <h5 class="mb-3">10517026</h5>
                                <p class="testimonial">
                                    “Saya suka banget pesen kopinya, soalnya beda banget dari yang lain, rasanya manis tapi kaya ada pait-paitnya gitu“</p>
                                </p>
                            </div>
                            <hr>
                            <p class="pekerjaan mt-2">
                                Hostinger
                            </p>
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
    <script src="frontend/libraries/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- Smooth Scroll -->
    <script>
        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex',
                                    '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script> <!-- Smooth Scroll -->
    <script>
        // Select all links with hashes
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex',
                                    '-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    </script>
</body>

</html>

<!-- http://127.0.0.1:5500/index.php -->