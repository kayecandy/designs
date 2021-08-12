<style>

    .<?= PREFIX ?>-<?= FAQS_CONTENT['id'] ?>-title-text{
        color: <?= FAQS_CONTENT['titleColor'] ?>;
        font-weight: 900;
        font-size: <?= FAQS_CONTENT['titleTextSize'] ?>;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-item{
        border: 0.5px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        margin: 0.8rem 0;

        background: <?= FAQS_CONTENT['faqHeaderColor'] ?>;
        color: black;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-header,
    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-button{
        -webkit-tap-highlight-color: none;
        background: none;
        border: none;
        outline: none;
        box-shadow: none;

        transition-property: all;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-button::after{
        background-color: #c4c4c447;
        padding: 0.5rem;
        width: 1.8rem;
        height: 1.8rem;
        background-position: center;
        border-radius: 50%;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-button:not(.collapsed){
        /* color: #52C240; */
        color: <?= FAQS_CONTENT['faqHeaderActiveColor'] ?>;
        font-weight: 800;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion-body a{
        font-weight: 600;
    }
</style>