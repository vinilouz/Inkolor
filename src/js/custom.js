document.addEventListener("DOMContentLoaded", function(event) {

	/* Scroll Spy */
	jQuery('body').scrollspy({
		target: '#content-nav',
		offset: 100
	});

	/* Swiper */
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 2,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

});
