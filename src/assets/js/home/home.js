const func_thumbs = new Swiper('.j-func-slider .func__slider', {
    speed: 400,
    wrapperClass: 'func__slider-wrapper',
    slideClass: 'func__slider-slide',
    freeMode: true,
    scrollbar: {
        el: '.j-func-slider .j-scrollbar',
        draggable: true,
    },
    breakpoints: {
        1601: {
            slidesPerView: '5',
            spaceBetween: 30,
        },
        1201: {
            slidesPerView: '4',
            spaceBetween: 30,
        },
        992: {
            slidesPerView: '3',
            spaceBetween: 20,
        },
        768: {
            slidesPerView: '2',
            spaceBetween: 20,
        },
        480: {
            slidesPerView: '2',
            spaceBetween: 15,
        },
        0: {
            slidesPerView: '1',
            spaceBetween: 15,
        }
    }
});

new Swiper('.j-func-top', {
    speed: 400,
    spaceBetween: 30,
    slidesPerView: '1',
    wrapperClass: 'func__img-wrapper',
    slideClass: 'func__img-slide',
    allowTouchMove: false,
    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },
    navigation: {
        nextEl: '.j-func-slider .j-next',
        prevEl: '.j-func-slider .j-prev',
    },
    thumbs: {
        swiper: func_thumbs
    },
    on: {
        slideChange: function() {
            lazy_load_slide($('.j-func-top'));
        },
    },
});


new Swiper('.j-reviews .reviews__slider', {
    speed: 400,
    wrapperClass: 'reviews__slider-wrapper',
    slideClass: 'reviews__slider-slide',
    slideToClickedSlide: true,
    navigation: {
        nextEl: '.j-reviews .j-next',
        prevEl: '.j-reviews .j-prev',
    },
    pagination: {
        el: '.j-reviews .j-dots',
        type: 'bullets',
        clickable: true,
    },
    on: {
        slideChange: function() {
            lazy_load_slide($('.j-reviews'));
        },
    },
    breakpoints: {
        1201: {
            spaceBetween: 30,
            slidesPerView: 'auto',
            initialSlide: 2,
            centeredSlides: true,
        },
        992: {
            spaceBetween: 20,
            slidesPerView: 3,
        },
        768: {
            spaceBetween: 20,
            slidesPerView: 2,
        },
        480: {
            spaceBetween: 15,
            slidesPerView: 2,
        },
        0: {
            spaceBetween: 15,
            slidesPerView: 1,
        }
    }
});



function init_slider_tarif_home() {
	const $slider = $('.j-tarifs-slider'),
		is_slider = $slider.find('.tarif__slider').is('.swiper-initialized');

	if($window.width() <= 767) {
		if(!is_slider) {
			new Swiper($slider.find('.tarif__slider')[0], {
				slidesPerView: '1',
				spaceBetween: 15,
				wrapperClass: 'tarif__slider-wrapper',
				slideClass: 'tarif__slider-slide',
                pagination: {
                    el: $slider.find('.j-dots')[0],
                    type: 'bullets',
                    clickable: true,
                },
				on: {
					slideChange: function() {
						lazy_load_slide($slider);
					},
				},
			});
		}
	} else {	
		if(is_slider) {
			$slider.find('.tarif__slider')[0].swiper.destroy(true, true);
		}
	}
}

init_slider_tarif_home();
$window.on('resize', init_slider_tarif_home);




function animation_el_parallax(target, offset) {
	let posY = $window.scrollTop() - $(target).offset().top + $window.height() / 3; 

	gsap.to(target, {y: posY / 3});
}


$window.bind('scroll', function() {
	animation_el_parallax('.j-parallax');
});




