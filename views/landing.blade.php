{{--Created by Viktor Leukhin--}}
{{--Tel: +7-926-797-5419--}}
{{--E-mail: vleukhin@ya.ru--}}
@extends('app')

@section('content')
    @include('screens.intro')

    <div class="pp-caption pp-caption_green">
        <img src="/images/caption_1.png" alt="Просто несколько причина подарить" class="pp-caption__text">
    </div>

    @include('screens.reasons')

    <div class="pp-caption">
        <img src="/images/caption_2.png" alt="Просто выбрать" class="pp-caption__text">
    </div>

    @include('screens.select')
    @include('screens.basket')
    @include('screens.form')
    @include('screens.partners')

@endsection
