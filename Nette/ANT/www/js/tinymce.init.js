$(window).ready(function () {

    $.nette.ext({
        init: function () {
            initTinyMCE();
        },
        success: function () {
            reinitTinyMCE();
        }
    });


    // inicializuje TinyMCE pouze u tech textarea, ktere jeste neprekryl
    function reinitTinyMCE() {
        $('textarea.tinyMCE, textarea.tinyMCEconcerts').each(function (index) {
            var ariaHidden = $(this).attr('aria-hidden');

            if (!ariaHidden) {
                initTinyMCE();
            }
        });
    }

    function initTinyMCE() {
        var width = $('.admin-panel.active').width() - 2;
        var url = window.location.href;
        var arr = url.split("/");
        var domainName = "";

        if (arr[2] === 'localhost') {
            domainName = arr[0] + "//" + arr[2] + "/" + arr[3] + "/" + arr[4];
        } else {
            domainName = arr[0] + "//" + arr[2];
        }

        tinymce.remove();
        tinymce.init({
            mode: 'textareas',

            editor_selector: 'tinyMCE',
            height: '400',
            width: width,
            language: 'cs',
            entity_encoding: 'raw',
            document_base_url: domainName,
            image_prepend_url: domainName,
            relative_urls: false,
            content_css: [
                'css/tiny.css',
                '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto+Slab:700&subset=latin-ext'
            ],
            menu: {},

            style_formats: [
                {title: 'Nadpis', block: 'p', classes: 'headline'},
                {title: 'Obrázek vlevo', block: 'p', classes: 'img-left'},
                {title: 'Obrázek vpravo', block: 'p', classes: 'img-right'}
            ],

            plugins: [
                ["save autolink link image lists anchor"],
                ["searchreplace visualblocks visualchars code media"],
                ["contextmenu directionality paste"]
            ],
            toolbar: "undo redo | styleselect removeformat | bold italic subscript superscript | bullist numlist | link image media | visualblocks | code",

            paste_as_text: true,
            browser_spellcheck: true,

            link_list: domainName + "/js/links.json",
            link_title: false,

            image_advtab: true,


            init_instance_callback: initInstanceCallback,

            file_picker_types: 'file image',
            //image_title: true,

            file_picker_callback: filePickerCallback
        });


        //konfigurace pro koncerty
        tinymce.init({
            mode: 'textareas',
            editor_selector: 'tinyMCEconcerts',
            height: '200',
            width: width,
            language: 'cs',
            entity_encoding: 'raw',
            document_base_url: domainName,
            image_prepend_url: domainName,
            relative_urls: false,
            content_css: [
                'css/tiny.css',
                '//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Roboto+Slab:700&subset=latin-ext'
            ],
            menu: {},

            paste_as_text: true,

            plugins: [
                ["save autolink link lists anchor"],
                ["searchreplace visualblocks visualchars code fullscreen"],
                ["contextmenu directionality paste"]
            ],

            toolbar: "undo redo | bold italic | bullist numlist | link | code",


            init_instance_callback: initInstanceCallback
        });
    }


    function filePickerCallback(callback, value, meta) {

        var input = $("#tinyMCE-imageupload");

        if (meta.filetype === 'file')
            input = $("#tinyMCE-fileupload");

        input.change(function() {
            $("#tinyMCE-upload-form").submit();

            $.nette.ext({
                before: function() {
                    var dialogWin = tinyMCE.activeEditor.windowManager.windows[0];
                    if (typeof dialogWin !== "undefined") {
                        $('#' + dialogWin._id)
                            .find('.mce-foot')
                            .css('position', 'relative')
                            .append('<p id="tinyMCE-fileupload-progress">Probíhá upload zvoleného souboru – vyčkejte prosím...</p>');
                    }
                },
                complete: function () {
                    $("#tinyMCE-fileupload-progress").remove();
                },
                success: function (payload) {
                    if (typeof payload.filepath !== "undefined")
                        callback(payload.filepath, {alt: '', title: '', text: payload.filename});
                }
            });
        });

        input.click();
    }

    function initInstanceCallback(editor) {
        editor.on('blur keyup', function (e) {

            editor.save();

            var textArea = $('#' + editor.id);
            var th = $(textArea).closest('tr').find('th');

            $('.validation-nok', th).remove();

            Nette.formErrors = [];
            var isValid = Nette.validateControl(textArea, null, false);

            if (isValid) {
                $(textArea).removeClass('not-validated');
            } else {
                $(textArea).addClass('not-validated');
                th.append(' <div class="validation-nok">' + Nette.formErrors[0].message + '</div> ');
            }
        });
    }

});