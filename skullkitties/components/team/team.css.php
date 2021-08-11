<style>


.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-card{
    border: 0.5px solid rgba(0, 0, 0, 0.2);
    border-radius: 50px;
    height: 100%;
    background: white;
    color: black;
}



.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img{
    border-radius: 50%;
    width: 5rem;
    height: 5rem;
    position: relative;
    margin: 0 auto;

}

.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img img{
    width: 100%;
    height: 100%;
    border-radius: 50%;
}


.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img-border{
    position: absolute;
    width: calc(100% + 0.5rem);
    height: calc(100% + 0.5rem);
    top: -0.25rem;
    left: -0.15rem;

    transition: all 0.5s cubic-bezier(0.42, 0, 0, 1.76);
}

.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-card:hover .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img-border{
    transform: rotate(70deg);
}


.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-socials{
    display: flex;
    justify-content: center;
    align-items: center;
}


.section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-social img{
    margin: 0 0.5rem;
}

@media only screen and (max-width: 768px) {
    .section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-card{
        border-radius: 25px;;
    
    }
}

@media only screen and (max-width: 567px) {
    .section-<?= TEAM_CONTENTS['id'] ?> .<?= PREFIX ?>-<?= TEAM_CONTENTS['id'] ?>-img{
        width: 4rem;
        height: 4rem;
    
    }
}
</style>