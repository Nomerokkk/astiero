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
                            Диагностика
                        </li>
                    </ul>
                </div>
                <div class="panel__top panel__top--center">
                    <div class="title-overflow">
                        <h1 class="title j-wow j-wow-up">
                            Диагностика
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
                            <div class="steps__list-item active">
                                <div class="steps__list-number">02</div>
                                <div class="steps__list-title">
                                    Диагностика
                                </div>
                            </div>
                            <div class="steps__list-line"></div>
                            <div class="steps__list-item">
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
                            <div class="steps__list-progress"></div>
                        </div>
                    </div>
                </div>
                <form action="step3.php" class="step">
                    <div class="step__title">
                        Диагностика
                    </div>
                    <div class="step__tabs">
                        <? $tabs = [
                            0 => [
                                'title' => 'Гигиена и периостатус',
                                'sub' => [
                                    0 => [
                                        'title' => 'Налет',
                                        'dir' => 'nalet',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Зубной камень',
                                        'dir' => 'zubnoj_kamen',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Гингивит',
                                        'dir' => 'gingivit',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Кровоточивость',
                                        'dir' => 'krovotochivost',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Гной',
                                        'dir' => 'gnoj',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Пародонтальные карманы',
                                        'dir' => 'parodontalnye_karmany',
                                        'border' => 'normal',
                                    ],
                                    6 => [
                                        'title' => 'Подвижность зубов',
                                        'dir' => 'podvizhnost_zubov',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            1 => [
                                'title' => 'Кариес',
                                'sub' => [
                                    0 => [
                                        'title' => 'Мезиальный',
                                        'dir' => 'karies_mezialnyj',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Дистальный',
                                        'dir' => 'karies_distalnyj',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Оклюзионный',
                                        'dir' => 'karies_oklyuzionnyj',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Язычный',
                                        'dir' => 'karies_yazychnyj',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Пришеечный',
                                        'dir' => 'karies_prisheechnyj',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Вестибулярный \ щечный',
                                        'dir' => 'vestibulyarnyj',
                                        'border' => 'normal',
                                    ],
                                    6 => [
                                        'title' => 'Коронка зуба полностью разрушена',
                                        'dir' => 'koronka_razrushena',
                                        'border' => 'normal',
                                    ],
                                    7 => [
                                        'title' => 'Трещина коронки (до уровня десны)',
                                        'dir' => 'treshina_do_desny',
                                        'border' => 'normal',
                                    ],
                                    8 => [
                                        'title' => 'Трещина коронки (ниже уровня десны)',
                                        'dir' => 'treshina_nizhe_desny',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            2 => [
                                'title' => 'Эндодонтия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Пульпит',
                                        'dir' => 'pulpit',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Леченные каналы (удовлетворительно)',
                                        'dir' => 'lechenie_kanalov_udovlit',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Леченные каналы (неудовлетворительно)',
                                        'dir' => 'lechenie_kanalov_neudovlit',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Апикальный периодонтит',
                                        'dir' => 'normal',
                                        'border' => 'normal',
                                        'visual' => 'apikalnyj_periodontit',
                                    ],
                                    4 => [
                                        'title' => 'Сломанный инструмент в канале',
                                        'dir' => 'slomannyj_instrument',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Перелом корня',
                                        'dir' => 'perelom_kornya',
                                        'border' => 'normal',
                                    ],
                                ],
                            ],
                            3 => [
                                'title' => 'Отсутствующие и ретенированые  зубы, имплантаты',
                                'sub' => [
                                    0 => [
                                        'title' => 'Отсутствующий зуб',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Потеря кости вокруг импланта',
                                        'dir' => 'poterya_kosti',
                                        'border' => 'poterya_kosti',
                                    ],
                                    2 => [
                                        'title' => 'Десневая рецессия на имплант',
                                        'dir' => 'desnevaja_recessija',
                                        'border' => 'implant',
                                    ],
                                    3 => [
                                        'title' => 'Ретинированный',
                                        'dir' => 'retinirovannyj',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Установка имплантата (неправильное положение)',
                                        'dir' => 'ustanovka_implantata_neprav',
                                        'border' => 'implant',
                                    ],
                                ],
                            ],
                            4 => [
                                'title' => 'Ортопедия',
                                'sub' => [
                                    0 => [
                                        'title' => 'Винир',
                                        'dir' => 'viniry',
                                        'border' => 'normal',
                                    ],
                                    1 => [
                                        'title' => 'Коронка',
                                        'dir' => 'koronka',
                                        'border' => 'normal',
                                    ],
                                    2 => [
                                        'title' => 'Вкладка',
                                        'dir' => 'vkladka',
                                        'border' => 'normal',
                                    ],
                                    3 => [
                                        'title' => 'Накладка',
                                        'dir' => 'nakladka',
                                        'border' => 'normal',
                                    ],
                                    4 => [
                                        'title' => 'Пломба',
                                        'dir' => 'plomba',
                                        'border' => 'normal',
                                    ],
                                    5 => [
                                        'title' => 'Съемный протез (частичный / полный)',
                                        'dir' => 'semnyj_protez',
                                        'border' => 'small',
                                        'visual' => 'semnyj_protez',
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
                                    $dir = ($item['dir']) ? $target . '/img/jaw/teeth/' . $dir . '/' : '';
                                    $border = $item['border'];
                                    $format = ($item['format']) ? $item['format'] : 'svg';
                                    $visual = ($item['visual']) ? $target . '/img/jaw/visual/' . $visual . '/' : '';
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
                                <div class="step-img__loader active j-jaw-loader">
                                    <div class="step-img__loader-inner">
                                        <img src="<?= $target; ?>/img/loader.svg" alt="" role="presentation">
                                    </div>
                                </div>
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
                                            <div class="jaw__gum-top j-gum-top">
                                                <img src="<?= $target; ?>/img/jaw/gum-top.svg" alt="">
                                            </div>
                                            <div class="jaw__gum-bottom j-gum-bottom">
                                                <img src="<?= $target; ?>/img/jaw/gum-bottom.svg" alt="">
                                            </div>
                                            <div class="jaw__teeth">

                                                <!-- TEETH -->
                                                <? $i = 0;

                                                $teeth = [
                                                    0 => '18',
                                                    1 => '17',
                                                    2 => '16',
                                                    3 => '15',
                                                    4 => '14',
                                                    5 => '13',
                                                    6 => '12',
                                                    7 => '11',

                                                    8 => '21',
                                                    9 => '22',
                                                    10 => '23',
                                                    11 => '24',
                                                    12 => '25',
                                                    13 => '26',
                                                    14 => '27',
                                                    15 => '28',

                                                    16 => '48',
                                                    17 => '47',
                                                    18 => '46',
                                                    19 => '45',
                                                    20 => '44',
                                                    21 => '43',
                                                    22 => '42',
                                                    23 => '41',

                                                    24 => '31',
                                                    25 => '32',
                                                    26 => '33',
                                                    27 => '34',
                                                    28 => '35',
                                                    29 => '36',
                                                    30 => '37',
                                                    31 => '38',
                                                ];
                                                
                                                foreach($teeth as $item) {  
                                                    $i++;

                                                    $border = $target . '/img/jaw/border/normal/' . $i . '.svg';
                                                    $tooth = $target . '/img/jaw/teeth/normal/' . $i . '.svg';

                                                    $title = $item . '-й зуб';

                                                    $class = 'jaw-item jaw-item--' . $i . ' j-jaw-item';

                                                    if($i > 16) {
                                                        $class .= ' jaw-item--bottom';
                                                    }
                                                ?>

                                                    <div class="<?= $class; ?>" 
                                                        data-base-class="<?= $class; ?>"
                                                        data-number="<?= $i; ?>" 
                                                        data-title="<?= $title; ?>">
                                                        <div class="border j-jaw-border">
                                                            <img src="<?= $border; ?>" alt="">
                                                        </div>
                                                        <div class="tooth" style="-webkit-mask-image: url(<?= $tooth; ?>); mask-image: url(<?= $tooth; ?>);">
                                                            <img src="<?= $tooth; ?>" alt="">
                                                        </div>
                                                    </div>

                                                <? } ?>
                                                
                                                <!-- VISUAL -->
                                                <? $i = 0;
                                                
                                                foreach($teeth as $item) {  
                                                    $i++;

                                                    $border = $target . '/img/jaw/border/normal/' . $i . '.svg';
                                                    $tooth = $target . '/img/jaw/teeth/normal/' . $i . '.svg';

                                                    $title = $item . '-й зуб';

                                                    $class = 'jaw-item jaw-item--visual jaw-item--' . $i . ' j-jaw-item';

                                                    if($i > 16) {
                                                        $class .= ' jaw-item--bottom';
                                                    }
                                                ?>

                                                    <div class="<?= $class; ?>" 
                                                        data-base-class="<?= $class; ?>"
                                                        data-number="<?= $i; ?>" 
                                                        data-title="<?= $title; ?>">
                                                        <div class="border j-jaw-border">
                                                            <img src="<?= $border; ?>" alt="">
                                                        </div>
                                                        <div class="visual"></div>
                                                    </div>

                                                <? } ?>

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
                                <div class="step-img__apply j-apply">
                                    <svg>
                                        <use xlink:href="<?= $target; ?>/img/steps/reset.svg#icon"/>
                                    </svg>
                                    <span>Применить</span>
                                </div>
                            </div>
                        </div>
                        <div class="step__col">
                            <div class="step-diagnostic">
                                <div class="step-diagnostic__top">
                                    <span>Зуб</span>
                                    <span>32</span>
                                </div>
                                <ul class="step-diagnostic__list">
                                    <li>
                                        <div class="button-close active">
                                            <div class="button-close__btn">
                                                Кариес - 32
                                            </div>
                                            <div class="button-close__close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="button-close">
                                            <div class="button-close__btn">
                                                Пульпит - 32
                                            </div>
                                            <div class="button-close__close" data-fancybox data-src="#ok-remove" data-tooltip="Удалить">
                                                <svg>
                                                    <use xlink:href="<?= $target; ?>/img/icons.svg#close"/>
                                                </svg>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <textarea rows="3" class="step__textarea" placeholder="Описание"></textarea>
                            </div>
                            <div class="step__nav">
                                <div class="step__nav-col">
                                    <div class="btn btn--border">Сбросить фильтр</div>
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