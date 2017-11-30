<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просто подари</title>
    <script src="/build/app.bundle.js"></script>
    <link rel="stylesheet" href="/build/app.bundle.css">
</head>
<body>
<div class="page">
    @include('layout.header')

    <div class="content">
        @yield('content')
    </div>
</div>
</body>
</html>