AutoZona = {
    alertTimeout: null,

    init: function () {
        this.initSlider();
        this.initBackButton();
        this.initHeaderForm();
        this.initFooterForm();
        this.initDropdownMenu();
        this.initScroll();
        this.initPhone();
        this.initFancy();
        this.initBasket();
        this.initMask($('.js-basket-container'));
    },

    initBasket: function () {
        this.updateBasket();

        $(document).on('click', '.js-add-to-basket', function (e) {
            e.preventDefault();

            var $this = $(this),
                itemId = $this.data('id');

            if (itemId) {
                $.ajax({
                    url: '/local/ajax/add-to-basket.php',
                    data: {id: itemId},
                    dataType: 'json',
                    type: 'post',
                    success: function (data) {
                        if (data) {
                            if (data.success) {
                                $('.js-basket-quantity').text(data.quantity);
                                $('.js-basket-total').text(data.total_formatted);
                                $('.js-basket-alert-success strong').text(data.item.name);

                                clearTimeout(AutoZona.alertTimeout);
                                $('.alert').removeClass('in');
                                $('.js-basket-alert-success').addClass('in');
                                AutoZona.alertTimeout = setTimeout(function () {
                                    $('.alert').removeClass('in');
                                }, 5000);
                            } else {
                                alert(data.error);
                            }
                        }
                    }
                });
            }
        });

        $(document).on('click', '.js-basket-remove', function (e) {
            e.preventDefault();

            var $this = $(this),
                $row = $this.closest('tr'),
                itemId = $row.data('id');

            if (itemId) {
                $.ajax({
                    url: '/local/ajax/remove-basket.php',
                    data: {id: itemId},
                    dataType: 'json',
                    type: 'post',
                    success: function (data) {
                        if (data) {
                            if (data.success) {
                                $('.js-basket-quantity').text(data.quantity);
                                $('.js-basket-total').text(data.total_formatted);
                                $('.js-basket-alert-warning strong').text(data.item.name);

                                clearTimeout(AutoZona.alertTimeout);
                                $('.alert').removeClass('in');
                                $('.js-basket-alert-warning').addClass('in');
                                AutoZona.alertTimeout = setTimeout(function () {
                                    $('.alert').removeClass('in');
                                }, 5000);

                                AutoZona.updateMainBasket();
                            } else {
                                alert(data.error);
                            }
                        }
                    }
                });
            }
        });

        $(document).on('change', '.js-basket-quantity', function () {
            var $this = $(this),
                $row = $this.closest('tr'),
                itemId = $row.data('id'),
                quantity = $this.val();

            if (itemId) {
                $.ajax({
                    url: '/local/ajax/update-basket.php',
                    data: {id: itemId, quantity: quantity},
                    dataType: 'json',
                    type: 'post',
                    success: function (data) {
                        if (data) {
                            if (data.success) {
                                $('.js-basket-quantity').text(data.quantity);
                                $('.js-basket-total').text(data.total_formatted);

                                AutoZona.updateMainBasket();
                            } else {
                                alert(data.error);
                            }
                        }
                    }
                });
            }
        });
    },

    updateBasket: function () {
        $.ajax({
            url: '/local/ajax/basket.php',
            data: {},
            dataType: 'json',
            type: 'post',
            success: function (data) {
                if (data.quantity) {
                    $('.js-basket-quantity').text(data.quantity);
                    $('.js-basket-total').text(data.total_formatted);
                }
            }
        });
    },

    updateMainBasket: function () {
        var $basketContainer = $('.js-basket-container');

        $.ajax({
            url: '/local/ajax/main-basket.php',
            data: {},
            type: 'post',
            success: function (data) {
                if (data) {
                    $basketContainer.html(data);
                    AutoZona.initMask($basketContainer);
                } else {
                    location.reload();
                }
            }
        });
    },

    initFancy: function () {
        $('.js-fancybox').fancybox();
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
        var form = $('.js-header-form');

        form.validate({
            submitHandler: $.proxy(function() {
                this.submitHandler(form);
            }, this)
        });

        form.submit(function (e) {
            e.preventDefault();
        });
    },

    initFooterForm: function () {
        var form = $('.js-footer-form');

        form.validate({
            submitHandler: $.proxy(function() {
                this.submitHandler(form);
            }, this)
        });

        form.submit(function (e) {
            e.preventDefault();
        });
    },

    submitHandler: function (form) {
        var data = form.serialize();

        $.ajax({
            url: '/local/ajax/request.php',
            data: data,
            type: 'POST',
            dataType: 'json',
            success: function (data) {
                if (data && data.success) {
                    alert('Заявка успешно отправлена');
                    location.reload();
                } else {
                    alert(data.error);
                }
            }
        });
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
    },

    initPhone: function () {
        $('.js-phone').mask('+7 (999) 999 9999');
    },

    initMask: function ($selector) {
        $selector.find('[data-inputmask]').inputmask();
        $selector.find('[data-inputmask-regex]').inputmask();
    }
};

$(document).ready(function () {
    AutoZona.init();
});
