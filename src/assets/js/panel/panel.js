/******************DATE*****************/
$('.j-date').each(function() {
    new AirDatepicker(this, {
        dateFormat: 'dd.MM.yy',
        inline: true,
        nextHtml: '<svg><use xlink:href="' + target + '/img/icons.svg#arrow"/></svg>',
        prevHtml: '<svg><use xlink:href="' + target + '/img/icons.svg#arrow"/></svg>',
        onSelect: function() {
            $('.air-datepicker').removeClass('show');
        }
    });
})

$('.j-date').on('click', function() {
    $(this).siblings('.air-datepicker').addClass('show');
});

$document.on('click', function(e) {
    let $target = $(e.target);

    if(!$target.is('.j-date') && !$target.is('.air-datepicker')) {
        $('.air-datepicker').removeClass('show');
    }
});


/*********SELECTS********/
$('.j-select').niceSelect();


/***********************REMOVE PERIOD**************/
$(function() {
    const $period = $('.j-period'),
        $close = $('.j-period-remove');

    $close.on('click', function() {
        $period.slideUp(function() {
            $period.remove();
        });
    });
});


/******************SHOW PASSWORD*****************/
$('.j-view-password').on('click', function() {
    let $this = $(this),
        $input = $this.siblings('input');

    if(!$input.is('.view')) {
        $input
            .attr('type', 'text')
            .addClass('view');
    } else {
        $input
            .attr('type', 'password')
            .removeClass('view');
    }
});

/***************DOCUMENTS**************/
$('.j-input-document').on('click', function() {
    $('.j-document-nav').addClass('active');
});

$('.j-document-btn').on('click', function(e) {
    e.preventDefault();

    $('.j-document-nav').removeClass('active');
});


/****************SELECT2*************/
$('.j-select2').each(function() {
    const $this = $(this),
        $parent = $this.closest('.j-select2-wrap'),
        not_found = $this.data('notfound');

    var patients = [
        { value: 'Иван Иванов', data: 'pat1' },
        { value: 'Анфиса Чехова', data: 'pat2' },
        { value: 'Виктор Янукович', data: 'pat3' },
        { value: 'Олег Олеговский', data: 'pat4' },
        { value: 'Иван Иванов', data: 'pat1' },
        { value: 'Анфиса Чехова', data: 'pat2' },
        { value: 'Виктор Янукович', data: 'pat3' },
        { value: 'Олег Олеговский', data: 'pat4' },
        { value: 'Иван Иванов', data: 'pat1' },
        { value: 'Анфиса Чехова', data: 'pat2' },
        { value: 'Виктор Янукович', data: 'pat3' },
        { value: 'Олег Олеговский', data: 'pat4' },
        { value: 'Иван Иванов', data: 'pat1' },
        { value: 'Анфиса Чехова', data: 'pat2' },
        { value: 'Виктор Янукович', data: 'pat3' },
        { value: 'Олег Олеговский', data: 'pat4' },
    ];
    
    $this.autocomplete({
        lookup: patients,
        minChars: 0,
        triggerSelectOnValidInput: false,
        appendTo: $parent[0],
        showNoSuggestionNotice: true,
        zIndex: 10,
        maxHeight: 200,
        noSuggestionNotice: not_found
    });
});



/**************TEXTAREA HEIGHT************/
$('.admin textarea').each(function () {
    this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
}).on('input', function () {
    this.style.height = 'auto';
    this.style.height = (this.scrollHeight) + 'px';
});


/*****************SELECT USERS*******************/
$('.j-select-users').on('click', function() {
    $(this).siblings('div.j-select').toggleClass('open');

    return false;
})


/**********************MOBILE USERS TABLE*********************/
$('.j-table-users-arrow').on('click', function() {
    const $this = $(this);

    $this.toggleClass('active');
    $this.closest('.j-table-users-item').toggleClass('active');
});


/***************SHOW MESSAGE***********/
$(function() {
	var $msg = $('.j-panel-message'),
		$msg_wrapper = $('.j-panel-message-wrap');

    function show_message(el) {
        $msg_wrapper.show();

        gsap.fromTo(el, {
            x: 50
        }, {
            x: 0, 
            visibility: 'visible', 
            opacity: 1, 
            duration: .3
        });
    }

    function hide_message(el) {
		gsap.to(el, {
            x: 50, 
            opacity: 0,
            duration: .3
        });

		setTimeout(() => {
            $(el).remove();
		}, 300);
	}

    if($msg.length > 0) {
        show_message($msg[0]);
        show_message($msg[1]);
    }

	setTimeout(()=>{
        if($msg.length > 0) {
            hide_message($msg[0]);
            hide_message($msg[1]);
        }
	}, 3000);

	$msg.on('click', function(e) {
		hide_message(this);
	});
});


/*********************TOOLTIP****************/
$('[data-tooltip]').on('mouseover', function() {
    let $this = $(this),
        text = $this.data('tooltip');

    $this.append('<div class="tooltip">' + text + '</div>');
});

$('[data-tooltip]').on('mouseleave', function() {
    let $this = $(this);

    $this.find('.tooltip').remove();
});



/********************COOKIE*************/
function setCookie(c_name, value, exdays) {
    var exdate = new Date();
    exdate.setDate(exdate.getDate() + exdays);
    var c_value = escape(value) + ((exdays == null) ? "" : "; expires=" + exdate.toUTCString());
    document.cookie = c_name + "=" + c_value;
}

function getCookie(c_name) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for (i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == c_name) {
            return unescape(y);
        }
    }
}

/******************TABS******************/
$(function() {
    let $tabs = $('.j-tabs');

    $('[data-tab]').on('click', function() {
        let $this = $(this),
            tab = $this.data('tab'),
            $tab = $($this.data('tab'));

        $this.closest('.j-tabs').find('[data-tab]').removeClass('active');
        $this.addClass('active');

        $('.j-tabs-area').removeClass('active');
        $tab.addClass('active');

        setCookie('tab', tab);
    });

    if(getCookie('tab') == undefined) {
        let value = $tabs.find('[data-tab]').first().data('tab');

        setCookie('tab', value);
    }

    $('[data-tab="' + getCookie('tab') + '"]').addClass('active');
    $(getCookie('tab')).addClass('active');
});



/*********************POSITIONS OVERFLOW ITEMS***************/
$(function() {
    const $overflow_wrap = $('.j-overflow-wrap');

    if($overflow_wrap.length > 0) {
        $overflow_wrap.each(function() {
            let $this = $(this),
                $active_item = $this.find('.active');

            if($active_item.length > 0) {
                let left = $active_item.position().left,
                    width = $this.width();


                if(left + $active_item.width() > width) {
                    $this.scrollLeft(left);
                }
            }
        });
    }
});