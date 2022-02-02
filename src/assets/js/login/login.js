/*******************MODAL CODE*********************/
const $code = $('.j-code');

$code.inputmask('9');

$code.on('keyup', function() {
    let $this = $(this);

    if ($this.val().length >= 1) {
        $this.closest('.j-code-col').next('.j-code-col').find('.j-code').focus();
    } else {
        $this.closest('.j-code-col').prev('.j-code-col').find('.j-code').focus();
    }
});


/*******************TIMER******************/
function timeBetweenDates(toDate, timer) {
    const $timer = $('.j-timer');

    let now = new Date(),
        difference = toDate.getTime() - now.getTime();

    if (difference <= 0) {

        clearInterval(timer);
        $timer.text('');
    
    } else {
        
        let seconds = Math.floor(difference / 1000),
            minutes = Math.floor(seconds / 60);

        minutes %= 1;
        seconds %= 60;
        
        $timer.text(minutes + ':' + seconds);
    }
}

function start_timer() {
    let timer,
        compareDate = new Date();
        compareDate.setMinutes(compareDate.getMinutes() + 1);

    timer = setInterval(function() {
        timeBetweenDates(compareDate, timer);
    }, 1000);
}