<style>

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-header .btn-close{
    background-color: transparent;
    position: absolute;
    right: 0.6rem;
    top: 0.6rem;
    cursor: pointer;
    z-index: 10;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-content{
    border-radius: 1rem;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-header{
    border-bottom: none;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-footer{
    border-top: none;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-e{
    display: flex;
    justify-content: center;
    border-radius: 1rem;
    font-size: 1.5rem;
    font-weight: 800;
    color: <?= BUY_POPUP_CONTENTS['priceDivColor'] ?>;;
    background: <?= BUY_POPUP_CONTENTS['priceDivBg'] ?>;
    align-items: center;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity{
    display: flex;
    justify-content: center;
    border: 1px solid #f3f3f3;
    border-radius: 4rem;
    box-shadow: 0 0 2px #8c8c8c1f;
    align-items: center;
    color: black;
}

button.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn{
    background: white;
    color: black;
    border: 1px solid whitesmoke;
    padding: 0;
    width: 2.5rem;
    line-height: 2.5rem;
    border-radius: 50%;
    box-shadow: inset 0 0 2px #bdbdbd;
}


.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-content.modal-loading{
    background: <?= BUY_POPUP_CONTENTS['loadingBg'] ?>;
}


.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-content,
.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-dialog.modal-success,
.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="success"] .modal-dialog.modal-init{

    display: none;
}

.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="buy"] .modal-content.modal-buy,
.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="loading"] .modal-content.modal-loading,
.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="success"] .modal-dialog.modal-success,
.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="success"] .modal-dialog.modal-success .modal-content{
    display: block;
}


.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="success"] .success-character{
    width: 300px;
    max-width: 100%;
    border-radius: 1rem;
}


.<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>[data-status="success"] .congrats-link{
    color: <?= BUY_POPUP_CONTENTS['congratsLinksColor'] ?>;
}



@media only screen and (min-width: 576px){
    .<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?> .modal-dialog.modal-sm{
        max-width: 380px;
    }
}
</style>