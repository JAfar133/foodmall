<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Фудмолл | Восток Кавказ Европа Паназия Италия Япония</title>
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="description" content="Ресторан / Кафе. Фулмолл. ТЦ Люблино, Совхозная 39, 3-й этаж.
    (Средний чек 800 ₽, Азиатская кухня, Американская кухня, Восточная кухня, Вьетнамская кухня,
    Грузинская кухня, Европейская кухня, Итальянская кухня, Кавказская кухня, Паназиатская кухня,
    Узбекская кухня, Японская кухня, Заказ навынос, Спортивные трансляции, Детский уголок,
    Панорамный вид, Проведение банкетов, До 100 мест), Меню кафе / ресторанов (Бургеры, Кофе с собой,
    Куриные крылышки, Лагман, Лапша wok, Манты, Паста, Пицца, Плов, Суши, Том-Ям, Фо-бо, Хачапури, Шашлык),
    Услуги (Доставка), Доступная среда (Пандус)">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@latest/js/moovie.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/BMSVieira/moovie.js@latest/css/moovie.min.css">
    @vite(['resources/js/app.js'])
</head>
<body class="antialiased">
@include('blocks.header')
@include('blocks.about')
<section class="menu__section">
    <a href="/menu" class="text-center header_button btn btn-outline-warning">Посмотреть меню</a>
</section>
@include('blocks.carousel')
@include('blocks.contacts')
@include('blocks.footer')
</body>
</html>
