<div class="container d-none d-md-block">
    <div class="row justify-content-around py-5 px-4">
        <div>
            <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo" class="logo">
        </div>
        <div>
            <ul>
                <li class="title">Навігація</li>
                <li><a class="link" href="{{ route('aboutUs') }}">Про нас</a></li>
                <li><a class="link" href="">Лазертаг</a></li>
                <li><a class="link" href="">Квест "Ракетна база"</a></li>
                <li><a class="link" href="">День народження</a></li>
                <li><a class="link" href="">Контакти</a></li>
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
