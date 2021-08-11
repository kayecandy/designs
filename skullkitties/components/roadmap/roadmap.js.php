<script>

(()=>{
    const domRoadmapSection = document.getElementById('<?= ROADMAP_CONTENTS['id'] ?>');
    const domTimelineItems = document.getElementsByClassName('<?= PREFIX ?>-timeline-item');
    
    
    function showTimelineBg(){
    
        const pos = domRoadmapSection.getBoundingClientRect
        ();
    
        if(pos.top - window.innerHeight <= 0 && pos.bottom >= 0){
            document.body.classList.add('<?= ROADMAP_CONTENTS['id'] ?>');
        }else{
            document.body.classList.remove('<?= ROADMAP_CONTENTS['id'] ?>');
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
        showTimelineBg();
        scrollTimelineDots();
    })

})();


</script>