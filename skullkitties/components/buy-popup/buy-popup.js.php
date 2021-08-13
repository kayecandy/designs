<script>
    (()=>{
        const domAdoptQuantity = document.getElementById("<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity");
        const domAdoptQuantityMinus = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-minus');
        const domAdoptQuantityPlus = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-btn-plus');
        const domAdoptQuantityValue = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-quantity-value');
        const domAdoptPrice = document.getElementById('<?= PREFIX ?>-<?= BUY_POPUP_CONTENTS['id'] ?>-price');


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
    })();
</script>