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
        <nav class="row navbar navbar-expand-lg navbar-light bg-white wow fadeInDown">
            <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto wow fadeIn ">
                <a href="index.php" class="navbar-brand">
                    <img src="frontend/images/logo.png">
                </a>
            </div>
            <ul class="navbar-nav mr-auto d-none d-lg-block">
                <li>
                    <span class="text-muted">
                        | &nbsp; Makanan Kaki Lima Rasa Bintang Lima
                    </span>
                </li>
            </ul>
        </nav>
    </div>

    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="frontend/images/berhasil.jpg" alt="" class="wow zoomInDown dur-1">
                <h1 class="mt-3 wow bounceIn dur-2">Yay! Berhasil</h1>
                <p class="wow fadeInDown dur-2">Gerobak akan segera <br>
                    mengantarkan pesanan anda</p>
                <a href="index.php" class="btn btn-home-page mt-3 px-5 wow fadeIn dur-3">
                    Beranda
                </a>
            </div>
        </div>
    </main>



    <script src="frontend/libraries/retina/retina.min.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <script src="frontend/libraries/wow/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>



</body>

</html>

<!-- http://127.0.0.1:5500/index.php -->