<?php 

    include 'config.php';
    include 'contents/loading.php';
    include 'contents/menu.php';
    include 'contents/header-bg.php';
    include 'contents/section-welcome.php';
    include 'contents/buy-strip.php';
    include 'contents/roadmap.php';
    include 'contents/team.php';
    include 'contents/faqs.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skull Kitties</title>

    <!-- Font -->
    <link href="./assets/fonts/carmen-sans/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Self - Base -->
    <?php include 'style.css.php' ?>

    <!-- Self - Components -->
    <?php include 'components/loading/loading.css.php' ?>
    <?php include 'components/menu/menu.css.php' ?>
    <?php include 'components/header-bg/header-bg.css.php' ?>
    <?php include 'components/section-welcome-carousel/section-welcome-carousel.css.php' ?>
    <?php include 'components/buy-strip/buy-strip.css.php' ?>
    <?php include 'components/roadmap/roadmap.css.php' ?>
    <?php include 'components/team-2/team-2.css.php' ?>
    <?php include 'components/faqs/faqs.css.php' ?>

</head>
<body>

    <?php include 'components/loading/loading.php' ?>
    <?php include 'components/menu/menu.php' ?>
    <?php include 'components/header-bg/header-bg.php' ?>
    <?php include 'components/section-welcome-carousel/section-welcome-carousel.php' ?>
    <?php include 'components/buy-strip/buy-strip.php' ?>
    <?php include 'components/roadmap/roadmap.php' ?>
    <?php include 'components/team-2/team-2.php' ?>
    <?php include 'components/faqs/faqs.php' ?>
    

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Scripts -->
    <?php include 'components/loading/loading.js.php' ?>
    <?php include 'components/menu/menu.js.php' ?>
    <?php include 'components/section-welcome-carousel/section-welcome-carousel.js.php' ?>
    <?php include 'components/roadmap/roadmap.js.php' ?>
</body>
</html>