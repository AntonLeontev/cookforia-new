<header @class(['header', 'js-header', 'header--nobg' => Route::is('home')])>
    <div class="container">
        <div class="header__inner">
            <a class="header__logo" href="/">
                <img src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="Cookforia">
            </a>
            <button class="header__burger js-burger" type="button">
                <span>Меню</span>
            </button>
            <ul class="header__links">
                <li class="header__link">
                    <a href="#">Мастер-классы </a>
                </li>
                <li class="header__link">
                    <a href="{{ route('events') }}">Мероприятия</a>
                </li>
                <li class="header__link">
                    <a href="{{ route('certificate') }}">Сертификат</a>
                </li>
            </ul>
            <a class="header__phone" href="tel:+78126113908">
                <span>+7 (812) 611-39-08</span>
            </a>
            <ul class="header__socials">
                <li class="header__social header__social--tg">
                    <a href="#" target="_blank" aria-label="telegram"> </a>
                </li>
                <li class="header__social header__social--instagram">
                    <a href="#" target="_blank" aria-label="instagram"> </a>
                </li>
                <li class="header__social header__social--vk">
                    <a href="#" target="_blank" aria-label="vk"> </a>
                </li>
            </ul>
            <a class="header__callback" href="#">Обратный звонок </a>
        </div>
    </div>
</header>
<nav class="nav js-nav">
    <div class="nav__inner">
        <button class="nav__close js-navClose" type="button" aria-label="Закрыть"></button>
        <div class="nav__menu">
            <a class="nav__home" href="/">Главная </a>
            <ul class="nav__items">
                <li class="nav__item js-navItem">
                    <div class="nav__item-head">
                        <a class="nav__link" href="{{ route('events') }}">Мероприятия</a>
                        <button class="nav__opener js-navToggle" type="button"
                            aria-label="Список мероприятий"></button>
                    </div>
                    <div class="nav__accordion">
                        <div class="nav__accordion-animation">
                            <div class="nav__accordion-wrapper">
                                <div class="nav__accordion-content">
                                    <ul class="nav__accordion-list">
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Корпоратив</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Девичник</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">День рождения</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Свидание</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Тимбилдинг</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Детский праздник</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Кулинарная
                                                вечеринка</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav__item js-navItem">
                    <div class="nav__item-head">
                        <button class="nav__opener js-navToggle" type="button">Индивидуальные мастер
                            классы</button>
                    </div>
                    <div class="nav__accordion">
                        <div class="nav__accordion-animation">
                            <div class="nav__accordion-wrapper">
                                <div class="nav__accordion-content">
                                    <ul class="nav__accordion-list">
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Корпоратив</a>
                                        </li>
                                        <li class="nav__accordion-item">
                                            <a class="nav__accordion-link" href="#">Девичник</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#">Расписание сборных мастер-классов</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#">Кейтеринг</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#">Аренда студии</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('recipes') }}">Рецепты</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('blog') }}">Блог</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('menu') }}">Меню</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('certificate') }}">Сертификаты</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="{{ route('stocks') }}">Акции</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link" href="#">Контакты</a>
                </li>
            </ul>
        </div>
        <div class="nav__footer">
            <div class="nav__callback">Заказать мероприятие</div>
        </div>
    </div>
</nav>
