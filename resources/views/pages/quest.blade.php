@extends('layouts.app')

@section('content')
    <section id="laserTagHero" class="d-flex flex-column justify-content-between pb-5 position-relative"
             style="background-image: url('{{ asset('storage/images/lasertag-hero.png') }}'); background-size: cover; background-position: center; height: 100vh;">
        <div class="d-flex flex-column justify-content-center mt-5 mt-md-0" style="flex: 1;">
            <div class="text-center text-white laser-tag-hero-text mb-4 px-3 px-md-0">
                <h1>Квест "Ракетна База"</h1>
                <p>Поринь у незабутню легенду, та стань головним героєм її подій</p>
            </div>
            <div class="laser-tag-cards">
                <div class="d-flex flex-column justify-content-center p-4 mx-3 my-2 my-md-0 laser-tag-card text-center">
                    <div class="icon-container">
                        <div class="icon mb-2">
                            <img class="img-fluid" src="{{ asset('storage/icons/location.svg') }}" alt="location">
                        </div>
                    </div>
                    <p class="m-0">вул. Березинська, 54</p>
                </div>
                <div class="d-flex flex-column justify-content-center p-4 mx-3 my-2 my-md-0 laser-tag-card text-center">
                    <div class="icon-container">
                        <div class="icon mb-2">
                            <img class="img-fluid" src="{{ asset('storage/icons/time.svg') }}" alt="time">
                        </div>
                    </div>
                    <p class="m-0">1 година</p>
                </div>
                <div class="d-flex flex-column justify-content-center p-4 mx-3 my-2 my-md-0 laser-tag-card text-center">
                    <div class="icon-container">
                        <div class="icon mb-2">
                            <img class="img-fluid" src="{{ asset('storage/icons/users.svg') }}" alt="kid">
                        </div>
                    </div>
                    <p class="m-0">4 - 10 учасників</p>
                </div>
            </div>
            <div class="lt-cards-mobile column d-md-none justify-content-center align-items-center">
                <div class="icon mb-4">
                    <img class="img-fluid" src="{{ asset('storage/icons/location.svg') }}" alt="location">
                    <span class="text-white">вул. Березинська, 54</span>
                </div>
                <div class="icon mb-4">
                    <img class="img-fluid" src="{{ asset('storage/icons/time.svg') }}" alt="time">
                    <span class="text-white">1 година</span>
                </div>
                <div class="icon">
                    <img class="img-fluid" src="{{ asset('storage/icons/users.svg') }}" alt="kid">
                    <span class="text-white">4 - 10 учасників</span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column justify-content-around align-items-center laser-tag-hero-price mt-4 mt-md-0"
             style="flex: 1;">
            <div class="d-flex flex-column align-items-center text-center">
                <h2 class="text-white">200 грн</h2>
                <p class="text-white">з однієї людини</p>
            </div>
            <button type="button" class="btn btn-orange-big" data-toggle="modal" data-target="#contactFormModal">
                ЗАБРОНЮВАТИ
            </button>
        </div>
        <div class="position-absolute w-100 d-flex justify-content-center align-items-center" style="bottom: 16px;">
            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6666 13.3333L16 18.6666L21.3333 13.3333" stroke="white" stroke-width="2"
                      stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </section>

    <section id="weapons" class="py-5">
        <div class="container py-5">
            <h2 class="text-center text-title">Про квест "Ракетна База"</h2>
            <div class="py-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div>
                            <p class="text-subtitle">Спецпідрозділ ГУР знайшов стару совєтську ракетну базу, в шахтах
                                якої знаходяться балістичні ракети. Використовуючи ці ракети, ми можемо нанести
                                ракетно-бомбовий удар по наших ворогах. На жаль, на зворотному шляху група потрапила в
                                засідку і була знищена. Однак нам вдалося здобути шматок карти, яка може привести нас до
                                цієї бази. Необхідно сформувати новий спецпідрозділ, щоб знайти цю базу і запустити
                                ракети.</p>
                        </div>
                        <div>
                            <button type="button" class="btn btn-orange-big mt-3" data-toggle="modal"
                                    data-target="#contactFormModal">ЗАБРОНЮВАТИ
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1 mb-4 mb-md-0">
                        <img src="{{ asset('storage/images/arsenal.png') }}" class="img-fluid rounded-image"
                             alt="Арсенал">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="customCarouselLaserTag" class="py-5 mb-5">
        <div id="coverflow">
            <ul class="flip-items">
                <li data-flip-title="Світлина">
                    <img class="img-fluid" src="{{ asset('storage/images/lt-carousel/img-1.png') }}"
                         alt="Світлина 1">
                </li>
                <li data-flip-title="Світлина">
                    <img class="img-fluid" src="{{ asset('storage/images/lt-carousel/img-2.png') }}"
                         alt="Світлина 2">
                </li>
                <li data-flip-title="Світлина">
                    <img class="img-fluid" src="{{ asset('storage/images/lt-carousel/img-3.png') }}"
                         alt="Світлина 3">
                </li>
            </ul>
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
                        <a class="link" href="tel:+380964862244">+38 (096) 486 2244</a>, <a class="link"
                                                                                            href="tel:+380994569009">
                            +38 (099) 456 9009</a>
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
