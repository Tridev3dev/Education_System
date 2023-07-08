<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My-laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E="
        crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link href="assets4/img/favicon.png" rel="icon">
    <link href="assets4/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets4/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets4/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets4/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets4/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets4/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets4/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets4/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets4/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets1/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets1/parallax/jarallax.css">
    <link rel="stylesheet" href="assets1/dropdown/css/style.css">
    <link rel="stylesheet" href="assets1/socicon/css/styles.css">
    <link rel="stylesheet" href="assets1/theme/css/style.css">
    <link rel="preload"
        href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap"
        as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Jost:100,200,300,400,500,600,700,800,900,100i,200i,300i,400i,500i,600i,700i,800i,900i&display=swap">
    </noscript>
    <link rel="preload" as="style" href="assets1/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets1/mobirise/css/mbr-additional.css" type="text/css">
</head>

<body>
    <div class="mb-5">
        @include('layout.header')
    </div>
    <div>
        @yield('content')
    </div>
    <div>
        @include('layout.footer')
    </div>
</body>
<!-- Vendor JS Files -->
<script src="assets4/vendor/aos/aos.js"></script>
<script src="assets4/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets4/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets4/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets4/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets4/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets4/vendor/php-e mail-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets4/js/main.js"></script>

</html>
