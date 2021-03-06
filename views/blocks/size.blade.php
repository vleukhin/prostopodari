{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-size">
    <div class="pp-size__name">{{ $name }}</div>
    <div class="pp-size__diameter"><img src="/images/icon_diameter.png" alt=""> {{ $diameter }} см;</div>
    <div class="pp-size__height"><img src="/images/icon_height.png" alt=""> {{ $height }} см</div>
    <div class="pp-size__checkbox pp-checkbox" v-on:click="selectSize('{{$name}}', {{ $diameter }}, {{ $height }})" v-bind:class="{'pp-checkbox_active':isSelected('{{ $name }}')}">
        <div class="pp-checkbox__inner"></div>
    </div>
</div>