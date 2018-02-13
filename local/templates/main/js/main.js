AutoZona = {
    init: function () {
        this.initSlider();
        this.initBackButton();
        this.initHeaderForm();
        this.initDropdownMenu();
        this.initScroll();
    },

    initSlider: function () {
        $('#f_about_slider .carousel-inner').bxSlider({
            mode: 'fade',
            controls: false,
            pager: false,
            auto: true
        });

        $('#f_reviews_slider').bxSlider({
            mode: 'fade',
            controls: true,
            pager: false,
            minSlides: 1,
            maxSlides: 1,
            prevText: '<span class="glyphicon glyphicon-chevron-left"></span>',
            nextText: '<span class="glyphicon glyphicon-chevron-right"></span>'
        });

        this.equalHeight($('.f_about_right, .f_about_bg_left, .f_about_bg_right'));
    },

    initDropdownMenu: function () {
        $('li.dropdown a').click(function (e) {
            $(this).next('ul.dropdown-menu').css('display', 'block');
            e.stopPropagation();
        });

        $('a.dropdown-toggle').removeAttr('href');
    },

    initBackButton: function () {
        if (($(window).height() + 100) < $(document).height()) {
            $('#top-link-block').removeClass('hidden').affix({offset: {top: 100}});
        }
    },

    initScroll: function () {
        $('.js-scroll').on('click', function (e) {
            var parts = $(this).attr('href').split('#'),
                id = parts[1],
                elem = $('#' + id);

            if (elem.length) {
                e.preventDefault();

                var offset = $(this).data('offset') ? $(this).data('offset') : 0,
                    top = elem.offset().top + offset;

                $('html, body').animate({ scrollTop: top }, 800, 'swing');
            }
        });
    },

    initHeaderForm: function () {

    },

    equalHeight: function(group) {
        var tallest = 0;
        group.each(function () {
            var thisHeight = $(this).height();
            if (thisHeight > tallest) {
                tallest = thisHeight;
            }
        });
        group.height(tallest);
    }
}

$(document).ready(function () {
    AutoZona.init();
});
