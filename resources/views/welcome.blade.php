<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">
{{--    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/animate.css') }}">--}}

{{--    <!-- Slider -->--}}
{{--    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>--}}
{{--    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>--}}


</head>
<body>
<div class="wrap">
    <a class="logo" href="/main">Vidit</a>
    <div class="list">
        <a class="item" href="/map">Автосервисы</a>
        <a class="item" href="/shop">Магазин автозапчастей</a>
        <a class="item" href="{{route('app.index')}}">Заявки на ремонт</a>
        <a class="item" href="/help">Помощь на дорогах</a>
    </div>
    <div class="registr">
        <a class="item" href="#">Курск</a>
    </div>
</div>
<main>
    @yield('content')
</main>
<script>

</script>
</body>
</html>
