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
                    <form class="banner__form j-form j-wow j-wow-up" data-modal="#code">
                        <div class="banner__form-inner">
                            <div class="banner__form-title">
                                Авторизация
                            </div>
                            <div class="banner__form-desc">
                                Введите свои данные
                            </div>
                            <div class="banner__form-form">
                                <div class="phone phone--pink">
                                    <input type="tel" class="j-phone" data-required>
                                </div>
                                <div class="input">
                                    <input type="password" placeholder="Пароль" data-required>
                                    <svg width="15" height="21">
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#password"/>
                                    </svg>
                                </div>
                                <div class="banner__form-lost">
                                    <a href="lost.php">
                                        Забыли пароль?
                                    </a>
                                </div>
                                <div class="banner__form-captcha">
                                    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                </div>
                                <button class="banner__form-btn btn btn--orange" type="submit">
                                    Войти
                                </button>
                            </div>
                        </div>
                        <a href="register.php" class="banner__form-bottom">
                            <span>Зарегистрироваться</span>
                        </a>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <div class="modal modal--code modal--code2" id="code">
        <form class="modal__inner j-form">
            <div class="modal__title">
                Введите код подтверждения
            </div>
            <div class="modal__inputs">
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code" data-required>
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code" data-required>
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code" data-required>
                </div>
                <div class="modal__inputs-col j-code-col">
                    <input type="text" class="j-code" data-required>
                </div>
            </div>
            <button type="submit" class="btn btn--orange modal__btn">
                Отправить
            </button>
        </form>
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