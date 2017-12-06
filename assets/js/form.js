/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        data: {
            payment: 'cash',
        },

        computed: {
            sum: function () {
                return Basket.sum
            }
        },

        methods: {
            isSelected: function (payment) {
                return this.payment === payment;
            },

            submit: function () {
                console.log(this.sum);
                if (this.sum > 0) {
                    if (this.payment === 'online') {
                        $('#ya-form').submit();
                        return true;
                    }

                    $('.pp-screen-form .pp-form').submit();
                }
            }
        }
    });
};