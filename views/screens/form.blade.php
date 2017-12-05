{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-form" id="form">
    <form class="pp-form">
        <label for="name" class="pp-form__label">Имя</label>
        <input type="text" id="name" name="name" class="pp-form__input"/>

        <label for="phone" class="pp-form__label">Телефон</label>
        <input type="text" id="phone" name="phone" class="pp-form__input" placeholder="+7 ___ ___ ____"/>

        <label for="email" class="pp-form__label">Email</label>
        <input type="text" id="email" name="email" class="pp-form__input"/>

        <label for="adress" class="pp-form__label">Адрес доставки</label>
        <textarea id="adress" name="adress" class="pp-form__input"></textarea>

        <label class="pp-form__label">Способ оплаты</label>
        <div class="pp-form__checkbox">
            <div class="pp-checkbox pp-checkbox_white"></div>
            <span>Наличными курьеру</span>
        </div>
        <div class="pp-form__checkbox">
            <div class="pp-checkbox pp-checkbox_white"></div>
            <span>На карту Сбербанка</span>
        </div>
        <div class="pp-form__checkbox">
            <div class="pp-checkbox pp-checkbox_white"></div>
            <span>Яндекс Деньги</span>
        </div>
    </form>
</div>