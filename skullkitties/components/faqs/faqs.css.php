<style>
    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-item{
        border: 0.5px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        margin: 0.8rem 0;

        color: black;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-header,
    .section-<?= FAQS_CONTENT['id'] ?> .accordion .accordion-button{
        -webkit-tap-highlight-color: none;
        background: none;
        border: none;
        outline: none;
        box-shadow: none;
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
        color: #52C240;
    }

    .section-<?= FAQS_CONTENT['id'] ?> .accordion-body a{
        font-weight: 600;
    }
</style>