$(document).ready(function (){
    /* Слайдер о нас на главной */
    $('.about-us-slider').slick({
        dots: true,
        infinite: false,
        arrows: true,
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    arrows: false
                }
            }
        ]
    })
    // Слайдер с акциями
    $('.stocks-banner-slider').slick({
        arrows: false,
        dots: true
    })
    /* Табы */
    $('.dropdown-block.active').find('.dropdown-body').show()
    $('.dropdown-header').on('click', function(e){
        e.preventDefault()
        $(this).parent().toggleClass('active')
        $(this).parent().find('.dropdown-body').slideToggle(500)
    })
    /* Мобильное меню */
    $('.mobile-btn').on('click', function(){
        $(this).toggleClass('active');
        $('.top-nav').toggleClass('active');
    })
    function fixedSiteName(){
        var width = $(window).width();
        var siteNameHeight = $('.top-header-siteName').outerHeight();
        if(width <= 992) {
            $('.top-header-siteName').addClass('fix');
            $('.top-header').css('padding-top', siteNameHeight);
            $('.top-nav').css('padding-top', siteNameHeight);
            $('.menu-item-has-children a').on('click', function(){
                if($(this).parent().find('.sub-menu').length != 0) {
                    $(this).parent().find('.sub-menu:eq(0)').toggleClass('active-sub');
                    return false;
                }
            })
        } else {
            $('.top-header-siteName').removeClass('fix');
            $('.top-header').css('padding-top', 0);
            $('.top-nav').css('padding-top', siteNameHeight);
            $('.top-nav').removeClass('active')
            $('.mobile-btn').removeClass('active')
            $('.sub-menu').removeClass('active-sub')
        }
    }
    fixedSiteName()
    $(window).resize(function(){
        fixedSiteName();
    })
    /* Значок акции */
    $('.dropdown-row').each(function (){
        $(this).find('li').each(function(){
            text = $(this).html();
            text = text.split('<strong>');
            $(this).html('<span>'+text[0]+'</span>'+'<strong>'+text[1]);
            if($(this).find('em').length != 0) {
                $(this).addClass('stocks');
            }
        })
    })

    /* Popup */
    $('.popup-link').each(function(){
        $(this).magnificPopup({
            type:'inline',
            callbacks: {
                close: function() {
                    $('.popup-window input[name=stocks]').val('');
                }
            }
        });
    })
    $('.popup-link').on('click', function(){
        var title = $(this).data('stocks');
        $('.popup-window input[name=stocks]').val(title);
    })

    // Заполнение названия акции
    $('.stocks-form').each(function(){
        var title = $(this).find('.form-block-text h2').text();
        $(this).find('input[name=stocks]').val(title);
    })
})