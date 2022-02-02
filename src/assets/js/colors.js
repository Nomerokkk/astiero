$('.j-pickr').each(function(e) {
	let $this = $(this),
		color = $this.data('color'),
		variable = $this.data('var');
	
	const pickr = new Pickr({
		el: $this[0],
		default: color,
		theme: 'nano',
		useAsButton: true,
		components: {
			hue: true,
			interaction: {
				input: true,
			}
		}
	}).on('change', (color, source, instance) => {
		let color_new = color.toHEXA() + '';
		

		color_new = color_new.replace(',', '');

		$('.j-settings-color').eq(e).css('background', color_new);

		$this.val(color_new);

		document.documentElement.style.setProperty('--' + variable, color_new);
	})

	$('.j-reset-settings').on('click', function() {
		$('.j-pickr').each(function(e) {
			let $this = $(this),
				color_old = $this.attr('data-color');
		
	
			// $this.trigger('cancel');
			// $this.closest('.j-settings-color').css('background', color_old);
			
			$this.val(color_old);
	
			pickr.setColor(color_old);
		});
	});
});
