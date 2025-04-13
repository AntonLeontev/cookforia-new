
<!--widget-schedule_active добавляется при нажатии на кнопку виджета -->
<div class="widget-schedule" x-data="scheduleWidget" :class="active && 'widget-schedule_active'" x-cloak>
	<button class="calendar js-calendar" type="button" aria-label="Расписание записей" @click="active = true" x-show="!active" x-transition></button>
    {{-- <div class="call-animation" @click="active = true">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="phone-icon">
            <svg width="24" height="27" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M22 2.89001H19V1.89001C19 1.6248 18.8946 1.37044 18.7071 1.18291C18.5196 0.995371 18.2652 0.890015 18 0.890015C17.7348 0.890015 17.4804 0.995371 17.2929 1.18291C17.1054 1.37044 17 1.6248 17 1.89001V2.89001H7V1.89001C7 1.6248 6.89464 1.37044 6.70711 1.18291C6.51957 0.995371 6.26522 0.890015 6 0.890015C5.73478 0.890015 5.48043 0.995371 5.29289 1.18291C5.10536 1.37044 5 1.6248 5 1.89001V2.89001H2C1.46957 2.89001 0.960859 3.10073 0.585786 3.4758C0.210714 3.85087 0 4.35958 0 4.89001V24.89C0 25.4204 0.210714 25.9292 0.585786 26.3042C0.960859 26.6793 1.46957 26.89 2 26.89H22C22.5304 26.89 23.0391 26.6793 23.4142 26.3042C23.7893 25.9292 24 25.4204 24 24.89V4.89001C24 4.35958 23.7893 3.85087 23.4142 3.4758C23.0391 3.10073 22.5304 2.89001 22 2.89001ZM5 4.89001V5.89001C5 6.15523 5.10536 6.40958 5.29289 6.59712C5.48043 6.78466 5.73478 6.89001 6 6.89001C6.26522 6.89001 6.51957 6.78466 6.70711 6.59712C6.89464 6.40958 7 6.15523 7 5.89001V4.89001H17V5.89001C17 6.15523 17.1054 6.40958 17.2929 6.59712C17.4804 6.78466 17.7348 6.89001 18 6.89001C18.2652 6.89001 18.5196 6.78466 18.7071 6.59712C18.8946 6.40958 19 6.15523 19 5.89001V4.89001H22V8.89001H2V4.89001H5ZM22 24.89H2V10.89H22V24.89ZM17.2075 14.1825C17.3005 14.2754 17.3742 14.3857 17.4246 14.5071C17.4749 14.6285 17.5008 14.7586 17.5008 14.89C17.5008 15.0214 17.4749 15.1516 17.4246 15.273C17.3742 15.3944 17.3005 15.5046 17.2075 15.5975L11.2075 21.5975C11.1146 21.6905 11.0043 21.7643 10.8829 21.8146C10.7615 21.8649 10.6314 21.8908 10.5 21.8908C10.3686 21.8908 10.2385 21.8649 10.1171 21.8146C9.99566 21.7643 9.88537 21.6905 9.7925 21.5975L6.7925 18.5975C6.60486 18.4099 6.49944 18.1554 6.49944 17.89C6.49944 17.6247 6.60486 17.3702 6.7925 17.1825C6.98014 16.9949 7.23464 16.8895 7.5 16.8895C7.76536 16.8895 8.01986 16.9949 8.2075 17.1825L10.5 19.4763L15.7925 14.1825C15.8854 14.0895 15.9957 14.0158 16.1171 13.9655C16.2385 13.9151 16.3686 13.8892 16.5 13.8892C16.6314 13.8892 16.7615 13.9151 16.8829 13.9655C17.0043 14.0158 17.1146 14.0895 17.2075 14.1825Z"
                    fill="white"/>
            </svg>
        </div>
    </div> --}}
    <!-- Добавляется класс content-widget-schedule_change при нажатии на кнопку 'выбрать дату'-->
    <div class="widget-schedule__content content-widget-schedule content-widget-schedule_change">
        <button class="content-widget-schedule__close" type="button" @click="active = false">
            <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M15.2806 14.2194C15.3502 14.2891 15.4055 14.3718 15.4432 14.4629C15.4809 14.5539 15.5003 14.6515 15.5003 14.7501C15.5003 14.8486 15.4809 14.9462 15.4432 15.0372C15.4055 15.1283 15.3502 15.211 15.2806 15.2807C15.2109 15.3504 15.1281 15.4056 15.0371 15.4433C14.9461 15.4811 14.8485 15.5005 14.7499 15.5005C14.6514 15.5005 14.5538 15.4811 14.4628 15.4433C14.3717 15.4056 14.289 15.3504 14.2193 15.2807L7.99993 9.06036L1.78055 15.2807C1.63982 15.4214 1.44895 15.5005 1.24993 15.5005C1.05091 15.5005 0.860034 15.4214 0.719304 15.2807C0.578573 15.1399 0.499512 14.9491 0.499512 14.7501C0.499512 14.551 0.578573 14.3602 0.719304 14.2194L6.93962 8.00005L0.719304 1.78068C0.578573 1.63995 0.499512 1.44907 0.499512 1.25005C0.499512 1.05103 0.578573 0.860156 0.719304 0.719426C0.860034 0.578695 1.05091 0.499634 1.24993 0.499634C1.44895 0.499634 1.63982 0.578695 1.78055 0.719426L7.99993 6.93974L14.2193 0.719426C14.36 0.578695 14.5509 0.499634 14.7499 0.499634C14.949 0.499634 15.1398 0.578695 15.2806 0.719426C15.4213 0.860156 15.5003 1.05103 15.5003 1.25005C15.5003 1.44907 15.4213 1.63995 15.2806 1.78068L9.06024 8.00005L15.2806 14.2194Z"
                    fill="#343330"/>
            </svg>
        </button>

        <div class="content-widget-schedule__logo">
            <img src="{{ Vite::asset('resources/img/schedule-widget/logo-about.svg') }}" alt="Кулинарная студия 'Cookforia'">
        </div>

        <div class="content-widget-schedule__inner">
			<div class="content-widget-schedule__start" :class="page === 'form' && 'active'">
				<div x-show="!formSuccess">
					<div class="content-widget-schedule__text">
						<p>Выбранная дата: <span x-text="selectedDate?.toLocaleString('ru-RU', {day: 'numeric',month: 'long'}).replace(',', '')"></span></p>
						<p>Выбранное время: <span x-text="selectedInterval">13:00 - 16:00</span></p>
						<p>Студия: <span x-text="selectedStudio">13:00 - 16:00</span></p>
					</div>
					<form class="content-widget-schedule__form form" @submit.prevent="submit">
						@csrf
						<input type="hidden" name="metrika_client_id">
						<div class="form__row">
							<input class="form__input input" autocomplete="off" type="text" placeholder="Введите имя" name="name" maxlength="255" required>
						</div>
						<div class="form__row">
							<input class="form__input input-phone" type="text" name="phone" placeholder="Телефон" required>
						</div>
						<div class="form__row">
							<button type="submit" class="btn btn-form" :disabled="formProcessing">
								<span x-show="!formProcessing">Забронировать</span>
								<span x-show="formProcessing">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200" width="24"><radialGradient id="a9" cx=".66" fx=".66" cy=".3125" fy=".3125" gradientTransform="scale(1.5)"><stop offset="0" stop-color="currentColor"></stop><stop offset=".3" stop-color="currentColor" stop-opacity=".9"></stop><stop offset=".6" stop-color="currentColor" stop-opacity=".6"></stop><stop offset=".8" stop-color="currentColor" stop-opacity=".3"></stop><stop offset="1" stop-color="currentColor" stop-opacity="0"></stop></radialGradient><circle transform-origin="center" fill="none" stroke="url(#a9)" stroke-width="22" stroke-linecap="round" stroke-dasharray="200 1000" stroke-dashoffset="0" cx="100" cy="100" r="70"><animateTransform type="rotate" attributeName="transform" calcMode="spline" dur="2" values="360;0" keyTimes="0;1" keySplines="0 0 1 1" repeatCount="indefinite"></animateTransform></circle><circle transform-origin="center" fill="none" opacity=".2" stroke="currentColor" stroke-width="22" stroke-linecap="round" cx="100" cy="100" r="70"></circle></svg>
								</span>
							</button>
						</div>
					</form>
					<div class="form__buttons">
						<button class="btn btn_outline btn-form" type="button" @click="page = 'picker'">Изменить дату</button>
					</div>
				</div>

				<div class="success-page" x-show="formSuccess">
					Заявка отправлена успешно
				</div>
            </div>

            <div class="content-widget-schedule__change" :class="page === 'picker' && 'active'">
                <!-- datepicker классы:
                date-avaliable -  доступные даты ;
                date-unavailable - недоступные даты;
                date-sale - дата со скидкой;
                выбранное число уже работает.-->
                <div class="content-widget-schedule__info">
                    <input class="input" hidden="hidden" autocomplete="off" data-datepicker type="text" placeholder="">
                </div>
                <!--end  datepicker-->
                <div class="content-widget-schedule__detail detail-schedule">
                    <div class="detail-schedule__item">
                        <div class="detail-schedule__color" style="background-color: #D6D6D6;"></div>
                        <div class="detail-schedule__label">Запись недоступна</div>
                    </div>
                    <div class="detail-schedule__item">
                        <div class="detail-schedule__color" style="background-color:  rgba(255, 185, 20, .5);"></div>
                        <div class="detail-schedule__label">Запись доступна</div>
                    </div>
                    {{-- <div class="detail-schedule__item">
                        <div class="detail-schedule__color" style="background-color: #AED5F9;"></div>
                        <div class="detail-schedule__label">Запись доступна со скидкой! <small>Минимальная сумма
                                мастер-класса: 15 000₽</small></div>
                    </div> --}}
                </div>

                <!--popup-param для активации добавить класс popup-param_show-->
                <div class="detail-schedule__popup popup-param" :class="popup && 'popup-param_show'">
                    <button class="popup-param__close" type="button" @click="popup = false">
                        <svg viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M15.2806 14.2194C15.3502 14.2891 15.4055 14.3718 15.4432 14.4629C15.4809 14.5539 15.5003 14.6515 15.5003 14.7501C15.5003 14.8486 15.4809 14.9462 15.4432 15.0372C15.4055 15.1283 15.3502 15.211 15.2806 15.2807C15.2109 15.3504 15.1281 15.4056 15.0371 15.4433C14.9461 15.4811 14.8485 15.5005 14.7499 15.5005C14.6514 15.5005 14.5538 15.4811 14.4628 15.4433C14.3717 15.4056 14.289 15.3504 14.2193 15.2807L7.99993 9.06036L1.78055 15.2807C1.63982 15.4214 1.44895 15.5005 1.24993 15.5005C1.05091 15.5005 0.860034 15.4214 0.719304 15.2807C0.578573 15.1399 0.499512 14.9491 0.499512 14.7501C0.499512 14.551 0.578573 14.3602 0.719304 14.2194L6.93962 8.00005L0.719304 1.78068C0.578573 1.63995 0.499512 1.44907 0.499512 1.25005C0.499512 1.05103 0.578573 0.860156 0.719304 0.719426C0.860034 0.578695 1.05091 0.499634 1.24993 0.499634C1.44895 0.499634 1.63982 0.578695 1.78055 0.719426L7.99993 6.93974L14.2193 0.719426C14.36 0.578695 14.5509 0.499634 14.7499 0.499634C14.949 0.499634 15.1398 0.578695 15.2806 0.719426C15.4213 0.860156 15.5003 1.05103 15.5003 1.25005C15.5003 1.44907 15.4213 1.63995 15.2806 1.78068L9.06024 8.00005L15.2806 14.2194Z"
                                fill="#343330"/>
                        </svg>
                    </button>
                    <div class="popup-param__date" x-text="selectedDate?.toLocaleString('ru-RU', {day: 'numeric',month: 'long'}).replace(',', '')"></div>
                    <div class="options options_address" style="min-height: 238px">
						<template x-for="studio in studios">
							<div class="options__item">
								<input id="o_1" class="options__input" checked type="radio"
									   value="ул. Московский проспект 183-185" name="address">
								<label for="o_1" class="options__label options__label_address">
									<span class="options__text" x-text="studio.address"></span>
								</label>
								<!--options.options_time activation add class options_show-->
								<div class="options options_time options_show">
									<template x-for="slot in studio.slots">
										<div class="options__item">
											<input id="t_1" class="options__input" type="radio" value="11:00 - 14:00"
												   name="time">
											<!--options__label example - .options__label.date-avaliable
											date-avaliable -  доступные даты ;
											date-unavailable - недоступные даты;
											date-sale - дата со скидкой;
											 -->
											<label for="t_1" class="options__label" 
												:class="slot.is_busy ? 'date-unavailable' : 'date-avaliable'"
												@click="selectSlot(slot, studio)"
											>
												<span class="options__text" x-text="slot.interval">11:00 - 14:00</span>
											</label>
											<!--end options__label example - options__label -->
										</div>
									</template>
								</div>
								<!--end  options.options_time-->
							</div>
						</template>
                    </div>
                </div>
                <!--end  popup-param-->

                <div class="content-widget-schedule__more">
                    Выберите день, когда вы хотите поучаствовать в кулинарном мастер-классе
                </div>
            </div>
        </div>
    </div>
</div>
<!--end content-widget-schedule -->
</div>

<script>
	document.addEventListener('alpine:init', () => {
		Alpine.data('scheduleWidget', () => ({
			active: false,
			popup: false,
			page: 'picker',
			formProcessing: false,
			formSuccess: false,
			selectedDate: null,
			selectedInterval: null,
			selectedStudio: null,
			studios: [],
			cache: {},
			
			init() {
				let date = new Date();
				date.setDate(date.getDate() + 3);

				datepicker("[data-datepicker]", {
					customDays: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
					customMonths: [
						"Январь",
						"Февраль",
						"Март",
						"Апрель",
						"Май",
						"Июнь",
						"Июль",
						"Август",
						"Сентябрь",
						"Октябрь",
						"Ноябрь",
						"Декабрь",
					],
					overlayButton: "Применить",
					overlayPlaceholder: "Год (4 цифры)",
					startDay: 1,
					alwaysShow: true,
					showAllDates: true,
					minDate: date,
					onSelect: this.selectDate.bind(this),
				});

			},
			selectDate(input, instance, date) {
				this.selectedDate = instance;
				this.studios = []
				this.popup = true

				if (this.cache[instance.toISOString()]) {
					this.studios = this.cache[instance.toISOString()]
					return
				}

				axios.get('/schedule', {
					params: {
						date: instance.toISOString(),
					}
				})
				.then(response => {
					// console.log(response.data);
					this.studios = response.data.data
					this.cache[instance.toISOString()] = response.data.data
				})
				.catch(error => {
					console.log(error)
				})
			},
			selectSlot(slot, studio) {
				if (slot.is_busy) {
					return
				}

				this.selectedInterval = slot.interval
				this.selectedStudio = studio.address
				this.page = 'form'
			},
			submit(event) {
				let form = new FormData(event.target);
				form.append('studio', this.selectedStudio);
				form.append('slot', this.selectedInterval);
				form.append('date', this.selectedDate?.toLocaleString('ru-RU', {day: 'numeric',month: 'long', year: 'numeric'}).replace(',', ''));

				this.formProcessing = true

				axios.post('/schedule/book', form)
					.then(response => {
						this.formSuccess = true
					})
					.catch(error => {
						console.log(error)
					})
					.finally(() => {
						this.formProcessing = false
						// this.sendDataToMango(form)
					})
			},
			sendDataToMango(form) {
				form.append('fid', 'Виджет расписания');

				mgo.postForm(Object.fromEntries(form.entries()));
			},
		}))
	})
</script>

