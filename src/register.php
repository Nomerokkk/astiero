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
                    <form class="banner__form banner__form--register j-form j-wow j-wow-up">
                        <div class="banner__form-inner">
                            <div class="banner__form-title">
                                Создать учетную запись
                            </div>
                            <div class="banner__form-desc">
                                Введите свои данные
                            </div>
                            <div class="banner__form-form">
                                <div class="phone phone--pink">
                                    <input type="tel" class="j-phone" data-required>
                                </div>
                                <label class="check">
                                    <input type="checkbox" data-required>
                                    <span class="check__bl">
                                        <span class="check__svg">
                                            <svg>
                                                <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                            </svg>
                                        </span>
                                        <span class="check__title">
                                            я соглашаюсь с правилами пользования сервисом
                                        </span>
                                    </span>
                                </label>
                                <div class="banner__form-captcha">
                                    <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                                </div>
                                <button class="banner__form-btn btn btn--orange" type="submit">
                                    Создать учетную запись
                                </button>
                            </div>
                        </div>
                        <a href="login.php" class="banner__form-bottom">
                            <span>Есть аккаунт ?</span>
                        </a>
                    </form>
                </div>
            </div>
        </section>
    </div>

<? include 'templates/footer.php'; ?>