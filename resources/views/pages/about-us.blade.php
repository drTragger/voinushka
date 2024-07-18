@extends('layouts.app')

@section('content')
    <section id="heroBlock" class="pb-5">
        <div id="heroCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#heroCarousel" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/images/hero-1.jpeg') }}" class="d-block w-100" alt="First Slide">
                    <div class="carousel-caption d-md-block hero-text">
                        <h1>Лазертаг</h1>
                        <p>Незабутні пригоди та активний відпочинок для Дітей та Дорослих</p>
                        <div class="hero-buttons row m-0">
                            <div class="mr-3">
                                <a class="btn btn-outline-orange-big" href="{{ route('laserTag') }}">ДЕТАЛЬНІШЕ</a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-orange-big" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/images/book.jpeg') }}" class="d-block w-100" alt="Second Slide">
                    <div class="carousel-caption d-md-block hero-text">
                        <h1>Квест "Ракетна База"</h1>
                        <p>Поринь у незабутню легенду, та стань головним героєм її подій</p>
                        <div class="hero-buttons row m-0">
                            <div class="mr-3">
                                <a class="btn btn-outline-orange-big" href="{{ route('quest') }}">ДЕТАЛЬНІШЕ</a>
                            </div>
                            <div>
                                <button type="button" class="btn btn-orange-big" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev d-none d-md-flex" href="#heroCarousel" role="button" data-slide="prev">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="18" fill="#F9FAFB"/>
                    <path d="M20.6667 12.6667L15.3333 18L20.6667 23.3334" stroke="#1B1C1E" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="sr-only">Попередня</span>
            </a>
            <a class="carousel-control-next d-none d-md-flex" href="#heroCarousel" role="button" data-slide="next">
                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="36" height="36" rx="18" fill="#F9FAFB"/>
                    <path d="M15.3334 23.3334L20.6667 18L15.3334 12.6667" stroke="#1B1C1E" stroke-width="2"
                          stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="sr-only">Наступна</span>
            </a>
        </div>
    </section>

    <section id="weOffer" class="py-5">
        <div class="container">
            <h2 class="text-center text-title">Ми пропонуємо</h2>
            <p class="text-center text-subtitle mt-4">Поринути у світ ігор Лазертаг та Квесту "Ракетна База" на лівому
                березі міста
                Дніпро</p>
            <div class="row justify-content-center mt-5">
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('storage/icons/birthday.svg') }}" alt="birthday">
                            </div>
                            <h5 class="card-title">Організація дитячого Дня Народження</h5>
                            <p class="card-text text-muted">Веселе та активне святкування, де діти змагаються між собою
                                в інтерактивній грі з використанням лазерних бластерів та спеціальних жилетів.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('storage/icons/team.svg') }}" alt="team">
                            </div>
                            <h5 class="card-title">Проведення Корпоративів, Тімбілдингів</h5>
                            <p class="card-text text-muted">Заходи для співробітників компаній, спрямовані на покращення
                                командної роботи. Це не тільки цікаве дозвілля, але й можливість зміцнити корпоративний
                                дух.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('storage/icons/section.svg') }}" alt="section">
                            </div>
                            <h5 class="card-title">Дитяча секція спортивного лазертагу</h5>
                            <p class="card-text text-muted">Регулярні тренування для дітей, де вони навчаються основам
                                гри в лазертаг, розвивають фізичні та стратегічні навички.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('storage/icons/games.svg') }}" alt="games">
                            </div>
                            <h5 class="card-title">Збірні ігри</h5>
                            <p class="card-text text-muted">Веселе та активне святкування, де діти змагаються між собою
                                в інтерактивній грі з використанням лазерних бластерів та спеціальних жилетів.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="mb-3">
                                <img class="img-fluid" src="{{ asset('storage/icons/adult.svg') }}" alt="adult">
                            </div>
                            <h5 class="card-title">Тренування для Дорослих</h5>
                            <p class="card-text text-muted">Веселе та активне святкування, де діти змагаються між собою
                                в інтерактивній грі з використанням лазерних бластерів та спеціальних жилетів.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="products" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/images/products/laser-tag.png') }}"
                                 alt="Лазертаг">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title">Лазертаг</h3>
                                <div class="products-cards d-flex flex-column justify-content-around h-100 mt-3">
                                    <div>
                                        <img src="{{ asset('storage/icons/location.svg') }}" alt="Адреса">
                                        <span class="ml-2">вул. Березинська, 54</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/icons/time.svg') }}" alt="Тривалість">
                                        <span class="ml-2">3,5 години</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/icons/users.svg') }}" alt="Команда">
                                        <span class="ml-2">4 - 10 учасників</span>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('laserTag') }}" class="btn btn-outline-orange ml-auto">ДЕТАЛЬНІШЕ</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                        <div>
                            <img class="img-fluid" src="{{ asset('storage/images/products/rocket-base.png') }}"
                                 alt="Лазертаг">
                        </div>
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h3 class="card-title">Квест "Ракетна База"</h3>
                                <div class="products-cards d-flex flex-column justify-content-around h-100 mt-3">
                                    <div>
                                        <img src="{{ asset('storage/icons/location.svg') }}" alt="Адреса">
                                        <span class="ml-2">вул. Березинська, 54</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/icons/time.svg') }}" alt="Тривалість">
                                        <span class="ml-2">1 година</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/icons/users.svg') }}" alt="Команда">
                                        <span class="ml-2">4 - 10 учасників</span>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('laserTag') }}" class="btn btn-outline-orange ml-auto">ДЕТАЛЬНІШЕ</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="customCarousel" class="py-5">
        <div id="coverflow" class="py-5">
            <ul class="flip-items">
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-1.png') }}" alt="Світлина 1">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-2.png') }}" alt="Світлина 2">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-3.png') }}" alt="Світлина 3">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-4.png') }}" alt="Світлина 4">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-5.png') }}" alt="Світлина 5">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-6.png') }}" alt="Світлина 6">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/about-us-carousel/img-7.png') }}" alt="Світлина 7">
                </li>
            </ul>
        </div>
    </section>

    <section id="playground" class="py-5">
        <div class="container">
            <h2 class="text-center text-title">Ігрова зона</h2>
            <p class="text-center text-subtitle text-muted py-4">Вражає своєю різноманітністю перешкод та декорацій, створюючи захопливу атмосферу для захоплюючих і динамічних баталій</p>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div>
                            <h3 class="text-title-2">Полігон</h3>
                            <p class="text-subtitle">Ігрова зона «Караван» розташована на лівому березі, в районі
                                гіпермаркету Караван.<br>Ігровий майданчик — це величезний бетонний комплекс площею
                                10000 кв. метрів. Вся територія комплексу знаходиться під дахом; це свого роду бетонні
                                джунглі, які в літній період частково поросли зеленню як усередині, так і зовні.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-orange-big mt-3 mt-md-0" data-toggle="modal"
                                    data-target="#contactFormModal">ЗАБРОНЮВАТИ
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 mb-4 mb-md-0">
                        <img src="{{ asset('storage/images/playground.jpeg') }}" class="img-fluid rounded-image"
                             alt="Ігрова зона">
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <h3 class="text-title-2">Переваги нашого полігону</h3>
                <div class="row pt-4">
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/quality.svg') }}" alt="Комфорт">
                            </div>
                            <h5 class="card-title">Комфорт</h5>
                            <p class="card-text text-muted">Критий полігон під охороною з парковкою, санітарними зонами
                                та зонами відпочинку</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/area.svg') }}" alt="Величезна площа">
                            </div>
                            <h5 class="card-title">Величезна площа</h5>
                            <p class="card-text text-muted">Величезна площа для груп від 8 до 50 гравців</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/security.svg') }}" alt="Безпека">
                            </div>
                            <h5 class="card-title">Безпека</h5>
                            <p class="card-text text-muted">Безпека, площа рівна не має поверхів та підвалів</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/location.svg') }}" alt="Доступність">
                            </div>
                            <h5 class="card-title">Доступність</h5>
                            <p class="card-text text-muted">Доступне розташування, зручна транспортна розвʼязка</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="py-5">
        <div class="full-width py-5" style="background-image: url('{{ asset('storage/images/book.jpeg') }}')">
            <div class="overlay"></div>
            <div class="container w-100 pt-5 pb-3 px-0">
                <div class="row justify-content-between align-items-center info-container px-3 px-md-4">
                    <div class="col-12 col-md-6 order-2 order-md-1 py-5">
                        <div class="video-info">
                            <h2 class="text-left">Поринь у світ тактичних боїв та забронюй свою гру вже сьогодні!</h2>
                            <div class="mt-4">
                                <button type="button" class="btn btn-orange-big mt-3 mt-md-0" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 mb-4 mb-md-0">
                        <iframe width="480" height="280"
                                src="https://www.youtube.com/embed/NqNIZnKmC6w?si=WGiUANj-XE-pKc7m&amp;controls=0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="py-5 mt-5">
        <div class="contact-section container-fluid px-0 h-100">
            <div class="col-12 col-md-6 p-0">
                <img src="{{ asset('storage/images/form.jpeg') }}" alt="Світлина" class="img-fluid">
            </div>
            <div
                class="contact-form col-12 col-md-6 d-flex flex-column justify-content-between align-items-start h-100">
                <div>
                    <h2 class="mb-3">Зв'яжіться з нами для деталей та бронювання</h2>
                    <p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 11.0002C9 11.7958 9.31607 12.5589 9.87868 13.1215C10.4413 13.6841 11.2044 14.0002 12 14.0002C12.7957 14.0002 13.5587 13.6841 14.1213 13.1215C14.6839 12.5589 15 11.7958 15 11.0002C15 10.2045 14.6839 9.44147 14.1213 8.87886C13.5587 8.31625 12.7957 8.00018 12 8.00018C11.2044 8.00018 10.4413 8.31625 9.87868 8.87886C9.31607 9.44147 9 10.2045 9 11.0002Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M17.657 16.6572L13.414 20.9002C13.039 21.2748 12.5306 21.4853 12.0005 21.4853C11.4704 21.4853 10.962 21.2748 10.587 20.9002L6.343 16.6572C5.22422 15.5384 4.46234 14.1129 4.15369 12.5611C3.84504 11.0092 4.00349 9.40071 4.60901 7.93893C5.21452 6.47714 6.2399 5.22774 7.55548 4.3487C8.87107 3.46967 10.4178 3.00049 12 3.00049C13.5822 3.00049 15.1289 3.46967 16.4445 4.3487C17.7601 5.22774 18.7855 6.47714 19.391 7.93893C19.9965 9.40071 20.155 11.0092 19.8463 12.5611C19.5377 14.1129 18.7758 15.5384 17.657 16.6572Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        м. Дніпро, вул. Березинська, 54
                    </p>
                    <p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a class="link" href="tel:+380964862244">+38 (096) 486 2244</a>,
                        <a class="link" href="tel:+380994862244">+38 (099) 486 2244</a>
                    </p>
                </div>

                <form id="contactForm" class="w-100" action="{{ route('form.submit') }}" method="POST">
                    <div class="form-group col-md-9 col-sm-12 mb-4 px-0">
                        <label for="name">Ім'я</label>
                        <input type="text" class="form-control w-100" name="name" placeholder="Ваше ім'я"
                               value="{{ old('name') }}">
                        <div class="text-danger error-name" id="error-name"></div>
                    </div>
                    <div class="form-group col-md-9 col-sm-12 px-0">
                        <label for="phone">Номер телефону</label>
                        <input type="text" class="form-control w-100" name="phone" placeholder="Ваш номер телефону"
                               value="{{ old('phone') }}">
                        <div class="text-danger error-phone" id="error-phone"></div>
                    </div>
                </form>

                <button type="submit" class="btn btn-orange-big" onclick="$('form#contactForm').submit()">ВІДПРАВИТИ
                </button>
            </div>
        </div>
    </section>
@endsection
