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
            email: '',
            name: '',
            adress: ''
        },

        computed: {
            sum: function () {
                return Basket.sum ? Basket.sum : 3500;
            }
        },

        methods: {
            save: function (phone) {
                window.localStorage.setItem('lead', JSON.stringify({
                    payment: this.payment,
                    email: this.email,
                    phone: phone,
                    name: this.name,
                    adress: this.adress,
                    small: window.Basket.counts.small,
                    medium: window.Basket.counts.medium,
                    large: window.Basket.counts.large,
                }));
            },

            isSelected: function (payment) {
                return this.payment === payment;
            },

            submit: function () {
                if (this.sum > 0) {
                    var form = $('.pp-screen-form .pp-form');
                    var phone = form.find('[name=phone]').val();

                    if (phone.length < 15) {
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
                        this.save(phone);
                        $('#ya-form').submit();
                        return true;
                    }

                    form.append($('<input/>', {
                        type: 'hidden',
                        name: 'small',
                        value: Basket.counts.small,
                    }));

                    form.append($('<input/>', {
                        type: 'hidden',
                        name: 'medium',
                        value: Basket.counts.medium,
                    }));

                    form.append($('<input/>', {
                        type: 'hidden',
                        name: 'large',
                        value: Basket.counts.large,
                    }));

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