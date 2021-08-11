<style>


.section-<?= SECTION_WELCOME_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-text-title{
    /* background-color: white;  */
    padding-right: 1rem;
    border-radius: 0.5rem;
    height: 60px;
    max-width: 100%;
}

.section-<?= SECTION_WELCOME_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-about-text{
    font-size: 1rem;
    line-height: 190%;
}

.section-<?= SECTION_WELCOME_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-about-image{
    width:75%;
    position: -webkit-sticky;
    position: sticky;
    top: 6rem;
}


@media only screen and (max-width: 1400px) {
    .section-<?= SECTION_WELCOME_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-text-title{
        padding-right: 0;
    }
}

@media only screen and (max-width: 992px){
    .section-<?= SECTION_WELCOME_CONTENTS['id'] ?> <?= '.' . PREFIX ?>-about-image{
        position: relative;
        top: 0;
    }

}

</style>