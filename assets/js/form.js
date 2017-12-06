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
                return Basket.sum;
            }
        },

        methods: {
            isSelected: function (payment) {
                return this.payment === payment;
            },

            submit: function () {
                if (this.sum > 0) {
                    var form = $('.pp-screen-form .pp-form');

                    if (form.find('[name=phone]').val().length < 15) {
                        swal('Телефонный номер указан не верно');
                        form.find('[name=phone]').focus();
                        return false;
                    }

                    if (!this.validateEmail(form.find('[name=email]').val())) {
                        swal('Email указан не верно');
                        form.find('[name=email]').focus();
                        return false;
                    }

                    if (this.payment === 'online') {
                        $('#ya-form').submit();
                        return true;
                    }

                    form.submit();
                }
            },

            validateEmail: function (email) {
                var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(email);
            }
        }
    });
};