<!-- Modal -->
<div class="modal fade <?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>" id="<?= BUY_POPUP_CONTENTS['id'] ?>" tabindex="-1" aria-labelledby="<?= BUY_POPUP_CONTENTS['id'] ?>Label" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-e px-4 py-5">
                    <img style="height: 1.5rem" class="me-2" src="<?= BUY_POPUP_CONTENTS['priceIcon'] ?>">
                    <div id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-price" data-baseprice="<?= BUY_POPUP_CONTENTS['basePrice'] ?>"><?= BUY_POPUP_CONTENTS['basePrice'] ?></div>
                </div>

                <div id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity" class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity py-4 mt-3" data-max="<?= BUY_POPUP_CONTENTS['maxQty'] ?>" data-min="<?= BUY_POPUP_CONTENTS['minQty'] ?>">
                    <div>
                        <button 
                        id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-minus"
                        class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn">
                            -
                        </button>
                    </div>
                    <div class="px-3">
                        <div class="text-uppercase" style="font-size: 0.7rem;">
                            Quantity
                        </div>
                        <div class="text-center">
                            <h5 id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-value">1</h5>
                        </div>
                    </div>

                    <div>
                        <button 
                        id="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-plus"
                        class="<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn">
                            +
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-center pt-1">
                <button type="button" class="btn btn-yellow w-100" data-bs-dismiss="modal">Confirm</button>

                <hr>
                <div>
                    <small>
                        XXX Remaining
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>