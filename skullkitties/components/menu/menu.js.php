<script>
    (()=>{

        const domHeader = document.getElementById('<?= PREFIX ?>-header-wrapper');

        const domMobileMenu = document.getElementById('<?= PREFIX ?>-mobile-menu');
        const domMobileMenuClose = document.getElementById('<?= PREFIX ?>-menu-close');

        function initHeaderSticky(){
            if(window.scrollY > 0){
                domHeader.classList.remove('top');
            }else{
                domHeader.classList.add('top');
            }
        }

        domMobileMenu.addEventListener('click', function(){
            document.body.classList.add('show-menu');
        })

        domMobileMenuClose.addEventListener('click', function(){
            document.body.classList.remove('show-menu');
        })

        window.addEventListener('scroll', function(){
            initHeaderSticky();
        })

        initHeaderSticky();

    })();
</script>