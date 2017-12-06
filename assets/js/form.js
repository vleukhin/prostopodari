/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        data: {
            payment: '',
        },

        computed: {
            sum: function () {
                return Basket.sum
            }
        },

        methods: {
            isSelected: function (payment) {
                return this.payment === payment;
            }
        }
    });
};