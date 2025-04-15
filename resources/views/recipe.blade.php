@extends('layouts.app')

@section('title', 'Рецепт')

@section('breadcrumbs')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        route('recipes') => 'Рецепты',
        '#' => 'Рецепт',
    ]" />
@endsection

@section('content')
    <section class="descriptor descriptor--small-pt">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/recipe/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <time class="descriptor__date" datetime="2025-02-10">10.02.2025</time>
                <h1 class="descriptor__title">Шоколадный торт с клубникой и карамелью</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Мастер-классы</a>
                </div>
            </div>
        </div>
    </section>
    <section class="recipe-content">
        <div class="container">
            <div class="content">
                <p>Ищете идеальный рецепт впечатляющего десерта? Ваш поиск окончен! Шоколадный торт с клубникой и карамелью
                    — это изысканное лакомство, которое привнесет нотку элегантности в любое торжество. Этот десерт сочетает
                    в себе насыщенный вкус бисквитного коржа, освежающую кислинку клубники и нежную сладость карамели.
                    Узнайте, как приготовить этот шедевр и поразите своих гостей!</p>
                <div>
                    <div class="box">
                        <div class="list">
                            <b>Шоколадный бисквит на белках</b>
                            <ul>
                                <li>2 шт. – яичные белки</li>
                                <li>20 г – сахара</li>
                                <li>30 г – сахарная пудра</li>
                                <li>5 г – какао-порошок</li>
                                <li>20 г – муки,</li>
                                <li>5 ч.л. – лимонный сок</li>
                                <li>1 пакетик – ванильного сахара</li>
                            </ul>
                        </div>
                        <div>
                            <p>Белки взбиваем, взбивать начинаем с самой маленькой скорости миксера и по мере увеличения
                                белков в объеме увеличиваем скорость. Белки взбиваем до плотности, добавляем сахар,
                                ванильный сахар и лимонный сок, взбиваем до плотной блестящей массы.</p>
                            <p>Муку просеиваем с какао и сахарной пудрой, добавляем к взбитым белкам. Аккуратно
                                перемешиваем, делаем это быстро, что бы белки как можно меньше потеряли воздуха.Тесто
                                выкладываем в форму, форму ничем смазывать не нужно! Выпекаем в разогретойдо 180 С духовке
                                около 10-15 минут, духовку не открываем. Готовность проверяем шпажкой.</p>
                            <p>Охладить и вырезать круг диаметром 17 см.</p>
                        </div>
                    </div>
                    <div class="slider swiper js-sliderContent">
                        <div class="slides swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/./img/recipe/holder1.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/./img/recipe/holder2.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/./img/recipe/holder3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination-slider swiper-pagination"></div>
                        <div class="arrows arrows--bg">
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box">
                        <div class="list">
                            <b>Карамель</b>
                            <ul>
                                <li>100 г – сахара</li>
                                <li>100 г – сливок</li>
                                <li>60 г – сливочного масла</li>
                                <li>100 г – клубничное пюре</li>
                                <li>7 г – желатинащепотка соли по желанию.</li>
                            </ul>
                        </div>
                        <div>
                            <p>Из сахара приготовить сухую карамель. Влить горячие сливки, перемешать до однородности. Из
                                клубники сделать пюре и протереть через сито, чтобы не было косточек.</p>
                            <p>Пробить блендером масло с клубникой. К карамели добавить клубничное масло, заранее замоченный
                                и набухший желатин. Пробить блендером. Залить в форму (диаметром 17) выстеленную пищевой
                                пленкой. </p>
                            <p>Заморозить.</p>
                        </div>
                    </div>
                    <div class="slider swiper js-sliderContent">
                        <div class="slides swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/./img/recipe/holder2.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/./img/recipe/holder1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination-slider swiper-pagination"></div>
                        <div class="arrows">
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box">
                        <div class="list">
                            <b>Мусс с молочным шоколадом</b>
                            <ul>
                                <li>225 г – сливок 35%</li>
                                <li>70 г – черного шоколада</li>
                                <li>100 г – молока</li>
                                <li>6 г – листового желатина</li>
                                <li>2 шт. – белка</li>
                                <li>80 г – сахара1/2 стручка – ванили</li>
                            </ul>
                        </div>
                        <div>
                            <p>Желатин замочить в холодной воде. Молоко вскипятить с ванилью. Дать настояться 15 минут.
                                Смешать с растопленным шоколадом. Добавить желатин. Остудить до 30 град. Подмешать
                                французскую меренгу и взбитые сливки.</p>
                            <p>
                                <b>Французская меренга.</b>
                                <br /> К белкам добавить сахар и прогреть до 60 градусов. Перелить в миску комбайна и
                                взбивать до устойчивых пиков.
                            </p>
                        </div>
                    </div>
                    <div class="slider swiper js-sliderContent">
                        <div class="slides swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination-slider swiper-pagination"></div>
                        <div class="arrows">
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box">
                        <p>
                            <b>Сборка</b>
                        </p>
                        <div>
                            <p>На дно формы или кольца, поставленного на ровную поверхность, покрытую слоем плотной пленки,
                                диаметром 19 см выложить 1/2 часть мусса. Кладем заготовку из компота и карамели. Вылить
                                остальной мусс по краю формы, накрыть бисквитом, слегка прокручивая. Поставитьв морозилку
                                минимум на 6 часов, лучше на ночь. На второй день покрыть гляссажем, украсить по своему
                                вкусу.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="box">
                        <div class="list">
                            <b>Гляссаж с молочным шоколадом</b>
                            <ul>
                                <li>50 г – воды</li>
                                <li>100 г – сахара</li>
                                <li>100 г – инвертного сиропа</li>
                                <li>100 г – молочного шоколада</li>
                                <li>67 г – сгущенного молока</li>
                                <li>10 г – желатина</li>
                            </ul>
                        </div>
                        <div>
                            <p>Сахар, инвертный сироп, воду довести до 103 градусов. Вылить на смесь сгущенного молока,
                                рубленного шоколада и набухшего желатина. Размешать до однородности, пробить блендером.
                                Поставить в холодильник минимум на 12 часов. Перед использованием разогреть на водяной бане
                                или микроволновке до 30-35 градусов.</p>
                        </div>
                    </div>
                    <div class="slider swiper js-sliderContent">
                        <div class="slides swiper-wrapper">
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder1.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder3.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder2.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder1.png') }}" alt="">
                            </div>
                            <div class="slide swiper-slide">
                                <img src="{{ Vite::asset('resources/img/recipe/holder2.png') }}" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination-slider swiper-pagination"></div>
                        <div class="arrows">
                            <button class="swiper-button-prev"></button>
                            <button class="swiper-button-next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
