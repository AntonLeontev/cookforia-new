<footer class="footer">
	<div class="container">
		<form class="footer__form">
			<h6 class="footer__form-title">Забронировать мероприятие</h6>
			<p class="footer__form-text">Оставьте ваши контакты и мы свяжемся с вами в самое ближайшее время
			</p>
			<div class="footer__form-inputs">
				<input class="footer__form-input" type="text" name="fio" placeholder="Ваше имя">
				<input class="footer__form-input js-inputPhone" type="text" name="tel"
					placeholder="+7 (999) 000-00-00">
			</div>
			<button class="footer__form-btn" type="submit">Оставить заявку</button>
			<div class="footer__form-policy">Нажимая на кнопку, Вы соглашаетесь с <a href="#"
					target="_blank">Политикой конфиденциальности</a>
			</div>
			<div class="footer__form-socials">
				<a class="footer__form-social" href="#" target="_blank">Написать в WhatsApp</a>
				<a class="footer__form-social footer__form-social--tg" href="#"
					target="_blank">Написать в Telegram</a>
			</div>
		</form>
		<div class="footer__inner">
			<div class="footer__logo">
				<img src="{{ Vite::asset('resources/img/icons/logo.svg') }}" alt="">
			</div>
			<div class="footer__copyrights">
				<span>&copy;&nbsp;Все права защищены</span>
				<span>Копирование информации с сайта запрещено</span>
			</div>
			<div class="footer__docs">
				<a class="footer__doc" href="#" target="_blank">Условия предоставления услуг</a>
				<a class="footer__doc" href="#" target="_blank">Политика обработки персональных
					данных</a>
				<a class="footer__doc" href="#" target="_blank">Оферта</a>
			</div>
			<div class="footer__links">
				<ul class="footer__col">
					<li class="footer__link">
						<a href="/">Главная</a>
					</li>
					<li class="footer__link">
						<a href="events.html">Мероприятия</a>
					</li>
					<li class="footer__link">
						<a href="#">Мастер-классы</a>
					</li>
					<li class="footer__link">
						<a href="#">Аренда студии</a>
					</li>
					<li class="footer__link">
						<a href="#">Сборный мастер-класс</a>
					</li>
					<li class="footer__link">
						<a href="#">Рецепты</a>
					</li>
				</ul>
				<ul class="footer__col">
					<li class="footer__link">
						<a href="#">Блог</a>
					</li>
					<li class="footer__link">
						<a href="menu.html">Меню</a>
					</li>
					<li class="footer__link">
						<a href="certificates.html">Сертификаты</a>
					</li>
					<li class="footer__link">
						<a href="stocks.html">Акции</a>
					</li>
					<li class="footer__link">
						<a href="#">Контакты</a>
					</li>
				</ul>
				<ul class="footer__col">
					<li class="footer__link">
						<a href="#">Лофт-пространство</a>
					</li>
					<li class="footer__link">
						<a href="#">Детская студия</a>
					</li>
				</ul>
			</div>
			<div class="footer__subscribe">
				<div class="footer__subscribe-text">Подпишитесь на нас в социальных сетях:</div>
				<ul class="footer__socials socials">
					<li>
						<a class="footer__social social social--vk" href="#" target="_blank"></a>
					</li>
					<li>
						<a class="footer__social social social--tg" href="#" target="_blank"></a>
					</li>
					<li>
						<a class="footer__social social social--instagram" href="#" target="_blank">
						</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="footer__copyrights footer__copyrights--desktop">
			<span>&copy;&nbsp;Все права защищены</span>
			<span>Копирование информации с сайта запрещено</span>
		</div>
	</div>
	<div class="footer__contacts js-footerContacts">
		<a class="footer__contact" href="tel:+78126113908">Написать</a>
		<a class="footer__contact" href="mailto:contact@cookforia.ru">Позвонить</a>
	</div>
</footer>
