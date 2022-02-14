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
                            План лечения
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            План лечения
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
                            <div class="steps__list-item active">
                                <div class="steps__list-number">03</div>
                                <div class="steps__list-title">
                                    План лечения
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
                                <div class="steps__list-number">04</div>
                                <div class="steps__list-title">
                                    Генерация плана
                                </div>
                            </div>
                            <div class="steps__list-progress" style="width: 70.2%;"></div>
                        </div>
                    </div>
                </div>
                <form action="step4.php" class="step">
                    <div class="step__title">
                        План лечения
                    </div>

                    <div class="step__tabs">
                        <? $tabs = [
                            0 => [
                                'title' => 'Гигиена и периостатус',
                                'sub' => [
                                    0 => [
                                        'title' => 'Кюретаж',
                                        'dir' => 'kyuretazh',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            1 => [
                                'title' => 'Терапия и эндодонтия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Лечение корневых каналов удовлетворительно',
                                        'dir' => 'lechenie_kanalov_udovlit',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Лечение корневых каналов неудовлетворительно',
                                        'dir' => 'lechenie_kanalov_neudovlit',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            2 => [
                                'title' => 'Хирургия и имплантация',
                                'sub' => [
                                    0 => [
                                        'title' => 'Удаление зуба / имплантата',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Установка имплантата',
                                        'dir' => 'ustanovka_implantata',
                                        'border' => 'implant',
                                    ],
                                    2 => [
                                        'title' => 'Костная пластика',
                                        'dir' => 'kostnaya_plastika',
                                        'format' => 'png',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Пластика десны',
                                        'dir' => 'lechenie_kanalov_neudovlit',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Синус-лифтинг (открытый / закрытый (крестальный))',
                                        'dir' => 'sinus',
                                        'border' => 'normal',
                                        'sinus' => 'two',
                                    ],
                                    5 => [
                                        'title' => 'Синус-лифтинг (открытый / закрытый (левый))',
                                        'dir' => 'sinus',
                                        'border' => 'normal',
                                        'sinus' => 'right',
                                    ],
                                    6 => [
                                        'title' => 'Синус-лифтинг (открытый / закрытый (правый))',
                                        'dir' => 'sinus',
                                        'border' => 'normal',
                                        'sinus' => 'left',
                                    ],
                                    7 => [
                                        'title' => 'Хирургический шаблон',
                                        'dir' => 'hirurgicheskij_shablon',
                                        'border' => 'small',
                                    ],
                                ],
                            ],
                            3 => [
                                'title' => 'Ортопедия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Wax-up',
                                        'dir' => 'wax_up',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Корневая вкладка',
                                        'dir' => 'kornevaya_vkladka',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Build-up',
                                        'dir' => 'build_up',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Временная коронка',
                                        'dir' => 'vremennaya_koronka',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Накладка',
                                        'dir' => 'nakladka',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Адгезивный мостовидный протез',
                                        'dir' => 'adgezivnyj_protez',
                                        'border' => 'small',
                                        'visual' => true,
                                    ],
                                    6 => [
                                        'title' => 'Абатмент',
                                        'dir' => 'abatment',
                                        'border' => 'implant',
                                    ],
                                ],
                            ],
                            4 => [
                                'title' => 'Ортодонтия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Брекеты',
                                        'dir' => 'normal',
                                        'border' => 'normal',
                                        'visual' => 'brekety',
                                    ],
                                    2 => [
                                        'title' => 'Минимпланты',
                                        'dir' => 'mini_implant',
                                        'border' => 'mini_implant',
                                    ],
                                    3 => [
                                        'title' => 'Елайнеры',
                                        'dir' => 'elajner',
                                        'border' => 'normal',
                                        'size' => 'full',
                                    ],
                                    4 => [
                                        'title' => 'Ретейнер',
                                        'dir' => 'retejner',
                                        'border' => 'normal',
                                        'visual' => true,
                                    ],
                                ],
                            ],
                        ]; 
                        
                        $count = 0; ?>

                        <div class="step__tabs-overflow">
                            <div class="tabs">
                                <? foreach($tabs as $item) { 
                                    $count++;
                                ?>
                                    <div class="tabs__item">
                                        <div class="tabs__item-title" data-target="#sub<?= $count; ?>">
                                            <?= $item['title']; ?>
                                        </div>
                                    </div>
                                <? } ?>
                            </div>
                        </div>

                        <? $count = 0;

                        foreach($tabs as $item) { 
                            $count++;
                        ?>
                            <ul class="tabs__submenu j-tabs-submenu" id="sub<?= $count; ?>">
                                <? $sub = $item['sub'];

                                foreach($sub as $item) {                                          
                                    $title = $item['title'];
                                    $dir = $item['dir'];
                                    $visual = $item['visual'];
                                    $class = $dir . ' ' . $visual;
                                    $dir = ($item['dir']) ? $target . '/img/jaw/teeth_done/' . $dir . '/' : '';
                                    $border = $item['border'];
                                    $format = ($item['format']) ? $item['format'] : 'svg';
                                    $visual = ($item['visual']) ? $target . '/img/jaw/visual/' . $visual . '/' : '';
                                    $sinus = $item['sinus'];
                                    $size = $item['size'];
                                ?>
                                    <li>
                                        <label class="tabs__label">
                                            <input type="radio" name="disease" class="j-tooth-radio" 
                                                data-dir="<?= $dir; ?>"
                                                data-border="<?= $target; ?>/img/jaw/border/<?= $border; ?>/"
                                                data-class="<?= $class; ?>"
                                                data-class-border="<?= $border; ?>"
                                                data-format="<?= $format; ?>"
                                                <? if($visual) { ?>
                                                    data-visual="<?= $visual; ?>"
                                                <? } ?>
                                                <? if($sinus) { ?>
                                                    data-sinus="<?= $sinus; ?>"
                                                <? } ?>
                                                <? if($size) { ?>
                                                    data-size="<?= $size; ?>"
                                                <? } ?>
                                                data-number="">
                                            <span class="tabs__label-title">
                                                <?= $title; ?>
                                            </span>
                                        </label>
                                    </li>
                                <? } ?>
                            </ul>
                        <? } ?>
                    </div>

                    <div class="step__row">
                        <div class="step__col">
                            <div class="step-img">
                                <div class="step-img__loader j-jaw-loader"></div>
                                <div class="step-img__top">
                                    <div class="step-img__zoom j-zoom-btn">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#search"/>
                                    </svg>
                                </div>
                                <div class="step-img__title j-title-jaw">Выберите зуб</div>
                                </div>
                                <div class="step-img__img panzoom j-panzoom">
                                    <div class="panzoom__content">
                                        <div class="jaw j-jaw">
                                            <div class="jaw__bg">
                                                <img src="<?= $target; ?>/img/jaw/bg-normal.svg" alt="">
                                            </div>
                                            <div class="jaw__sinus-left j-sinus-left"></div>
                                            <div class="jaw__sinus-right j-sinus-right"></div>
                                            <div class="jaw__gum-top j-gum-top">
                                                <img src="<?= $target; ?>/img/jaw/gum-top.svg" alt="">
                                            </div>
                                            <div class="jaw__gum-bottom j-gum-bottom">
                                                <img src="<?= $target; ?>/img/jaw/gum-bottom.svg" alt="">
                                            </div>
                                            <div class="jaw__teeth">

                                                <!-- TOP JAW -->
                                                <? for($i = 1; $i < 33; $i++) {                                                     
                                                    $border = $target . '/img/jaw/border/normal/' . $i . '.svg';
                                                    $tooth = $target . '/img/jaw/teeth/normal/' . $i . '.svg';

                                                    $title = $i . '-й зуб';
                                                ?>

                                                    <div class="jaw-item jaw-item--<?= $i; ?> j-jaw-item <?= ($i > 16) ? 'jaw-item--bottom' : ''; ?>" 
                                                        data-number="<?= $i; ?>" data-title="<?= $title; ?>">
                                                        <div class="border j-jaw-border">
                                                            <img src="<?= $border; ?>" alt="">
                                                        </div>
                                                        <div class="tooth" style="-webkit-mask-image: url(<?= $tooth; ?>); mask-image: url(<?= $tooth; ?>);">
                                                            <img src="<?= $tooth; ?>" alt="">
                                                        </div>
                                                        <div class="visual"></div>
                                                    </div>

                                                <? } ?>

                                                <!-- <? for($i = 1; $i < 33; $i++) {                                                     
                                                    $border = $target . '/img/jaw/border/normal/' . $i . '.svg';
                                                    $tooth = $target . '/img/jaw/teeth/normal/' . $i . '.svg';

                                                    $title = $i . '-й зуб';
                                                ?>

                                                    <div style="z-index: 1" class="jaw-item jaw-item--<?= $i; ?> j-jaw-item <?= ($i > 16) ? 'jaw-item--bottom' : ''; ?>" 
                                                        data-number="<?= $i; ?>" data-title="<?= $title; ?>">
                                                        <div class="border j-jaw-border" style="opacity: 0">
                                                            <img src="<?= $border; ?>" alt="">
                                                        </div>
                                                        <div class="tooth" style="-webkit-mask-image: url(<?= $tooth; ?>); mask-image: url(<?= $tooth; ?>);">
                                                            <img src="<?= $tooth; ?>" alt="">
                                                        </div>
                                                        <div class="visual"></div>
                                                    </div>

                                                <? } ?> -->

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="step-img__reset">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/steps/reset.svg#icon"/>
                                    </svg>
                                    <span>Сбросить фильтр</span>
                                </div>
                            </div>
                        </div>
                        <div class="step__col">
                            <div class="step-plan">
                                <ul class="step-plan__list">
                                    <li>
                                        <div class="step-plan__list-item active">
                                            Кариес - 32
                                        </div>
                                    </li>
                                    <li>
                                        <div class="step-plan__list-item">
                                            Пульпит - 29
                                        </div>
                                    </li>
                                </ul>
                                <!-- <div class="step-plan__title">
                                    План лечения
                                </div> -->
                                <!-- <div class="step-plan__items">
                                    <div class="step-plan__item">
                                        <div class="step-plan__item-number">
                                            32
                                        </div>
                                        <div class="step-plan__item-btn">
                                            Пломба
                                            <div class="step-plan__item-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="step-plan__item-btn">
                                            Имплант
                                            <div class="step-plan__item-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="step-plan__item">
                                        <div class="step-plan__item-number">
                                            29
                                        </div>
                                        <div class="step-plan__item-btn">
                                            Пломба
                                            <div class="step-plan__item-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="step-plan__item-btn">
                                            Имплант
                                            <div class="step-plan__item-close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
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
                                        <div class="step-stage__bl" style="display: block" id="stage1">
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
                                                            Кариес
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
                                                                <input type="number" placeholder="1" value="1" min="1">
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
                                            <div class="step-stage__textarea">
                                                <textarea rows="3" class="step__textarea" placeholder="Описание"></textarea>
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
                                            <div class="step-stage__textarea">
                                                <textarea rows="3" class="step__textarea" placeholder="Описание"></textarea>
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
                            <label class="step__load">
                                <input type="file">
                                <div class="step__load-title">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/icons.svg#file"/>
                                    </svg>
                                    <div class="step__load-place">
                                        Загрузить снимок
                                    </div>
                                </div>
                                <div class="step__load-format">
                                    (Jpeg, PNG, PDF)
                                </div>
                            </label>
                            <button type="submit" class="step__btn btn btn--orange">
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