<style>

.section-<?= SECTION_BG_CONTENTS['id'] ?>{
    background-image: url("<?= SECTION_BG_CONTENTS['backgroundImg'] ?>");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: bottom left 45%;
    padding-top: 46%;
    width: 100%;
    /* min-height: max(510px, 100vh); */



    display: flex;
    align-items: flex-end;
    justify-content: center;

}

@media only screen and (max-width: 1200px) {

    .section-<?= SECTION_BG_CONTENTS['id'] ?>{
        padding-top: 56%; 
    }
}


@media only screen and (max-width: 576px) {
    .section-<?= SECTION_BG_CONTENTS['id'] ?>{
        padding-top: 82%;
        background-position: bottom left 50%;
    }
}

</style>