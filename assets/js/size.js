/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        data: {
            size: '',
            diameter: 0,
            height: 0,
        },

        methods: {
            isSelected: function (size) {
                return this.size === size;
            },

            selectSize: function (size, diameter, height) {
                this.size = size;
                this.diameter = diameter;
                this.height = height;
            }
        }
    });
};