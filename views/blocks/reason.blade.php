{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-reason @if(!empty($right_icon)) pp-reson__right-icon @endif">
    @if (empty($right_icon))
        <img class="pp-reason__icon" src="/images/reason_{{$icon}}" alt="">
    @endif
    <div class="pp-reason__body">
        <div class="pp-reason__title">{{ $title }}</div>
        <div class="pp-reason__text">{!! $text !!}</div>
    </div>
    @if (!empty($right_icon))
        <img class="pp-reason__icon" src="/images/reason_{{$icon}}" alt="">
    @endif
</div>