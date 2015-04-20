$(document).ready(function () {

    $('.menu .item').hover(function () {
        $(this).find('.item-bg').stop().animate({height: '30px'}, 250).find('.bg').stop().animate({opacity: 0}, 250, function () {
            $(this).parent().find('span').show();
        });
    }, function () {
        if ($(this).attr('class') != 'item active') {
            $(this).find('.item-bg').stop().animate({height: '100%'}, 250).find('.bg').stop().animate({opacity: 1}, 250, function () {
                $(this).parent().find('span').hide();
            });
        }
    });

    switch ($('body').attr('class')){
        case 'home':
            $('.slider').bxSlider({
                pager: false
            });
        break;
        case 'obras':
            $('.slider').bxSlider({
                pagerCustom: $('.thumb'),
                slideWidth:583,
                captions: true
            });
        break;
    }


});

