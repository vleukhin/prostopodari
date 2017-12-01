{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-select">
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

</div>