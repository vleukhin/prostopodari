/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        data: {
            counts: {
                small: 0,
                medium: 0,
                large: 0,
            },
        },

        computed: {
            sum: function () {
                return this.counts.small * 1500
                    + this.counts.medium * 2500
                    + this.counts.large * 3500;
            }
        },

        methods: {
            inc: function (size) {
                this.counts[size]++;
            },
            dec: function (size) {
                this.counts[size]--;
                if (this.counts[size] < 0) {
                    this.counts[size] = 0
                }
            },
            getImage: function (size) {
                return '/images/present_' + size + '.png';
            },
            showForm() {
                $('#form').slideDown();

                setTimeout(function () {
                    this.scrollTo($('#form'));
                }.bind(this),  50)
            },

            scrollTo: function (element) {
                var headerHeight = $('.pp-header').height();

                $('html, body').animate({
                    scrollTop: element.offset().top - headerHeight,
                }, 500);
            }
        }
    });
};