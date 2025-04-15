@extends('layouts.app')

@section('title', 'Кулинарная студия Cookforia')

@section('content')
    <section class="descriptor">
        <div class="descriptor__img" inert>
            <img src="{{ Vite::asset('resources/img/index/descriptor.webp') }}" alt="">
        </div>
        <div class="container">
            <div class="descriptor__inner">
                <h1 class="descriptor__title">Кулинарная студия Cookforia</h1>
                <p class="descriptor__text">Научитесь готовить под руководством лучших шеф-поваров города</p>
                <div class="descriptor__links descriptor__links--noline">
                    <a class="descriptor__link" href="#">Заказать мероприятие</a>
                    <a class="descriptor__link" href="#">Мастер-классы</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section motivation">
        <div class="container">
            <div class="motivation__inner">
                <h2 class="section-title section-title--center">В&nbsp;студии Cookforia кулинария&nbsp;&mdash; это
                    не&nbsp;просто еда, а&nbsp;целая история эмоций и&nbsp;впечатлений! Приходите, и&nbsp;убедитесь сами!
                </h2>
                <ul class="motivation__items">
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation1.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">Для любого повода</h5>
                            <p class="motivation__text">Любое частное мероприятие
                                <br> Корпоратив или выпускной
                                <br> Детский праздник
                                <br> День рождения
                            </p>
                        </div>
                    </li>
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation2.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">Большой выбор меню различных кухонь мира</h5>
                            <a class="motivation__link" href="menu.html">Смотреть меню </a>
                        </div>
                    </li>
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation3.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">От 2 до 60 человек</h5>
                            <p class="motivation__text">Индивидуальный кулинарный мастер-класс для вашей компании</p>
                        </div>
                    </li>
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation4.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">Дополнительные услуги на любой вкус</h5>
                            <p class="motivation__text">Фотограф, фуршет, азотное шоу, видооператор, украшение зала шарами
                            </p>
                        </div>
                    </li>
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation5.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">Клиентоориентированность во всем</h5>
                            <p class="motivation__text">Быстрая обработка заявок
                                <br>Индивидуальный подход
                                <br>Персональный менеджер, доступные цены и качественное обслуживание
                            </p>
                        </div>
                    </li>
                    <li class="motivation__item">
                        <div class="motivation__icon">
                            <img src="{{ Vite::asset('resources//img/index/motivation6.png') }}" alt="">
                        </div>
                        <div class="motivation__description">
                            <h5 class="motivation__name">3 кулинарные студии рядом с метро</h5>
                            <p class="motivation__text">Студии в стильном дизайнерском оформлении с игровыми зонами для
                                детей и взрослых</p>
                        </div>
                    </li>
                </ul>
                <div class="motivation__content">
                    <h4>Добро пожаловать в&nbsp;Cookforia&nbsp;&mdash; место, где кулинария превращается в&nbsp;искусство!
                    </h4>
                    <p class="motivation__text">Наша кулинарная студия предлагает уникальную возможность научиться готовить
                        под руководством опытных шеф-поваров и&nbsp;насладиться процессом создания блюд. Мы&nbsp;проводим
                        кулинарные мастер-классы для всех, кто хочет совершенствовать свои навыки&nbsp;&mdash;
                        от&nbsp;новичковдо&nbsp;гурманов. В&nbsp;уютной атмосфере студии каждый сможет раскрыть свой
                        кулинарный потенциал и&nbsp;создать настоящие гастрономические шедевры. В&nbsp;Cookforia можно
                        организовать мастер-классы, отметить праздник, провести корпоративное мероприятие или просто приятно
                        провести время за&nbsp;приготовлением блюд.
                        <br>Присоединяйтесь к нам, откройте новые гастрономические горизонты, почувствуйте себя шеф-поваром
                        и получите незабываемые эмоции!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section section--bg">
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
    <section class="section additions">
        <div class="container">
            <h3 class="section-title">Приятные дополнения</h3>
            <ul class="additions__list">
                <li class="additions__item">
                    <div class="additions__img">
                        <img src="{{ Vite::asset('resources/img/index/additions1.png') }}" alt="">
                    </div>
                    <p class="additions__name">Возможность продления мероприятия</p>
                </li>
                <li class="additions__item">
                    <div class="additions__img">
                        <img src="{{ Vite::asset('resources/img/index/additions2.png') }}" alt="">
                    </div>
                    <p class="additions__name">Безлимитные безалкогольные напитки</p>
                </li>
                <li class="additions__item">
                    <div class="additions__img">
                        <img src="{{ Vite::asset('resources/img/index/additions3.png') }}" alt="">
                    </div>
                    <p class="additions__name">Зона отдыха с кикером и playstation</p>
                </li>
                <li class="additions__item">
                    <div class="additions__img">
                        <img src="{{ Vite::asset('resources/img/index/additions4.png') }}" alt="">
                    </div>
                    <p class="additions__name">Игровая зона для детей</p>
                </li>
            </ul>
            <div class="additions__text">К вашим услугам: стильное и комфортное пространство для проведения мероприятия
                (кухонный остров со всем необходимым оборудованием и инвентарем), профессиональная команда (шеф-повар,
                ведущий, официанты, бармены), безлимитные безалкогольные напитки, возможность организации фуршета,
                разнообразное меню, зоны отдыха для взрослых и детей, азотное шоу.</div>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <div class="celebrate__inner">
                <h2 class="section-title">Действующие акции</h2>
                <div class="celebrate__slider swiper js-sliderCelebrate">
                    <div class="celebrate__list swiper-wrapper">
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide1.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">День рождения </h5>
                            <div class="celebrate__item-link">
                                <a class="link-btn link-btn--wide" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide2.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">Корпоратив</h5>
                            <div class="celebrate__item-link">
                                <a class="link-btn link-btn--wide" href="#">Подробнее</a>
                            </div>
                        </div>
                        <div class="celebrate__item swiper-slide">
                            <div class="celebrate__img">
                                <img src="{{ Vite::asset('resources/img/celebrate/slide3.png') }}" alt="">
                            </div>
                            <h5 class="celebrate__item-title">Свидание для двоих 14.02</h5>
                            <div class="celebrate__item-link">
                                <a class="link-btn link-btn--wide" href="#">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-celebrate swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="certificate">
        <div class="container">
            <div class="certificate__inner">
                <picture class="certificate__img">
                    <source srcset="{{ Vite::asset('resources/img/certificate/certificate.webp') }}" type="image/webp">
                    <img src="{{ Vite::asset('resources/img/certificate/certificate.png') }}" alt="Подарочный сертификат">
                </picture>
                <div class="certificate__description">
                    <h4 class="certificate__title">Подарочный сертификат</h4>
                    <p class="certificate__text">Приходите к нам вместе с другом или самостоятельно, учитесь готовить легко
                        и просто, или подарите такую возможность близким!</p>
                    <a class="certificate__link link-btn" href="#">Выбрать сертификат</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section chefs">
        <div class="container">
            <h3 class="section-title">Наши шеф-повара</h3>
            <div class="chefs__slider swiper js-sliderChefs">
                <ul class="chefs__list swiper-wrapper">
                    <li class="chefs__item swiper-slide">
                        <div class="chefs__img">
                            <img src="{{ Vite::asset('resources/img/index/chefs1.png') }}" alt="">
                        </div>
                        <div class="chefs__description">
                            <div class="chefs__name">Гудков Владимир</div>
                            <div class="chefs__speciality">Шеф-повар, кондитер, пекарь</div>
                            <div class="chefs__text">Опытный шеф-повар с более чем 15-ю годами успешной работы в сфере
                                кулинарии, обладающий страстью к созданию уникальных блюд, которые радуют не только глаз, но
                                и вкус.</div>
                        </div>
                    </li>
                    <li class="chefs__item swiper-slide">
                        <div class="chefs__img">
                            <img src="{{ Vite::asset('resources/img/index/chefs2.png') }}" alt="">
                        </div>
                        <div class="chefs__description">
                            <div class="chefs__name">Смирнов Алексей</div>
                            <div class="chefs__speciality">Шеф-повар, кондитер, пекарь</div>
                            <div class="chefs__text">Люблю готовить, считаю что приготовление пищи это сакральное дело, и
                                относиться к нему надо с душойи внимательностью, одним словом любить своё дело».В кулинарии
                                более 13 лет, за это время успел познать гастрономический дзен.</div>
                        </div>
                    </li>
                    <li class="chefs__item swiper-slide">
                        <div class="chefs__img">
                            <img src="{{ Vite::asset('resources/img/index/chefs3.png') }}" alt="">
                        </div>
                        <div class="chefs__description">
                            <div class="chefs__name">Никулин Влад</div>
                            <div class="chefs__speciality">Шеф-повар, кондитер, пекарь</div>
                            <div class="chefs__text">Моя карьера охватывает широкий спектр кухонь, где я развивал свои
                                навыки, работая в престижных ресторанахи на гастрономических фестивалях.</div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination-chefs swiper-pagination"></div>
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
