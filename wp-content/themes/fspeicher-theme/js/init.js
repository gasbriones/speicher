TNM = {};

TNM.placeholder = function () {
    var test = document.createElement('input');
    return ('placeholder' in test);
}

$(document).ready(function () {

    if ($.cookie('tns01')) {
        $('#user-item .small-avatar').removeAttr('data-original').attr('src', $.parseJSON($.cookie('tns01')).image);
    }

    $('.social li:first').on("touchstart' click", function (e) {
        $(this).find('.hide-menu').toggle();
    });

    if (!TNM.placeholder()) {
        $('[placeholder]').focus(function () {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function () {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();

        $('[placeholder]').parents('form').submit(function () {
            $(this).find('[placeholder]').each(function () {
                var input = $(this);
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });
        });
    }
});

