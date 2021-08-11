<div id="<?= PREFIX ?>-header-wrapper" class="<?= PREFIX ?>-header-wrapper">



    <div class="<?= PREFIX ?>-header d-flex">
        <div class="col-auto ms-1 me-auto"><a href="<?= MENU_CONTENTS['logoLink'] ?>"><img class="<?= PREFIX ?>-header-logo" src="<?= MENU_CONTENTS['logoImg'] ?>"></a></div>

        <div class="<?= PREFIX ?>-header-items col-auto d-flex">
            <div class="d-flex align-items-center">
                <button class="<?= PREFIX ?>-disconnected-btn mobile my-4 ps-2">Disconnected</button>
                
                <button id="<?= PREFIX ?>-menu-close" class="<?= PREFIX ?>-menu-close">x</button>
            </div>
            


            <?php foreach (MENU_CONTENTS['menuItems'] as $menuItem): ?>

                <div class="<?= PREFIX ?>-header-item"><a href="<?= $menuItem['link'] ?>">
                    <?= $menuItem['text'] ?>
                </a></div>

            <?php endforeach; ?>
            
        </div>

        <div class="ms-auto <?= PREFIX ?>-disconnected-container">
            <button class="<?= PREFIX ?>-disconnected-btn">Disconnected</button>
        </div>

        <div id="<?= PREFIX ?>-mobile-menu" class="<?= PREFIX ?>-header-burger">
            <img src="./assets/menu.svg">
        </div>
    </div>

</div>