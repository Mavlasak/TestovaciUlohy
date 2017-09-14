$(document).ready(function () {

    var flashesDivs;
    var setTimeoutConsts = [];
    var startOfTimeouts = [];
    var delays = [];


    $.nette.ext({
        init: function () {
            init();
        },
        before: function () {
            clearTimeouts();
        },
        success: function () {
            init();
        }
    });


    function init() {
        flashesDivs = $('div.flash');

        if (!flashesDivs.length) {
            return false;
        }

        flashesDivs.each(function(idx) {
            var that = $(this);

            if (idx <= 2) {
                that.animate({'opacity': 1, 'marginTop': '0'}, 400);
                setFlashTimeout(that);

            } else {
                that.hide(0);
            }
        });

        hoverPause();
        rightClickRemove();
        closeClickRemove();
    }

    function hoverPause() {
        flashesDivs.hover(function() {
            var index = $(this).data('flash-id');

            if (index in setTimeoutConsts &&
                index in startOfTimeouts &&
                index in delays) {
                clearTimeout(setTimeoutConsts[index]);
                delays[index] -= new Date() - startOfTimeouts[index];
            }
            $(this).find('.progressbar').stop();

        }, function(){
            var that = $(this);
            var index = that.data('flash-id');

            setFlashTimeout(that, delays[index]);
        });
    }

    function rightClickRemove() {
        flashesDivs.mousedown(function(event){
            if(event.button == 2) {
                $(this).bind('contextmenu', function(e) {
                    e.preventDefault();
                });
                removeFlash($(this));
            }
        });
    }

    function closeClickRemove() {
        flashesDivs.find('.close').click(function(){
            removeFlash($(this).parent());
        });
    }


    function removeFlash(ele) {
        ele.clearQueue()
            .animate({'opacity': 0}, 100)
            .slideUp(200, function() {
                $(this).remove();
            });

        var hiddenFlash = $('div.flash:hidden').first();
        if (hiddenFlash.length) {
            hiddenFlash.show(0).animate({'opacity': 1, 'marginTop': '0'}, 400);
            setFlashTimeout(hiddenFlash);
        }
    }

    function setFlashTimeout(flashEle, delay) {
        var flashId = flashEle.data('flash-id');
        delay = (typeof delay === 'undefined') ? getDelay(flashId) : delay;

        setTimeoutConsts[flashId] = setTimeout(function(){
            removeFlash(flashEle);
        }, delay);
        startOfTimeouts[flashId] = new Date();

        $(flashEle).find('.progressbar').animate({width: '100%'}, delay, 'linear');
    }

    function getDelay(flashId) {
        var flashesCount = $('div.flash:visible').length;
        delays[flashId] = (-250 * (flashesCount * flashesCount) + 2750 * flashesCount + 1000);
        return delays[flashId];
    }

    function clearTimeouts() {
        if (setTimeoutConsts.length) {
            $.each(setTimeoutConsts, function(index, value) {
                clearTimeout(setTimeoutConsts[index]);
            });
            setTimeoutConsts = [];
            startOfTimeouts = [];
            delays = [];
        }
    }
});