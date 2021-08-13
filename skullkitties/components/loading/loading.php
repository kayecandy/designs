<div id="<?= PREFIX ?>-<?= LOADING_CONTENTS['id'] ?>" class="<?= PREFIX ?>-<?= LOADING_CONTENTS['id'] ?>">

    <?php if(LOADING_CONTENTS['iconType'] == 'img'): ?>
        <img src="<?= LOADING_CONTENTS['imgSrc'] ?>">
    <?php else: ?>
        <?php include LOADING_CONTENTS['svgSrc'] ?>
    <?php endif; ?>

</div>




