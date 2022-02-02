/******************************VALIDATE********************* */
function preventDefaultMy(e) {
	e.preventDefault();
}

var pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,10})+$/;
$(function() {
	var $form = $('.j-form');

	$form.find('[data-required]').on('input change',function() {
		var $this = $(this);

		if($this.val() == '') {
    		$this.addClass('error');
			$this.removeClass('ok-input');
    	} else {
    		$this.removeClass('error');
			$this.addClass('ok-input');
    	}
	});

	$form.find('input[type="email"][data-required]').on('input change', function() {
		var $this = $(this);

		if($this.val() != '') {
	    	if($this.val().search(pattern) == 0) {
				$this.removeClass('error');
				$this.addClass('ok-input');
	    	} else {
	    		$this.addClass('error');
				$this.removeClass('ok-input');
	    	}
	    }
	});

	$form.find('input[type="checkbox"][data-required]').on('input change', function() {
		var $this = $(this);

		if($this.prop('checked') == false) {
			$this.addClass('error');
		} else {
			$this.removeClass('error');
		}
	});

	
	$form.bind('submit', preventDefaultMy);
	

	$form.on('submit', function (event) {

	    var $this = $(this);

		$this.find('[data-required]').each(function() {
			var $this = $(this);

			if($this.val() == '') {
				$this.addClass('error');
			} else {
				$this.removeClass('error');
			}
		});

		$this.find('input[type="email"]').each(function() {
			var $this = $(this);

			if($this.val() != '') {
				if($this.val().search(pattern) == 0) {
					$this.removeClass('error');
				} else {
					$this.addClass('error');
				}
			} else {
				$this.addClass('error');
			}
		});
		
		$this.find('input[type="checkbox"][data-required]').each(function() {
			var $this = $(this);

			if($this.prop('checked') == false) {
				$this.addClass('error');
			} else {
				$this.removeClass('error');
			}
		});
	});
});


//send message
$(function() {
	var $form = $('.j-form');

	$form.on('submit', function (event) {
	    var $this = $(this),
			modal = $this.data('modal');

	    if(!$this.find('[data-required]').is('.error')) {
			if(modal) {
				Fancybox.show(
					[{
						src: modal,
					}], opts_fancybox
				)

				if(modal == '#code') {
					start_timer();
				}
			} else {
				$this.unbind('submit', preventDefaultMy);	
				setTimeout(function() {
					$this.submit();	
				}, 100);
			}
		}
	});
});
