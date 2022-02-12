<? $page = 'panel';

include '../templates/header.php'; ?>
	
    <div class="wrapper panel panel--withperiod j-wrapper">
        <section class="steps">
            <div class="container">
                <div class="breadcrumbs">
                    <ul class="breadcrumbs__list">
                        <li>
                            <a href="/panel">
                                Главная
                            </a>
                        </li>
                        <li>
                            Генерация плана
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Генерация плана
                        </h1>
                    </div>
                </div>
                <div class="steps__list">
                    <div class="steps__list-wrap j-overflow-wrap">
                        <div class="steps__list-inner">
                            <a href="step1.php" class="steps__list-item done">
                                <div class="steps__list-number">01</div>
                                <div class="steps__list-title">
                                    Создание плана
                                </div>
                            </a>
                            <div class="steps__list-line"></div>
                            <a href="step2.php" class="steps__list-item done">
                                <div class="steps__list-number">02</div>
                                <div class="steps__list-title">
                                    Диагностика
                                </div>
                            </a>
                            <div class="steps__list-line"></div>
                            <a href="step3.php" class="steps__list-item done">
                                <div class="steps__list-number">03</div>
                                <div class="steps__list-title">
                                    План лечения
                                </div>
                            </a>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item active">
                                <div class="steps__list-number">04</div>
                                <div class="steps__list-title">
                                    Генерация плана
                                </div>
                            </div>
                            <div class="steps__list-progress" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                <form action="step5.php" class="step">
                    <div class="step__row">
                        <div class="step__col">
                            <div class="step-img">
                                <div class="step-img__zoom j-zoom-btn">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                                    </svg>
                                </div>
                                <div class="step-img__title">
                                    32й зуб - диагностика пульпит
                                </div>
                                <div class="step-img__img panzoom j-panzoom">
                                    <div class="panzoom__content">
                                        <img src="<?= $target; ?>/img/steps/1.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="step__col">
                            <div class="step-last">
                                <div class="step-last__top">
                                    <div class="step-last__avatar avatar avatar--white">
                                        <svg>
                                            <use xlink:href="<?= $target; ?>/img/icons.svg#user"/>
                                        </svg>
                                    </div>
                                    <div class="step-last__top-text">
                                        <div class="step-last__top-title">
                                            Иван Иванов
                                        </div>
                                        <label class="step-last__top-label">
                                            <input type="file">
                                            <div class="step-last__top-label-title">
                                                Загрузить фото
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="step-last__progress">
                                    <div class="step-last__progress-line" style="width: 50%;">
                                        50% пройдено этапов
                                    </div>
                                </div>
                                <div class="step-last__items">
                                    <div class="step-last__item">
                                        <div class="step-last__item-top">
                                            <div class="step-last__item-title active" data-toggle="#item1">
                                                Этап 1
                                            </div>
                                            <div class="step-last__item-nav">
                                                <label class="step-last__item-label">
                                                    <input type="checkbox">
                                                    <div class="step-last__item-label-title">
                                                        <div class="step-last__item-label-check">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                                            </svg>
                                                        </div>
                                                        Пройдено
                                                    </div>
                                                </label>
                                                <div class="step-last__item-arrow active" data-toggle="#item1">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-last__item-inner active" id="item1">
                                            <ul class="step-last__item-list">
                                                <li>
                                                    Зуб: <b>36</b>
                                                </li>
                                                <li>
                                                    Диагностика: <b>Пульпит</b>
                                                </li>
                                                <li>
                                                    Лечение: <b>Пломба</b>
                                                </li>
                                                <li>
                                                    Посещений: <b>2</b>
                                                </li>
                                            </ul>
                                            <ul class="step-last__item-dates">
                                                <li>
                                                    <div class="step-last__item-date">
                                                        12.08.2021
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-last__item-date">
                                                        13:00
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="step-last__item">
                                        <div class="step-last__item-top">
                                            <div class="step-last__item-title" data-toggle="#item2">
                                                Этап 1
                                            </div>
                                            <div class="step-last__item-nav">
                                                <label class="step-last__item-label">
                                                    <input type="checkbox">
                                                    <div class="step-last__item-label-title">
                                                        <div class="step-last__item-label-check">
                                                            <svg>
                                                                <use xlink:href="<?= $target; ?>/img/icons.svg#check"/>
                                                            </svg>
                                                        </div>
                                                        Пройдено
                                                    </div>
                                                </label>
                                                <div class="step-last__item-arrow" data-toggle="#item2">
                                                    <svg>
                                                        <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="step-last__item-inner" id="item2">
                                            <ul class="step-last__item-list">
                                                <li>
                                                    Зуб: <b>36</b>
                                                </li>
                                                <li>
                                                    Диагностика: <b>Пульпит</b>
                                                </li>
                                                <li>
                                                    Лечение: <b>Пломба</b>
                                                </li>
                                                <li>
                                                    Посещений: <b>2</b>
                                                </li>
                                            </ul>
                                            <ul class="step-last__item-dates">
                                                <li>
                                                    <div class="step-last__item-date">
                                                        12.08.2021
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-last__item-date">
                                                        13:00
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step__nav-last">
                                <div class="step__nav-last-col">
                                    <button type="button" class="btn btn--orange" data-fancybox data-src="#send-email">
                                        Отправить по E-mail
                                    </button>
                                </div>
                                <div class="step__nav-last-col">
                                    <button type="button" class="btn btn--border" data-fancybox data-src="#send-phone">
                                        Отправить по телефону
                                    </button>
                                </div>
                            </div>
                            <a href="#" target="_blank" class="step-last__btn step__btn btn btn--pink">
                                Скачать PDF файл
                                <svg>
                                    <use xlink:href="<?= $target; ?>/img/icons.svg#pdf"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>


    <div class="modal modal--remove" id="ok-remove">
        <div class="modal__inner">
            <div class="modal__icon">
                <svg>
                    <use xlink:href="<?= $target; ?>/img/icons.svg#bucket"/>
                </svg>
            </div>
            <div class="modal__title">
                Вы точно хотите удалить?
            </div>
            <div class="modal__btns">
                <div class="modal__btns-col">
                    <button class="btn btn--orange modal__btn" type="button" data-close>
                        Да
                    </button>
                </div>
                <div class="modal__btns-col">
                    <button class="btn btn--grey modal__btn" type="button" data-close>
                        Нет
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal--password" id="send-email">
        <form class="modal__inner j-form" action="pdf-ok.php">
            <div class="modal__title">
                Отправить по e-mail
            </div>
            <div class="input">
                <input type="email" placeholder="E-mail" data-required>
            </div>
            <button type="submit" class="btn btn--orange modal__btn">
                Отправить
            </button>
        </form>
    </div>

    <div class="modal modal--password" id="send-phone">
        <form class="modal__inner j-form" action="pdf-ok.php">
            <div class="modal__title">
                Отправить по телефону
            </div>
            <div class="phone phone--pink">
                <input type="tel" class="j-phone" data-required>
            </div>
            <button type="submit" class="btn btn--orange modal__btn">
                Отправить
            </button>
        </form>
    </div>

<? include '../templates/footer.php'; ?>