{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-basket" id="basket">
    <div class="pp-caption">
        <img src="/images/caption_3.png" alt="Просто выбрать" class="pp-caption__text">
    </div>
    <div class="pp-screen-basket__present">
        <img src="/images/present_clear.png" alt="">
    </div>
    <div class="pp-screen-basket__size">
        small
    </div>
    <div class="pp-counter pp-screen-basket__counter">
        <div class="pp-counter__plus"><i class="fa fa-plus"></i></div>
        <div class="pp-counter__count">@{{ count }}</div>
        <div class="pp-counter__minus"><i class="fa fa-minus"></i></div>
    </div>
    <div class="pp-screen-basket__sum">
        @{{ sum }} руб. к оплате
    </div>
    <button class="pp-button pp-screen-basket__button">оформить заказ</button>
</div>