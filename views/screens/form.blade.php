{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-form" id="form">
    <form class="pp-form" method="POST" action="/order">
        <label for="name" class="pp-form__label">Имя</label>
        <input type="text" id="name" name="name" v-model="name" class="pp-form__input"/>

        <label for="phone" class="pp-form__label">Телефон</label>
        <input type="tel" id="phone" name="phone" class="pp-form__input" placeholder="+7 ___ ___ ____"/>

        <label for="email" class="pp-form__label">Email</label>
        <input type="text" id="email" name="email" v-model="email" class="pp-form__input"/>

        <label for="adress" class="pp-form__label">Адрес доставки</label>
        <textarea id="adress" name="adress" v-model="adress" class="pp-form__input"></textarea>

        <input name="payment" v-model="payment" type="hidden">

        <label class="pp-form__label">Способ оплаты</label>
        <div class="pp-form__checkbox">
            <div class="pp-checkbox pp-checkbox_white" v-on:click="payment = 'cash'" v-bind:class="{'pp-checkbox_active':isSelected('cash')}">
                <div class="pp-checkbox__inner"></div>
            </div>
            <span>Наличными курьеру</span>
        </div>

        <div class="pp-form__checkbox">
            <div class="pp-checkbox pp-checkbox_white" v-on:click="payment = 'online'" v-bind:class="{'pp-checkbox_active':isSelected('online')}">
                <div class="pp-checkbox__inner"></div>
            </div>
            <span>Банковской картой (Яндекс Деньги)</span>
        </div>

        <button type="button" v-on:click="submit()" class="pp-screen-form__button pp-button pp-button_bordered">Отправить</button>
    </form>

    <div class="pp-screen-form__yandex">
        <form id='ya-form' method="POST" target="_blank" action="https://money.yandex.ru/quickpay/confirm.xml">
            <input name="receiver" value="410015834130416" type="hidden">
            <input name="targets" value="Оплата заказа на сайте prostopodari.ru" type="hidden">
            <input name="successURL" value="http://prostopodari.ru?#success-ya" type="hidden">
            <input name="quickpay-form" value="shop" type="hidden">
            <input name="paymentType" value="AC" type="hidden">
            <input name="need-email" value="on" type="hidden">
            <input name="need-phone" value="true" type="hidden">
            <input name="sum" v-model="sum" maxlength="10" type="hidden">
        </form>
    </div>
</div>