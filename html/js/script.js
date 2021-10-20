$(document).ready(function (){
    /* Слайдер о нас на главной */
    $('.about-us-slider').slick({
        dots: true,
        infinite: false
    })
    /* Табы */
    $('.dropdown-block.active').find('.dropdown-body').show()
    $('.dropdown-header').on('click', function(e){
        e.preventDefault()
        $(this).parent().toggleClass('active')
        $(this).parent().find('.dropdown-body').slideToggle(500)
    })
})