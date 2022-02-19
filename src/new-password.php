<? $page = 'login';

include 'templates/header.php'; ?>
	
    <div class="wrapper j-wrapper">
        <section class="banner j-parallax-bg-sec">
            <div class="banner__bg">
                <div class="banner__bg-inner j-lazy j-parallax-bg" data-src="<?= $target; ?>/img/home/banner.png"></div>
            </div>
            <div class="banner__breadcrumbs">
                <div class="container">
                    <div class="breadcrumbs">
                        <ul class="breadcrumbs__list">
                            <li>
                                <a href="/">
                                    Главная
                                </a>
                            </li>
                            <li>
                                Авторизация
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__text">
                        <div class="banner__logo j-wow j-wow-left">
                            <img src="<?= $target; ?>/img/logo-white.svg" alt="">
                        </div>
                        <div class="banner__img">
                            <img src="<?= $target; ?>/img/home/notebook.png" alt="">
                        </div>
                    </div>
                    <form class="banner__form banner__form--new j-form j-wow j-wow-up">
                        <div class="banner__form-inner">
                            <div class="banner__form-title">
                                Новый пароль
                            </div>
                            <div class="banner__form-desc">
                                Введите новый пароль
                            </div>
                            <div class="banner__form-form">
                                <div class="input">
                                    <input type="text" placeholder="Пароль" data-required>
                                    <svg width="15" height="21">
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#password"/>
                                    </svg>
                                </div>
                                <div class="input">
                                    <input type="text" placeholder="Подтверждение пароля" data-required>
                                    <svg width="15" height="21">
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#password"/>
                                    </svg>
                                </div>
                                <div class="banner__form-captcha">
                                    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                </div>
                                <button class="banner__form-btn btn btn--orange" type="submit">
                                    Войти
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="modal modal--ok" id="ok">
        <div class="modal__inner">
            <div class="modal__icon">
                <img data-src="<?= $target; ?>/img/modal/ok.svg" alt="" class="j-lazy">
            </div>
            <div class="modal__title">
                СПАСИБО!
            </div>
            <div class="modal__desc">
                Ваша заявка была отправлена
            </div>
            <button class="btn btn--orange modal__btn" type="button" data-close>
                Главная
            </button>
        </div>
    </div>

<? include 'templates/footer.php'; ?>