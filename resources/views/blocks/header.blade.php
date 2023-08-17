<header class="header">
    <nav class="desktop_navbar">
        <h1 class="header-logo">ФУДМОЛЛ</h1>
        <ul class="header-links">
            <li><a href="/">Главная</a></li>
            <li><a href="#about">О нас</a></li>
            <li><a href="#video-carousel">Видео</a></li>
            <li><a href="#contacts">Контакты</a></li>
            <li><a href="/menu">Меню</a></li>
        </ul>
    </nav>
    <video class="video-header" autoplay loop muted playsinline>
        <source src="{{ asset('storage/video/foodmall_video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="text-center header_content">
        {{--        <a href="/menu" class="text-center header_button btn btn-outline-warning">Посмотреть меню</a>--}}
        <h3 class="h3-marquee"><span>ВОСТОК · КАВКАЗ · ЕВРОПА · ПАНАЗИЯ · ИТАЛИЯ · ЯПОНИЯ</span></h3>
    </div>
</header>

