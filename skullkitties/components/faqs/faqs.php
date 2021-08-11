<div style="background: white">
    <div id="<?= FAQS_CONTENT['id'] ?>" class="container section-container section-<?= FAQS_CONTENT['id'] ?>" style="padding-bottom: 6rem;">
        <h5 style="font-weight: normal;">Still have doubts? Check our </h5>
        <img class="mb-4" src="<?= FAQS_CONTENT['titleImg'] ?>">


        <div class="accordion accordion-flush my-4" id="accordionFlushExample">


            <?php foreach (FAQS_CONTENT['items'] as  $faqIndex => $faqItem): ?>
                
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading-<?= $faqIndex ?>">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse-<?= $faqIndex ?>" aria-expanded="false"
                            aria-controls="flush-collapse-<?= $faqIndex ?>">
                            
                            <?= $faqItem['question'] ?>
                        </button>
                    </h2>
                    <div id="flush-collapse-<?= $faqIndex ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?= $faqIndex ?>"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">

                            <?= call_user_func($faqItem['answer']) ?>

                        </div>
                    </div>
                </div>

            <?php endforeach; ?>


        </div>

    </div>
</div>

