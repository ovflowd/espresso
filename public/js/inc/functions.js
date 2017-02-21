'use strict';

/*------------------------------
    Detact Mobile Browser
-------------------------------*/
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
   $('html').addClass('ismobile');
}

$(document).ready(function(){

    /*------------------------------
        Malihu Scrollbar
    -------------------------------*/
    function scrollBar(selector, theme, mousewheelaxis) {
        $(selector).mCustomScrollbar({
            theme: theme,
            scrollInertia: 100,
            axis:'yx',
            mouseWheel: {
                enable: true,
                axis: mousewheelaxis,
                preventDefault: true
            }
        });
    }

    if (!$('html').hasClass('ismobile')) {
        //On Custom Class
        if ($('.c-overflow')[0]) {
            scrollBar('.c-overflow', 'minimal-dark', 'y');
        }
    }


    /*------------------------------
        Sub menu toggle
    -------------------------------*/
    if($('.navigation__sub')[0]) {
        $('body').on('click', '.navigation__sub > a', function (e) {
            e.preventDefault();
            $(this).closest('.navigation__sub').toggleClass('navigation__sub--toggled');
            $(this).parent().find('ul').stop().slideToggle(250);
        });
    }


    /*------------------------------
        Top search
    -------------------------------*/
    if($('.top-search')[0]) {
        // Bring search reset icon when focused
        $('body').on('focus', '.top-search__input', function(){
            $('.top-search').addClass('top-search--focused');
        });

        // Add focus state
        $('body').on('click', '.top-menu__trigger > a', function (e) {
            e.preventDefault();

            $('.top-search').addClass('top-search--focused');
            $('.top-search__input').focus();
        });

        // Remove focus state
        $('body').on('click', '.top-search__reset', function () {
            $('.top-search').removeClass('top-search--focused ');
            $('.top-search__input').val('');
        });

        // Take off reset icon if input length is 0, when blurred
        $('body').on('blur', '.top-search__input', function(){
            var x = $(this).val();

            if (!x.length > 0) {
                $('.top-search').removeClass('top-search--focused');
            }
        });
    }


    /*------------------------------
        Notifications
    -------------------------------*/
    $('body').on('click', '[data-mae-target="#notifications"]', function(e) {
        e.preventDefault();

        var navigationItem = $(this).data('target');
        $('a[href='+navigationItem+']').tab('show');
    });


    /*------------------------------
        Weather card
    -------------------------------*/
    if ($('#widget-weather__main')[0]) {
        var i;

        $.simpleWeather({
            location: 'Austin, TX',
            woeid: '',
            unit: 'f',
            success: function(weather) {
                var html = '<div class="widget-weather__current clearfix">' +
                                '<div class="widget-weather__icon widget-weather__icon-'+weather.code+'"></div>' +
                                '<div class="widget-weather__info">' +
                                    '<h2>'+weather.temp+'&deg;'+weather.units.temp+'</h2>' +
                                    '<div class="widget-weather__region">' +
                                        '<span>'+weather.city+', '+weather.region+'</span>' +
                                        '<span>'+weather.currently+'</span>' +
                                    '</div>' +
                                '</div>' +
                            '</div>' +
                            '<ul class="widget-weather__upcoming clearfix"></ul>';

                $("#widget-weather__main").html(html);

                setTimeout(function() {


                    for(i = 0; i < 5; i++) {
                        var l = '<li class="media">' +
                                    '<span class="pull-left widget-weather__icon widget-weather__icon-sm widget-weather__icon-'+weather.forecast[i].code+'"></span>' +
                                    '<span class="pull-right">'+weather.forecast[i].high+'/'+weather.forecast[i].low+'</span>' +
                                    '<span class="media-body">'+weather.forecast[i].text+'</span>' +
                                '</li>';

                        $('.widget-weather__upcoming').append(l);
                    }
                });
            },
            error: function(error) {
                $("#widget-weather__main").html('<p>'+error+'</p>');
            }
        });
    }


    /*------------------------------
        Form group bar
    -------------------------------*/
    if($('.form-group--float')[0]) {
        $('.form-group--float').each(function () {
            var p = $(this).find('.form-control').val()

            if(!p.length == 0) {
                $(this).addClass('form-group--active');
            }
        });

        $('body').on('blur', '.form-group--float .form-control', function(){
            var i = $(this).val();
            var p = $(this).parent();

            if (i.length == 0) {
                p.removeClass('form-group--active');
            }
            else {
                p.addClass('form-group--active');
            }
        });
    }


    /*------------------------------
        Bootstrap collapse fix
    -------------------------------*/
    if ($('.collapse')[0]) {

        //Add active class for opened items
        $('.collapse').on('show.bs.collapse', function (e) {
            $(this).closest('.panel').find('.panel-heading').addClass('active');
        });

        $('.collapse').on('hide.bs.collapse', function (e) {
            $(this).closest('.panel').find('.panel-heading').removeClass('active');
        });

        //Add active class for pre opened items
        $('.collapse.in').each(function(){
            $(this).closest('.panel').find('.panel-heading').addClass('active');
        });
    }


    /*------------------------------
        Login
    ------------------------------*/
    if ($('.login')[0]) {
        $('body').on('click', '.login__block [data-block]', function(e){
            e.preventDefault();

            var z = $(this).data('block');
            var t = $(this).closest('.login__block');
            var c = $(this).data('bg');

            t.removeClass('toggled');

            setTimeout(function(){
                $('.login').attr('data-lbg', c);
                $(z).addClass('toggled');
            });

        })
    }


    /*------------------------------
        Action Header Search
    ------------------------------*/
    if($('.action-header__search')[0]) {
        var actionHeaderSearch;

        // Open
        $('body').on('click', '.action-header__toggle', function (e) {
            e.preventDefault()

            actionHeaderSearch = $(this).closest('.action-header').find('.action-header__search');
            actionHeaderSearch.fadeIn(300);
            actionHeaderSearch.find('.action-header__input').focus();
        });

        // Close
        $('body').on('click', '.action-header__close', function () {
            actionHeaderSearch.fadeOut(300);
            setTimeout(function(){
                actionHeaderSearch.find('.action-header__input').val('');
            }, 350);
        });
    }


    /*------------------------------
        Input mask
    -------------------------------*/
    if ($('input-mask')[0]) {
        $('.input-mask').mask();
    }


    /*------------------------------
        Color picker
    -------------------------------*/
    if ($('.color-picker')[0]) {
	     $('.color-picker').each(function(){
            var colorOutput = $(this).find('.color-picker__value');
            var colorPickerTarget = $(this).find('.color-picker__target');

            colorPickerTarget.farbtastic(colorOutput);
        });
    }


    /*---------------------------------
        Bootstrap date time picker
    ----------------------------------*/
    //Date Time Picker
    if ($('.date-time-picker')[0]) {
	     $('.date-time-picker').datetimepicker({
           icons: {
               time: 'zmdi zmdi-time',
               date: 'zmdi zmdi-calendar',
               up: 'zmdi zmdi-chevron-up',
               down: 'zmdi zmdi-chevron-down',
               previous: 'zmdi zmdi-chevron-left',
               next: 'zmdi zmdi-chevron-right',
               today: 'zmdi zmdi-screenshot',
               clear: 'zmdi zmdi-trash',
               close: 'zmdi zmdi-times'
           }
       });
    }

    //Time
    if ($('.time-picker')[0]) {
    	$('.time-picker').datetimepicker({
    	    format: 'LT',
            icons: {
                time: 'zmdi zmdi-time',
                date: 'zmdi zmdi-calendar',
                up: 'zmdi zmdi-chevron-up',
                down: 'zmdi zmdi-chevron-down',
                previous: 'zmdi zmdi-chevron-left',
                next: 'zmdi zmdi-chevron-right',
                today: 'zmdi zmdi-screenshot',
                clear: 'zmdi zmdi-trash',
                close: 'zmdi zmdi-times'
            }
    	});
    }

    //Date
    if ($('.date-picker')[0]) {
    	$('.date-picker').datetimepicker({
    	    format: 'DD/MM/YYYY',
            icons: {
                time: 'zmdi zmdi-time',
                date: 'zmdi zmdi-calendar',
                up: 'zmdi zmdi-chevron-up',
                down: 'zmdi zmdi-chevron-down',
                previous: 'zmdi zmdi-chevron-left',
                next: 'zmdi zmdi-chevron-right',
                today: 'zmdi zmdi-screenshot',
                clear: 'zmdi zmdi-trash',
                close: 'zmdi zmdi-times'
            }
    	});
    }

    //Inline
    if($('.datetime-picker-inline')[0]) {
        $('.datetime-picker-inline').datetimepicker({
            inline: true,
            sideBySide: true,
            icons: {
                time: 'zmdi zmdi-time',
                date: 'zmdi zmdi-calendar',
                up: 'zmdi zmdi-chevron-up',
                down: 'zmdi zmdi-chevron-down',
                previous: 'zmdi zmdi-chevron-left',
                next: 'zmdi zmdi-chevron-right',
                today: 'zmdi zmdi-screenshot',
                clear: 'zmdi zmdi-trash',
                close: 'zmdi zmdi-times'
            }
        });
    }


    /*------------------------------
        Form wizard
    -------------------------------*/
    if ($('.tab-wizard')[0]) {
    	$('.tab-wizard').bootstrapWizard({
    	    tabClass: 'tab-wizard__nav',
            nextSelector: '.tab-wizard__next',
            previousSelector: '.tab-wizard__previous',
            firstSelector: '.tab-wizard__first',
            lastSelector: '.tab-wizard__last'
    	});
    }


    /*------------------------------
        Lightbox
    -------------------------------*/
    if ($('.lightbox')[0]) {
        $('.lightbox').lightGallery({
            enableTouch: true
        });
    }


    /*------------------------------
        Tooltips
    -------------------------------*/
    if ($('[data-toggle="tooltip"]')[0]) {
        $('[data-toggle="tooltip"]').tooltip();
    }


    /*------------------------------
        Popover
    -------------------------------*/
    if ($('[data-toggle="popover"]')[0]) {
        $('[data-toggle="popover"]').popover();
    }


    /*------------------------------
        IE 9 Placeholder
    -------------------------------*/
    if($('html').hasClass('ie9')) {
        $('input, textarea').placeholder({
            customClass: 'ie9-placeholder'
        });
    }


    /*------------------------------
       Select 2
    -------------------------------*/
    if($('select.select2')[0]) {
        $('select.select2').select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }


    /*------------------------------
        Auto height textarea
    -------------------------------*/
    if($('.textarea-autosize')[0]) {
        autosize($('.textarea-autosize'));
    }
});
