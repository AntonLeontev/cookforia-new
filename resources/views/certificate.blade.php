@extends('layouts.app')

@section('title', 'Сертификат')

@section('content')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        '#' => 'Сертификаты',
    ]" />

    <section class="descriptor descriptor--noshadow">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/certificates/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Сертификаты</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Записаться на МК</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section certificates-description">
        <div class="container">
            <h2 class="section-title">Подарочный сертификат от студии Cookforia </h2>
            <div class="certificates-description__inner">
                <div class="certificates-description__text">
                    <p>Подарочный сертификат на кулинарный мастер-класс станет отличным сюрпризом и романтической
                        возможностью удивить и накормить.</p>
                    <p>Подарите себе и своим друзьям мастер-класс в кулинарной студии Cookforia, и потрясающие воспоминания
                        останутся с вами надолго!</p>
                    <p>Зажигательные шеф-повара поделятся своими секретами, дружная веселая компания не даст заскучать, а
                        вкусный гастрономический ужин, приготовленный своими руками, станет прекрасным завершением вечера!
                    </p>
                    <p>Приходите к нам вместе с другом или самостоятельно, учитесь готовить легко и просто, или подарите
                        такую возможность близким!</p>
                </div>
                <div class="certificates-description__img">
                    <img src="{{ Vite::asset('resources/img/certificates/description.webp') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="section certificates-about">
        <div class="container">
            <h2 class="section-title">Как работают наши подарочные сертификаты?</h2>
            <ul class="certificates-about__list">
                <li class="certificates-about__item">
                    <div class="certificates-about__icon">
                        <img src="{{ Vite::asset('resources/img/certificates/calendar.png') }}" alt="">
                    </div>
                    <h5 class="certificates-about__title">срок действия 6 месяцев</h5>
                    <p class="certificates-about__text">Можете купить сертификат сейчас и подарить его позже</p>
                </li>
                <li class="certificates-about__item">
                    <div class="certificates-about__icon">
                        <img src="{{ Vite::asset('resources/img/certificates/rub.png') }}" alt="">
                    </div>
                    <h5 class="certificates-about__title">Любая сумма от 4000₽</h5>
                    <p class="certificates-about__text">Вы сами определяете комфортный для вас номинал сертификата</p>
                </li>
                <li class="certificates-about__item">
                    <div class="certificates-about__icon">
                        <img src="{{ Vite::asset('resources/img/certificates/certificate.png') }}" alt="">
                    </div>
                    <h5 class="certificates-about__title">Удобный формат</h5>
                    <p class="certificates-about__text">Вы получите электронный сертификат после оплаты, в тот же день</p>
                </li>
            </ul>
        </div>
    </section>
    <section class="section section--bg certificates-buy">
        <div class="container">
            <h3 class="section-title">Купить сертификат</h3>
            <form class="certificates-buy__form">
                <div class="certificates-buy__box">
                    <div class="certificates-buy__fields">
                        <div class="certificates-buy__field">
                            <input class="certificates-buy__input" type="text" name="fio" placeholder="Ваше имя">
                        </div>
                        <div class="certificates-buy__field">
                            <input class="certificates-buy__input js-inputPhone" type="text" name="tel"
                                placeholder="+7 (999) 000-00-00">
                        </div>
                        <div class="certificates-buy__field">
                            <input class="certificates-buy__input" type="email" name="mail" placeholder="Email">
                        </div>
                        <div class="certificates-buy__field">
                            <input class="certificates-buy__input" type="text" name="sum"
                                placeholder="Введите сумму, ₽">
                        </div>
                    </div>
                    <div class="certificates-buy__text">
                        <p>На сумму <b>2 500 ₽</b> можно заказать детский мастер-класс</p>
                        <p>На сумму <b>5 000 ₽</b> можно заказать проведение чего-то</p>
                        <p>На сумму <b>10 000 ₽</b> можно заказать проведение чего-то</p>
                    </div>
                </div>
                <button class="btn certificates-buy__btn" type="submit">Купить сертификат</button>
            </form>
        </div>
    </section>
    <section class="section certificates-how">
        <div class="container">
            <h3 class="section-title">Как купить сертификат?</h3>
            <div class="certificates-how__inner">
                <div class="certificates-how__icon">
                    <img src="{{ Vite::asset('resources/img/certificates/online.svg') }}" alt="">
                </div>
                <div class="certificates-how__title">Можете заказать на сайте или позвоните нашему менеджеру</div>
                <p class="certificates-how__text">После оплаты, в тот же день, вы получите электронный формат сертификата.
                    <br />Для использования сертификат не обязательно распечатывать.
                </p>
                <button class="btn certificates-how__btn" type="button">Обратный звонок</button>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h3 class="section-title">Расписание сборных мастер-классов</h3>
            <div class="cards__slider swiper js-sliderMaster">
                <ul class="cards__list swiper-wrapper">
                    <li class="card swiper-slide">
                        <div class="card__head">
                            <div class="card__img">
                                <img src="{{ Vite::asset('resources/img/index/slider1.jpg') }}" alt="">
                            </div>
                            <ul class="card__tags">
                                <li class="card__tag">#14февраля</li>
                                <li class="card__tag">#новинка</li>
                                <li class="card__tag">#рецепт</li>
                            </ul>
                            <div class="card__label">15 мест осталось</div>
                            <div class="card__title">День всех влюбленных</div>
                        </div>
                        <div class="card__body">
                            <div class="card__blocks">
                                <div class="card__block">
                                    <b>6000 ₽</b>
                                    <span>Взрослый билет</span>
                                </div>
                                <div class="card__block">
                                    <b>ПТ, 14 февраля</b>
                                    <span>19:00 - 22:00</span>
                                </div>
                            </div>
                            <div class="card__address">Студия на ул. Дыбенко, 8к1 </div>
                            <div class="card__link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__head">
                            <div class="card__img">
                                <img src="{{ Vite::asset('resources/img/index/slider1.jpg') }}" alt="">
                            </div>
                            <ul class="card__tags">
                                <li class="card__tag">#14февраля</li>
                                <li class="card__tag">#новинка</li>
                                <li class="card__tag">#рецепт</li>
                            </ul>
                            <div class="card__label">15 мест осталось</div>
                            <div class="card__title">День всех влюбленных или что-то длиннее </div>
                        </div>
                        <div class="card__body">
                            <div class="card__blocks">
                                <div class="card__block">
                                    <b>6000 ₽</b>
                                    <span>Взрослый билет</span>
                                </div>
                                <div class="card__block">
                                    <b>ПТ, 14 февраля</b>
                                    <span>19:00 - 22:00</span>
                                </div>
                            </div>
                            <div class="card__address">Студия на ул. Дыбенко, 8к1 </div>
                            <div class="card__link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__head">
                            <div class="card__img">
                                <img src="{{ Vite::asset('resources/img/index/slider1.jpg') }}" alt="">
                            </div>
                            <ul class="card__tags">
                                <li class="card__tag">#14февраля</li>
                                <li class="card__tag">#новинка</li>
                                <li class="card__tag">#рецепт</li>
                            </ul>
                            <div class="card__label">15 мест осталось</div>
                            <div class="card__title">День всех влюбленных</div>
                        </div>
                        <div class="card__body">
                            <div class="card__blocks">
                                <div class="card__block">
                                    <b>6000 ₽</b>
                                    <span>Взрослый билет</span>
                                </div>
                                <div class="card__block">
                                    <b>ПТ, 14 февраля</b>
                                    <span>19:00 - 22:00</span>
                                </div>
                            </div>
                            <div class="card__address">Студия на ул. Дыбенко, 8к1 </div>
                            <div class="card__link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__head">
                            <div class="card__img">
                                <img src="{{ Vite::asset('resources/img/index/slider1.jpg') }}" alt="">
                            </div>
                            <ul class="card__tags">
                                <li class="card__tag">#14февраля</li>
                                <li class="card__tag">#новинка</li>
                                <li class="card__tag">#рецепт</li>
                            </ul>
                            <div class="card__label">15 мест осталось</div>
                            <div class="card__title">День всех влюбленных</div>
                        </div>
                        <div class="card__body">
                            <div class="card__blocks">
                                <div class="card__block">
                                    <b>6000 ₽</b>
                                    <span>Взрослый билет</span>
                                </div>
                                <div class="card__block">
                                    <b>ПТ, 14 февраля</b>
                                    <span>19:00 - 22:00</span>
                                </div>
                            </div>
                            <div class="card__address">Студия на ул. Дыбенко, 8к1, мне кажется может быть много слов</div>
                            <div class="card__link">
                                <a class="link-btn" href="#">Подробнее</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination-masters swiper-pagination"></div>
            </div>
            <a class="cards__link" href="#">Смотреть все мастер-класы</a>
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
