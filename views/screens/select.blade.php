{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-select" id="select" v-cloak>
    <div class="pp-caption">
        <img src="/images/caption_2.png" alt="Просто выбрать" class="pp-caption__text">
    </div>

    <div class="pp-screen-select__title">Размер</div>
    <div class="pp-screen-select__sizes">
        @include('blocks.size', [
            'name' => 'small',
            'diameter' => 16,
            'height' => 16,
        ])
        @include('blocks.size', [
            'name' => 'medium',
            'diameter' => 20,
            'height' => 20,
        ])
        @include('blocks.size', [
            'name' => 'large',
            'diameter' => 25,
            'height' => 22,
        ])
    </div>
    <div class="pp-screen-select__info" v-show="diameter != 0">
        <div class="pp-screen-select__present">
            <img src="/images/sizes_present.png" alt="Просто подари">
        </div>
        <div class="pp-screen-select__text">
            Оригинальная упаковка <br>
            <span v-if="diameter != 0">
            <img src="/images/icon_diameter_green.png" alt=""> @{{ diameter }} см;
            <img src="/images/icon_height_green.png" alt=""> @{{ height }} см
        </span>
        </div>
        <div class="pp-screen-select__separator"></div>
        <div class="pp-carousel">
            <div class="pp-carousel__item">
                <div class="pp-carousel__image">
                    <img src="/images/content/1.png" alt="">
                </div>
                <div class="pp-carousel__title">Пряник</div>
            </div>
            <div class="pp-carousel__item">
                <div class="pp-carousel__image">
                    <img src="/images/content/1.png" alt="">
                </div>
                <div class="pp-carousel__title">Драник</div>
            </div>
            <div class="pp-carousel__item">
                <div class="pp-carousel__image">
                    <img src="/images/content/1.png" alt="">
                </div>
                <div class="pp-carousel__title">Веник</div>
            </div>
            <div class="pp-carousel__item">
                <div class="pp-carousel__image">
                    <img src="/images/content/1.png" alt="">
                </div>
                <div class="pp-carousel__title">Хуяник</div>
            </div>
        </div>
    </div>
    <div class="pp-screen-select__basket" v-show="diameter != 0">
        <div class="pp-screen-select__price">Цена</div>
        <div class="pp-screen-select__price-value">@{{ price }} руб.</div>
        <button class="pp-button pp-button_green">Добавить в корзину</button>
        <button class="pp-button pp-button_green pp-button_bordered">Выбрать другой</button>
    </div>
</div>