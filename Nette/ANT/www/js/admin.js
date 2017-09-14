$(document).ready(function () {

    $.nette.ext({
        init: function () {
            isDeleteOn();
        },
        complete: function () {
            isDeleteOn();
        }
    });

    function isDeleteOn() {
        $('.delete-checkbox + label div').each(function() {
            if ( $(this).css('display') === "block" ) {
                $('.delete-checkbox + label div').show();
                return false;
            }
        });
    }
});


/*************** Ulozeni adresy v kontaktech **************/

function saveAddress() {
    var placeId = document.getElementById('gm-place-id').innerText;
    if (placeId) {
        $.nette.ajax({
            type: "get",
            url: "?contacts-map-placeId=" + placeId + "&do=contacts-map-saveAddress"
        });
    } else {
        alert('Nebyla zvolená žádná adresa.');
    }
}


/************************ Galerie *************************/

function activateCheckboxes(event) {
    event.preventDefault();

    var checkboxDisplay = $('.delete-checkbox + label div').css('display');

    if (checkboxDisplay == 'none') {
        $('.delete-checkbox + label div').show();
        $('.button-album.delete-photos').text('Již nechci odstraňovat fotky');

    } else {
        $('.delete-checkbox + label div').hide();
        $('.button-album.delete-photos').text('Chci zvolit fotky k odstranění');

        $('.button-album.removeImagesForm-submit').prop("disabled", true);
        $('.delete-checkbox:checked').removeAttr('checked');
    }
}

function allowDelete(element) {
    var checkboxesChecked = $('.delete-checkbox:checked').length;
    var checkboxId = $(element).parent().attr('for');
    var checked = $('#' + checkboxId).is(':checked');

    if (checkboxesChecked >= 0  && !checked)
        $('.button-album.removeImagesForm-submit').prop("disabled", false);

    if (checkboxesChecked == 1 && checked)
        $('.button-album.removeImagesForm-submit').prop("disabled", true);
}


/****************** Admin panel ******************/

function closeAdminPanel(event) {
    event.preventDefault();

    var adminPanel = $(event.target).parent();
    adminPanel.slideUp(500);
}

// TODO Prekopat.. cele..
function moveAdminPanel(event, settings) {
    var ele = '';
    var headerHeight = $('.header').height();
    var panelType = '';

    if (settings[1]) // nazev admin-panelu - v pripade, ze je jich na strance vic
        panelType = '.' + settings[1];

    if (settings[0]) { // chci form presunout pod tlacitko "Pridat ..."
        ele = event.target.id;
        $('.admin-panel.movable' + panelType).parent().insertAfter('#' + ele);

    } else { // form se presune pod element, ktery je upravovany
        ele = $(event.target).parent().parent().attr('id');
        $('.admin-panel.movable' + panelType).parent().insertAfter('#' + ele);
    }

    if (settings[2]) { // scroll animace k formulari
        $('html, body').animate({
            scrollTop: $('.admin-panel.movable' + panelType).parent().offset().top - headerHeight - 25
        }, 500);

    } else { // scroll animace k elementu, na ktery jsem kliknul
        $('html, body').animate({
            scrollTop: $('#' + ele).offset().top - headerHeight - 25
        }, 500);
    }
}


/********************* Prace se slugy *********************/

function updateSlugOnKeyUp(keyUpInputId, slugInputId) {
    keyUpInputId = '#' + keyUpInputId;
    slugInputId = '#' + slugInputId;
    var menuTitle = $(keyUpInputId).val();

    $(slugInputId).val(webalize(menuTitle));
}

//dynamicke doplnovani slugu
function updateSlugOnBlur(blurInputId, slugInputId) {
    blurInputId = '#' + blurInputId;
    slugInputId = '#' + slugInputId;
    var menuTitle = $(blurInputId).val();

    $.nette.ajax({
        type: 'get',
        url: "?admin-menuTitle=" + menuTitle + "&do=admin-getSlug",
        success: function (payload) {
            $(slugInputId).val(payload.message.slug);
        }
    });
}

var nodiac = { 'á': 'a', 'č': 'c', 'ď': 'd', 'é': 'e', 'ě': 'e', 'í': 'i', 'ň': 'n', 'ó': 'o', 'ř': 'r', 'š': 's', 'ť': 't', 'ú': 'u', 'ů': 'u', 'ý': 'y', 'ž': 'z' };
/** Vytvoření přátelského URL
 * @param s string řetězec, ze kterého se má vytvořit URL
 * @return string řetězec obsahující pouze čísla, znaky bez diakritiky, podtržítko a pomlčku
 * @copyright Jakub Vrána, http://php.vrana.cz/
 */
function webalize(s) {
    s = s.toLowerCase();
    var s2 = '';
    for (var i=0; i < s.length; i++) {
        s2 += (typeof nodiac[s.charAt(i)] != 'undefined' ? nodiac[s.charAt(i)] : s.charAt(i));
    }
    return s2.replace(/[^a-z0-9_]+/g, '-').replace(/^-|-$/g, '');
}
