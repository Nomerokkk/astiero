var $up = $('.j-up'),
	$header = $('.j-header'),
	$wrapper = $('.j-wrapper'),
	$overlay = $('.j-overlay'),
	$window = $(window),
	$document = $(document);



/***************SUPPORT SVG SPRITE******************/
svg4everybody();




$(function() {
	function headerFixed() {
		let scroll = $window.scrollTop();

		if(scroll > 0) {
			$header.addClass('fixed');
		} else {
			$header.removeClass('fixed');
		}

		if(scroll > 1600) {
			$up.addClass('active');
		} else {
			$up.removeClass('active');
		}
	}
	$up.on('click', function() {
		$('body, html').animate({
			scrollTop: 0,
		});
	});

	$window.bind('scroll', headerFixed);

	headerFixed();

	$('.j-date').inputmask('99.99.99');
});



/*********************LAZY */
$('.j-lazy').lazy({
	visibleOnly: true,
	afterLoad: function(item) {
		$(item).addClass('loaded');
	}
});

function lazy_load_slide(item) {
	item.find('.j-lazy').lazy({
		bind: 'event',
		delay: 0,
		visibleOnly: true,
		afterLoad: function(item) {
			$(item).addClass('loaded');
		}
	});
}


/*******************FANCYBOX**************/
const opts_fancybox = {
	autoFocus: false,
	trapFocus: false,
	dragToClose: false,
	placeFocusBack: false,
	on: {
		reveal: function(fancybox) {
			var $slide = $(fancybox.$container);

			$slide.find('.j-lazy').lazy({
				bind: 'event',
                delay: 0,
			});
		},
	}
};

Fancybox.bind('[data-fancybox]', opts_fancybox);

$document.on('click', '[data-close]', function() {
	Fancybox.close();
});


/***************DATA TOGGLE***********/
$(function() {
	const btn = '[data-toggle]';

	$(btn).on('click', function(e) {
		e.preventDefault();

		let $this = $(this),
			target = $this.data('toggle'),
			new_text = $this.find('span').data('text'),
			old_text = $this.find('span').data('old-text');

		$('[data-toggle="' + target + '"]').toggleClass('active');
		
		$(target).slideToggle(200);
		$(target).toggleClass('active');

		if(new_text) {
			if(!$this.is('.active')) {
				$this.find('span').text(old_text);
			} else {
				$this.find('span').text(new_text);
			}
		}
	});
});


$('[data-toggle-class]').on('click', function() {
	let $this = $(this),
		target = $this.data('toggle-class');

	$this.toggleClass('active');
	$(target).toggleClass('active');
});


/***************OPEN TARGET******************/
$(function() {
	const btn = '[data-target]';

	$document.on('click', btn, function(e) {
		e.preventDefault();

		var $this = $(this),
			target = $this.attr('data-target'); 

			$(btn).each(function() {
				var $this_new = $(this),
					target_new = $this_new.attr('data-target'),
					$target_new = $(target_new); 

				if(target != target_new && !$(target).parents().is('.active-target')) {			
					$this_new.removeClass('active-target');
					$target_new.removeClass('active-target');
				}
			});

			$this.toggleClass('active-target');
			$(target).toggleClass('active-target');
	});

	function hide_target() {
		$(btn).each(function() {
			var $this = $(this),
				target = $this.attr('data-target'); 

			$this.removeClass('active-target');
			$(target).removeClass('active-target');
		});
	}

	$document.on('click', function(e) {
		var $target = $(e.target);
		
		if( !$target.is(btn) && 
			!$target.parents().is(btn) && 
			!$target.is('.active-target') && 
			!$target.parents().is('.active-target') 
		) {
			hide_target();
		}
	});

	$('.j-overlay').on('click', function() {
		hide_target();
	});
});


