/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        data: {
            selectedSize: ''
        },

        methods: {
            isSelected: function (size) {
                return this.selectedSize === size;
            }
        }
    });
};