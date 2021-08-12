<?php ?>

<div class="<?= PREFIX ?>-bg-white">
    <div id="<?= SECTION_WELCOME_CONTENTS['id'] ?>" class="container section-container section-<?= SECTION_WELCOME_CONTENTS['id'] ?> text-center pb-5">


        <div class="row" style="text-align: left;">
            <div class="col-12 col-lg-8 col-xl-6">


                <div class="mb-3">
                    <div class="welcome-text text-uppercase" style="font-size: 1.5rem;">Welcome to the</div>
                    <div>
                        <?php if(SECTION_WELCOME_CONTENTS['isTitleImg']): ?>
                            <img class="<?= PREFIX ?>-title-img" src="<?= SECTION_WELCOME_CONTENTS['titleImg'] ?>">
                        <?php else: ?>
                            <<?= SECTION_WELCOME_CONTENTS['titleTextTag'] ?> 
                                class="<?= PREFIX ?>-<?= SECTION_WELCOME_CONTENTS['id'] ?>-title-text" 
                                style="<?= SECTION_WELCOME_CONTENTS['titleTextStyle'] ?>"
                            >
                                <?= SECTION_WELCOME_CONTENTS['titleText'] ?>
                            </<?= SECTION_WELCOME_CONTENTS['titleTextTag'] ?>>
                        <?php endif; ?>
                    </div>
                </div>

                <img class="<?= PREFIX ?>-about-image d-block d-lg-none" src="<?= SECTION_WELCOME_CONTENTS['characterImg'] ?>"
                    style="width: 80%; margin: 0 auto;">


                <div class="<?= PREFIX ?>-about-text my-5">
                    <?= SECTION_WELCOME_CONTENTS['welcomeText'] ?>
                </div>
            </div> <!-- col -->

            <div class="d-none d-lg-block col-4 col-xl-6 text-center">
                <img class="<?= PREFIX ?>-about-image" src="<?= SECTION_WELCOME_CONTENTS['characterImg'] ?>">
            </div> <!-- col -->
        </div> <!-- row -->


    </div> <!-- section -->
</div> <!-- bg-white -->