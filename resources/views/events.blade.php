@extends('layouts.app')

@section('title', 'Мероприятия')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumbs-list">
                <li class="breadcrumb">
                    <a href="/">Главная</a>
                </li>
                <li class="breadcrumb">Мероприятия</li>
            </ol>
        </div>
    </div>

    <section class="descriptor">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/events/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Мероприятия в студии Cookforia</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Мастер-классы</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section events-cards">
        <div class="container">
            <div class="events__text">Хотите организовать незабываемый праздник или весело провести время в компании? Да,
                если местом встречи стала студия Cookforia!</div>
            <div class="events__text">Мы предлагаем проведение:</div>
            <div class="cards__slider swiper js-sliderEvents">
                <div class="cards__list swiper-wrapper">
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event1.webp') }}" alt="">
                        </div>
                        <div class="card__name">Корпоративы </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event2.webp') }}" alt="">
                        </div>
                        <div class="card__name">Девичник</div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event3.webp') }}" alt="">
                        </div>
                        <div class="card__name">День рождения</div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event4.webp') }}" alt="">
                        </div>
                        <div class="card__name">Детский праздник </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event5.webp') }}" alt="">
                        </div>
                        <div class="card__name">Свидание </div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event6.webp') }}" alt="">
                        </div>
                        <div class="card__name">Вечеринка</div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event7.webp') }}" alt="">
                        </div>
                        <div class="card__name">Аренда</div>
                    </a>
                    <a class="card card--img swiper-slide" href="#">
                        <div class="card__img">
                            <img src="{{ Vite::asset('resources/img/events/event8.webp') }}" alt="">
                        </div>
                        <div class="card__name">Кейтеринг </div>
                    </a>
                </div>
                <div class="swiper-pagination-events swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="section stages">
        <div class="container">
            <h4 class="section-title">За 3 часа незабываемых впечатлений вас ждет:</h4>
            <ol class="stages__list">
                <li class="stages__item">
                    <div class="stages__title">Встреча гостей</div>
                    <ul class="stages__text">
                        <li>Приветственный фуршет (доп. услуга)</li>
                        <li>Welcome drinks</li>
                    </ul>
                </li>
                <li class="stages__item">
                    <div class="stages__title">Начинаем мастер-класс</div>
                    <ul class="stages__text">
                        <li>Готовим 3 блюда под руководством шеф-повара</li>
                        <li>Пьем напитки</li>
                        <li>Задаем вопросы шефу</li>
                        <li>Общаемся</li>
                    </ul>
                </li>
                <li class="stages__item">
                    <div class="stages__title">Вкусный ужин</div>
                    <ul class="stages__text">
                        <li>Наслаждаемся приготовленными блюдами</li>
                        <li>Фотографируемся</li>
                        <li>Танцуем</li>
                    </ul>
                </li>
            </ol>
        </div>
    </section>
    <section class="section price">
        <div class="container">
            <div class="price__inner" style="background-image:url({{ Vite::asset('resources/img/events/price.webp') }})">
                <h4 class="price__title">Стоимость мероприятий в студии Cookforia от 3700 ₽*</h4>
                <p class="price__text">*Стоимость зависит от выбранного меню. Цена в меню указана для одного участника.</p>
                <a class="price__link link-btn" href="#">Заказать мероприятие </a>
            </div>
            <h5 class="price__list-title">Что входит в стоимость?</h5>
            <div class="price__list">
                <div class="price__list-col">
                    <div class="price__list-item">Безлимитный безалкогольный бар</div>
                    <div class="price__list-item">Работа профессионального шеф-повара</div>
                </div>
                <div class="price__list-col">
                    <div class="price__list-item">Меню на 3-4 позиции из 300+ видов блюд</div>
                    <div class="price__list-item">Дегустация алкогольных напитков</div>
                </div>
                <div class="price__list-col">
                    <div class="price__list-item">Инвентарь и продукты для приготовления</div>
                    <div class="price__list-item">Развлекательная программа</div>
                    <div class="price__list-item">Фотосессия</div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h3 class="section-title">Посмотрите, как проходят мероприятия в студии Cookforia</h3>
            <div class="gallery__slider swiper js-sliderGallery">
                <div class="gallery__list swiper-wrapper">
                    <div class="gallery__item swiper-slide">
                        <img src="{{ Vite::asset('resources/./img/events/gallery1.webp') }}" alt="">
                    </div>
                    <div class="gallery__item swiper-slide">
                        <img src="{{ Vite::asset('resources/./img/events/gallery1.webp') }}" alt="">
                    </div>
                    <div class="gallery__item swiper-slide">
                        <img src="{{ Vite::asset('resources/./img/events/gallery1.webp') }}" alt="">
                    </div>
                    <div class="gallery__item swiper-slide">
                        <img src="{{ Vite::asset('resources/./img/events/gallery1.webp') }}" alt="">
                    </div>
                </div>
                <div class="swiper-pagination-gallery swiper-pagination"></div>
                <div class="gallery__arrows">
                    <button class="swiper-button-prev-gallery swiper-button-prev"></button>
                    <button class="swiper-button-next-gallery swiper-button-next"></button>
                </div>
            </div>
        </div>
    </section>
    <section class="section services">
        <div class="container">
            <h3 class="section-title">Дополнительные услуги</h3>
            <div class="services__slider swiper js-sliderServices">
                <div class="services__list swiper-wrapper">
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service1.png') }}" alt="">
                        </div>
                        <div class="services__name">Фотограф</div>
                        <div class="services__price">5000 руб. в час</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service2.png') }}" alt="">
                        </div>
                        <div class="services__name">Азотное шоу</div>
                        <div class="services__price">от 8000 руб.</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service3.png') }}" alt="">
                        </div>
                        <div class="services__name">Фуршет</div>
                        <div class="services__price">от 1000 руб. за 1 гостя</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service4.png') }}" alt="">
                        </div>
                        <div class="services__name">Банкет</div>
                        <div class="services__price">от 3900 руб. за 1 гостя</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service5.png') }}" alt="">
                        </div>
                        <div class="services__name">Ведущий</div>
                        <div class="services__price">от 35000 руб.</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service6.png') }}" alt="">
                        </div>
                        <div class="services__name">Украшение зала шарами</div>
                        <div class="services__price">от 3000 руб.</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service7.png') }}" alt="">
                        </div>
                        <div class="services__name">Официант</div>
                        <div class="services__price">от 5000 руб. за 3 часа</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service8.png') }}" alt="">
                        </div>
                        <div class="services__name">Диджей</div>
                        <div class="services__price">от 8000 руб. в час</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service9.png') }}" alt="">
                        </div>
                        <div class="services__name">Декор помещения</div>
                        <div class="services__price">от 5000 руб.</div>
                    </div>
                    <div class="services__item swiper-slide">
                        <div class="services__img">
                            <img src="{{ Vite::asset('resources/./img/events/service10.png') }}" alt="">
                        </div>
                        <div class="services__name">Шоу программы</div>
                        <div class="services__price">от 3500 руб. за букет</div>
                    </div>
                </div>
                <div class="swiper-pagination-services swiper-pagination"></div>
            </div>
        </div>
    </section>
    
	@include('partials.reviews')

    <section class="section faq">
        <div class="container">
            <h4 class="section-title">Вопросы, которые нам часто задают</h4>
            <ul class="faq__list">
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Какие мероприятия вы проводите?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Мы организуем кулинарные мастер-классы для взрослых и детей, корпоративные
                                            тимбилдинги, дни рождения, девичники, детские праздники и многое другое.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Как проходит кулинарный мастер-класс?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Гости готовят блюда под руководством шеф-повара, который делится рецептами и
                                            кулинарными секретами. После приготовления вы наслаждаетесь созданными блюдами в
                                            уютной атмосфере нашей кулинарной студии.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Можно ли провести мероприятие в вашей студии с друзьями?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Да, мы предлагаем частные кулинарные вечеринки, где вы и ваши друзья сможете
                                            вместе приготовить еду и приятно провести время.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Какое кухонное оснащение используется на мастер-классах?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Наша студия оснащена профессиональным оборудованием и инструментами, необходимыми
                                            для приготовления разнообразных блюд.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Проводите ли вы кулинарные тимбилдинги для корпоративных клиентов?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Да, мы специализируемся на кулинарных тимбилдингах, которые способствуют
                                            сплочению коллектива через совместное приготовление пищи.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Как записаться на кулинарное приключение в вашей студии?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Вы можете связаться с нами по телефону или через форму на сайте для бронирования
                                            участия в кулинарном мастер-классе или организации частного мероприятия.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Можно ли приносить свои напитки на мероприятие?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>Да, вы можете принести свои алкогольные и безалкогольные напитки без
                                            дополнительной оплаты.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="faq__item js-faqItem">
                    <div class="faq__question js-faqQuestion">
                        <span>Есть ли ограничения по количеству участников на мероприятиях?</span>
                    </div>
                    <div class="faq__accordion">
                        <div class="faq__accordion-animation">
                            <div class="faq__accordion-wrapper">
                                <div class="faq__accordion-content">
                                    <div class="faq__answer">
                                        <p>В зависимости от формата мероприятия, мы можем принять группы от 2 до 60 человек.
                                            Пожалуйста, уточняйте детали при бронировании.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
