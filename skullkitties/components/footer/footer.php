<footer class="<?= PREFIX ?>-bg-white py-4">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <?php foreach(FOOTER_CONTENTS['socials'] as $social): ?>
                    <a class="<?= PREFIX ?>-<?= FOOTER_CONTENTS['id'] ?>-social p-2 me-1" href="<?= $social['href'] ?>" target="_blank">
                        <?php include $social['logo'] ?>
                    </a>
                    
                <?php endforeach; ?>
            </div>

            <div class="col-auto" style="justify-self: flex-end; font-weight: 700">
                    <?= FOOTER_CONTENTS['textRight'] ?>
            </div>
        </div>
    </div>
</footer>