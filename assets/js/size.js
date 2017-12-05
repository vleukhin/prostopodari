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
            price: 2500,
        },

        methods: {
            isSelected: function (size) {
                return this.size === size;
            },

            selectSize: function (size, diameter, height) {
                this.size = size;
                this.diameter = diameter;
                this.height = height;

                setTimeout(function () {
                    var slider = $('.pp-carousel');
                    if (!slider.hasClass('slick-initialized')){
                        slider.slick({
                            // centerMode: true,
                            centerPadding: '100px',
                            slidesToShow: DEVICE_TYPE != 'phone' ? 3 : 1,
                            prevArrow: DEVICE_TYPE != 'phone' ? '<div class="pp-carousel__arrow pp-carousel__arrow_prev"><</div>' : '',
                            nextArrow: DEVICE_TYPE != 'phone' ? '<div class="pp-carousel__arrow pp-carousel__arrow_next">></div>' : '',
                        });
                    }
                }, 500)

            }
        }
    });
};