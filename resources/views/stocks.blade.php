@extends('layouts.app')

@section('title', 'Акция')

@section('breadcrumbs')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        '#' => 'Акция',
    ]" />
@endsection

@section('content')
    <section class="descriptor descriptor--half">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/stocks/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Название акции</h1>
                <p class="descriptor__text">Описание акции: например акция на мастер-классы для мужчин на 23 февраля, скидка
                    для мужчин 20%</p>
                <div class="descriptor__timer">
                    <span>Окончание акции через:</span>
                    <b>4 дня | 16 часов | 15 минут</b>
                </div>
                <div class="descriptor__links descriptor__links--noline">
                    <a class="descriptor__link descriptor__link--short" href="#">Оставить заявку</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section celebrate">
        <div class="container">
            <div class="celebrate__inner">
                <h2 class="section-title"> </h2>
                <div class="section-text">
                    <p>Хотите провести день рождение на нашем мастер-классе? А может быть, корпоратив с коллегами, который
                        запомниться всем?</p>
                    <p>
                        <b>Мы приготовили для вас скидки и подарки!</b>
                    </p>
                </div>
                <div class="celebrate__slider swiper js-sliderCelebrate">
                    <div class="celebrate__list swiper-wrapper">
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide1.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">День рождения </h5>
                            <ul class="celebrate__item-list">
                                <li>Скидка 10% для всех гостей</li>
                                <li>Фартук от студии в подарок</li>
                                <li>еще что то</li>
                                <li>еще что то</li>
                            </ul>
                            <p class="celebrate__item-text">Предложение действует при покупке от 5 билетов на мастер-классы
                                из календаря</p>
                            <div class="celebrate__item-link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide2.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">Корпоратив</h5>
                            <ul class="celebrate__item-list">
                                <li>Скидка 10% для всех гостей</li>
                                <li>Фартук от студии в подарок</li>
                            </ul>
                            <p class="celebrate__item-text">Предложение действует при покупке от 5 билетов на мастер-классы
                                из календаря а может и ещё когда-то</p>
                            <div class="celebrate__item-link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide3.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">Свидание для двоих 14.02</h5>
                            <ul class="celebrate__item-list">
                                <li>Скидка 10% для всех гостей</li>
                                <li>Фартук от студии в подарок</li>
                                <li>еще что то</li>
                                <li>еще что то</li>
                                <li>еще что то</li>
                            </ul>
                            <p class="celebrate__item-text">Предложение действует при покупке от 5 билетов на мастер-классы
                                из календаря а может и ещё когда-то</p>
                            <div class="celebrate__item-link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-celebrate swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h3 class="section-title">Мероприятия у нас</h3>
            <div class="cards__slider swiper js-sliderEvents">
                <div class="cards__list swiper-wrapper">
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/index/slider2.png') }}" alt="">
                        </div>
                        <div class="card__name">Корпоративы </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/index/slider2.png') }}" alt="">
                        </div>
                        <div class="card__name">Аренда кулинарной студии </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/index/slider2.png') }}" alt="">
                        </div>
                        <div class="card__name">Детский праздник </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/index/slider2.png') }}" alt="">
                        </div>
                        <div class="card__name">Свидание </div>
                    </a>
                </div>
                <div class="swiper-pagination-events swiper-pagination"></div>
            </div>
            <a class="cards__link" href="events.html">Смотреть все мероприятия</a>
        </div>
    </section>
    <section class="section studios">
        <div class="container">
            <h3 class="section-title">Наши студии</h3>
            <ul class="studios__list">
                <li class="studios__item">
                    <div class="studios__media">
                        <img src="{{ Vite::asset('resources/img/studios/studio1.png') }}" alt="">
                    </div>
                    <div class="studios__address">Студия на ул. Дыбенко, 8к1 </div>
                    <a class="studios__link link-btn" href="#">Подробнее о студии</a>
                </li>
                <li class="studios__item">
                    <div class="studios__media">
                        <img src="{{ Vite::asset('resources/img/studios/studio2.png') }}" alt="">
                    </div>
                    <div class="studios__address">Студия на Московский проспект 183-185</div>
                    <a class="studios__link link-btn" href="#">Подробнее о студии</a>
                </li>
                <li class="studios__item">
                    <div class="studios__media">
                        <img src="{{ Vite::asset('resources/img/studios/studio3.png') }}" alt="">
                    </div>
                    <div class="studios__address">Студия на ул. Ильюшина 5, корп. 1</div>
                    <a class="studios__link link-btn" href="#">Подробнее о студии</a>
                </li>
            </ul>
            <div class="studios__contacts">
                <div class="studios__map">
                    <iframe
                        src="https://yandex.ru/map-widget/v1/?um=constructor%3A314ab7660a974995f5dd5e763a05f8bac7b3a72c81ff89e7e4ab3a0e5765e616&amp;amp;source=constructor"
                        width="100%" height="310" frameborder="0"></iframe>
                </div>
                <div class="studios__links">
                    <div class="studios__title">Кулинарная студия Cookforia </div>
                    <a class="studios__links-item" href="tel:+78123363423">+7 (812) 336-34-23</a>
                    <a class="studios__links-item" href="mailto:contact@cookforia.ru">contact@cookforia.ru</a>
                    <div class="studios__subtitle">Санкт-Петербург</div>
                    <ul class="studios__addresses">
                        <li>Московский проспект 183-185</li>
                        <li>Улица Дыбенко, 8к1
                        <li>Улица Ильюшина, 5к1</li>
                        </li>
                    </ul>
                    <ul class="studios__socials socials">
                        <li>
                            <a class="studios__social social social--vk" href="#" target="_blank"></a>
                        </li>
                        <li>
                            <a class="studios__social social social--tg" href="#" target="_blank"></a>
                        </li>
                        <li>
                            <a class="studios__social social social--instagram" href="#" target="_blank"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

	@include('partials.reviews')
	
	@include('partials.partners')
@endsection
