(()=>{

    const domHeader = document.getElementById('cndce-header-wrapper');


    const domTimelineItems = document.getElementsByClassName('cndce-timeline-item');


    function initHeaderSticky(){
        if(window.scrollY > 0){
            domHeader.classList.remove('top');
        }else{
            domHeader.classList.add('top');
        }
    }

    function scrollTimelineDots(){
        Array.from(domTimelineItems).forEach(function(el){
            const pos = el.getBoundingClientRect();

            if(pos.top - window.innerHeight / 2 <= 0){
                el.classList.add('active');
            }else{
                el.classList.remove('active');
            }
        })
    }

    window.addEventListener('scroll', function(){
        initHeaderSticky();
        scrollTimelineDots();
    })


    initHeaderSticky();
})();