<script>
    const swiper = new Swiper('.swiper-container', {
 
        coverflowEffect: {
			rotate: 20,
			stretch: 0,
			depth: 350,
			modifier: 1,
			slideShadows : true,
		},

        effect: "coverflow", 
        grabCursor: !0, 
        loop: !0, 
        centeredSlides: !0, 
        mousewheel: !1, 
        slidesPerView: 3, 
        autoplay: {
            delay: 800,
            disableOnInteraction: !1
        }, 
        speed: 800, 
        keyboard: {
            enabled: !0,
            onlyInViewport: !1
        }
    }); 
</script>