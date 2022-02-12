    <? if($page == 'admin') { ?>

		<footer class="footer">
			<div class="footer__logo">
				<svg>
					<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
				</svg>
			</div>
		</footer>

	<? } else { ?>
	
		<footer class="footer">
			<div class="container">
				<div class="footer__wrapper">
					<div class="footer__col footer__col--logo">
						<a href="/" class="footer__logo">
							<svg>
								<use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
							</svg>
						</a>
						<div class="footer__mob-social">
							<div class="footer__title">
								Соцсети
							</div>
							<div class="social">
								<ul class="social__list">
									<li>
										<a href="#" target="_blank">
											<svg width="19" height="19">
												<use xlink:href="<?= $target; ?>/img/icons.svg#insta"/>
											</svg>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<svg width="11" height="19">
												<use xlink:href="<?= $target; ?>/img/icons.svg#facebook"/>
											</svg>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="footer__copyright">
							Copyright © 2021 <br>
							Все права защищенны
						</div>
					</div>
					<div class="footer__col footer__col--social">
						<div class="footer__title">
							Соцсети
						</div>
						<div class="social">
							<ul class="social__list">
								<li>
									<a href="#" target="_blank">
										<svg width="19" height="19">
											<use xlink:href="<?= $target; ?>/img/icons.svg#insta"/>
										</svg>
									</a>
								</li>
								<li>
									<a href="#" target="_blank">
										<svg width="11" height="19">
											<use xlink:href="<?= $target; ?>/img/icons.svg#facebook"/>
										</svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__col footer__col--panel">
						<div class="footer__title">
							Личный кабинет
						</div>
						<ul class="footer__list">
							<li><a href="#">Авторизация</a></li>
							<li><a href="#">Попробовать бесплатно</a></li>
							<li><a href="#">Оплатить подписку</a></li>
						</ul>
						<div class="footer__mob-contacts">
							<div class="footer__title">
								Контакты
							</div>
							<ul class="footer__list">
								<li><a href="tel:+38 067 000 00 00">+38 067 000 00 00</a></li>
								<li><a href="mailto:supportinfo@mail.com">supportinfo@mail.com</a></li>
							</ul>
							<ul class="footer__pay">
								<li>
									<div class="footer__pay-item">
										<img data-src="<?= $target; ?>/img/visa.svg" alt="" class="j-lazy">
									</div>
								</li>
								<li>
									<div class="footer__pay-item">
										<img data-src="<?= $target; ?>/img/mastercard.svg" alt="" class="j-lazy">
									</div>
								</li>
								<li>
									<div class="footer__pay-item">
										<img data-src="<?= $target; ?>/img/portmone.png" alt="" class="j-lazy">
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__col footer__col--nav">
						<div class="footer__title">
							Навигация
						</div>
						<ul class="footer__list">
							<li><a href="#">Наши преимущества</a></li>
							<li><a href="#">Функции программы</a></li>
							<li><a href="#">Тарифные планы</a></li>
							<li><a href="#">Видео отзывы</a></li>
							<li><a href="#">Часто задаваемые вопросы</a></li>
							<li><a href="#">Пару слов о нас</a></li>
						</ul>
					</div>
					<div class="footer__col footer__col--contacts">
						<div class="footer__title">
							Контакты
						</div>
						<ul class="footer__list">
							<li><a href="tel:+38 067 000 00 00">+38 067 000 00 00</a></li>
							<li><a href="mailto:supportinfo@mail.com">supportinfo@mail.com</a></li>
						</ul>
						<ul class="footer__pay">
							<li>
								<div class="footer__pay-item">
									<img data-src="<?= $target; ?>/img/visa.svg" alt="" class="j-lazy">
								</div>
							</li>
							<li>
								<div class="footer__pay-item">
									<img data-src="<?= $target; ?>/img/mastercard.svg" alt="" class="j-lazy">
								</div>
							</li>
							<li>
								<div class="footer__pay-item">
									<img data-src="<?= $target; ?>/img/portmone.png" alt="" class="j-lazy">
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<div class="footer-under">
			<div class="container">
				<ul class="footer-under__list">
					<li><a href="politics.php">Политика конфиденциальности</a></li>
					<li><a href="condition.php">Условия пользованием сервиса</a></li>
				</ul>
			</div>
		</div>

		<div class="up btn btn--orange j-up">
			<span>Вверх</span>
		</div>

	<? } ?>

	<div class="overlay j-overlay"></div>

	<? if($page == 'panel') { ?>
		<div class="modal modal--period" id="period-modal">
			<div class="modal__inner">
				<div class="modal__icon">
					<svg>
						<use xlink:href="<?= $target; ?>/img/modal/ok-bad.svg#icon"/>
					</svg>
				</div>
				<div class="modal__title">
					Ваш пробный период завершился
				</div>
				<div class="modal__desc">
					Оплатите подписку далее, чтобы пользоваться нашим сервисом
				</div>
				<a href="account.php" class="btn btn--orange modal__btn">
					Оплатить
				</a>
			</div>
		</div>

		<div class="modal modal--exit" id="exit-modal">
			<div class="modal__inner">
				<div class="modal__icon">
					<svg>
						<use xlink:href="<?= $target; ?>/img/modal/ok-bad.svg#icon"/>
					</svg>
				</div>
				<div class="modal__title">
					Уходите?
				</div>
				<div class="modal__desc">
					Желаете заполнить информацию о себе перед уходом ?
				</div>
				<div class="modal__btns">
					<div class="modal__btns-col">
						<button type="button" class="btn btn--orange modal__btn" data-close>
							Да
						</button>
					</div>
					<div class="modal__btns-col">
						<a href="/" type="button" class="btn btn--grey modal__btn">
							Нет
						</a>
					</div>
				</div>
			</div>
		</div>
	<? } ?>

	<script>
		const target = '<?= $target; ?>';
	</script>

	<script src="<?= $target; ?>/libs/jquery.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/gsap.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/ScrollTrigger.min.js"></script>
	<script src="<?= $target; ?>/libs/gsap/ScrollToPlugin.min.js"></script>
	<script src="<?= $target; ?>/libs/swiper/swiper.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/jquery.lazy.min.js"></script>
	<script src="<?= $target; ?>/libs/lazy/plugins/jquery.lazy.picture.min.js"></script>
	<script src="<?= $target; ?>/libs/jquery.maskedinput.min.js"></script>
	<script src="<?= $target; ?>/libs/fancybox/jquery.fancybox.min.js"></script>
	<script src="<?= $target; ?>/libs/svg4everybody.min.js"></script>
	<script src="<?= $target; ?>/libs/tel/js/intlTelInput.js"></script>
	<script src="<?= $target; ?>/js/common.js"></script>
	<script src="<?= $target; ?>/js/validation.js"></script>

	<? if($page == 'home') { ?>
		<script src="<?= $target; ?>/js/home/home.js"></script>
	<? } ?>

	<? if($page == 'login') { ?>
		<script src="<?= $target; ?>/js/login/login.js"></script>
		<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<? } ?>

	<? if($page == 'panel') { ?>
		<script src="<?= $target; ?>/libs/jquery.nice-select.min.js"></script>
		<script src="<?= $target; ?>/libs/jquery.autocomplete.min.js"></script>
		<script src="<?= $target; ?>/libs/date/air-datepicker.js"></script>
		<script src="<?= $target; ?>/js/panel/panel.js"></script>
		<script src="<?= $target; ?>/js/panel/jaw.js"></script>
	<? } ?>

	<? if($page == 'admin') { ?>
		<script src="<?= $target; ?>/libs/jquery.nice-select.min.js"></script>
		<script src="<?= $target; ?>/js/panel/panel.js"></script>
	<? } ?>

</body>
</html>