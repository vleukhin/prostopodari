{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-reasons">
    @include('blocks.reason', [
        'icon' => 'phone.png',
        'title' => 'легко заказать',
        'text' => 'выберите нужный формат <br/> и оставьте заявку'
    ])
    @include('blocks.reason', [
        'icon' => 'card.png',
        'title' => 'удобная форма расчета',
        'text' => 'безналичный расчет или <br/> наличными курьеру при получении',
        'right_icon' => true,
    ])
    @include('blocks.reason', [
        'icon' => 'present.png',
        'title' => 'понравится всем',
        'text' => 'подарочный набор с новогодним <br/> настроением в оригинальной упаковке'
    ])
</div>