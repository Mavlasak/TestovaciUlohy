$(document).ready(function () {

    $(function () {
        $.nette.init();
    });

    $.nette.ext({
        init: function () {
            hamburgerMenu();
            validateOnBlur();
            focusComment();
            textareaResize();
            //initSpinner();
        },
        before: function (xhr, settings) {
            if (!settings.nette) {
                return;
            }

            // AJAX se neprovede, pokud neni potvrzeny confirm - data-confirm="Opravdu?"
            var question = settings.nette.el.data('confirm');
            if (question) {
                return confirm(question);
            }
        },
        success: function () {
            //initSpinner();
        },
        complete: function () {
            validateOnBlur();
            focusComment();
            textareaResize();
            //$('#ajax-spinner').remove();
        }
    });

    // na prislusne ajax odkazy pripoji click event zobrazujici ajax spinner
    function initSpinner() {
        $('a.ajax.spinner')
            .unbind('click.spinner') // zamezi vicenasobnemu pripojeni eventu
            .bind('click.spinner', function () {

                var spinnerType = $(this).attr('spinner-type');

                $('<div id="ajax-spinner"></div>')
                    .css({ display: 'inline-block' })
                    .addClass(spinnerType)
                    .appendTo(this);

                //$(this).remove();
            });
    }


    function hamburgerMenu() {

        $(".hamburger-menu").on("click", function(event) {
            event.preventDefault();

            var menuOverlay = $("#overlay-menu");

            if (menuOverlay.is(':visible')) {
                menuOverlay.fadeOut(150);
                $(this).removeClass("active");
            } else {
                menuOverlay.fadeIn(150);
                $(this).toggleClass("active");
            }


            $("body").bind("mousewheel touchmove", function(event) {
                if ($(".hamburger-menu").hasClass("active")) {
                    event.preventDefault();
                } else {
                    $(this).unbind(event);
                }
            });
        });

    }


    /*************** Inline validace formularu ***************/

    function validateOnBlur() {

        $('input[type="text"], select, textarea, input[type="date"], input[type="password"], input[type="number"]').on('blur keyup',function() {
            showErrors(this);
        });
    }

    Nette.showFormErrors = function(form, errors) {
        var messages = [],
            focusElem,
            hiddenElem;

        for (var i = 0; i < errors.length; i++) {
            var elem = errors[i].element,
                message = errors[i].message;

            if (!Nette.inArray(messages, message)) {
                messages.push(message);

                if (!focusElem && elem.focus && $(elem).css('display') !== 'none')
                    focusElem = elem;

                if (!hiddenElem && $(elem).css('display') === 'none')
                    hiddenElem = elem;
            }

            showErrors(elem);
        }

        if (messages.length) {

            if (focusElem) {
                focusElem.focus();

                if ($(focusElem).data("validation-type") === "alert")
                    alert(messages.join('\n'));
            }

            if (!focusElem && hiddenElem) {
                tinyMCE.get(hiddenElem.id).focus();

                var tinyMCEdiv = $(hiddenElem).closest('td').find('div');
                $('html, body').animate({
                    scrollTop: tinyMCEdiv.offset().top - 120
                }, 0);
            }
        }
    };

    function showErrors(ele) {

        if ($(ele).data("validation-type") === "alert")
            return false;

        var th = $(ele).closest('tr').find('th');
        $('.validation-nok', th).remove();

        Nette.formErrors = [];
        var isValid = Nette.validateControl($(ele), null, false);

        if (isValid) {
            $(ele).removeClass('not-validated');
        } else {
            $(ele).addClass('not-validated');
            th.append(' <div class="validation-nok">' + Nette.formErrors[0].message + '</div> ');
        }
    }


    /*********************** Komentare ***********************/

    // zvýrazní a najede na komentář, na který je reagováno nakliknutým komentářem
    function focusComment() {
        $('.comment p.text a.commented-user').off().click(function(event){
            event.preventDefault();

            var ele = $($(this).attr('href'));

            $('html, body').animate({
                scrollTop: $( ele ).offset().top - 80
            }, 700);

            ele.addClass('feedback').delay(3000).queue(function() {
                ele.removeClass('feedback').dequeue();
            });
        });
    }

    // textarea se sama zvetsuje podle poctu radku
    function textareaResize() {
        $.each($('#frm-comments-commentForm-text'), function() {
            var offset = this.offsetHeight - this.clientHeight;

            var resizeTextarea = function(el) {
                $(el).css('height', 'auto').css('height', el.scrollHeight + offset);
            };
            $(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
        });
    }
});


/*********** Formular pro reakci na komentar *************/

// přesun formuláře pro vložení komentáře pod příspěvek, na který chce uživatel reagovat
function moveFormTo(repliedCommentId, nestId) {
    $('#commentForm')
        .insertAfter('#' + repliedCommentId)
        .find('textarea').attr('placeholder', 'Jaká je vaše reakce na příspěvek výše?')
        .val('')
        .focus();

    $('input[name="reply_on_id_comments"]').val(repliedCommentId);
    $('input[name="nesting_in_id_comments"]').val(nestId);

    $('#cancel').show();
}

// navrat formulare na puvodni misto
function cancelReply() {
    $('#commentForm')
        .insertAfter('#comments-top')
        .find('textarea').attr('placeholder', 'Text komentáře')
        .val('');

    $('input[name="reply_on_id_comments"]').val(0);
    $('input[name="nesting_in_id_comments"]').val(0);

    $('#cancel').hide();
}

// zobrazeni/skryti "skryteho" formulare
function switchHiddenComment(event, commentId) {
    event.preventDefault();

    var ele = $('#comment-text-' + commentId);
    var clickedEle = $(event.target);

    if (ele.hasClass('nonactive')) {
        ele.removeClass('nonactive');
        clickedEle.html('Skrýt');
    } else {
        ele.addClass('nonactive');
        clickedEle.html('Zobrazit');
    }
}


/****************** Modalni okno loginu *******************/

function showSign(event) {
    event.preventDefault();

    var loginOverlay = $('#overlay-login');

    if (loginOverlay.is(':visible')) {
        loginOverlay.fadeOut(200);

    } else {
        loginOverlay.fadeIn(200);

        loginOverlay.click(function(e) {
            e.preventDefault();
            $(this).fadeOut(200);
        });

        $('#modal-login').click(function(e) {
            e.stopPropagation();
        });
    }
}


/******************** JS ochrana mailu ********************/

function generateMail(lhs, rhs) {
    document.write("<a href=\"mailto");
    document.write(":" + lhs + "@");
    document.write(rhs + "\">" + lhs + "@" + rhs + "<\/a>");
}
