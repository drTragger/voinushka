<div class="container d-none d-md-block">
    <div class="row justify-content-around py-5 px-4">
        <div>
            <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo" class="logo">
        </div>
        <div>
            <ul>
                <li class="title">Навігація</li>
                <li><a class="link" href="{{ route('aboutUs') }}">Про нас</a></li>
                <li><a class="link" href="{{ route('laserTag') }}">Лазертаг</a></li>
                <li><a class="link" href="{{ route('quest') }}">Квест "Ракетна база"</a></li>
                <li><a class="link" href="{{ route('laserTag') }}#birthday">День народження</a></li>
                <li><a class="link" href="#form">Контакти</a></li>
                <li><a class="link" target="_blank"
                       href="https://www.google.com/maps/place/%D0%9B%D0%B0%D0%B7%D0%B5%D1%80%D1%82%D0%B0%D0%B3+%D0%94%D0%BD%D0%B5%D0%BF%D1%80+(%D0%BB%D0%B0%D0%B7%D0%B5%D1%80%D0%BD%D1%8B%D0%B5+%D0%B1%D0%BE%D0%B8)+%22%D0%92%D0%BE%D0%B9%D0%BD%D1%83%D1%88%D0%BA%D0%B0%22.+%D0%9B%D0%B0%D0%B7%D0%B5%D1%80%D1%82%D0%B0%D0%B3+%D0%94%D0%BD%D0%B5%D0%BF%D1%80%D0%BE%D0%BF%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA/@48.5297559,35.0182589,15z/data=!4m2!3m1!1s0x0:0xebd8845b727427e1?sa=X&ved=1t:2428&ictx=111">
                        Наша локація
                    </a>
                </li>
                <li><a class="link" href="{{ route('aboutUs') }}#playground">Ігровий майданчик</a></li>
                <li><a class="link" href="{{ route('laserTag') }}#weapons">Арсенал</a></li>
                <li><a class="link" target="_blank" href="https://www.google.com/maps/place/Лазертаг+Днепр+(лазерные+бои)+%22Войнушка%22.+Лазертаг+Днепропетровск/@48.5297559,35.0182589,15z/data=!4m8!3m7!1s0x40d958b4c19fabcb:0xebd8845b727427e1!8m2!3d48.5297559!4d35.0182589!9m1!1b1!16s%2Fg%2F11bxgn4_k7?entry=ttu">Відгуки</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="title">Адреса</li>
                <li>м. Дніпро</li>
                <li>вул. Березинська, 54</li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="title">Контакти</li>
                <li><a class="link" href="tel:+380964862244">+38 (096) 486 2244</a></li>
                <li><a class="link" href="tel:+380994569009">+38 (099) 456 9009</a></li>
            </ul>
        </div>
        <div>
            <ul>
                <li class="title">Соцмережі</li>
                <li class="d-flex">
                    <a href="viber://chat?number=%2B380964862244" target="_blank">
                        <img src="{{ asset('storage/icons/viber.svg') }}" alt="viber">
                    </a>
                    <a class="mx-3" href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz" target="_blank">
                        <img src="{{ asset('storage/icons/instagram.svg') }}" alt="instagram">
                    </a>
                    <a href="https://t.me/lazertagclub_voinushka" target="_blank">
                        <img src="{{ asset('storage/icons/telegram.svg') }}" alt="telegram">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container text-center py-3">
    <p class="mb-0 text-white">© {{ date('Y') }} Войнушка. Усі права захищені.</p>
</div>
