{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<header class="pp-header">
    <div class="pp-header__header">
        <div class="pp-header__phone">
            <a href="tel:+74952207324"><i class="fa fa-phone" data-js="phone-icon"></i></a>
        </div>
        <button class="pp-header__button pp-button pp-button_bordered" onclick="callMe()">Заказать звонок</button>
        <div class="pp-header__burger pp-burger" onclick="toggleMenu(this, 'pp-burger_open', '.pp-menu')" data-js="burger">
            <span class="pp-burger__one"></span>
            <span class="pp-burger__two"></span>
            <span class="pp-burger__three"></span>
        </div>
    </div>

    <div class="pp-header__menu" id="menu">
        <ul class="pp-menu" data-js="menu">
            <li class="pp-menu__item">
                <a href="#intro" class="pp-menu__link">Просто подари</a>
            </li>
            <li class="pp-menu__item">
                <a href="#reasons" class="pp-menu__link">Почему просто</a>
            </li>
            <li class="pp-menu__item">
                <a href="#select" class="pp-menu__link">Просто выбрать</a>
            </li>
            <li class="pp-menu__item">
                <a href="#basket" class="pp-menu__link">Корзина</a>
            </li>
        </ul>
    </div>

    <div class="pp-header__callme" id="callme">
       <div class="pp-callme" data-js="callme-form">
           <form action="/call-me" class="pp-form" method="post">
               <label for="name" class="pp-form__label"><a href="tel:+74952207324">+7 (495) 220 7324</a></label>
               <label for="name" class="pp-form__label">Имя</label>
               <input type="text" id="name" name="name" class="pp-form__input"/>

               <label for="phone" class="pp-form__label">Телефон</label>
               <input type="text" id="phone" name="phone" class="pp-form__input" placeholder="+7 ___ ___ ____"/>

               <button class="pp-button">Отправить</button>
           </form>
       </div>
    </div>

</header>