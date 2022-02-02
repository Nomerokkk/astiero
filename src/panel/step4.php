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
                            Этапы лечения
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Этапы лечения
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
                                    Этапы лечения
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">05</div>
                                <div class="steps__list-title">
                                    Генерация плана
                                </div>
                            </div>
                            <div class="steps__list-progress" style="width: 77.4%;"></div>
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
                            <div class="step-stage">
                                <div class="step__title">
                                    Этапы посещения
                                </div>
                                <div class="step-stage__items">
                                    <div class="step-stage__item">
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                        <div class="step-stage__top active" data-toggle="#stage1">
                                            <div class="step-stage__top-title">
                                                Этап 1
                                            </div>
                                            <div class="step-stage__top-date">
                                                12.08.2021 13:00
                                            </div>
                                            <div class="step-stage__top-arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="step-stage__bl active" id="stage1">
                                            <div class="step-stage__row">
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Зуб:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <select multiple="multiple" data-placeholder="Выберите" name="zoob" class="select j-select step-stage__select">
                                                                <option value="32" selected>32</option>
                                                                <option value="13" selected>13</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Диагностика:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            Пульпит
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Лечение:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            Пломба
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Посещений:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <div class="input">
                                                                <input type="number" placeholder="2" min="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Дата визита:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <label class="input input--date">
                                                                <input type="text" placeholder="__.__.__" class="j-date" readonly>
                                                                <svg>
                                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#date"/>
                                                                </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Время:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <select class="select j-select step-stage__select">
                                                                <option value="13:00">13:00</option>
                                                                <option value="14:00">14:00</option>
                                                                <option value="15:00">15:00</option>
                                                                <option value="16:00">16:00</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-stage__item">
                                        <div class="minus" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">-</div>
                                        <div class="step-stage__top" data-toggle="#stage2">
                                            <div class="step-stage__top-title">
                                                Этап 2
                                            </div>
                                            <div class="step-stage__top-date">
                                                12.08.2021 13:00
                                            </div>
                                            <div class="step-stage__top-arrow">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#arrow"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="step-stage__bl" id="stage2">
                                            <div class="step-stage__row">
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Зуб:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <select multiple="multiple" data-placeholder="Выберите" name="zoob" class="select j-select step-stage__select">
                                                                <option value="32" selected>32</option>
                                                                <option value="13" selected>13</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Диагностика:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            Пульпит
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Лечение:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            Пломба
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Посещений:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <div class="input">
                                                                <input type="number" placeholder="2" min="1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Дата визита:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <label class="input input--date">
                                                                <input type="text" placeholder="__.__.__" class="j-date" readonly>
                                                                <svg>
                                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#date"/>
                                                                </svg>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="step-stage__col">
                                                    <div class="step-stage__label">
                                                        <div class="step-stage__label-title">
                                                            Время:
                                                        </div>
                                                        <div class="step-stage__label-val">
                                                            <select class="select j-select step-stage__select">
                                                                <option value="13:00">13:00</option>
                                                                <option value="14:00">14:00</option>
                                                                <option value="15:00">15:00</option>
                                                                <option value="16:00">16:00</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step__nav">
                                <div class="step__nav-col">
                                    <div class="btn btn--border">Создать визит</div>
                                </div>
                            </div>
                            <button type="submit" class="step-stage__btn step__btn btn btn--orange">
                                Далее
                            </button>
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

<? include '../templates/footer.php'; ?>