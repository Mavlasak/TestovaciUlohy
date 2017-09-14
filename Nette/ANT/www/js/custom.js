$(document).ready(function () {

    $.nette.ext({
        init: function () {
            initTimePicker();
        },
        complete: function () {
            initTimePicker();
        }
    });

    // zmena menu panelu pri scrollovani
    $(window).on('load scroll resize orientationchange ajaxComplete', function() {
        var top = $(this).scrollTop();

        if (top > 37) {
            $('.header').addClass('active');
        } else {
            $('.header').removeClass('active');
        }
    });

    // po kliknuti na '.scroll-top' scrolluje nahoru
    $('.scroll-top').off().click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('body').offset().top
        }, 700);
    });

    // po kliknuti na '#about-us-button' scrolluje k '#about-us'
    $('#about-us-button').off().click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#about-us').offset().top - 80
        }, 700);
    });


    // zkracovani textu v nahledu clanku/novinky
    $(window).on('load resize orientationchange ajaxComplete', function() {

        $('.slide .perex').trunk8({
            lines: 3,
            tooltip: false
        });

        $('.news div.inner-wrapper p.text').trunk8({
            fill: '&hellip;<a href="#" class="read-more">číst celé</a>',
            lines: (window.innerWidth <= 480 ? 4 : 3),
            tooltip: false
        });

        $('.article div.inner-wrapper p.text').trunk8({
            fill: '&hellip;<a href="#" class="read-more">číst celé</a>',
            lines: (window.innerWidth <= 480 ? 3 : 2),
            tooltip: false
        });

        $('a.title').each(function() {
            var href = $(this).attr('href');
            var readMoreBtn = $(this).parent().find('.read-more');

            readMoreBtn.attr('href', href);
        });

    });

    // u udalosti, ktere se nevejdou na sirku na stranku doplni "..."
    $(window).on('load resize ajaxComplete', function() {
        var wrapperWidth = 0;
        var className = '';
        var width = 0;

        $('.event .inner-wrapper').each(function() {
            width = 0;
            wrapperWidth = $(this).width();

            $('span', this).each(function() {
                className = $(this).attr('class');

                if(className != 'ellipsis' && className != 'ellipsis active')
                    width += $(this).outerWidth(true);
            });

            if (wrapperWidth < width) {
                $(this).find('.ellipsis').addClass('active');
            } else {
                $(this).find('.ellipsis').removeClass('active');
            }
        });
    });


    function initTimePicker() {
        $('.timepicker').timepicker({'timeFormat': 'H:i',
            'scrollDefault': '18:00',
            'step': '60'});
    }
});