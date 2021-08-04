(()=>{

    const domHeader = document.getElementById('cndce-header-wrapper');


    function initHeaderSticky(){
        if(window.scrollY > 0){
            domHeader.classList.remove('top');
        }else{
            domHeader.classList.add('top');
        }
    }

    window.addEventListener('scroll', function(){
        initHeaderSticky();
    })


    initHeaderSticky();
})();