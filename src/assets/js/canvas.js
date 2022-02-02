var $canvas_all = $('.j-canvas'),
    MAX_LINES = 40,
    amplitude = 1000,
    freq = 0.005;

$canvas_all.each(function() {
    var canvas = $(this)[0],
        ctx = canvas.getContext('2d'),
        rate = 0,
        ctr = 0;

    function draw() {
        var w = ctx.canvas.width = window.innerWidth,
            h = ctx.canvas.height = window.innerHeight;
    
        ctx.moveTo(0, h);
        
        ctr++;
    
        for (var i = 1; i < MAX_LINES; i++) {
            ctr++;
    
            rate = ctr / 10000;
    
            ctx.beginPath();
    
            for (var x = 0; x < w; x++) {
                y = Math.cos(x * freq * (i / 20) + rate) * amplitude / (i * 0.75);
                ctx.lineTo(x, y + h / 2);
            }
    
            ctx.strokeStyle = 'rgba(225, 225, 225, .3)';
            ctx.lineWidth = 1;
            ctx.stroke();
        }
    }

    setInterval(draw, 1);
});