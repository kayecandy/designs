<div id="<?= BUY_STRIP_CONTENTS['id'] ?>" class="section-<?= BUY_STRIP_CONTENTS['id'] ?> px-5 py-4 py-xl-5">
    <div class="container-xl">
        <div class="row row-<?= BUY_STRIP_CONTENTS['id'] ?> p-3 px-4 align-items-center justify-content-between mx-xl-4">
            <div class="col-12 col-lg-3">
                <h2 class="text-uppercase <?= PREFIX ?>-<?= BUY_STRIP_CONTENTS['id'] ?>-text-left mb-4 mb-lg-0 text-sm-nowrap text-center text-lg-start"><?= BUY_STRIP_CONTENTS['text-left'] ?></h2>
            </div>
            <div class="col-12 col-lg-4 text-center mb-4 mb-lg-0">
                <?= BUY_STRIP_CONTENTS['text-center'] ?>
            </div>
            <div class="col-12 col-lg-3">
                <button 
                    class="<?= PREFIX ?>-<?= BUY_STRIP_CONTENTS['id'] ?>-text-button text-uppercase w-100"
                    data-bs-toggle="modal" 
                    data-bs-target="#<?= BUY_STRIP_CONTENTS['buttonModal'] ?>"
                >
                    <?= BUY_STRIP_CONTENTS['text-button'] ?>
                </button>
            </div>
        </div>
    </div>
</div>