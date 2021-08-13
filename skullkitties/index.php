<?php 

    ob_start();


    include 'config.php';
    include 'contents/loading.php';
    include 'contents/menu.php';
    include 'contents/header-bg.php';
    include 'contents/section-welcome.php';
    include 'contents/buy-strip.php';
    include 'contents/section-bg.php';
    include 'contents/roadmap.php';
    include 'contents/team.php';
    include 'contents/faqs.php';
    include 'contents/footer.php';
    include 'contents/buy-popup.php';

?>

<!-- THIS FILE IS AUTOGENERATED FROM PHP -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="<?= PREFIX ?>-viewport" name="viewport" content="width=device-width, initial-scale=1">
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
    <?php include 'components/section-bg/section-bg.css.php' ?>
    <?php include 'components/roadmap/roadmap.css.php' ?>
    <?php include 'components/team-2/team-2.css.php' ?>
    <?php include 'components/faqs/faqs.css.php' ?>
    <?php include 'components/footer/footer.css.php' ?>
    <?php include 'components/buy-popup/buy-popup.css.php' ?>


</head>
<body>

    <?php include 'components/loading/loading.php' ?>
    <?php include 'components/menu/menu.php' ?>
    <?php include 'components/header-bg/header-bg.php' ?>
    <?php include 'components/section-welcome-carousel/section-welcome-carousel.php' ?>
    <?php include 'components/buy-strip/buy-strip.php' ?>
    <?php include 'components/section-bg/section-bg.php' ?>
    <?php include 'components/roadmap/roadmap.php' ?>
    <?php include 'components/team-2/team-2.php' ?>
    <?php include 'components/faqs/faqs.php' ?>
    <?php include 'components/footer/footer.php' ?>
    <?php include 'components/buy-popup/buy-popup.php' ?>
    

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
    <?php include 'components/buy-popup/buy-popup.js.php' ?>


    <!-- Viewport Fix -->
    <script>
        (()=>{
            const viewport = document.getElementById('<?= PREFIX ?>-viewport');

            function resizeViewport(){
                if(screen.width < <?= MIN_WIDTH ?>){
                    viewport.setAttribute('content', 'width=' + <?= MIN_WIDTH ?>);
                }else{
                    viewport.setAttribute('content',
                        'width=device-width, initial-scale=1'
                    )
                }
            }


            window.addEventListener('resize', resizeViewport);
            window.addEventListener('load', resizeViewport);

        })();
    </script>
</body>
</html>

<?php $html = ob_get_flush(); ?>

<?php file_put_contents('./index.html', $html); ?>