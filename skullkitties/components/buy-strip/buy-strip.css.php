<style>

    .section-<?= BUY_STRIP_CONTENTS['id'] ?>{
        background: <?= BUY_STRIP_CONTENTS['bgOuter'] ?>
    }

    .section-<?= BUY_STRIP_CONTENTS['id'] ?> .row-<?= BUY_STRIP_CONTENTS['id'] ?>{
        background: <?= BUY_STRIP_CONTENTS['bgInner'] ?>;
        color: <?= BUY_STRIP_CONTENTS['textColor'] ?>;
    }
    .section-<?= BUY_STRIP_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= BUY_STRIP_CONTENTS['id'] ?>-text-left{
        font-weight: 900;
        /* font-style: italic; */
        /* font-size: rem; */
    }


    .section-<?= BUY_STRIP_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= BUY_STRIP_CONTENTS['id'] ?>-text-button{
        background: <?= BUY_STRIP_CONTENTS['buttonBg'] ?>;
        color: <?= BUY_STRIP_CONTENTS['buttonColor'] ?>;
    }
</style>