<script>
    (()=>{
        const domModal = document.getElementById('<?= BUY_POPUP_CONTENTS['id'] ?>');

        const domAdoptQuantity = document.getElementById("<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity");
        const domAdoptQuantityMinus = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-minus');
        const domAdoptQuantityPlus = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-plus');
        const domAdoptQuantityValue = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-value');
        const domAdoptPrice = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-price');

        const domBuyButton = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-buy-confirm');


        function updateAdoptQuantityValue(delta){
            const value = parseInt(domAdoptQuantityValue.innerText) + delta;

            if(value >= domAdoptQuantity.dataset.min && value <= domAdoptQuantity.dataset.max){
                domAdoptQuantityValue.innerText = value;

                domAdoptPrice.innerText = (domAdoptPrice.dataset.baseprice * value).toFixed(2);
            }

        }

        domAdoptQuantityMinus.addEventListener('click', function(){
            updateAdoptQuantityValue(-1);
        })

        domAdoptQuantityPlus.addEventListener('click', function(){
            updateAdoptQuantityValue(1);
        })

        domBuyButton.addEventListener('click', function(){
            domModal.setAttribute('data-status', 'loading');


            setTimeout(() => {
                domModal.setAttribute('data-status', 'success');
            }, 2000);
        })

        
    })();
</script>