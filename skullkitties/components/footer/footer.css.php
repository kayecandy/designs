<style>

.<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social{
    display: inline-block;
    width: 1rem;
    height: 1rem;
    box-sizing: content-box;
    border: 1px solid white;
    border-radius: 50%;
    transition: all 0.3s ease-in-out;
}


.<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social svg{
    width: 100%;
    height: 100%;
    vertical-align: top;
}

.<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social:hover{
    border-color: <?= COLORS[1] ?>
}

.<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social path{
    transition: all 0.3s ease-in-out;
}

.<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social:hover path{
    fill: <?= COLORS[1] ?>!important;
}

</style>