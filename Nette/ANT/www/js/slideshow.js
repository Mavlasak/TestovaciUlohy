
var slideWidth = 768;
var slideSpeed = 1000;
var currSlide = 1;
var maxSlide = 1;
var interval = '';


$(document).ready(function() {

    var slideEle = $('.slide');
    var slideContainerEle = $('.slide-container');

    setSize(slideEle, slideContainerEle);

    $(window).on('resize', function () {
        //setSize(slideEle, slideContainerEle);
    });

    StartSlide();
    slideEle.hover(function () {
        StopSlide();
    }, function () {
        StartSlide();
    })
});


function setSize(slideEle, slideContainerEle) {
    var windowWidth = $(window).width();

    if( !$(".slide-wrapper").is(":animated") ) {

        if (windowWidth > 768+50) {
            slideContainerEle.width(768);
            slideEle.width(768);

        } else if (windowWidth < 768+50 && windowWidth >= 390){
            slideContainerEle.width(windowWidth-80);
            slideEle.width(windowWidth-80);

        } else {
            slideContainerEle.width(windowWidth-30);
            slideEle.width(windowWidth-30);
        }

        slideWidth = slideEle.width();
        maxSlide = slideEle.length;

        $('.slide-wrapper').width(slideWidth * maxSlide);

    }
}


function CurrentMargin() {
    var currentMargin = $(".slide-wrapper").css("margin-left");

    if (currentMargin == "auto") {
        currentMargin = 0;
    }

    return parseInt(currentMargin);
}

function SetSlide(currNumber,nextNumber) {
    $("#switch"+currNumber).attr('class', 'switch');
    $("#switch"+nextNumber).attr('class', 'switch-active');
}

function StartSlide() {
    interval = setInterval(Slideshow, 5200);
}

function StopSlide() {
    clearInterval(interval);
}

function Slideshow() {
    if (currSlide == maxSlide) {
        SwitchSlide(1);
    } else {
        SwitchSlide(currSlide+1);
    }
}

function SwitchSlide(slideNumber) {
    var newMargin;

    if( !$(".slide-wrapper").is(":animated") && (currSlide != slideNumber)) {

        if (currSlide < slideNumber) {
            newMargin = CurrentMargin() - slideWidth*(slideNumber - currSlide);
        } else {
            newMargin = CurrentMargin() + slideWidth*(currSlide - slideNumber);
        }

        SetSlide(currSlide,slideNumber);
        currSlide = slideNumber;

        $(".slide-wrapper").animate({ marginLeft: newMargin }, slideSpeed);

        StopSlide();
        StartSlide();
    }
}