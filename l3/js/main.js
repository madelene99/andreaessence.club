$(document).ready(function () {

    $(".checkbox-wrapper input:checkbox").click(function () {
        if(!$(this).is(':checked')){
            $(this).closest('form').find('button').attr("disabled", "disabled").css("opacity", ".3");
        }
        else{
            $(this).closest('form').find('button').removeAttr("disabled", "disabled").css("opacity", "1");
        }
    });

    $('.floating a').on('click', function (event) {
        event.preventDefault();
        var top = $('#scroll_form').offset().top;
        $('body, html').animate({scrollTop: top}, 1500)
    });

    $('.slider').slick({
        centerMode: true,
        centerPadding: 0,
        slidesToShow: 1,
        dots: true,
        infinity: true,
        prevArrow: $('.prev-btn'),
        nextArrow: $('.next-btn')
    });
    $('.slider-review').slick({
        centerMode: true,
        centerPadding: 0,
        slidesToShow: 1,
        dots: true,
        infinity: true,
        prevArrow: $('.prev-btn-rev'),
        nextArrow: $('.next-btn-rev')
    });
});