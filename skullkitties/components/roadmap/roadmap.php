<div id="<?= ROADMAP_CONTENTS['id'] ?>" class="section-container section-<?= ROADMAP_CONTENTS['id'] ?>">

    <!-- Title -->
    <div class="<?= PREFIX ?>-bg-white py-5" style="margin-bottom: -1px;">
        <div  class="container <?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title">
            <img class="<?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-title mb-4 w-100" src="<?= ROADMAP_CONTENTS['titleImg'] ?>">
        </div>
    </div>


    <?php foreach (ROADMAP_CONTENTS['items'] as $roadmapItem): ?>

        <div class="<?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?> row  align-items-stretch <?= $roadmapItem['position'] ?> flex-nowrap">
    
            <!-- Spacer -->
            <div class="col-1 <?= $roadmapItem['position'] === 'right' ? 'flex-md-grow-1' : 'd-md-none' ?> ps-0 <?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-spacer <?= PREFIX ?>-bg-white" style="margin-right: -1px;"></div>

            <!-- Roadmap Contents -->
            <div class="<?= ROADMAP_CONTENTS['id'] ?>-col col col-md-8 col-lg-6 position-relative px-0 ">
                <div id="<?= PREFIX ?>-timeline-wrapper" class="<?= PREFIX ?>-timeline-wrapper">
                    <div class="<?= PREFIX ?>-timeline-bar"></div>
                </div>

                <div class="<?= PREFIX ?>-timeline-item">
                    <div class="<?= PREFIX ?>-bg-white  px-md-3 px-xl-5 <?= $roadmapItem['position'] == 'left' ? 'text-md-end pe-md-4 ps-md-0' : '' ?> ps-4">
                        <div class="<?= PREFIX ?>-timeline-card m<?= $roadmapItem['position'] == 'right' ? 'e' : 's' ?>-lg-5 p-4 p-xl-5 <?= $roadmapItem['position'] == 'left' ? 'text-md-start' : '' ?>">
                            <h5 class="<?= ROADMAP_CONTENTS['titleClass'] ?>"><?= $roadmapItem['title'] ?></h5>
                            <ul class="mb-0 ps-3 ps-lg-4">
                                <?php foreach ($roadmapItem['content'] as $roadmapItemBullet): ?>
                                    <li><?= $roadmapItemBullet ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div> <!-- timeline-item -->


            
            </div>

            <!-- Spacer -->
            <div class="col-1 <?= $roadmapItem['position'] === 'left' ? 'flex-md-grow-1' : 'd-md-none' ?>  pe-0 <?= PREFIX ?>-<?= ROADMAP_CONTENTS['id'] ?>-spacer <?= PREFIX ?>-bg-white"></div>

        </div> <!-- row -->

    <?php endforeach; ?>


    <div class="<?= PREFIX ?>-bg-white py-5" style="margin-top: -1px;"></div>
</div>