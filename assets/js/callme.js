/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function () {
    var menu = $('[data-js=menu]');
    if (menu.hasClass('active')) {
        menu.removeClass('active');
        menu.hide();
        $('[data-js=burger]').removeClass('pp-burger_open');
    }

    var phone = $('[data-js=phone-icon]');
    var form = $('[data-js=callme-form]');
    phone.toggleClass('active');

    if (!phone.hasClass('active')) {
        form.slideUp();
    }
    else {
        form.slideDown();
    }
};