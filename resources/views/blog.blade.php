@extends('layouts.app')

@section('title', 'Блог')

@section('breadcrumbs')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        '#' => 'Блог',
    ]" />
@endsection

@section('content')
    <section class="descriptor">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/blog/descriptor.jpeg') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Блог</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Записаться на МК</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section blog">
        <div class="container">
            <div class="blog__inner">
                <h2 class="section-title">Новости и статьи студии Cookforia</h2>
                <div class="blog__slider swiper js-sliderBlog">
                    <ul class="blog__list swiper-wrapper">
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card1.jpeg" alt="">
                                <p class="blog__name">Кулинарное путешествие: вкусы Италии на вашей кухне</p>
                                <time class="blog__date" datetime="2025-02-10">10.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card2.jpeg" alt="">
                                <p class="blog__name">От простого к изысканному: 3 простых рецепта пасты</p>
                                <time class="blog__date" datetime="2025-02-09">09.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card3.jpeg" alt="">
                                <p class="blog__name">Секреты шеф-повара: мастер-класс по приготовлению роллов</p>
                                <time class="blog__date" datetime="2025-02-10">08.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card1.jpeg" alt="">
                                <p class="blog__name">Кулинарное путешествие: вкусы Италии на вашей кухне</p>
                                <time class="blog__date" datetime="2025-02-10">10.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card2.jpeg" alt="">
                                <p class="blog__name">От простого к изысканному: 3 простых рецепта пасты</p>
                                <time class="blog__date" datetime="2025-02-09">09.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card3.jpeg" alt="">
                                <p class="blog__name">Секреты шеф-повара: мастер-класс по приготовлению роллов</p>
                                <time class="blog__date" datetime="2025-02-10">08.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card1.jpeg" alt="">
                                <p class="blog__name">Кулинарное путешествие: вкусы Италии на вашей кухне</p>
                                <time class="blog__date" datetime="2025-02-10">10.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card2.jpeg" alt="">
                                <p class="blog__name">От простого к изысканному: 3 простых рецепта пасты</p>
                                <time class="blog__date" datetime="2025-02-09">09.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card3.jpeg" alt="">
                                <p class="blog__name">Секреты шеф-повара: мастер-класс по приготовлению роллов</p>
                                <time class="blog__date" datetime="2025-02-10">08.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card1.jpeg" alt="">
                                <p class="blog__name">Кулинарное путешествие: вкусы Италии на вашей кухне</p>
                                <time class="blog__date" datetime="2025-02-10">10.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card2.jpeg" alt="">
                                <p class="blog__name">От простого к изысканному: 3 простых рецепта пасты</p>
                                <time class="blog__date" datetime="2025-02-09">09.02.2025</time>
                            </a>
                        </li>
                        <li class="blog__item swiper-slide">
                            <a class="blog__card" href="article.html">
                                <img class="blog__img" src="img/blog/card3.jpeg" alt="">
                                <p class="blog__name">Секреты шеф-повара: мастер-класс по приготовлению роллов</p>
                                <time class="blog__date" datetime="2025-02-10">08.02.2025</time>
                            </a>
                        </li>
                    </ul>
                    <div class="swiper-pagination-blog swiper-pagination"></div>
                </div>
                <button class="btn blog__btn" type="button">Показать больше</button>
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

    <section class="section partners">
        <div class="container">
            <h3 class="section-title">Наши партнеры</h3>
            <ul class="partners__list">
                <li class="partners__item">
                    <div class="partners__img">
                        <img src="{{ Vite::asset('resources/img/partners/partner1.png') }}" alt="">
                    </div>
                </li>
                <li class="partners__item">
                    <div class="partners__img">
                        <img src="{{ Vite::asset('resources/img/partners/partner2.png') }}" alt="">
                    </div>
                </li>
                <li class="partners__item">
                    <div class="partners__img">
                        <img src="{{ Vite::asset('resources/img/partners/partner3.png') }}" alt="">
                    </div>
                </li>
                <li class="partners__item">
                    <div class="partners__img">
                        <img src="{{ Vite::asset('resources/img/partners/partner4.png') }}" alt="">
                    </div>
                </li>
                <li class="partners__item">
                    <div class="partners__img">
                        <img src="{{ Vite::asset('resources/img/partners/partner5.png') }}" alt="">
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
