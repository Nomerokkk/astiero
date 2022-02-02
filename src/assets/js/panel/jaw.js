const $tooth_item = $('.j-jaw-item'),
    $title_jaw = $('.j-title-jaw'),
    $radio = $('.j-tooth-radio'),
    $loader = $('.j-jaw-loader');

let pan;


/*****************INIT JAW*****************/
if($('.j-panzoom').length > 0) {
    $window.on('load', function() {
        pan = new Panzoom(document.querySelector('.j-panzoom'), {
            click: false,
            maxScale: 2,
            wheel: false,
            bounceForce: .3,
            zoomFriction : 0,
            pinchToZoom: false,
        });
        
        gsap.to($loader[0], {
            display: 'none',
            opacity: 0,
        })
    });

    $window.on('resize', function() {
        pan.updateMetrics(true);
    });
}

/*********************ZOOM BTN******************/
$('.j-zoom-btn').on('click', function() {
    let $this = $(this);

    if(!$this.is('.active')) {            
        gsap.to('.j-jaw', {
            scale: 2,
            duration: .3,
        });

        $this.addClass('active');

    } else {
        gsap.to('.j-jaw', {
            scale: 1,
            duration: .3,
        });

        $this.removeClass('active');
    }

    pan.toggleZoom();
});

/*******************CLICK TOOTH******************/
$tooth_item.on('click', function() {
    let $this = $(this),
        title = $this.data('title'),
        number = $this.data('number');

    $title_jaw.text(title);
    $tooth_item.removeClass('active');
    $this.toggleClass('active');

    $radio.prop('checked', false);
    $radio.data('number', number);
});

/********************SELECT PARAMETR***************/
$radio.on('click', function() {
    let $this = $(this),
        $tooth_item_active = $('.j-jaw-item.active'),
        dir = $this.data('dir'),
        dir_border = $this.data('border'),
        class_ = $this.data('class'),
        class_border = $this.data('class-border'),
        format = $this.data('format'),
        number = $this.data('number'),
        $visual = $tooth_item_active.find('.visual'),
        visual = $this.data('visual'),
        sinus = $this.data('sinus');

    if(sinus == undefined) {
        //Change classes
        if(number >= 17) {
            $tooth_item_active
                .attr('class', 'j-jaw-item active jaw-item jaw-item--bottom jaw-item--' + number)
                .addClass(class_)
                .addClass(class_border);
        } else {
            $tooth_item_active
                .attr('class', 'j-jaw-item active jaw-item jaw-item--' + number)
                .addClass(class_)
                .addClass(class_border);
        }


        //Change img tooth
        if(dir != '') {
            let src = dir + number + '.' + format,
                $tooth = $tooth_item_active.find('.tooth'),
                $img = $tooth_item_active.find('.tooth > img');

            $tooth_item_active.show();

            $tooth.attr('style', '-webkit-mask-image: url(' + src + '); mask-image: url(' + src + ');');

            $img.attr('src', src);

            gsap.fromTo($tooth_item_active[0], {
                opacity: 0,
                duration: 0,
            }, {
                opacity: 1,
                duration: .5,
            });
        } else {
            $tooth_item_active.hide();
        }

        //Add visual element
        $visual.html('');

        if($this.is('[data-visual]')) {
            let src = visual + number + '.' + format,
                $img = $('<img/>');

            $tooth_item_active.addClass(visual);
            $img.attr('src', src).appendTo($visual);  
        }

        //Change border
        if(dir_border != '') {
            let src = dir_border + number + '.svg',
                $border_img = $tooth_item_active.find('.border img');

            $tooth_item_active.removeClass(class_border).addClass(class_border);

            $border_img.attr('src', src);
        }

    } else {
        let $sinus_left = $('.j-sinus-left'),
            $sinus_right = $('.j-sinus-right'),
            src_left = dir + 'left.png',
            src_right = dir + 'right.png';

        $sinus_left.html('');
        $sinus_right.html('');

        $tooth_item.show();

        if(sinus == 'two') {
            let $img_left = $('<img/>'),
                $img_right = $('<img/>');

            $('.j-jaw-item[data-number="2"], .j-jaw-item[data-number="3"], .j-jaw-item[data-number="4"], .j-jaw-item[data-number="5"]').hide();
            $('.j-jaw-item[data-number="12"], .j-jaw-item[data-number="13"], .j-jaw-item[data-number="14"], .j-jaw-item[data-number="15"]').hide();

            $img_left.attr('src', src_left).appendTo($sinus_left);
            $img_right.attr('src', src_right).appendTo($sinus_right);  

            $sinus_left.fadeIn('fast');
            $sinus_right.fadeIn('fast');
        }

        if(sinus == 'left') {
            let $img_left = $('<img/>');

            $('.j-jaw-item[data-number="2"], .j-jaw-item[data-number="3"], .j-jaw-item[data-number="4"], .j-jaw-item[data-number="5"]').hide();

            $img_left.attr('src', src_left).appendTo($sinus_left);

            $sinus_left.fadeIn('fast');
        }

        if(sinus == 'right') {
            let $img_right = $('<img/>');

            $('.j-jaw-item[data-number="12"], .j-jaw-item[data-number="13"], .j-jaw-item[data-number="14"], .j-jaw-item[data-number="15"]').hide();

            $img_right.attr('src', src_right).appendTo($sinus_right);  

            $sinus_right.fadeIn('fast');
        }
    }
});