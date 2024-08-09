@extends('layouts.app')
@section('title', 'Лазертаг')

@section('content')
    <section id="laserTagHero" class="position-relative mb-5">
        <div class="d-flex flex-column justify-content-center mb-5">
            <div
                class="d-flex flex-column justify-content-center align-items-center text-center text-white laser-tag-hero-text mb-4 px-3 px-md-0">
                <h1 class="mt-0">Лазертаг у клубі "Войнушка"</h1>
                <p class="mt-4 mb-0">Незабутні пригоди та активний відпочинок для Дітей та Дорослих</p>
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
                    <p class="m-0">3,5 години</p>
                </div>
                <div class="d-flex flex-column justify-content-center p-4 mx-3 my-2 my-md-0 laser-tag-card text-center">
                    <div class="icon-container">
                        <div class="icon mb-2">
                            <img class="img-fluid" src="{{ asset('storage/icons/users.svg') }}" alt="kid">
                        </div>
                    </div>
                    <p class="m-0">10 - 60 учасників</p>
                </div>
            </div>
            <div class="lt-cards-mobile column d-md-none justify-content-center align-items-center mx-4">
                <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('storage/icons/location.svg') }}" alt="location">
                    <span class="text-white">вул. Березинська, 54</span>
                </div>
                <div class="icon mb-3">
                    <img class="img-fluid" src="{{ asset('storage/icons/time.svg') }}" alt="time">
                    <span class="text-white">3,5 години</span>
                </div>
                <div class="icon">
                    <img class="img-fluid" src="{{ asset('storage/icons/users.svg') }}" alt="kid">
                    <span class="text-white">10 - 60 учасників</span>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column align-items-md-center buttons-container mt-5 px-3 px-md-0">
            <button type="button" class="btn btn-orange-big mt-2" data-toggle="modal" data-target="#contactFormModal">
                ЗАБРОНЮВАТИ
            </button>
            <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
               href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz" target="_blank">
                <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}" alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ
                В ІНСТАГРАМ
            </a>
        </div>
        <div class="position-absolute w-100 d-flex justify-content-center align-items-center" style="bottom: 16px;">
            <button type="button" class="btn we-offer p-0" data-anchor="#weapons">
                <img class="img-fluid" src="{{ asset('storage/icons/we-offer.svg') }}" alt="Наші Послуги">
            </button>
        </div>
    </section>

    <section id="weapons" class="py-5">
        <div class="container">
            <h2 class="text-center text-title-2">Різноманітні види арсеналу</h2>
            <p class="text-center text-subtitle text-muted pt-2 pt-md-3 m-0">Лазертаг клуб “Войнушка” у Дніпрі має один
                із найбільших арсеналів для гри в Лазертаг</p>
            <div class="py-4 py-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0"><strong>Лазертаг клуб "Войнушка" налічує 66
                                    одиниць зброї.</strong><br>У нашому арсеналі: штурмові автомати, снайперські
                                гвинтівки, кулемети та модифіковані пістолі. Вага зброї варіюється від 0.5 кг до 10 кг,
                                тому кожен знайде собі відповідний варіант. Приєднуйтесь до "Войнушки" для незабутніх
                                лазертаг-баталій!</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">з однієї людини</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
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

    <section id="customCarousel" class="py-5">
        <div id="coverflow" class="py-5">
            <ul class="flip-items">
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-1.png') }}" alt="Світлина 1">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-2.png') }}" alt="Світлина 2">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-3.png') }}" alt="Світлина 3">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-4.png') }}" alt="Світлина 4">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-5.png') }}" alt="Світлина 5">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-6.png') }}" alt="Світлина 6">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-7.png') }}" alt="Світлина 7">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-8.png') }}" alt="Світлина 8">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-9.png') }}" alt="Світлина 9">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-10.png') }}" alt="Світлина 10">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-11.png') }}" alt="Світлина 11">
                </li>
                <li data-flip-title="Світлина">
                    <img src="{{ asset('storage/images/carousel/img-12.png') }}" alt="Світлина 12">
                </li>
            </ul>
        </div>
    </section>

    <section id="birthday" class="pt-5">
        <div class="container pt-md-5">
            <h2 class="text-center text-title-2">Проведення Дня Народження</h2>
            <p class="text-center text-subtitle text-muted pt-2 pt-md-3">Зробіть неймовірний подарунок імениннику</p>
            <div class="pt-3 pt-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0">Три з половиною години драйву та адреналіну ми
                                вам гарантуємо. Робота інструкторів, оренда камуфляжу, радіостанції за потреби, фотозвіт
                                і, найголовніше, дуже доступна ціна&nbsp;— усе це пропонує Лазертаг клуб «Войнушка».<br>Лазертаг&nbsp;—
                                це універсальна гра, яка дозволить оригінально відзначити день народження та отримати
                                море адреналіну і позитивних емоцій.</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">з однієї людини</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('storage/images/lt-birthday.png') }}" class="img-fluid rounded-image"
                             alt="День народження">
                    </div>
                </div>
            </div>

            <div class="mt-md-5">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/security.svg') }}" alt="Безпека">
                            </div>
                            <h5 class="card-title">Безпека</h5>
                            <p class="card-text text-muted">На відміну від пейнтболу або страйкболу, це абсолютно
                                безпечно і не боляче</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/kid.svg') }}" alt="Вік">
                            </div>
                            <h5 class="card-title">Вік</h5>
                            <p class="card-text text-muted">Гравці віком 7-70 років можуть грати в лазерні бої</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card p-3 h-100">
                            <div class="mb-3">
                                <img src="{{ asset('storage/icons/quality.svg') }}" alt="Інтерактивність">
                            </div>
                            <h5 class="card-title">Інтерактивнсть</h5>
                            <p class="card-text text-muted">Різноманітність сценаріїв: від звичайних зустрічних боїв до
                                багаторівневих завдань з використанням додаткового спорядження</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="corporates" class="pt-5">
        <div class="container pt-md-5">
            <h2 class="text-center text-title-2">Проведення Корпоративів, Тімбілдингів</h2>
            <div class="pt-3 pt-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0">Корпоратив у Лазертаг клубі «Войнушка»&nbsp;— це
                                можливість дуже незвичайно відсвяткувати свято вашим колективом. Великий ігровий
                                майданчик, який може вмістити групу до 60 гравців, різноманітний арсенал і,
                                найголовніше, дуже цікаві сценарії&nbsp;— усе це вас очікує в Лазертаг клубі «Войнушка».<br>Три
                                з половиною години драйву та адреналіну дозволять згуртувати ваш колектив в одну єдину
                                команду. Робота інструкторів, оренда камуфляжу, радіостанції за потреби, фотозвіт і,
                                найголовніше, дуже доступна ціна&nbsp;— усе це пропонує Лазертаг клуб «Войнушка».<br>За
                                бажанням після гри є можливість розміститися в зонах відпочинку для продовження свята.
                            </p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">з однієї людини</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('storage/images/lt-corporates.png') }}" class="img-fluid rounded-image"
                             alt="Корпоративи">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="collectiveGames" class="pt-5">
        <div class="container pt-md-5">
            <h2 class="text-center text-title-2">Збірні ігри</h2>
            <div class="pt-3 pt-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0">Вам подобається активний відпочинок? Вам до душі
                                військово-спортивна тематика, але ви не маєте своєї команди? Запрошуємо вас на збірну
                                гру кожної неділі&nbsp;— три з половиною години активного відпочинку в компанії
                                однодумців вам гарантовано.<br>Робота інструкторів, оренда камуфляжу, радіостанції за
                                потреби і, найголовніше, дуже доступна ціна&nbsp;— усе це пропонує Лазертаг клуб
                                «Войнушка».</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">з однієї людини</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('storage/images/lt-col-games.png') }}" class="img-fluid rounded-image"
                             alt="Збірні ігри">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="adultsTraining" class="pt-5">
        <div class="container pt-md-5">
            <h2 class="text-center text-title-2">Тренування для дорослих</h2>
            <div class="pt-3 pt-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0">Якщо у вас є бажання пройти базовий курс молодого
                                бійця, запрошуємо вас на військове тактичне тренування. Тактика, стратегія, тактична
                                медицина, евакуація поранених, навички роботи в парах, трійках і більших бойових
                                підрозділах, вміння пересуватися в приміщеннях і в зелених зонах, а також багато інших
                                навичок.<br>Мінімальний курс&nbsp;— 10 занять, мінімальна група&nbsp;— 8-10 бійців.</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">з однієї людини</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('storage/images/lt-adults-training.png') }}" class="img-fluid rounded-image"
                             alt="Тренування для дорослих">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="kidsSection" class="pt-5 pb-md-5">
        <div class="container pt-md-5">
            <h2 class="text-center text-title-2">Дитяча секція лазертагу</h2>
            <div class="pt-3 pt-md-5">
                <div class="row">
                    <div class="col-md-6 d-flex flex-column mb-4 order-md-1 order-3">
                        <div class="mb-4">
                            <p class="text-subtitle mb-0 mt-4 mt-md-0">У секції спортивного лазертагу ваша дитина
                                навчиться основним базовим військово-спортивним навичкам. Вона буде вивчати тактику і
                                стратегію, основи комунікацій з використанням портативних радіостанцій, тактичну
                                медицину, формування бойових підрозділів, а також уміння працювати в бойових групах
                                різного складу і багато чого ще дуже цікавого.<br>Тренування проходять один раз на
                                тиждень у неділю з 10:00 до 13:30.<br>Три з половиною години активного відпочинку на
                                свіжому повітрі&nbsp;— значно краще, ніж той самий час сидіння з гаджетом.</p>
                        </div>
                        <div class="d-flex flex-column flex-md-row">
                            <div class="block-price mb-3 order-1 order-md-2 ml-md-4">
                                <h2 class="text-center text-title">650 грн / 3,5 год.</h2>
                                <p class="text-subtitle text-center m-0">за одне тренування (мін 2 тренування на
                                    місяць)</p>
                            </div>
                            <div class="order-2 order-md-1">
                                <button type="button" class="btn btn-orange-big mt-0 w-100" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                                <a class="btn btn-outline-orange-big btn-instagram mt-3 d-md-none"
                                   href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                                   target="_blank">
                                    <img class="img-fluid" src="{{ asset('storage/icons/instagram-orange.svg') }}"
                                         alt="Instagram">&nbsp;&nbsp;&nbsp;НАПИСАТИ В ІНСТАГРАМ
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 order-md-2 order-1">
                        <img src="{{ asset('storage/images/lt-kids-section.png') }}" class="img-fluid rounded-image"
                             alt="Дитяча секція лазертагу">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="video" class="py-5">
        <div class="full-width py-5" style="background-image: url('{{ asset('storage/images/video.png') }}')">
            <div class="container w-100 pt-5 pb-3 px-0">
                <div class="row justify-content-between align-items-center info-container px-3 px-md-4 mx-0">
                    <div class="col-12 col-md-6 order-2 order-md-1 py-5">
                        <div class="video-info">
                            <h2 class="text-left">Оригінально відзначте день народження, проведіть
                                корпоратив, тімбілдинг, парубочий вечір, або просто весело проведіть час!</h2>
                            <div class="mt-4">
                                <button type="button" class="btn btn-orange-big" data-toggle="modal"
                                        data-target="#contactFormModal">ЗАБРОНЮВАТИ
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 video-container order-1 order-md-2">
                        <iframe width="480" height="280"
                                src="https://www.youtube.com/embed/iChbN0OI2Hs?si=bu4kiAXEouQjolUM"
                                title="Лазертаг" frameborder="0"
                                allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="form" class="py-5 mt-5">
        <div class="contact-section container-fluid px-0 h-100">
            <div class="col-12 col-md-6 p-0">
                <img src="{{ asset('storage/images/form.png') }}" alt="Світлина" class="img-fluid">
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
                        <a class="link" href="tel:+380994569009">+38 (099) 456 9009</a>
                    </p>
                    <div class="d-flex">
                        <a href="viber://chat?number=%2B380964862244" target="_blank">
                            <img class="img-fluid" src="{{ asset('storage/icons/viber.svg') }}" alt="viber">
                        </a>
                        <a class="mx-3" href="https://www.instagram.com/lazertagclub_voinushka?igsh=dTR4MTN4a29vNHgz"
                           target="_blank">
                            <img class="img-fluid" src="{{ asset('storage/icons/instagram.svg') }}" alt="instagram">
                        </a>
                        <a href="https://t.me/lazertagclub_voinushka" target="_blank">
                            <img class="img-fluid" src="{{ asset('storage/icons/telegram.svg') }}" alt="telegram">
                        </a>
                    </div>
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
