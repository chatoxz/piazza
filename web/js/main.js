/**
 * Created by chatoxz on 14/02/2017.
 */
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

$(document).ready(function(){
    $('#bxslider1').bxSlider({
        //adaptiveHeight: true,
        pager: false,
        auto: true,
        speed: '2000',
        //easing: 'swing'
    });

    $('#bxslider2').bxSlider({
        slideWidth: 5000,
        minSlides: 6,
        maxSlides: 12,
        moveSlides: 1,
        slideMargin: 6,
        pager: false,
        speed: '1000',
        //easing: 'linear'
    });

  //  var $ = jQuery.noConflict();

    var realSlider= $("ul#bxslider").bxSlider({
        speed:1000,
        pager:false,
        nextText:'',
        prevText:'',
        infiniteLoop:true,
        hideControlOnEnd:true,
        onSlideBefore:function($slideElement, oldIndex, newIndex){
            changeRealThumb(realThumbSlider,newIndex);

        }

    });

    var realThumbSlider=$("ul#bxslider-pager").bxSlider({
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 156,
        slideMargin: 12,
        moveSlides: 1,
        pager:false,
        speed:1000,
        infiniteLoop:true,
        hideControlOnEnd:true,
        nextText:'<span></span>',
        prevText:'<span></span>',
        onSlideBefore:function($slideElement, oldIndex, newIndex){
            /*$("#sliderThumbReal ul .active").removeClass("active");
             $slideElement.addClass("active"); */

        }
    });

    linkRealSliders(realSlider,realThumbSlider);

    if($("#bxslider-pager li").length<5){
        $("#bxslider-pager .bx-next").hide();
    }

// sincronizza sliders realizzazioni
    function linkRealSliders(bigS,thumbS){

        $("ul#bxslider-pager").on("click","a",function(event){
            event.preventDefault();
            var newIndex=$(this).parent().attr("data-slideIndex");
            bigS.goToSlide(newIndex);
        });
    }

//slider!=$thumbSlider. slider is the realslider
    function changeRealThumb(slider,newIndex){

        var $thumbS=$("#bxslider-pager");
        $thumbS.find('.active').removeClass("active");
        $thumbS.find('li[data-slideIndex="'+newIndex+'"]').addClass("active");

        if(slider.getSlideCount()-newIndex>=4)slider.goToSlide(newIndex);
        else slider.goToSlide(slider.getSlideCount()-4);

    }


});

