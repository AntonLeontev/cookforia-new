@extends('layouts.app')

@section('title', 'Рецепты')

@section('breadcrumbs')
	<x-breadcrumbs :links="[
		'/' => 'Главная',
		'#' => 'Рецепты',
	]" />
@endsection

@section('content')
    <section class="descriptor">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/recipes/descriptor.jpg') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Рецепты</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Мастер-классы</a>
                </div>
            </div>
        </div>
    </section>
    <section class="search">
        <div class="container">
            <div class="search__inner">
                <div class="search__socials">
                    <div class="search__socials-text">Подпишитесь на нас в социальных сетях</div>
                    <ul class="search__socials-list socials">
                        <li>
                            <a class="search__social social social--vk" href="#" target="_blank"></a>
                        </li>
                        <li>
                            <a class="search__social social social--tg" href="#" target="_blank"></a>
                        </li>
                        <li>
                            <a class="search__social social social--instagram" href="#" target="_blank"> </a>
                        </li>
                    </ul>
                </div>
                <div class="search__input-wrap">
                    <input class="search__input" type="text" placeholder="Найти рецепт по названию">
                    <button class="search__input-btn" type="button" aria-label="Найти"> </button>
                </div>
            </div>
        </div>
    </section>
    <section class="recipes-list">
        <div class="container">
            <div class="recipes__inner">
                <h2 class="recipes__title">Рецепты: готовим со студией Cookforia</h2>
                <div class="recipes__filters">
                    <div class="recipes__filter js-filterItem">
                        <div class="recipes__filter-name js-filterToggle">По категориям</div>
                        <ul class="recipes__filter-list js-filterList">
                            <li class="recipes__filter-item">
                                <input id="category1" type="checkbox">
                                <label for="category1">Блюда из мяса</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category2" type="checkbox">
                                <label for="category2">Блюда из рыбы</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category3" type="checkbox">
                                <label for="category3">Блюда из птицы</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category4" type="checkbox">
                                <label for="category4">Закуски</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category5" type="checkbox">
                                <label for="category5">Десерты</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category7" type="checkbox">
                                <label for="category7">Напитки</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category8" type="checkbox">
                                <label for="category8">Пицца и пироги</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category9" type="checkbox">
                                <label for="category9">Салаты</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category10" type="checkbox">
                                <label for="category10">Супы</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="category11" type="checkbox">
                                <label for="category11">Основные блюда</label>
                            </li>
                        </ul>
                    </div>
                    <div class="recipes__filter js-filterItem">
                        <div class="recipes__filter-name js-filterToggle">По кухне</div>
                        <ul class="recipes__filter-list js-filterList">
                            <li class="recipes__filter-item">
                                <input id="kitchen1" type="checkbox">
                                <label for="kitchen1">Итальянская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen2" type="checkbox">
                                <label for="kitchen2">Грузинская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen3" type="checkbox">
                                <label for="kitchen3">Французская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen4" type="checkbox">
                                <label for="kitchen4">Азиатская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen5" type="checkbox">
                                <label for="kitchen5">Мексиканская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen6" type="checkbox">
                                <label for="kitchen6">Русская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen7" type="checkbox">
                                <label for="kitchen7">Тайская</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen8" type="checkbox">
                                <label for="kitchen8">Турецкая</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="kitchen9" type="checkbox">
                                <label for="kitchen9">Еще какая-то кухня</label>
                            </li>
                        </ul>
                    </div>
                    <div class="recipes__filter js-filterItem">
                        <div class="recipes__filter-name js-filterToggle">По сложности</div>
                        <ul class="recipes__filter-list js-filterList">
                            <li class="recipes__filter-item">
                                <input id="complexity1" type="checkbox">
                                <label for="complexity1">Легкая</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="complexity2" type="checkbox">
                                <label for="complexity2">Средняя</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="complexity3" type="checkbox">
                                <label for="complexity3">Сложная</label>
                            </li>
                        </ul>
                    </div>
                    <div class="recipes__filter js-filterItem">
                        <div class="recipes__filter-name js-filterToggle">Блюда от Шефа</div>
                        <ul class="recipes__filter-list js-filterList">
                            <li class="recipes__filter-item">
                                <input id="chef1" type="checkbox">
                                <label for="chef1">Гудков Владимир</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="chef2" type="checkbox">
                                <label for="chef2">Смирнов Алексей</label>
                            </li>
                            <li class="recipes__filter-item">
                                <input id="chef3" type="checkbox">
                                <label for="chef3">Никулин Влад</label>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="recipes__items">
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                    <li class="recipes__item">
                        <a class="recipes__link" href="recipe.html">
                            <div class="recipes__img">
                                <img src="{{ Vite::asset('resources/img/recipes/recipe.png') }}" alt="">
                            </div>
                            <p class="recipes__name">Брускетта с томатами и моцареллой</p>
                            <time class="recipes__date" datetime="2025-02-03">03.02.2025</time>
                        </a>
                    </li>
                </ul>
                <div class="recipes__pagination">
                    <nav class="pagination">
                        <a class="pagination__link link-btn" href="#!">Показать больше</a>
                        <ol class="pagination__list">
                            <li class="pagination__prev">
                                <a href="#"></a>
                            </li>
                            <li class="pagination__item">
                                <a href="#">1</a>
                            </li>
                            <li class="pagination__item active">
                                <a href="#">2</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#">3</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#">4</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#">5</a>
                            </li>
                            <li class="pagination__dots">
                                <span>...</span>
                            </li>
                            <li class="pagination__next">
                                <a href="#"> </a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
