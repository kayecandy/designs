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

            if(pos.top + pos.height / 2 - window.innerHeight / 1.5 <= 0){
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