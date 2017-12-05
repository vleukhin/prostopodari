<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Просто подари</title>
    <link rel="stylesheet" type="text/css" href="/js/slick/slick.css"/>
    <link rel="stylesheet" href="/build/app.bundle.css">
    <meta property="og:title" content="Просто подари" />
    <meta property="og:image" content="https://prostopodari.ru/images/present_clear.png" />
    <meta property="og:description" content="Интернет магазин готового подарка">
    <meta name="description" content="Интернет магазин готового подарка">
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
            $('#phone').mask("+7 999 999 9999", {placeholder: "+7 ___ ___ ____"});
        });

        var headerHeight = $('.pp-header').height();

        $(document).on('click', '#menu a', function (event) {
            $('.pp-header__burger').click();
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $($.attr(this, 'href')).offset().top - headerHeight,
            }, 500);
        });
    })(window.jQuery);
</script>
</body>
</html>