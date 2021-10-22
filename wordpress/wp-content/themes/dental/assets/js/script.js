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
        } else {
            $('.top-header-siteName').removeClass('fix');
            $('.top-header').css('padding-top', 0);
            $('.top-nav').css('padding-top', siteNameHeight);
            $('.top-nav').removeClass('active')
            $('.mobile-btn').removeClass('active')
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
                console.log($(this));
                $(this).addClass('stocks');
            }
        })
    })
})