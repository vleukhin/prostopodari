<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Просто подари</title>
    <link rel="stylesheet" type="text/css" href="/js/slick/slick.css"/>
    <link rel="stylesheet" href="/build/app.bundle.css">
    <meta property="og:title" content="Просто подари"/>
    <meta property="og:image" content="https://prostopodari.ru/images/present_clear.png"/>
    <meta property="og:description" content="Интернет магазин готового подарка">
    <meta name="description" content="Интернет магазин готового подарка">
    <meta name="format-detection" content="telephone=no">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <script>
        if (window.DEVICE_TYPE = "", self.screen) scrwidth = screen.width, scrheight = screen.height; else if (self.java) {
            var jkit = java.awt.Toolkit.getDefaultToolkit(), scrsize = jkit.getScreenSize();
            scrwidth = scrsize.width, scrheight = scrsize.height
        }
        scrwidth > 0 && scrwidth < 669 ? window.DEVICE_TYPE = "phone" : scrwidth > 668 && scrwidth < 1025 ? window.DEVICE_TYPE = "tablet" : scrwidth > 1025 && (window.DEVICE_TYPE = "desktop");
    </script>
</head>
<body>
@include('layout.counters')
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
            $('[name=phone]').mask("+7 999 999 9999", {placeholder: "+7 ___ ___ ____"});
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