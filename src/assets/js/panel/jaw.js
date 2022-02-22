const $tooth_item = $('.j-jaw-item'),
    $title_jaw = $('.j-title-jaw'),
    $radio = $('.j-tooth-radio'),
    $loader = $('.j-jaw-loader'),
    $zoom_btn = $('.j-zoom-btn'),
    $apply_btn = $('.j-apply');

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
            opacity: 0,
            duration: .4,
            onComplete: function() {
                $loader.removeClass('active');
            }
        })

        change_size_jaw();
    });

    function change_size_jaw() {
        pan.zoomTo(1)

        if($window.width() < 486) {
            gsap.to('.j-jaw', {
                scale: .7,
                duration: .3,
            });
        } else {
            gsap.to('.j-jaw', {
                scale: 1,
                duration: .3,
            });
        }

        $zoom_btn.removeClass('active');
    }

    $window.on('resize', change_size_jaw);
}

/*********************ZOOM BTN******************/
$zoom_btn.on('click', function() {
    let $this = $(this);

    pan.toggleZoom();

    if(!$this.is('.active')) {    
        if($window.width() < 486) {        
            gsap.to('.j-jaw', {
                scale: 1.7,
                duration: .3,
            });
        } else {
            gsap.to('.j-jaw', {
                scale: 2,
                duration: .3,
            });
        }

        $this.addClass('active');

    } else {
        if($window.width() < 486) {
            gsap.to('.j-jaw', {
                scale: .7,
                duration: .3,
            });
        } else {
            gsap.to('.j-jaw', {
                scale: 1,
                duration: .3,
            });
        }

        $this.removeClass('active');
    }
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

/**************APPLY BTN*************/
$apply_btn.on('click', function() {
    $apply_btn.removeClass('show');
});

/********************SELECT PARAMETR***************/
$radio.on('click', function() {
    let $this_radio = $(this),
        $tooth_item_active = $('.j-jaw-item.active'),
        dir = $this_radio.data('dir'),
        dir_border = $this_radio.data('border'),
        class_ = $this_radio.data('class'),
        class_border = $this_radio.data('class-border'),
        format = $this_radio.data('format'),
        number = $this_radio.data('number'),
        sinus = $this_radio.data('sinus');
        
    $apply_btn.addClass('show');

    if(sinus == undefined) {
        // //Change classes
        // if(number >= 17) {
        //     $tooth_item_active
        //         .attr('class', 'j-jaw-item active jaw-item jaw-item--bottom jaw-item--' + number)
        //         .addClass(class_)
        //         .addClass(class_border);
        // } else {
        //     $tooth_item_active
        //         .attr('class', 'j-jaw-item active jaw-item jaw-item--' + number)
        //         .addClass(class_)
        //         .addClass(class_border);
        // }

        // //Change border
        // if(dir_border != '') {
        //     let src = dir_border + number + '.svg',
        //         $border_img = $tooth_item_active.find('.border img');

        //     $tooth_item_active.removeClass(class_border).addClass(class_border);

        //     $border_img.attr('src', src);
        // }

        // //Change img tooth
        // if(dir != '') {
        //     let src = dir + number + '.' + format,
        //         $tooth = $tooth_item_active.find('.tooth'),
        //         $img = $tooth_item_active.find('.tooth > img');

        //     $tooth_item_active.show();

        //     $tooth.attr('style', '-webkit-mask-image: url(' + src + '); mask-image: url(' + src + ');');

        //     $img.attr('src', src);

        //     gsap.fromTo($tooth_item_active[0], {
        //         opacity: 0,
        //         duration: 0,
        //     }, {
        //         opacity: 1,
        //         duration: .5,
        //     });
        // } else {
        //     $tooth_item_active.hide();
        // }

        // //Add visual element
        // if($this_radio.is('[data-visual]')) {
        //     let $visual = $tooth_item_active.find('.visual'),
        //         visual = $this_radio.data('visual'),
        //         src = visual + number + '.' + format,
        //         $img = $('<img/>');

        //     $visual.html('');

        //     $tooth_item_active.addClass(visual);
        //     $img.attr('src', src).appendTo($visual);  
        // } else {
        //     let $visual = $tooth_item_active.find('.visual');

        //     $visual.html('');
        // }

        $tooth_item.each(function() {
            let $this = $(this),
                number = $this.data('number');

            $this.hide();
            
            //Change classes
            $this
                .attr('class', $this.data('base-class'))
                .addClass(class_)
                .addClass(class_border);

            //Change border
            if(dir_border != '') {
                let src = dir_border + number + '.svg',
                    $border_img = $this.find('.border img');

                $this.removeClass(class_border).addClass(class_border);

                $border_img.attr('src', src);
            }

            //Change img tooth
            if(dir != '') {
                let src = dir + number + '.' + format,
                    $tooth = $this.find('.tooth'),
                    $img = $this.find('.tooth > img');

                $tooth.attr('style', '-webkit-mask-image: url(' + src + '); mask-image: url(' + src + ');');

                $img.attr('src', src);

                $this.find('img').bind('load', function() {
                    $this.fadeIn(400);
    
                    $(this).unbind('load');
                });
            } else {
                $this.stop().hide();
            }

            //Add visual element
            if($this_radio.is('[data-visual]')) {
                let $visual = $this.find('.visual'),
                    visual = $this_radio.data('visual'),
                    src = visual + number + '.' + format,
                    $img = $('<img/>');

                $visual.html('');
                $this.addClass(visual);
                $img.attr('src', src).appendTo($visual);  
            } else {
                let $visual = $this.find('.visual');

                $visual.html('');
            }
        });

        //Change if size full
        // if($this.is('[data-size]')) {
        //     if(number >= 17) {
        //         $tooth_item
        //             .attr('class', 'j-jaw-item active jaw-item jaw-item--bottom jaw-item--' + number)
        //             .addClass(class_)
        //             .addClass(class_border);
        //     } else {
        //         $tooth_item
        //             .attr('class', 'j-jaw-item active jaw-item jaw-item--' + number)
        //             .addClass(class_)
        //             .addClass(class_border);
        //     }
        // }

    // if is sinus
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