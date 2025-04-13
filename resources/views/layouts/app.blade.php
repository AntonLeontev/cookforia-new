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

    {{-- <link href="css/style.min.css" type="text/css" rel="stylesheet">
    <script src="js/vendor.min.js" defer></script>
    <script src="js/app.min.js" defer></script> --}}

	<style>
		[x-cloak] { display: none !important; }
	</style>
</head>

<body class="body">
    <div class="wrapper">
        @include('partials.header')

        <main class="main">
			@yield('content')
        </main>
        
		@include('partials.footer')

        <button class="scroll-btn js-scrollUp" type="button">Наверх</button>
        
		@include('partials.schedule')
		@vite(['resources/css/schedule.css'])
    </div>
</body>

</html>
