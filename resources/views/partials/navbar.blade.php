<nav class="navbar navbar-expand-xl navbar-dark fixed-top not-scrolled">
    <a class="navbar-brand p-0" href="{{ route('aboutUs') }}">
        <img src="{{ asset('storage/images/logo.svg') }}" alt="Logo" class="logo">
    </a>
    <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="my-1 mx-2 close" style="color: #FFF">X</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav align-items-center mx-auto">
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'aboutUs') active-nav-link @endif" href="{{ route('aboutUs') }}">ПРО НАС</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'laserTag') active-nav-link @endif" href="{{ route('laserTag') }}">ЛАЗЕРТАГ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->route()->getName() === 'quest') active-nav-link @endif" href="{{ route('quest') }}">КВЕСТ "РАКЕТНА БАЗА"</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('laserTag') }}#birthday">ДЕНЬ НАРОДЖЕННЯ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#form">КОНТАКТИ</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto align-items-center">
            <li class="nav-item d-flex justify-content-center">
                <a class="nav-link mx-1" href="https://google.com" target="_blank">
                    <img src="{{ asset('storage/icons/viber.svg') }}" alt="viber">
                </a>
                <a class="nav-link m-0" href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz" target="_blank">
                    <img src="{{ asset('storage/icons/instagram.svg') }}" alt="instagram">
                </a>
                <a class="nav-link mx-1" href="https://t.me/lazertagclub_voinushka" target="_blank">
                    <img src="{{ asset('storage/icons/telegram.svg') }}" alt="telegram">
                </a>
            </li>
            <li class="nav-item d-flex flex-column align-items-center">
                <a class="nav-link" href="tel:+380964862244">+38 (096) 486 2244</a>
                <a class="nav-link" href="tel:+380994569009">+38 (099) 456 9009</a>
            </li>
            <li class="nav-item">
                <button type="button" class="btn btn-orange" data-toggle="modal" data-target="#contactFormModal">ЗАБРОНЮВАТИ</button>
            </li>
        </ul>
    </div>
</nav>
