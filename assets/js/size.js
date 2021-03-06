/**
 * Created by Viktor Leukhin.
 * Tel: +7-926-797-5419
 * E-mail: vleukhin@ya.ru
 */
module.exports = function (element) {
    return new Vue({
        el: element,

        created: function () {
            this.initCarousel();
            this.initCarousel();
        },

        data: {
            size: 'small',
            diameter: 16,
            height: 16,
        },

        computed: {
            price: function () {
                var prices = {
                    small: 1300,
                    medium: 1900,
                    large: 2900,
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
                this.scrollTo($('#select'));
            },

            inc: function () {
                Basket.inc(this.size);
                setTimeout(function () {
                    this.scrollTo($('#basket'));
                }.bind(this), 50)
            },

            selectSize: function (size, diameter, height) {
                this.size = size;
                this.diameter = diameter;
                this.height = height;

                $('#form').hide();

                this.initCarousel();
            },

            initCarousel: function () {
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

                }.bind(this), 400)
            },

            scrollTo: function (element) {
                var headerHeight = $('.pp-header').height();

                $('html, body').animate({
                    scrollTop: element.offset().top - headerHeight,
                }, 500);
            },

            getOldPrice: function () {
                var price = this.price;

                if (this.size == 'small') {
                    price += 700;
                }
                else {
                    price += 600;
                }

                return price;
            }
        }
    });
};