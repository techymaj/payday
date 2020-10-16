$(window).scroll(function() {
    if ($(this).scrollTop() > 200) { //use `this`, not `document`
        $('.scroll-container').css({
            'visibility': 'hidden',
            'opacity': '0',
            'transition': 'visibility 10s, opacity 0.5s linear'
        });
    } else {
        $('.scroll-container').css({
            'visibility': 'visible',
            'opacity': '1',
            'transition': 'visibility 10s, opacity 0.5s linear'
        });  
    }
});