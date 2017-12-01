{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
<div class="pp-reason @if(!empty($right_icon)) pp-reson__right-icon @endif">
    @if (empty($right_icon))
        <div class="pp-reason__icon">
            <img src="/images/reason_{{$icon}}" alt="">
        </div>
    @endif
    <div class="pp-reason__body">
        <div class="pp-reason__title">{{ $title }}</div>
        <div class="pp-reason__text">{!! $text !!}</div>
    </div>
    @if (!empty($right_icon))
        <div class="pp-reason__icon">
            <img src="/images/reason_{{$icon}}" alt="">
        </div>
    @endif
</div>