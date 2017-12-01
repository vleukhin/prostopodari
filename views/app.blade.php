<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просто подари</title>
    <link rel="stylesheet" type="text/css" href="/js/slick/slick.css"/>
    <link rel="stylesheet" href="/build/app.bundle.css">
</head>
<body>
@include('layout.header')
<div class="page">
    <div class="content">
        @yield('content')
    </div>
</div>
<script src="/build/app.bundle.js"></script>
<script type="text/javascript" src="/js/slick/slick.min.js"></script>
<script>
    (function ($) {
        $(document).ready(function () {
            $('.pp-carousel').slick({
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                prevArrow: '<div class="pp-carousel__arrow pp-carousel__arrow_prev"><</div>',
                nextArrow: '<div class="pp-carousel__arrow pp-carousel__arrow_next">></div>',
            });
        });
    })(window.jQuery);
</script>
</body>
</html>