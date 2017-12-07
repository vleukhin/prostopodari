{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-basket" id="basket">
    <div class="pp-caption">
        <img src="/images/caption_3.png" alt="Просто выбрать" class="pp-caption__text">
    </div>
    <div class="pp-screen-basket__items">
        <div class="pp-screen-basket__item" v-for="(count,size) in counts">
            <div class="pp-screen-basket__present">
                <img :src="getImage(size)" alt="">
            </div>
            <div class="pp-screen-basket__size">
                @{{ size }}
            </div>
            <div class="pp-counter pp-screen-basket__counter">
                <div class="pp-counter__minus" v-on:click="dec(size)"><i class="fa fa-minus"></i></div>
                <div class="pp-counter__count">@{{ count }}</div>
                <div class="pp-counter__plus" v-on:click="inc(size)"><i class="fa fa-plus"></i></div>
            </div>
        </div>
    </div>

    <div class="pp-screen-basket__sum">
        @{{ sum }} руб. к оплате
    </div>
    <button class="pp-button pp-screen-basket__button" v-on:click="showForm()">оформить заказ</button>
    <div class="pp-screen-basket__shipping">
        *при заказе от 3000 руб. Доставка осуществляется бесплатно
    </div>
</div>