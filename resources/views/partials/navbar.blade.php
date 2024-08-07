<nav class="navbar navbar-expand-xl navbar-dark fixed-top not-scrolled">
    <a class="navbar-brand p-0" href="{{ route('aboutUs') }}">
        <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo" class="logo img-fluid">
    </a>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="my-1 mx-2 close" style="color: #FFF">X</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center mx-auto">
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'aboutUs') active-nav-link @endif"
                   href="{{ route('aboutUs') }}">МИ ПРОПОНУЄМО</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"
                   href="{{ route('aboutUs') }}#aboutUs">ПРО НАС</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'laserTag') active-nav-link @endif"
                   href="{{ route('laserTag') }}">ЛАЗЕРТАГ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'quest') active-nav-link @endif"
                   href="{{ route('quest') }}">КВЕСТ "РАКЕТНА БАЗА"</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#form">КОНТАКТИ</a>
            </li>
            <li class="nav-item dropdown d-none d-md-block">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    ІНШЕ
                </a>
                <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                    <a class="nav-link" target="_blank"
                       href="https://www.google.com/maps/place/48°32'01.5%22N+35°01'52.7%22E/@48.533758,35.0287331,17z/data=!3m1!4b1!4m4!3m3!8m2!3d48.533758!4d35.031308?entry=ttu">
                        НАША ЛОКАЦІЯ</a>
                    <a class="nav-link" href="{{ route('aboutUs') }}#playground">ІГРОВИЙ МАЙДАНЧИК</a>
                    <a class="nav-link" href="{{ route('laserTag') }}#weapons">АРСЕНАЛ</a>
                    <a class="nav-link" target="_blank" href="https://www.google.com/maps/place/Лазертаг+Днепр+(лазерные+бои)+%22Войнушка%22.+Лазертаг+Днепропетровск/@48.5297559,35.0182589,15z/data=!4m8!3m7!1s0x40d958b4c19fabcb:0xebd8845b727427e1!8m2!3d48.5297559!4d35.0182589!9m1!1b1!16s%2Fg%2F11bxgn4_k7?entry=ttu">ВІДГУКИ</a>
                </div>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link"
                   href="https://www.google.com/maps/place/%D0%9B%D0%B0%D0%B7%D0%B5%D1%80%D1%82%D0%B0%D0%B3+%D0%94%D0%BD%D0%B5%D0%BF%D1%80+(%D0%BB%D0%B0%D0%B7%D0%B5%D1%80%D0%BD%D1%8B%D0%B5+%D0%B1%D0%BE%D0%B8)+%22%D0%92%D0%BE%D0%B9%D0%BD%D1%83%D1%88%D0%BA%D0%B0%22.+%D0%9B%D0%B0%D0%B7%D0%B5%D1%80%D1%82%D0%B0%D0%B3+%D0%94%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA/@48.5297559,35.0182589,15z/data=!4m2!3m1!1s0x0:0xebd8845b727427e1?sa=X&ved=1t:2428&ictx=111">
                    НАША ЛОКАЦІЯ</a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link" href="{{ route('aboutUs') }}#playground">ІГРОВИЙ МАЙДАНЧИК</a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link" href="{{ route('laserTag') }}#weapons">АРСЕНАЛ</a>
            </li>
            <li class="nav-item d-md-none">
                <a class="nav-link" href="https://www.google.com/maps/place/Лазертаг+Днепр+(лазерные+бои)+%22Войнушка%22.+Лазертаг+Днепропетровск/@48.5297559,35.0182589,15z/data=!4m8!3m7!1s0x40d958b4c19fabcb:0xebd8845b727427e1!8m2!3d48.5297559!4d35.0182589!9m1!1b1!16s%2Fg%2F11bxgn4_k7?entry=ttu">ВІДГУКИ</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto align-items-center pb-5 pb-md-0">
            <li class="nav-item d-flex justify-content-center">
                <a class="nav-link m-0" href="viber://chat?number=%2B380964862244" target="_blank">
                    <img src="{{ asset('storage/icons/viber.svg') }}" alt="viber">
                </a>
                <a class="nav-link mx-4 mx-md-2"
                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz" target="_blank">
                    <img src="{{ asset('storage/icons/instagram.svg') }}" alt="instagram">
                </a>
                <a class="nav-link m-0" href="https://t.me/lazertagclub_voinushka" target="_blank">
                    <img src="{{ asset('storage/icons/telegram.svg') }}" alt="telegram">
                </a>
            </li>
            <li class="nav-item d-flex flex-column align-items-center">
                <a class="nav-link" href="tel:+380964862244">+38 (096) 486 2244</a>
                <a class="nav-link" href="tel:+380994569009">+38 (099) 456 9009</a>
            </li>
            <li class="nav-item pb-5 pb-md-0 d-md-none">
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#contactFormModal">
                    ЗАБРОНЮВАТИ
                </button>
            </li>
        </ul>
    </div>
</nav>
