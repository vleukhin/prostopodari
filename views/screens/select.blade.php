{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-screen-select" id="sizes" v-cloak>
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
</div>