<style>
    .<?= PREFIX ?>-<?= LOADING_CONTENTS['id'] ?>{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: <?= LOADING_CONTENTS['bgColor'] ?>;
        z-index: 10000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    body.loaded .<?= PREFIX ?>-<?= LOADING_CONTENTS['id'] ?>{
        display: none;
    }
</style>