/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element, toggleClass, menu) {
    var $element = $(element);
    var $menu = $(menu);

    if ($element.hasClass(toggleClass)) {
        $menu.slideUp();
    }
    else {
        $menu.slideDown();
    }

    $element.toggleClass(toggleClass);
};