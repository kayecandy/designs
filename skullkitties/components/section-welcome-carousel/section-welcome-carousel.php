<div class="<?= PREFIX ?>-bg-white pb-5">
    <div id="<?= SECTION_WELCOME_CONTENTS['id'] ?>"
        class="container section-container section-<?= SECTION_WELCOME_CONTENTS['id'] ?> text-center pb-5">

        <div>
            <div class="welcome-text text-uppercase" style="font-size: 1.5rem;">Welcome to the</div>

            <?php if(SECTION_WELCOME_CONTENTS['isTitleImg']): ?>
            <img class="<?= PREFIX ?>-title-img" src="<?= SECTION_WELCOME_CONTENTS['titleImg'] ?>">
            <?php else: ?>
            <<?= SECTION_WELCOME_CONTENTS['titleTextTag'] ?>
                class="<?= PREFIX ?>-<?= SECTION_WELCOME_CONTENTS['id'] ?>-title-text"
                style="<?= SECTION_WELCOME_CONTENTS['titleTextStyle'] ?>">
                <?= SECTION_WELCOME_CONTENTS['titleText'] ?>
            </<?= SECTION_WELCOME_CONTENTS['titleTextTag'] ?>>
            <?php endif; ?>
        </div>

        <div class="<?= PREFIX ?>-about-text my-5">
            <?= SECTION_WELCOME_CONTENTS['welcomeText'] ?>
        </div>

    </div>

    <!-- Slider main container -->
    <div class="swiper-container mb-5">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <?php foreach (SECTION_WELCOME_CONTENTS['carouselContents'] as $carouselItem):?>
                <div class="swiper-slide">
                    <img 
                        class="<?= PREFIX ?>-<?= SECTION_WELCOME_CONTENTS['id'] ?>-swiper-img" 

                        src="<?= $carouselItem ?>" 
                    >
                    
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</div>



