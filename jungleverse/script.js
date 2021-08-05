(()=>{

    const domHeader = document.getElementById('cndce-header-wrapper');


    const domRoadmapSection = document.getElementById('roadmap');
    const domTimelineItems = document.getElementsByClassName('cndce-timeline-item');

    const domMobileMenu = document.getElementById('cndce-mobile-menu');
    const domMobileMenuClose = document.getElementById('cndce-menu-close');


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

    function showTimelineBg(){

        const pos = domRoadmapSection.getBoundingClientRect
        ();

        if(pos.top - window.innerHeight <= 0 && pos.bottom >= 0){
            document.body.classList.add('roadmap');
        }else{
            document.body.classList.remove('roadmap');
        }
        
    }

    window.addEventListener('scroll', function(){
        showTimelineBg();

        initHeaderSticky();
        scrollTimelineDots();
    })

    domMobileMenu.addEventListener('click', function(){
        document.body.classList.add('show-menu');
    })

    domMobileMenuClose.addEventListener('click', function(){
        document.body.classList.remove('show-menu');
    })



    initHeaderSticky();
})();