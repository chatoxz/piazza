/**
 * Created by chatoxz on 14/02/2017.
 */
/*(function () {
    $.srSmoothscroll({
        // defaults
        step: 5,
        speed: 40,
        ease: 'swing',
        target: $('body'),
        container: $(window)
    })
});*/

function wheel(event) {
    var delta = 0;
    if (event.wheelDelta) {(delta = event.wheelDelta / 120);}
    else if (event.detail) {(delta = -event.detail / 3);}

    handle(delta);
    if (event.preventDefault) {(event.preventDefault());}
    event.returnValue = false;
}

function handle(delta) {
    var time = 500;
    var distance = 150;

    $('html, body').stop().animate({
        scrollTop: $(window).scrollTop() - (distance * delta)
    }, time );
}

if (window.addEventListener) {window.addEventListener('DOMMouseScroll', wheel, false);}
window.onmousewheel = document.onmousewheel = wheel;