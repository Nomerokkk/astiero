<? $page = 'login';

include 'templates/header.php'; ?>
	
    <div class="wrapper j-wrapper">
        <section class="banner j-parallax-bg-sec">
            <div class="banner__bg j-lazy j-parallax-bg" data-src="<?= $target; ?>/img/home/banner.png"></div>
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
                    <form class="banner__form banner__form--lost j-form j-wow j-wow-up" data-modal="#code">
                        <div class="banner__form-inner">
                            <div class="banner__form-title">
                                Забыли пароль?
                            </div>
                            <div class="banner__form-desc">
                                Введите е-mail для сброса пароля
                            </div>
                            <div class="banner__form-form">
                                <div class="phone phone--pink">
                                    <input type="tel" class="j-phone" data-required>
                                </div>
                                <div class="banner__form-captcha">
                                    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                </div>
                                <button class="banner__form-btn btn btn--orange" type="submit">
                                    Отправить
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="modal modal--code" id="code">
        <div class="modal__inner">
            <div class="modal__title">
                СБРОС ПАРОЛЯ
            </div>
            <div class="modal__desc">
                На ваш номер было отправленно сообщение для сброса пароля
            </div>
            <div class="modal__inputs">
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code">
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code">
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code">
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code">
                </div>
            </div>
            <a href="new-password.php" class="btn btn--orange modal__btn">
                Далее
            </a>
        </div>
        <div class="modal__bottom">
            <div class="modal__number j-timer">
                0:59
            </div>
            <div class="modal__link">
                Отправить еще раз
            </div>
        </div>
    </div>

<? include 'templates/footer.php'; ?>