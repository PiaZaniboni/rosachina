$(document).ready(function(){

	/**/
	$(".btn-menu-mobile").click(function(){
		$(".nav-responsive").toggleClass("active");
	});
	$(".btn-mobile-close").click(function(){
		$(".nav-responsive").toggleClass("active");
	});
	$(".main-mobile ul li a").click(function(){
		$(".nav-responsive").removeClass("active");
	});

	/* Seteos Alturas */
    $('.set-height').css('height' , $(window).innerHeight() );
    $('.set-height-2').css('min-height' , $(window).innerHeight() - 300 );

	/* Slick Carousel */
    $('.slider-galeria').slick({
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
  		autoplaySpeed: 1800,
  		arrows: false,
        //nextArrow: '<buton class="slick-arrow slick-next" type="button"> <img src="img/next-arrow.svg"> </buton>',
        //prevArrow: '<buton class="slick-arrow slick-prev" type="button"> <img src="img/prev-arrow.svg"> </buton>'
	});


    $('.galeria').slick({
		infinite: true,
		speed: 700,
		fade: true,
		cssEase: 'linear',
		autoplay: true,
  		autoplaySpeed: 1800,
  		arrows: false,
        nextArrow: '<buton class="slick-arrow slick-next" type="button"> </buton>',
		prevArrow: '<buton class="slick-arrow slick-prev" type="button"> </buton>',
	});

	/* Linea de tiempo */
	$('.carousel-linea-tienpo').slick({
			infinite: false,
			speed: 400,
			slidesToShow: 2,
			slidesToScroll: 1,
			cssEase: 'linear',
			arrows: true,
			dots: false,
			nextArrow: '<buton class="slick-arrow slick-next-tiempo" type="button"> </buton>',
			prevArrow: '<buton class="slick-arrow slick-prev-tiempo" type="button"> </buton>',
			responsive: [
					{
						breakpoint: 1600,
						settings: {
							slidesToShow: 2,
							slidesToScroll: 1,
							infinite: true,
						}
					},
					{
						breakpoint: 1000,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							infinite: true
						}
					}
					// You can unslick at a given breakpoint now by adding:
					// settings: "unslick"
					// instead of a settings object
				]
	});

/*Comentarios*/
	$('.comment-form-comment #comment').attr("placeholder", "comentario");
	$('.comment-form-author #author').attr("placeholder", "nombre");

    /*--------------------------------------------------------------
	# Scroll Nice
	--------------------------------------------------------------*/
	$(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

});

//FUNCION ESPERAR QUE TERMINE DE RESIZEAR LA PANTALLA
    var waitForFinalEvent = (function () {
    var timers = {};
    return function (callback, ms, uniqueId) {
            if (!uniqueId) {
                uniqueId = "Don't call this twice without a uniqueId";
            }
            if (timers[uniqueId]) {
                clearTimeout (timers[uniqueId]);
            }
            timers[uniqueId] = setTimeout(callback, ms);
        };
    })();



    //RESIZE DE PANTALLA
 $(window).resize(function () {
    waitForFinalEvent(function(){

    //EVENTOS EN RESIZE
    $('.set-height').css('height' , $(window).innerHeight() );
    $('.set-height-2').css('min-height' , $(window).innerHeight() - 300 );

    }, 500,'resize');

});
