<!-- Modal -->
<div 
    class="modal fade <?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>" 
    id="<?= BUY_POPUP_CONTENTS['id'] ?>" 
    tabindex="-1"
    aria-labelledby="<?= BUY_POPUP_CONTENTS['id'] ?>Label" 
    aria-hidden="true"

    data-status="buy"
>
    <div class="modal-dialog modal-sm modal-dialog-centered modal-init">
        <div class="modal-content modal-buy">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity"
                    class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity py-4 my-3"
                    data-max="<?= BUY_POPUP_CONTENTS['maxQty'] ?>" data-min="<?= BUY_POPUP_CONTENTS['minQty'] ?>">
                    <div>
                        <button id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-minus"
                            class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn">
                            -
                        </button>
                    </div>
                    <div class="px-3">
                        <div class="text-uppercase" style="<?= BUY_POPUP_CONTENTS['qtyLabelStyle'] ?>">
                            Quantity
                        </div>
                        <div class="text-center">
                            <h5 id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-value">1</h5>
                        </div>
                    </div>

                    <div>
                        <button id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-plus"
                            class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn">
                            +
                        </button>
                    </div>
                </div>

                <div class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-e px-4 py-3">
                    <img style="height: 1.5rem" class="me-2" src="<?= BUY_POPUP_CONTENTS['priceIcon'] ?>">
                    <div id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-price"
                        data-baseprice="<?= BUY_POPUP_CONTENTS['basePrice'] ?>"><?= BUY_POPUP_CONTENTS['basePrice'] ?>
                    </div>
                </div>


            </div>
            <div class="modal-footer justify-content-center pt-1">
                <div style="color: black">
                    <small>
                        XXX Remaining
                    </small>
                </div>
                <hr>
                <button id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-buy-confirm" type="button" class="btn w-100">Confirm</button>

            </div>
        </div>

        <div class="modal-content modal-loading">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body text-center">
                <img src="<?= BUY_POPUP_CONTENTS['loadingImg'] ?>">

                <h4 class="mt-3" style="color: <?= BUY_POPUP_CONTENTS['loadingColor'] ?>"><?= BUY_POPUP_CONTENTS['loadingText'] ?></h4>
            </div>
        </div>

        
    </div>


    <div class="modal-dialog modal-lg modal-success">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
    
            <div class="modal-body text-center">
                <img class="success-character" src="./assets/characters.png">
                <h4 class="mt-3" style="color: <?= BUY_POPUP_CONTENTS['congratsColor'] ?>">
                    <?= BUY_POPUP_CONTENTS['congratsText'] ?>
                </h4>
            </div>
            <div class="modal-footer justify-content-between px-5">
                <?php foreach(BUY_POPUP_CONTENTS['congratsLinks'] as $link): ?>
                    <a class="congrats-link" href="<?= $link['href'] ?>">
                        <button>
                            <?= $link['text'] ?>

                        </button>
                    </a>
                
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>