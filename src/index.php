<? $page = 'home';

include 'templates/header.php'; ?>
	
    <div class="wrapper j-wrapper">
        <section class="banner j-parallax-bg-sec">
            <div class="banner__bg j-lazy j-parallax-bg" data-src="<?= $target; ?>/img/home/banner.png"></div>
            <div class="container">
                <div class="banner__wrapper">
                    <div class="banner__text">
                        <div class="banner__logo j-wow j-wow-class">
                            <img src="<?= $target; ?>/img/logo-white.svg" alt="">
                        </div>
                        <div class="banner__title title-overflow">
                            <a href="#" class="banner__title-inner j-wow j-wow-up">БЕСПЛАТНЫЙ ПЕРИОД <u>30 ДНЕЙ</u></a>
                        </div>
                        <p class="banner__desc j-wow j-wow-up" data-delay=".2">
                            Более 1300 пациентов используют нас. Присоединяйтесь!
                        </p>
                        <form class="banner__form j-form j-wow j-wow-up" data-modal="#ok" data-delay=".4">
                            <div class="phone phone--white">
                                <input type="tel" class="j-phone" data-required>
                            </div>
                            <button class="banner__form-btn btn btn--white" type="submit">
                                Начать сейчас
                            </button>
                        </form>
                    </div>
                    <img src="<?= $target; ?>/img/home/notebook.png" alt="" class="banner__img">
                </div>
            </div>
        </section>

        <section class="func" id="functions">
            <div class="container container--full">
                <div class="title-overflow">
                    <h2 class="title title--center j-wow j-wow-up">
                        <b>ФУНКЦИИ</b> ПРОГРАММЫ
                    </h2>
                </div>
                <div class="func__img">
                    <div class="func__img-title func__img-title--1">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
                        </svg>
                    </div>
                    <div class="func__img-slider j-func-top">
                        <div class="func__img-wrapper">
                            <? for($i = 0; $i < 10; $i++) { ?>
                                <div class="func__img-slide" data-fancybox="gallery" data-src="<?= $target; ?>/img/home/notebook.png">
                                    <img data-src="<?= $target; ?>/img/home/notebook.png" alt="" class="j-lazy">
                                </div>
                            <? } ?>
                        </div>
                    </div>
                    <div class="func__img-title func__img-title--2">
                        <svg>
                            <use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
                        </svg>
                    </div>
                </div>
                <div class="func__wrapper j-func-slider">
                    <div class="func__slider">
                        <div class="func__slider-wrapper">
                            <? $func = [
                                0 => [
                                    'title' => 'Персонализированные документы и шаблоны изображений',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                1 => [
                                    'title' => 'Полная диагностика  и планирование',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                2 => [
                                    'title' => 'Персонализированные документы и шаблоны изображений',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                3 => [
                                    'title' => 'Настройка и отправить отчет',
                                    'desc' => 'Создайте окончательный отчет, персонализируйте его, добавив логотип клиники и информацию, и отправьте своему пациенту.'
                                ],
                                4 => [
                                    'title' => 'Настройка и отправить отчет',
                                    'desc' => 'Создайте окончательный отчет, персонализируйте его, добавив логотип клиники и информацию, и отправьте своему пациенту.'
                                ],
                                5 => [
                                    'title' => 'Персонализированные документы и шаблоны изображений',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                6 => [
                                    'title' => 'Полная диагностика  и планирование',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                7 => [
                                    'title' => 'Персонализированные документы и шаблоны изображений',
                                    'desc' => 'Диагностируйте все состояния пациента за секунды. Создавайте планы, которые автоматически объясняются.'
                                ],
                                8 => [
                                    'title' => 'Настройка и отправить отчет',
                                    'desc' => 'Создайте окончательный отчет, персонализируйте его, добавив логотип клиники и информацию, и отправьте своему пациенту.'
                                ],
                                9 => [
                                    'title' => 'Настройка и отправить отчет',
                                    'desc' => 'Создайте окончательный отчет, персонализируйте его, добавив логотип клиники и информацию, и отправьте своему пациенту.'
                                ],
                            ];

                            foreach($func as $item) { ?>

                                <div class="func__slider-slide">
                                    <div class="func__item">
                                        <div class="func__item-title">
                                            <?= $item['title']; ?>
                                        </div>
                                        <p class="func__item-desc">
                                            <?= $item['desc']; ?>
                                        </p>
                                    </div>
                                </div>

                            <? } ?>
                        </div>
                        <div class="arrow arrow--small prev j-prev">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                            </svg>
                        </div>
                        <div class="arrow arrow--small next j-next">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                            </svg>
                        </div>
                    </div>
                    <div class="scrollbar j-scrollbar func__scrollbar"></div>
                </div>
            </div>
        </section>

        <section class="problems" id="problems">
            <div class="container">
                <div class="title-overflow">
                    <h2 class="title title--center j-wow j-wow-up">
                        <b>Какие проблемы</b> мы решаем
                    </h2>
                </div>
                <div class="problems__wrapper">
                    <div class="problems__col j-wow j-wow-up">
                        <div class="problems__top">
                            <div class="problems__icon">
                                <img class="j-lazy" data-src="<?= $target; ?>/img/home/problems1.svg" alt="">
                            </div>
                            <div class="problems__title">
                                Проблемы
                            </div>
                        </div>
                        <ul class="problems__list">
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                        </ul>
                    </div>
                    <div class="problems__col j-wow j-wow-up" data-delay=".2">
                        <div class="problems__logo">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
                            </svg>
                            <div class="problems__logo-bg j-lazy" data-src="<?= $target; ?>/img/home/problems-arrow.svg"></div>
                        </div>
                        <div class="problems__top">
                            <div class="problems__icon">
                                <img class="j-lazy" data-src="<?= $target; ?>/img/home/problems2.svg" alt="">
                            </div>
                            <div class="problems__title">
                                Решения
                            </div>
                        </div>
                        <ul class="problems__list">
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                            <li>
                                Сложно описать комплексное стоматологическое лечение.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="action">
            <div class="action__bg j-lazy" data-src="<?= $target; ?>/img/home/action.png"></div>
            <div class="action__bg2 j-lazy" data-src="<?= $target; ?>/img/home/action2.svg"></div>
            <div class="container">
                <div class="action__wrapper">
                    <div class="action__text">
                        <h3 class="action__title">
                            Более <b>1300 компаний</b>
                            используют наш сервис
                        </h3>
                        <p class="action__desc">
                            Присоединяйтесь! Отлично!
                        </p>
                    </div>
                    <form class="action__form j-form" data-modal="#ok">
                        <div class="action__form-title">
                            Присоединяйтесь
                        </div>
                        <div class="phone phone--white">
                            <input type="tel" class="j-phone" data-required>
                        </div>
                        <button class="action__form-btn btn btn--border-white">
                            Начните сейчас
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <section class="tarif" id="tarifs">
            <div class="container">
                <div class="title-overflow">
                    <h3 class="title title--center j-wow j-wow-up">
                        <b>ТАРИФНЫЕ</b> ПЛАНЫ
                    </h3>
                </div>
                <div class="tarif__wrapper ">
                    <div class="tarif__text">
                        <div class="tarif__title">
                            Что вы получите
                        </div>
                        <ul class="tarif__list">
                            <? for($i = 0; $i < 8; $i++) { ?>
                                <li>
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                    </svg>
                                    Сложно описать комплексное стоматологическое лечение.
                                </li>
                            <? } ?>
                        </ul>
                    </div>

                    <? $tarif = [
                        0 => [
                            'popular' => true,
                            'for' => 'Для стоматологов',
                            'title' => 'БАЗОВЫЙ ТАРИФ',
                            'price' => 'ОТ <b>9$</b>/ месяц',
                            'desc' => '',
                        ],
                        // 1 => [
                        //     'popular' => false,
                        //     'for' => 'Для среднего бизнеса',
                        //     'title' => 'БАЗОВЫЙ ТАРИФ 2',
                        //     'price' => 'ОТ <b>12$</b>/ месяц',
                        //     'desc' => '',
                        // ],
                        // 2 => [
                        //     'popular' => false,
                        //     'for' => 'Для крупного бизнеса',
                        //     'title' => 'БАЗОВЫЙ ТАРИФ 3',
                        //     'price' => 'ОТ <b>20$</b>/ месяц',
                        //     'desc' => '',
                        // ],
                    ];

                    $count = 0;

                    foreach($tarif as $item) { 
                        $count++;
                    ?>

                        <div class="tarif__item">
                            <? if($item['popular'] == true) { ?>
                                <div class="tarif__item-popular">
                                    Лучшая цена
                                </div>
                            <? } ?>
                            <div class="tarif__item-for">
                                <?= $item['for']; ?>
                            </div>
                            <div class="tarif__item-title">
                                <?= $item['title']; ?>
                            </div>
                            <div class="tarif__item-price">
                                <?= $item['price']; ?>
                            </div>
                            <div class="tarif__item-desc" id="tarif<?= $count; ?>">
                                <p>
                                    Сложно описать комплексное стоматологическое лечение.
                                </p>
                                <p>
                                    Сложно описать комплексное стоматологическое лечение.
                                </p>
                            </div>
                            <a href="login.php" class="tarif__item-btn btn btn--orange">
                                Начать сейчас
                            </a>
                            <!-- <div class="tarif__item-btn btn btn--orange tarif__item-btn--paid">
                                Тариф оплачен
                            </div> -->
                        </div>

                    <? } ?>
                </div>
            </div>
        </section>

        <section class="reviews j-lazy" id="reviews" data-src="<?= $target; ?>/img/home/reviews.svg">
            <div class="container">
                <div class="title-overflow">
                    <h3 class="title title--center j-wow j-wow-up">
                        <b>ВИДЕО</b> ОТЗЫВЫ
                    </h3>
                </div>
            </div>
            <div class="reviews__bl">
                <div class="container">
                    <div class="reviews__wrapper j-reviews">
                        <div class="reviews__slider">
                            <div class="reviews__slider-wrapper">
                                <? $reviews = [
                                    0 => [
                                        'img' => $target . '/img/home/rev1.jpg',
                                    ],
                                    1 => [
                                        'img' => $target . '/img/home/rev2.jpg',
                                    ],
                                    2 => [
                                        'img' => $target . '/img/home/rev3.jpg',
                                    ],
                                    3 => [
                                        'img' => $target . '/img/home/rev1.jpg',
                                    ],
                                    4 => [
                                        'img' => $target . '/img/home/rev1.jpg',
                                    ],
                                    5 => [
                                        'img' => $target . '/img/home/rev1.jpg',
                                    ],
                                ];

                                foreach($reviews as $item) { ?>

                                    <div class="reviews__slider-slide" data-fancybox data-src="https://www.youtube.com/watch?v=7vqGLfKnSiw">
                                        <div class="reviews__img">
                                            <div class="reviews__play">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#play"/>
                                                </svg>
                                            </div>
                                            <img data-src="<?= $item['img']; ?>" alt="" class="j-lazy">
                                        </div>
                                        <div class="reviews__name">
                                            Николай
                                        </div>
                                    </div>

                                <? } ?>
                            </div>
                        </div>
                        <div class="arrow prev j-prev">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                            </svg>
                        </div>
                        <div class="arrow next j-next">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                            </svg>
                        </div>
                        <div class="reviews__dots dots j-dots"></div>
                    </div>
                    <a href="#" class="reviews__btn btn btn--orange">
                        Все отзывы
                    </a>
                    <div class="reviews__desc">
                        <p>
                            Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="container">
                <div class="title-overflow">
                    <h4 class="title title--center j-wow j-wow-up">
                        <b>ОСТАЛИСЬ</b> ВОПРОСЫ?
                    </h4>
                </div>
                <form class="form__form j-form" data-modal="#ok">
                    <div class="row">
                        <div class="col">
                            <div class="input">
                                <input type="text" placeholder="Имя и фамилия" data-required>
                                <svg width="15" height="18">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                </svg>
                            </div>
                        </div>
                        <div class="col">
                            <div class="phone phone--grey">
                                <input type="tel" class="j-phone" data-required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="input">
                                <input type="email" placeholder="E-mail" data-required>
                                <svg width="16" height="11">
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#email"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="input">
                        <textarea rows="9" placeholder="Комментарий"></textarea>
                    </div>
                    <button class="form__btn btn btn--orange" type="submit">Отправить</button>
                </form>
            </div>
        </section>

        <section class="about">
            <div class="about__bg j-parallax">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
                </svg>
            </div>
            <div class="container">
                <div class="about__title-mob title j-wow j-wow-up">
                    <b>ПАРУ СЛОВ</b> О НАС
                </div>
                <div class="row">
                    <div class="col">
                        <div class="about__text">
                            <div class="title-overflow">
                                <h4 class="title j-wow j-wow-up">
                                    <b>ПАРУ СЛОВ</b> О НАС
                                </h4>
                            </div>
                            <div class="about__desc">
                                <div class="about__show">
                                    <p>
                                        Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.
                                    </p>
                                    <p>
                                        В стоматологической клинике  начинает свою работу отделение ургентной терапии. Теперь наши двери открыты 24/7, поэтому и взрослые, и маленькие пациенты могут получить ургентную помощь в любой день недели, в любое время дня и ночи.
                                    </p>
                                </div>
                                <div class="about__hide" id="about_hide">
                                    <p>
                                        Регулярное плановое посещение стоматологии помогает вовремя выявлять и лечить болезни зубов. Но зубная боль не ждет, пока вы запишетесь на прием к дантисту. Она может прийти внезапно посреди рабочего дня, в ночное время, в выходной. Острая зубная боль труднопереносимая, настолько, что терпеть ее нет сил даже несколько минут, не говоря уже о том, чтобы дождаться утра или наступления понедельника, когда можно, наконец, обратиться за помощью в стоматологию.
                                    </p>
                                    <p>
                                        В стоматологической клинике  начинает свою работу отделение ургентной терапии. Теперь наши двери открыты 24/7, поэтому и взрослые, и маленькие пациенты могут получить ургентную помощь в любой день недели, в любое время дня и ночи.
                                    </p>
                                </div>
                            </div>
                            <div class="about__more" data-toggle="#about_hide">
                                <span data-old-text="ПОКАЗАТЬ ЕЩЕ" data-text="Скрыть">ПОКАЗАТЬ ЕЩЕ</span>
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="about__img j-wow j-wow-right" >
                            <img data-src="<?= $target; ?>/img/home/about.jpg" alt="" class="j-lazy">
                            <svg>
                                <use xlink:href="<?= $target; ?>/img/icons.svg#logo"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal modal--ok" id="ok">
        <div class="modal__inner">
            <div class="modal__icon">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/modal/ok.svg#icon"/>
                </svg>
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