function animateFrom(elem) {
	var delay = elem.getAttribute('data-delay'),
		ease = 'power2';

	if(elem.classList.contains('j-wow-left')) {
		gsap.fromTo(elem, {x: -100, autoAlpha: 0}, {
			x: 0,
			duration: 1,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: ease, 
		});
	}
	if(elem.classList.contains('j-wow-right')) {
		gsap.fromTo(elem, {x: 100, autoAlpha: 0}, {
			x: 0,
			duration: 1,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: ease, 
		});
	}
	if(elem.classList.contains('j-wow-down')) {
		gsap.fromTo(elem, {y: -100, autoAlpha: 0}, {
			y: 0,
			duration: 1,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: ease, 
		});
	} 
	if(elem.classList.contains('j-wow-up')) {
		gsap.fromTo(elem, {y: 100, autoAlpha: 0}, {
			y: 0,
			duration: 1,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: ease, 
		});
	} 
	if(elem.classList.contains('j-wow-fade')) {
		gsap.fromTo(elem, {autoAlpha: 0}, {
			duration: 1,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: ease, 
		});
	} 
	if(elem.classList.contains('j-wow-bounce')) {
		gsap.fromTo(elem, {scale: .5, autoAlpha: 0}, {
			scale: 1,
			duration: 1.5,
			autoAlpha: 1, 
			delay: elem.getAttribute('data-delay'),
			ease: Bounce.easeOut, 
		});
	} 
	if(elem.classList.contains('j-wow-class')) {
		setTimeout(()=>{
			$(elem).addClass('animated');
		}, delay * 1000);
	}	
}

gsap.utils.toArray('.j-wow').forEach(function(elem) {
	ScrollTrigger.create({
		trigger: elem,
		once: true,
		onEnter: function() { animateFrom(elem) }, 
	});
});


/**********SCROLL TO ELEMENT**********/
$(function() {
	var $link = $('[data-scroll]');

	const hash = window.location.hash;

	window.location.hash = '';

	if(hash) {
		gsap.to(window, {
			duration: 2, 
			scrollTo: $(hash).offset().top - $header.outerHeight() + 1, 
			ease: Power4.easeOut
		});
	}




	$link.on('click', function(e) {
		e.preventDefault();

		var href = $(this).data('scroll'),
			offset = $(href).offset().top - $header.outerHeight() + 1;
		
		gsap.to(window, {
			duration: 1, 
			scrollTo: offset, 
			ease: Power4.easeOut
		});

		$('.header-toggle').trigger('click');
	});

	function onScroll(){
		var scrollPos = $document.scrollTop(),
			header_height = $header.height();
		
		$link.each(function () {
			var currLink = $(this),
				href = currLink.data('scroll'),
				refElement = $(href);

			if(currLink.is(':visible')) {
				if (refElement.position().top <= scrollPos + header_height && refElement.position().top + refElement.height() - header_height > scrollPos) {
					$link.removeClass('active');
					$('[data-scroll="' + href + '"]').addClass('active');
				}
				else{
					currLink.removeClass('active');
				}
			}
		});
	}

	$document.on('scroll', onScroll);
});


/*******************PHONES********************/
function init_phones(el) {
	let $el = $(el);
	
	intlTelInput(el, {
		initialCountry: 'auto',
		preferredCountries: ['ua', 'ru', 'us'],
		separateDialCode: true,
		hiddenInput: 'phone',
		utilsScript: "/assets/libs/tel/js/utils.js",
		geoIpLookup: function(success, failure) {
			$.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
				var countryCode = (resp && resp.country) ? resp.country : "ua";

				success(countryCode);
			});
		},
		customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
			let placeholder = selectedCountryPlaceholder.replace(/[0-9]/g, '_');

			return placeholder;
		},
		
	});

	el.addEventListener('countrychange', function() {
		let $this = $(el);

		$this.inputmask('remove');
		$this.val('');
		$this.removeClass('mask-added');
	});

	$el.on('focus', function() {
		let placeholder = $el.attr('placeholder'),
			mask = placeholder.replace(/[_]/g, '9');
			
		if(!$el.is('.mask-added')) {
			$el.val('');
			$el.inputmask(mask);

			$el.addClass('mask-added')
		}
	});

	$document.on('click', '.iti__country', function() {
		$el.trigger('focus');
	});
}

$('.j-phone').each(function() {
	init_phones($(this)[0]);
});



/*********************PARALLAX***************/
function animation_bg_parallax(target, offset) {
	if($(target).length > 0) {
		let posY = $window.scrollTop() - $(target).closest('.j-parallax-bg-sec').offset().top; 

		if(posY < 0) {
			posY = 0;
		}

		gsap.to(target, {y: posY, duration: 0});
	}
}

$window.bind('scroll', function() {
    animation_bg_parallax('.j-parallax-bg');
});