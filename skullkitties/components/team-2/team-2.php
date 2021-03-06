<div class="<?= PREFIX ?>-bg-white">
    <div id="<?= TEAM_CONTENTS['id'] ?>" class="container section-container section-<?= TEAM_CONTENTS['id'] ?> text-center pb-5">

        <div style="font-weight: normal;">The</div>
        <?php if(TEAM_CONTENTS['isTitleImg']): ?>
            <img class="mb-4" src="<?= TEAM_CONTENTS['titleImg'] ?>">
        <?php else: ?>
            <<?= TEAM_CONTENTS['titleTextTag'] ?>
                class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-title-text"
            >
                <?= TEAM_CONTENTS['titleText'] ?>
            </<?= TEAM_CONTENTS['titleTextTag'] ?>>
        <?php endif; ?>


        <div class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-container row mt-5 align-items-stretch">

            <?php foreach (TEAM_CONTENTS['members'] as $teamMember): ?>
                <div class="col-12 col-lg-<?= TEAM_CONTENTS['colSize'] ?> mb-3 px-lg-2 px-1">
                    <div class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-card py-5 px-4 px-lg-2 px-xxl-5">
                        <div class="d-flex d-lg-block">
                            <div class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img me-3 me-md-5 mx-lg-auto flex-shrink-0 col-3 col-lg-12">
                                <img class="w-100 <?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-member-img" src="<?= $teamMember['img'] ?>">
                            </div>
                            <div class="pt-4 d-flex d-lg-block flex-grow-1 flex-wrap flex-md-nowrap">
                                <h4 class="mb-0"><?= $teamMember['name'] ?></h4>
                                <p class="mb-0 ms-auto ms-md-3 ms-lg-0"><?= $teamMember['description'] ?></p>
                                <p class="mb-0 ms-auto col-12 col-md-auto text-end text-md-center"><?= $teamMember['subtitle'] ?></p>
                            </div>

                        </div>
    
                        <?php if(!empty($teamMember['socials'])): ?>
                            <div class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-socials text-center">

                                <?php if(!empty($teamMember['socials']['twitter'])): ?>
                                    <a class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-social" target="_blank" href="<?= $teamMember['socials']['twitter'] ?>">
                                        <img src="./assets/twitter.svg">
                                    </a>
                                
                                <?php endif; ?>
                                
                                
                                <?php if(!empty($teamMember['socials']['linkedin'])): ?>

                                    <a class="<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-social" target="_blank" href="<?= $teamMember['socials']['twitter'] ?>">
                                        <img src="./assets/linkedin.svg">
                                    </a>
                                
                                <?php endif; ?>
                            </div>
                        
                        <?php endif; ?>
    
                    </div>
                </div>

            <?php endforeach; ?>
            


        </div> <!-- row -->
    </div> <!-- team-container -->
</div> <!-- bg-white -->