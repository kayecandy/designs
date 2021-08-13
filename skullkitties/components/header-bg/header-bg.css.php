<style>

.section-<?= HEADER_BG_CONTENTS['id'] ?>{
    background-image: url("<?= HEADER_BG_CONTENTS['backgroundImg'] ?>");
    background-size: cover;
    background-repeat: no-repeat;
    background-position: bottom left 45%;
    padding-top: 36%;
    width: 100%;
    /* min-height: max(510px, 100vh); */



    display: flex;
    align-items: flex-end;
    justify-content: center;

}

.section-<?= HEADER_BG_CONTENTS['id'] ?> .adopt-now{
    font-size: 1.75rem;
    padding: 1.5rem 2rem;
}

@media only screen and (max-width: 1200px) {

    .section-<?= HEADER_BG_CONTENTS['id'] ?>{
        padding-top: 46%; 
    }

    .section-<?= HEADER_BG_CONTENTS['id'] ?> .adopt-now{
        padding: 1rem 2rem;
    }
}


@media only screen and (max-width: 576px) {
    .section-<?= HEADER_BG_CONTENTS['id'] ?>{
        padding-top: 72%;
        background-position: bottom left 50%;
    }
}

</style>