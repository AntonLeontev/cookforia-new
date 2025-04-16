<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="theme-color" content="#FFFFFF">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, viewport-fit=cover, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    @vite(['resources/scss/style.scss', 'resources/js/app.js'])

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="body" x-data>
    <div class="wrapper">
        @include('partials.header')

        @yield('breadcrumbs')

        <main class="main">
            @yield('content')
        </main>

        @include('partials.footer')

        <button class="scroll-btn js-scrollUp" type="button">Наверх</button>

        @include('partials.schedule')
        @vite(['resources/css/schedule.css'])

        <div id="popup-callback" class="popup js-popup" :class="show && 'js-block'" 
			x-data="{
				show: false,

				open() {
					this.show = true
				},
				close() {
					this.show = false
				}
			}"
			@form-open.window="open"
		>
            <div class="popup__content">
                <div class="popup__inner">
                    <div class="popup__close" @click="close()"></div>
                    <h5 class="popup__title">Оставить заявку</h5>
                    <form class="popup__form">
                        <div class="popup__field">
                            <input class="popup__input" type="text" name="fio" placeholder="Ваше имя">
                            <span class="popup__error">Ошибка! Поле обязательно для заполнения</span>
                        </div>
                        <div class="popup__field">
                            <input class="popup__input js-inputPhone" type="text" name="tel"
                                placeholder="+7 (999) 000-00-00">
                            <span class="popup__error">Ошибка! Поле обязательно для заполнения</span>
                        </div>
                        <div class="popup__select">
                            <select id="select-studio" class="popup__select" name="studio">
                                <option value="" disabled selected>Выберете студию</option>
                                <option value="studio1">Студия на ул. Дыбенко, 8к1 </option>
                                <option value="studio2">Студия на Московский проспект 182-185</option>
                                <option value="studio3">Студия на ул. Ильюшина 5, корп. 1</option>
                            </select>
                            <span class="popup__error">Ошибка! Выберете студию</span>
                        </div>
                        <div class="popup__send">
                            <button class="js-formBtn" type="submit">Арендовать студию</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
