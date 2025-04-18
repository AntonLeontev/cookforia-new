@extends('layouts.app')

@section('title', 'Статья')

@section('breadcrumbs')
    <x-breadcrumbs :links="[
        '/' => 'Главная',
        route('blog') => 'Блог',
        '#' => 'Статья',
    ]" />
@endsection

@section('content')
    <section class="descriptor descriptor--small-pt">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/blog/descriptor-article.jpeg') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <time class="descriptor__date" datetime="2025-02-10">10.02.2025</time>
                <h1 class="descriptor__title">Кулинарное путешествие: вкусы Италии на вашей кухне</h1>
                <div class="descriptor__links">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Мастер-классы</a>
                </div>
            </div>
        </div>
    </section>
    <article class="article">
        <div class="container">
            <div class="article-content">
				<h1>Title</h1>
				<h2>Title</h2>
				<h3>Title</h3>
                <p>Солнечная Италия – это не только живописные пейзажи и древние города, но и невероятное разнообразие
                    вкусов! Ароматные травы, спелые помидоры, душистый базилик… Все это создает неповторимую атмосферу
                    итальянской кухни, которую вы можете легко воссоздать у себя дома.</p>
                <p>В этой статье мы предлагаем вам отправиться в небольшое кулинарное путешествие по Италии, не выходя из
                    собственной кухни. Мы поделимся рецептами, которые помогут вам почувствовать настоящий вкус Италии, от
                    простых и быстрых до более сложных, требующих времени и терпения.</p>
                <img src="{{ Vite::asset('resources/img/blog/article1.png') }}" alt="">
                <p>
                    <b>Начните свое путешествие с классики:</b>
                </p>
                <p>
                    <b>Паста Карбонара:</b> Кремовый соус, приготовленный с гуанчале (итальянской свиной щековиной) или
                    панчеттой, яйцами и сыром пекорино-романо, идеально сочетается с аль денте спагетти. Секрет настоящей
                    карбонары – в правильном приготовлении соуса, который должен быть нежным и воздушным. Мы поделимся с
                    вами секретами приготовления этого культового блюда!
                </p>
                <p>
                    <b>Пицца Маргарита:</b> Простая, но невероятно вкусная пицца, состоящая всего из помидоров, моцареллы и
                    базилика. Главное – использовать качественные ингредиенты, а также правильно замесить тесто, чтобы пицца
                    получилась хрустящей и тонкой.
                </p>
                <p>
                    <b>Тирамису:</b> Этот классический итальянский десерт – идеальное завершение вашего кулинарного
                    путешествия. Нежный бисквит, пропитанный кофе, и воздушный крем маскарпоне – настоящий взрыв вкуса!
                </p>
                <img src="{{ Vite::asset('resources/img/blog/article2.png') }}" alt="">
            </div>
        </div>
    </article>
@endsection
