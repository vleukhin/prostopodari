/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element, toggleClass, menu) {
    var phone = $('[data-js=phone-icon]');

    if (phone.hasClass('active')){
        phone.removeClass('active');
        $('[data-js=callme-form]').hide();
    }

    var $element = $(element);
    var $menu = $(menu);

    if ($element.hasClass(toggleClass)) {
        $menu.slideUp();
    }
    else {
        $menu.slideDown();
    }

    $element.toggleClass(toggleClass);
    $menu.toggleClass('active')
};