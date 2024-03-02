$(function () {
    "use strict";
    //**  On Click Functions Here **//
    function onClicks() {
        $('.brand-toggle').on('click', function () {
            if ($('.site-wrapper').hasClass("aside-minimize")) {
                $('.site-wrapper').removeClass('aside-minimize');
            } else {
                $('.site-wrapper').toggleClass('aside-minimize');
            }
            $('.site-wrapper').toggleClass('session-sidebar');
            $(this).toggleClass('active');
        });

        $('.aside-menu-wrapper').on('mouseenter', function () {
            $('.site-wrapper').addClass('aside-minimize-hover');
        });

        $('.aside-menu-wrapper').on('mouseleave', function () {
            $('.site-wrapper').removeClass('aside-minimize-hover');
        });

        $('.has-submenu > a').on('click', function () {
            $(this).closest('.has-submenu').siblings().find('.menu-submenu').slideUp("50");
            if ($(this).closest('.has-submenu').hasClass('root-menu') && $(this).closest('.has-submenu').find('.menu-submenu .menu-submenu:visible')) {
                $(this).closest('.has-submenu').find('.menu-submenu .menu-submenu').slideUp('fast');
            }
            $(this).closest('.has-submenu').siblings().removeClass('menu-item-active');
            $(this).closest('.has-submenu').find(' >.menu-submenu').slideToggle("fast");
            $(this).closest('.has-submenu').addClass('menu-item-active');
            return false;
        });

        $('.password-toggler').on('click', function () {

            if ($(this).closest('.input-group').find('input').attr('type') === 'password') {
                $(this).closest('.input-group').find('input').attr('type', 'text');
                $(this).find('i').removeClass('fa-eye-slash');
                $(this).find('i').addClass('fa-eye');
            } else {
                $(this).closest('.input-group').find('input').attr('type', 'password');
                $(this).find('i').addClass('fa-eye-slash');
                $(this).find('i').removeClass('fa-eye');
            }
        });


        if ($('.short_description').length) {
            $('.short_description').summernote({
                placeholder: 'Summary',
                height: 100,
                tabsize: 1,
                toolbar: [
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                ],
            });
        }

        if ($('.description').length) {
            $('.description').summernote({
                placeholder: 'Write here..',
                height: 300,
                styleTags: [
                    'p',
                    {
                        title: 'Blockquote',
                        tag: 'blockquote',
                        className: 'blockquote',
                        value: 'blockquote'
                    },
                    'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
                ],
                prettifyHtml: true,
                toolbar: [
                    ['style', ['style']],
                    ['font', ['bold', 'italic', 'underline', 'add-text-tags', 'highlight', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'videoAttributes']],
                    ['view', ['fullscreen', 'codeview', 'help']],
                ],
                imageAttributes: {
                    icon: '<i class="note-icon-pencil"/>',
                    figureClass: 'figureClass',
                    figcaptionClass: 'captionClass',
                    captionText: 'Caption Goes Here.',
                    manageAspectRatio: true // true = Lock the Image Width/Height, Default to true
                },
                lang: 'en-US',
                popover: {
                    image: [
                        ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
                        ['float', ['floatLeft', 'floatRight', 'floatNone']],
                        ['remove', ['removeMedia']],
                        ['custom', ['imageAttributes']],
                    ],
                },
            });
        }

        function select () {
            if ($('.select').length) {
                var placeholder = $(this).data('placeholder');
                placeholder = !placeholder ? "choose" : placeholder;

                $('.select').select2({
                    placeholder: placeholder,
                });
            }
        }
        select();
        $( window ).on( "resize", function() {
            select();
        });
    }

    onClicks();
});
