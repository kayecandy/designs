<div id="<?= PREFIX ?>-header-wrapper" class="<?= PREFIX ?>-header-wrapper">



    <div class="<?= PREFIX ?>-header d-flex">
        <div class="col-auto ms-1 me-auto"><a href="<?= MENU_CONTENTS['logoLink'] ?>"><img class="<?= PREFIX ?>-header-logo" src="<?= MENU_CONTENTS['logoImg'] ?>"></a></div>

        <div class="<?= PREFIX ?>-header-items col-auto d-flex">
            <div class="d-flex align-items-center">
                <?php if(MENU_CONTENTS['connectionStatus'] == 'disconnected'): ?>
                    <button class="<?= PREFIX ?>-disconnected-btn mobile my-4 ps-2"><?= MENU_CONTENTS['disconnectedText'] ?></button>
                <?php else: ?>
                    <button class="<?= PREFIX ?>-connected-btn mobile my-4 ps-2"><?= MENU_CONTENTS['connectedText'] ?></button>
                <?php endif; ?>
                
                <button id="<?= PREFIX ?>-menu-close" class="<?= PREFIX ?>-menu-close">x</button>
            </div>
            


            <?php foreach (MENU_CONTENTS['menuItems'] as $menuItem): ?>

                <div class="<?= PREFIX ?>-header-item"><a href="<?= $menuItem['link'] ?>">
                    <?= $menuItem['text'] ?>
                </a></div>

            <?php endforeach; ?>
            
        </div>

        <?php if(MENU_CONTENTS['connectionStatus'] == 'disconnected'): ?>
            <div class="ms-auto <?= PREFIX ?>-disconnected-container">
                <button class="<?= PREFIX ?>-disconnected-btn"><?= MENU_CONTENTS['disconnectedText'] ?></button>
            </div>
        <?php else: ?>
            <div class="ms-auto <?= PREFIX ?>-connected-container">
                <button class="<?= PREFIX ?>-connected-btn"><?= MENU_CONTENTS['connectedText'] ?></button>
            </div>
        <?php endif; ?>



        <div id="<?= PREFIX ?>-mobile-menu" class="<?= PREFIX ?>-header-burger">
            <?php include 'assets/menu.svg' ?>
        </div>
    </div>

</div>