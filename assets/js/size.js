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

        computed: {
            price: function () {
                var prices = {
                    small: 1500,
                    medium: 2500,
                    large: 3500,
                };

                return prices[this.size];
            },

            image: function () {
                return '/images/present_' + this.size + '.png';
            }
        },

        methods: {
            isSelected: function (size) {
                return this.size === size;
            },

            reset: function () {
                this.size = '';
                this.diameter = 0;
                this.height = 0;
                this.scrollTo($('#select'));
            },

            selectSize: function (size, diameter, height) {
                this.size = size;
                this.diameter = diameter;
                this.height = height;

                $('#form').hide();
                $('#basket').hide();

                setTimeout(function () {
                    var slider = $('#carousel-' + this.size);

                    if (!slider.hasClass('slick-initialized')) {
                        slider.slick({
                            // centerMode: true,
                            centerPadding: '100px',
                            slidesToShow: DEVICE_TYPE === 'desktop' ? 3 : 1,
                            prevArrow: '<div class="pp-carousel__arrow pp-carousel__arrow_prev"><</div>',
                            nextArrow: '<div class="pp-carousel__arrow pp-carousel__arrow_next">></div>',
                        });
                    }
                    this.scrollTo($('.pp-screen-select__present'));

                }.bind(this), 200)

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