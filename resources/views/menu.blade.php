@extends('layouts.app')

@section('title', 'Меню')

@section('breadcrumbs')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        '#' => 'Меню',
    ]" />
@endsection

@section('content')
    <section class="descriptor">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/menu/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Меню</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Записаться на МК</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section menu-list">
        <div class="container">
            <h3 class="section-title">В нашей студии более ??? видов меню</h3>
            <div class="menu-list__filters">
                <button class="menu-list__filter active" type="button">Основное меню</button>
                <button class="menu-list__filter" type="button">Детское меню</button>
                <button class="menu-list__filter" type="button">Фуршет</button>
                <button class="menu-list__filter" type="button">Дополнительно</button>
                <button class="menu-list__filter" type="button">Конструктор меню</button>
            </div>
            <div class="cards__slider swiper js-sliderMenu">
                <ul class="cards__list swiper-wrapper">
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #6</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем </li>
                                    <li>Стейк Мачете с картофелем Дофинуаи соусом Чимимурри</li>
                                    <li>Тирамису с кремом на сыре Маскарпоне</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">5100 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #7</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">4200 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #12</div>
                            <div class="card__text">
                                <ul>
                                    <li>Салат с баклажаном и сыром фета</li>
                                    <li>Корейка на кости с печёным картофелем и брусничным соусом</li>
                                    <li>Шоколадные пряники в сахарной пудре</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">3600 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #6</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем </li>
                                    <li>Стейк Мачете с картофелем Дофинуаи соусом Чимимурри</li>
                                    <li>Тирамису с кремом на сыре Маскарпоне</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">5100 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #7</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">4200 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #12</div>
                            <div class="card__text">
                                <ul>
                                    <li>Салат с баклажаном и сыром фета</li>
                                    <li>Корейка на кости с печёным картофелем и брусничным соусом</li>
                                    <li>Шоколадные пряники в сахарной пудре</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">3600 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #6</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем </li>
                                    <li>Стейк Мачете с картофелем Дофинуаи соусом Чимимурри</li>
                                    <li>Тирамису с кремом на сыре Маскарпоне</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">5100 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #7</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">4200 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #12</div>
                            <div class="card__text">
                                <ul>
                                    <li>Салат с баклажаном и сыром фета</li>
                                    <li>Корейка на кости с печёным картофелем и брусничным соусом</li>
                                    <li>Шоколадные пряники в сахарной пудре</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">3600 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #6</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем </li>
                                    <li>Стейк Мачете с картофелем Дофинуаи соусом Чимимурри</li>
                                    <li>Тирамису с кремом на сыре Маскарпоне</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">5100 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #7</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">4200 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #12</div>
                            <div class="card__text">
                                <ul>
                                    <li>Салат с баклажаном и сыром фета</li>
                                    <li>Корейка на кости с печёным картофелем и брусничным соусом</li>
                                    <li>Шоколадные пряники в сахарной пудре</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">3600 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card1-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #6</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый салат с жареным Адыгейским сыром, виноградом и печёным перцем </li>
                                    <li>Стейк Мачете с картофелем Дофинуаи соусом Чимимурри</li>
                                    <li>Тирамису с кремом на сыре Маскарпоне</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">5100 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card2-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #7</div>
                            <div class="card__text">
                                <ul>
                                    <li>Тёплый чилийский салат с соусом Путонегро</li>
                                    <li>Запечённый палтус на цитрусовой подушке, с бейби картофелем и соусом Холландез</li>
                                    <li>Штрудель с лимонным курдом и грушевым мороженым</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">4200 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                    <li class="card swiper-slide">
                        <div class="card__gallery swiper js-sliderCard">
                            <div class="card__gallery-list swiper-wrapper">
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-2.png') }}" alt="">
                                </div>
                                <div class="card__gallery-img swiper-slide">
                                    <img src="{{ Vite::asset('resources/img/menu/card3-3.png') }}" alt="">
                                </div>
                            </div>
                            <div class="swiper-pagination-card swiper-pagination"></div>
                        </div>
                        <div class="card__body">
                            <div class="card__title">Меню #12</div>
                            <div class="card__text">
                                <ul>
                                    <li>Салат с баклажаном и сыром фета</li>
                                    <li>Корейка на кости с печёным картофелем и брусничным соусом</li>
                                    <li>Шоколадные пряники в сахарной пудре</li>
                                </ul>
                            </div>
                            <div class="card__box">
                                <div class="card__price">3600 ₽</div>
                                <button class="card__btn" type="button">Выбрать</button>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination-menu swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <h3 class="section-title">Популярные мастер-классы</h3>
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
